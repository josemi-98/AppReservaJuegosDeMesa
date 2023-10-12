<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class AdminController extends AbstractController
{
    #[Route('/socios', name:'socios')]
    public function socios()
    {
        $html = $this->render('admin/socios.html.twig');
        return $html;
    }
    #[Route('/calendario', name:'calendario')]
    public function calendario()
    {
        $html = $this->render('admin/calendario.html.twig');
        return $html;
    }

    
    #[Route('/gestionMesas', name:'gestionMesas')]
    public function gestionMesas()
    {
        $html = $this->render('admin/gestionMesas.html.twig');
        return $html;
    }
    #[Route('/mantenimientoJuegos', name:'mantenimientoJuegos')]
    public function mantenimientoJuegos()
    {
        $html = $this->render('mantenimiento/juegos.html.twig');
        return $html;
    }
   
    
}
