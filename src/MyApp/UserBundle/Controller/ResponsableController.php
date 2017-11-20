<?php

namespace MyApp\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ResponsableController extends Controller
{
    public function indexAction()
    {
        $responsables = $this->findByRole("ROLE_RESPONSABLE");
        
        return $this->render('MyAppUserBundle:Responsable:index.html.twig', array(
            'entities' => $responsables
        ));
    }

    private function findByRole($role)
{
        $em = $this->getDoctrine()->getManager();
    $qb = $em->createQueryBuilder();
    $qb->select('u')
        ->from('MyAppUserBundle:User', 'u')
        ->where('u.roles LIKE :roles')
        ->setParameter('roles', '%"'.$role.'"%');

    return $qb->getQuery()->getResult();
}
}
