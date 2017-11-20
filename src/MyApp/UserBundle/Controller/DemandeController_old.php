<?php

namespace MyApp\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MyApp\UserBundle\Entity\Demande;
use MyApp\UserBundle\Form\DemandeType;

/**
 * Demande controller.
 *
 */
class DemandeController extends Controller {

    /**
     * Lists all Demande entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MyAppUserBundle:Demande')->findAll();

        return $this->render('MyAppUserBundle:Demande:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Demande entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new Demande();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('demande_show', array('id' => $entity->getId())));
        }

        return $this->render('MyAppUserBundle:Demande:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Demande entity.
     *
     * @param Demande $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Demande $entity) {
        $form = $this->createForm(new DemandeType(), $entity, array(
            'action' => $this->generateUrl('demande_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Demande entity.
     *
     */
    public function newAction() {
        $entity = new Demande();
        $form = $this->createCreateForm($entity);

        return $this->render('MyAppUserBundle:Demande:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Demande entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyAppUserBundle:Demande')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Demande entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MyAppUserBundle:Demande:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Demande entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyAppUserBundle:Demande')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Demande entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MyAppUserBundle:Demande:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Demande entity.
     *
     * @param Demande $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Demande $entity) {
        $form = $this->createForm(new DemandeType(), $entity, array(
            'action' => $this->generateUrl('demande_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Demande entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyAppUserBundle:Demande')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Demande entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('demande_edit', array('id' => $id)));
        }

        return $this->render('MyAppUserBundle:Demande:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Demande entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MyAppUserBundle:Demande')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Demande entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('demande'));
    }

    /**
     * Creates a form to delete a Demande entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('demande_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

    /**
     * Annuler a Demande entity.
     *
     */
    public function annulerAction($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('MyAppUserBundle:Demande')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Demande entity.');
        }

        $entity->setEtat(2);

        $em->persist($entity);
        $em->flush();

        $this->addFlash(
            'annulee',
            'La demande '. $entity->getId() .' est annulée !'
        );
        
        return $this->redirect($this->generateUrl('demande'));
    }

    /**
     * Accepter a Demande entity.
     *
     */
    public function accepterAction($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('MyAppUserBundle:Demande')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Demande entity.');
        }

        $entity->setEtat(1);

        $invitation = new \MyApp\UserBundle\Entity\Invitation();
        $invitation->setEmail($entity->getEmail());
        $invitation->isSent(1);
        
        /* envoi du mail */
        $message = \Swift_Message::newInstance()
                ->setSubject('Code d\'inscription MyAppinnov')
                ->setFrom($this->getParameter('mailer_user'))
                ->setTo($entity->getEmail())
                ->setBody(
                $this->renderView(
                        'Emails/codedemande.html.twig', array('code' => $invitation->getId())
                ), 'text/html'
        );
        $this->get('mailer')->send($message);
        /* fin */
        
        $this->addFlash(
            'acceptee',
            'La demande '. $entity->getId() .' est acceptée et le code d\'invitation est envoyé par email au candidat !'
        );
        
        $em->persist($invitation);
        $em->persist($entity);
        $em->flush();
        
        return $this->redirect($this->generateUrl('demande'));
    }

}
