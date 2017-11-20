<?php

namespace MyApp\UserBundle\Controller;

use MyApp\UserBundle\Entity\Demande;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Demande controller.
 *
 */
class DemandeController extends Controller
{
    /**
     * Lists all demande entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $demandes = $em->getRepository('MyAppUserBundle:Demande')->findAll();

        return $this->render('MyAppUserBundle:demande:index.html.twig', array(
            'entities' => $demandes,
        ));
    }

    /**
     * Creates a new demande entity.
     *
     */
    public function newAction(Request $request)
    {
        $demande = new Demande();
        $form = $this->createForm('MyApp\UserBundle\Form\DemandeType', $demande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($demande);
            $em->flush();

            return $this->redirectToRoute('demande_show', array('id' => $demande->getId()));
        }
        
        return $this->render('MyAppUserBundle:demande:new.html.twig', array(
            'demande' => $demande,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a demande entity.
     *
     */
    public function showAction(Demande $demande)
    {
        $deleteForm = $this->createDeleteForm($demande);

        return $this->render('MyAppUserBundle:demande:show.html.twig', array(
            'entity' => $demande,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing demande entity.
     *
     */
    public function editAction(Request $request, Demande $demande)
    {
        $deleteForm = $this->createDeleteForm($demande);
        $editForm = $this->createForm('MyApp\UserBundle\Form\DemandeType', $demande);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('demande_edit', array('id' => $demande->getId()));
        }

        return $this->render('MyAppUserBundle:demande:edit.html.twig', array(
            'demande' => $demande,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a demande entity.
     *
     */
    public function deleteAction(Request $request, Demande $demande)
    {
        $form = $this->createDeleteForm($demande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($demande);
            $em->flush();
        }

        return $this->redirectToRoute('demande_index');
    }

    /**
     * Creates a form to delete a demande entity.
     *
     * @param Demande $demande The demande entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Demande $demande)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('demande_delete', array('id' => $demande->getId())))
            ->setMethod('DELETE')
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
                        'Emails/codedemande.html.twig', array('code' => $invitation->getCode())
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
        
        return $this->redirect($this->generateUrl('demande_index'));
    }
}
