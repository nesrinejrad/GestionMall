<?php

namespace MyApp\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class monespaceController extends Controller
{
    public function indexAction()
    {
        return $this->render('MyAppUserBundle:monespace:index.html.twig', array(
            // ...
        ));
    }

}
