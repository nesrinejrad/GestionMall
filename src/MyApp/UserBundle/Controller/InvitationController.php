<?php

namespace MyApp\UserBundle\Controller;

use MyApp\UserBundle\Entity\Invitation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Invitation controller.
 *
 */
class InvitationController extends Controller
{
    /**
     * Lists all invitation entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $invitations = $em->getRepository('MyAppUserBundle:Invitation')->findAll();

        return $this->render('MyAppUserBundle:Invitation:index.html.twig', array(
            'entities' => $invitations,
        ));
    }

    /**
     * Creates a new invitation entity.
     *
     */
    public function newAction(Request $request)
    {
        $invitation = new Invitation();
        $form = $this->createForm('MyApp\UserBundle\Form\InvitationType', $invitation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($invitation);
            $em->flush();

            return $this->redirectToRoute('invitation_show', array('code' => $invitation->getCode()));
        }

        return $this->render('MyAppUserBundle:Invitation:new.html.twig', array(
            'entity' => $invitation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a invitation entity.
     *
     */
    public function showAction(Invitation $invitation)
    {
        $deleteForm = $this->createDeleteForm($invitation);

        return $this->render('MyAppUserBundle:Invitation:show.html.twig', array(
            'entity' => $invitation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing invitation entity.
     *
     */
    public function editAction(Request $request, Invitation $invitation)
    {
        $deleteForm = $this->createDeleteForm($invitation);
        $editForm = $this->createForm('MyApp\UserBundle\Form\InvitationType', $invitation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('invitation_edit', array('code' => $invitation->getCode()));
        }

        return $this->render('MyAppUserBundle:Invitation:edit.html.twig', array(
            'entity' => $invitation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a invitation entity.
     *
     */
    public function deleteAction(Request $request, Invitation $invitation)
    {
        $form = $this->createDeleteForm($invitation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($invitation);
            $em->flush();
        }

        return $this->redirectToRoute('invitation_index');
    }

    /**
     * Creates a form to delete a invitation entity.
     *
     * @param Invitation $invitation The invitation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Invitation $invitation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('invitation_delete', array('code' => $invitation->getCode())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
