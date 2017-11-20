<?php

namespace MyApp\UserBundle\Controller;

use MyApp\UserBundle\Entity\carteFidelites;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Cartefidelite controller.
 *
 */
class carteFidelitesController extends Controller
{
    /**
     * Lists all carteFidelite entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $carteFidelites = $em->getRepository('MyAppUserBundle:carteFidelites')->findAll();

        return $this->render('cartefidelites/index.html.twig', array(
            'carteFidelites' => $carteFidelites,
        ));
    }

    /**
     * Creates a new carteFidelite entity.
     *
     */
    public function newAction(Request $request)
    {
        $carteFidelite = new Cartefidelites();
        $form = $this->createForm('MyApp\UserBundle\Form\carteFidelitesType', $carteFidelite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($carteFidelite);
            $em->flush();

            return $this->redirectToRoute('cartefidelites_show', array('id' => $carteFidelite->getId()));
        }

        return $this->render('cartefidelites/new.html.twig', array(
            'carteFidelite' => $carteFidelite,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a carteFidelite entity.
     *
     */
    public function showAction(carteFidelites $carteFidelite)
    {
        $deleteForm = $this->createDeleteForm($carteFidelite);

        return $this->render('cartefidelites/show.html.twig', array(
            'carteFidelite' => $carteFidelite,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing carteFidelite entity.
     *
     */
    public function editAction(Request $request, carteFidelites $carteFidelite)
    {
        $deleteForm = $this->createDeleteForm($carteFidelite);
        $editForm = $this->createForm('MyApp\UserBundle\Form\carteFidelitesType', $carteFidelite);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('cartefidelites_edit', array('id' => $carteFidelite->getId()));
        }

        return $this->render('cartefidelites/edit.html.twig', array(
            'carteFidelite' => $carteFidelite,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a carteFidelite entity.
     *
     */
    public function deleteAction(Request $request, carteFidelites $carteFidelite)
    {
        $form = $this->createDeleteForm($carteFidelite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($carteFidelite);
            $em->flush();
        }

        return $this->redirectToRoute('cartefidelites_index');
    }

    /**
     * Creates a form to delete a carteFidelite entity.
     *
     * @param carteFidelites $carteFidelite The carteFidelite entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(carteFidelites $carteFidelite)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cartefidelites_delete', array('id' => $carteFidelite->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    
    public function cartesMaBoutiqueAction() {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        
        $boutique = $user->getBoutique();
        
        $em = $this->getDoctrine()->getManager();
        
        $carteFidelites = $em->getRepository('MyAppUserBundle:carteFidelites')->findBy(array('boutique' => $boutique));
        
        return $this->render('cartefidelites/cartesboutique.html.twig', array(
            'carteFidelites' => $carteFidelites,
        ));
    }
    
    public function cartesMaBoutiqueSansStyleAction($id) {
        $em = $this->getDoctrine()->getManager();
        
        $carteFidelites = $em->getRepository('MyAppUserBundle:carteFidelites')->findBy(array('boutique' => $id));
        
        return $this->render('cartefidelites/cartesboutique_sansstyle.html.twig', array(
            'carteFidelites' => $carteFidelites,
        ));
    }
    
}
