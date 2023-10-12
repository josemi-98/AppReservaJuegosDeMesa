<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use App\Service\Correo;
use App\Service\Pdf;
use Symfony\Component\Notifier\Notification\Notification;
use Symfony\Component\Notifier\NotifierInterface;

class MailerController extends AbstractController
{
    #[Route('/email', name: 'email')]
    public function sendEmaiil(Correo $correo, NotifierInterface $notifier): Response
    {
        $email = $correo->Correo();

        // $notification = (new Notification('New Invoice', ['email']))
        //     ->content('You got a new invoice for 15 EUR.');

//            if ($email->isValid()) {
                // hacer algún tipo de procesamiento
        
                $this->addFlash(
                    'notice',
                    'El correo ha sido enviado correcatamente!'
                );

         
            //}

            return $this->redirectToRoute('perfil');

           // return $this->render("user/perfil.html.twig");
    }

}