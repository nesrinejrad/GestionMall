<?php

namespace MyApp\BoutiqueClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MyAppBoutiqueClientBundle:Default:index.html.twig');
    }
}
