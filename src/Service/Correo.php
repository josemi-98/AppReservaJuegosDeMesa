<?php

namespace App\Service;

use App\Service\Pdf;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;


class Correo {
    
    private $pdf;
    private $mailer;

    public function __construct(Pdf $pdf, MailerInterface $mailer)
    {
        $this->pdf = $pdf;
        $this->mailer = $mailer;
    }

    public function Correo(): bool
    {
        $miPdf = $this->pdf->pdf();

        $email = (new Email())
            ->from('josemimb98@gmail.com')
            ->to('josemimb98@gmail.com')
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('Bienvenido a XokasCIA')
            ->text('Sending emails is fun again!')
            ->attach($miPdf, 'xocasCia.pdf')
            ->html('<p>Has sido registrado en XokaCIA, te damos la Bienvenida</p>
                    <p>Acontinuacion le entregamos un pdf con las reglas de uso de nuesto establecimiento</p>
                    <p>Un cordial, Saludo.</p>');

        $this->mailer->send($email);

         return true;

    }

}