<?php

namespace MyApp\UserBundle\Controller;

use FOS\UserBundle\Form\Type\RegistrationFormType;
use MyApp\UserBundle\MyAppUserBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@MyAppUser/Default/homePage.html.twig');
    }


    public function adminAction()
    {
        return $this->render('MyAppUserBundle:Default:menu.html.twig');
    }

    public function essaiAction()
    {
        return $this->render('MyAppUserBundle:Security:login.html.twig');
    }
    public function connecterAction()
    {
        return $this->render('@MyAppUser/Default/homePage.html.twig');
    }
    public function inscriFormAction(Request $req)
    {
        //$form=$this->createForm(RegistrationFormType::class);
        return $this->render('MyAppUserBundle:Registration:register.html.twig');
    }
    public function essaieAction(Request $req)
    {
        //$form=$this->createForm(RegistrationFormType::class);
        return $this->render('MyAppUserBundle:Default:index.html.twig');
    }
    
    public function sendmailAction() {
         $message = new \Swift_Message('Hello Email');
        $message->setFrom('esprit.tunisiamal@gmail.com')
        ->setTo('houssemgui@gmail.com')
        ->setBody(
            '<h1>hiiiii</h1>',
            'text/html'
        )
        /*
         * If you also want to include a plaintext version of the message
        ->addPart(
            $this->renderView(
                'Emails/registration.txt.twig',
                array('name' => $name)
            ),
            'text/plain'
        )
        */
    ;

    $this->get('mailer')->send($message);

    // or, you can also fetch the mailer service this way
    // $this->get('mailer')->send($message);

    return new \Symfony\Component\HttpFoundation\Response('hello');
    }

    public function homePageCAction(){

        return $this->render('@MyAppUser/Default/homePage.html.twig');
    }


}
