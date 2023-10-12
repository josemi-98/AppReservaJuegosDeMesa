<?php

namespace App\Service;

use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class Pdf extends AbstractController {

    public function pdf() : String{
        $dompdf = new Dompdf();
        //$html = 'hola';
        $html = $this->renderView('pdf/myPdf.html.twig', [
                'title' => "Bienvenido a nuestra pagina de reservas de juegos"
            ]);
        
        $dompdf -> loadHtml($html);
        $dompdf->setPaper('letter', 'portrait');
        $dompdf -> render();
        $output = $dompdf->output();
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => false
        ]);

        //aqui la guardo en una variable
        $pdf = $dompdf->output();

        return $pdf;
    }

}