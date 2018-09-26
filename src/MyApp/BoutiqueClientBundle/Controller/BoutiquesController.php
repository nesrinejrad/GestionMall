<?php

namespace MyApp\BoutiqueClientBundle\Controller;

use MyApp\BoutiqueClientBundle\Entity\Boutiques;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Boutique controller.
 *
 */
class BoutiquesController extends Controller {

    /**
     * Lists all boutique entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $boutiques = $em->getRepository('MyAppUserBundle:Boutiques')->findAll();

        return $this->render('MyAppBoutiqueClientBundle:boutique:index.html.twig', array(
                    'boutiques' => $boutiques,
        ));
    }

    /**
     * Creates a new boutique entity.
     *
     */
    public function newAction(Request $request) {
        $boutique = new Boutiques();
        $form = $this->createForm('MyApp\BoutiqueClientBundle\Form\BoutiquesType', $boutique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($boutique);
            $em->flush();

            return $this->redirectToRoute('boutiques_show', array('id' => $boutique->getId()));
        }

        return $this->render('MyAppBoutiqueClientBundle:boutique:new.html.twig', array(
                    'boutique' => $boutique,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a boutique entity.
     *
     */
    public function showAction(\MyApp\UserBundle\Entity\Boutiques $boutique) {

        return $this->render('MyAppBoutiqueClientBundle:boutique:show.html.twig', array(
                    'boutique' => $boutique,
        ));
    }

    /**
     * Displays a form to edit an existing boutique entity.
     *
     */
    public function editAction(Request $request, Boutiques $boutique) {
        $deleteForm = $this->createDeleteForm($boutique);
        $editForm = $this->createForm('MyApp\BoutiqueClientBundle\Form\BoutiquesType', $boutique);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('boutiques_edit', array('id' => $boutique->getId()));
        }

        return $this->render('MyAppBoutiqueClientBundle:boutique:edit.html.twig', array(
                    'boutique' => $boutique,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a boutique entity.
     *
     */
    public function deleteAction(Request $request, Boutiques $boutique) {
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
    private function createDeleteForm(Boutiques $boutique) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('boutiques_delete', array('id' => $boutique->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

    public function sabonnerBoutiqueAction($id) {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();

        $boutique = $em->getRepository('MyAppUserBundle:Boutiques')->find($id);

        $abonnement = $em->getRepository('MyAppUserBundle:Abonnement')->findBy(array('boutique' => $boutique, 'client' => $user));

        return $this->render('MyAppBoutiqueClientBundle:boutique:abonnement.html.twig', array(
                    'abonnement' => $abonnement,
        ));
    }

    public function sabonnerdesabonnerAction($id) {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();


        $boutique = $em->getRepository('MyAppUserBundle:Boutiques')->find($id);

        $abonnement = new \MyApp\UserBundle\Entity\abonnement();
        
        $abonnement = $em->getRepository('MyAppUserBundle:abonnement')->findBy(array('boutique' => $boutique, 'client' => $user));
        
        if (!empty($abonnement)) {
            foreach ($abonnement as $value) {
                $em->remove($value);
            }
            $em->flush();
        } else {
            $abonnement = new \MyApp\UserBundle\Entity\abonnement();
            $abonnement->setClient($user);
            $abonnement->setBoutique($boutique);

            $newDate = (new \DateTime())->format('Y-m-d H:i:s');

            $abonnement->setDateAbonnement($newDate);

            $em->persist($abonnement);
            $em->flush();
        }

        return $this->redirectToRoute('boutiques_client_show', array('id' => $boutique->getId()));
    }

}
