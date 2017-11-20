<?php

namespace MyApp\UserBundle\Controller;

use MyApp\UserBundle\Entity\abonnement;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Abonnement controller.
 *
 */
class abonnementController extends Controller
{
    /**
     * Lists all abonnement entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $abonnements = $em->getRepository('MyAppUserBundle:abonnement')->findAll();

        return $this->render('abonnement/index.html.twig', array(
            'abonnements' => $abonnements,
        ));
    }

    /**
     * Creates a new abonnement entity.
     *
     */
    public function newAction(Request $request)
    {
        $abonnement = new Abonnement();
        $form = $this->createForm('MyApp\UserBundle\Form\abonnementType', $abonnement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($abonnement);
            $em->flush();

            return $this->redirectToRoute('abonnement_show', array('id' => $abonnement->getId()));
        }

        return $this->render('abonnement/new.html.twig', array(
            'abonnement' => $abonnement,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a abonnement entity.
     *
     */
    public function showAction(abonnement $abonnement)
    {
        $deleteForm = $this->createDeleteForm($abonnement);

        return $this->render('abonnement/show.html.twig', array(
            'abonnement' => $abonnement,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing abonnement entity.
     *
     */
    public function editAction(Request $request, abonnement $abonnement)
    {
        $deleteForm = $this->createDeleteForm($abonnement);
        $editForm = $this->createForm('MyApp\UserBundle\Form\abonnementType', $abonnement);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('abonnement_edit', array('id' => $abonnement->getId()));
        }

        return $this->render('abonnement/edit.html.twig', array(
            'abonnement' => $abonnement,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a abonnement entity.
     *
     */
    public function deleteAction(Request $request, abonnement $abonnement)
    {
        $form = $this->createDeleteForm($abonnement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($abonnement);
            $em->flush();
        }

        return $this->redirectToRoute('abonnement_index');
    }

    /**
     * Creates a form to delete a abonnement entity.
     *
     * @param abonnement $abonnement The abonnement entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(abonnement $abonnement)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('abonnement_delete', array('id' => $abonnement->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    
    public function abonneesMaBoutiqueAction() {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        
        $boutique = $user->getBoutique();
        
        $em = $this->getDoctrine()->getManager();
        
        $abonnements = $em->getRepository('MyAppUserBundle:abonnement')->findBy(array('boutique' => $boutique));
        
        return $this->render('abonnement/abonnementsboutique.html.twig', array(
            'abonnements' => $abonnements,
        ));
    }
    
    public function abonnementsMaBoutiqueSansStyleAction($id) {
        $em = $this->getDoctrine()->getManager();
        
        $abonnements = $em->getRepository('MyAppUserBundle:abonnement')->findBy(array('boutique' => $id));
        
        return $this->render('abonnement/abonnementsboutique_sanstyle.html.twig', array(
            'abonnements' => $abonnements,
        ));
    }
}
