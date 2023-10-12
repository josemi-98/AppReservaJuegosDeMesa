<?php
 
    namespace App\Service;

    use Symfony\Bridge\Twig\Mime\TemplatedEmail;
    use Symfony\Component\Mailer\MailerInterface;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class mail extends AbstractController
{
    private $client;
    private MailerInterface $mailer;
    private Pdf $pdf;

    public function __construct(MailerInterface $mailer, Pdf $pdf)
    {
        $this->mailer =$mailer;
        $this->pdf =$pdf;
    }
    
    public function sendEmail(string $correo)
    {

        $email = (new TemplatedEmail())
            ->from('josemimb98@gmail.com')
            ->to($correo)
            ->subject('BIENVENIDO A XOCAS Y CÍA') //ASUNTO
            ->attach($this->pdf->generarPdf(), 'Invitacion.pdf');

        $this->mailer->send($email);

    }

}