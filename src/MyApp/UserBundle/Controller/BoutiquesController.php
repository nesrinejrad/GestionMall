<?php

namespace MyApp\UserBundle\Controller;

use MyApp\UserBundle\Entity\Boutiques;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Boutique controller.
 *
 */
class BoutiquesController extends Controller
{
    /**
     * Lists all boutique entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $boutiques = $em->getRepository('MyAppUserBundle:Boutiques')->findAll();

        return $this->render('MyAppUserBundle:boutiques:index.html.twig', array(
            'boutiques' => $boutiques,
        ));
    }

    /**
     * Creates a new boutique entity.
     *
     */
    public function newAction(Request $request)
    {
        $boutique = new Boutiques();
        $form = $this->createForm('MyApp\UserBundle\Form\BoutiquesType', $boutique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($boutique);
            $em->flush();

            return $this->redirectToRoute('boutiques_show', array('id' => $boutique->getId()));
        }

        return $this->render('MyAppUserBundle:boutiques:new.html.twig', array(
            'boutique' => $boutique,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a boutique entity.
     *
     */
    public function showAction(Boutiques $boutique)
    {
        $deleteForm = $this->createDeleteForm($boutique);

        return $this->render('MyAppUserBundle:boutiques:show.html.twig', array(
            'boutique' => $boutique,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing boutique entity.
     *
     */
    public function editAction(Request $request, Boutiques $boutique)
    {
        $deleteForm = $this->createDeleteForm($boutique);
        $editForm = $this->createForm('MyApp\UserBundle\Form\BoutiquesType', $boutique);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('boutiques_edit', array('id' => $boutique->getId()));
        }

        return $this->render('MyAppUserBundle:boutiques:edit.html.twig', array(
            'boutique' => $boutique,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a boutique entity.
     *
     */
    public function deleteAction(Request $request, Boutiques $boutique)
    {
        $form = $this->createDeleteForm($boutique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($boutique);
            $em->flush();
        }

        return $this->redirectToRoute('boutiques_index');
    }

    /**
     * Creates a form to delete a boutique entity.
     *
     * @param Boutiques $boutique The boutique entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Boutiques $boutique)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('boutiques_delete', array('id' => $boutique->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    
    /**
     * Finds and displays a ma boutique entity.
     *
     */
    public function showMaBoutiqueAction()
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        
        $boutique = $user->getBoutique();
        
        $deleteForm = $this->createDeleteForm($boutique);

        return $this->render('MyAppUserBundle:boutiques:show.html.twig', array(
            'boutique' => $boutique,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    /**
     * Displays a form to edit an existing boutique entity.
     *
     */
    public function editMaBoutiqueAction(Request $request)
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        
        $boutique = $user->getBoutique();
        
        $deleteForm = $this->createDeleteForm($boutique);
        $editForm = $this->createForm('MyApp\UserBundle\Form\BoutiquesType', $boutique);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('boutiques_edit', array('id' => $boutique->getId()));
        }

        return $this->render('MyAppUserBundle:boutiques:editmaboutique.html.twig', array(
            'boutique' => $boutique,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
}
