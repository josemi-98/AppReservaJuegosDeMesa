<?php

namespace App\Controller;
use App\Entity\Juego;
use App\Form\JuegoType;
use App\Repository\JuegoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\Reservas;



class MyController extends AbstractController
{
//     #[Route('/form' , name:'form')]
//     public function new(Request $request): Response
// {
//     // creates a reserva object and initializes some data for this example
//     $reserva = new Reservas();
//     $reserva->setNombre('Write a blog post');
//     // $reserva->setPrice(23);

//     $form = $this->createFormBuilder($reserva)
//         ->add('nombre', TextType::class)
//         // ->add('price', IntType::class)
//         ->add('save', SubmitType::class, ['label' => 'Create reserva'])
//         ->getForm();

//         return $this->render('user/reservas.html.twig', [
//             'form' => $form,
//         ]);
// }

#[Route('/mesas', name:'mesas')]
    public function gestionMesas()
    {
        $html = $this->render('admin/gestionMesas.html.twig');
        return $html;
    }

    #[Route('/juegos', name: 'juegos', methods: ['GET'])]
    public function listadoJuegos(JuegoRepository $juegoRepository): Response
    {
        return $this->render('juegos.html.twig', [
            'juegos' => $juegoRepository->findAll(),
        ]);
    }

    #[Route('/home', name:'home')]
    public function index()
    {
        $html = $this->render('landingPage.html.twig');
        return $html;
    }

    #[Route('/perfil', name:'perfil')]
    public function perfil()
    {
        $html = $this->render('user/perfil.html.twig');
        return $html;
    }

    #[Route('/reservas', name:'reservas')]
    public function reservas()
    {
        $html = $this->render('user/reservas.html.twig');
        return $html;
    }
    #[Route('/eventos', name:'eventos')]
    public function eventos()
    {
        $html = $this->render('user/eventos.html.twig');
        return $html;
    }
    #[Route('/login', name:'login')]
    public function login()
    {
        $html = $this->render('login/login.html.twig');
        return $html;
    }

    #[Route('/registro', name:'registro')]
    public function resgistro()
    {
        $html = $this->render('registration/registro.html.twig');
        return $html;
    }
    #[Route('/', name:'landingPage')]
    public function landingPage()
    {
        $html = $this->render('landingPage2.html.twig');
        return $html;
    }

    #[Route('/landingPage2', name:'landingPage2')]
    public function landingPage2()
    {
        $html = $this->render('landingPage.html.twig');
        return $html;
    }

    #[Route('/segundaPagina', name:'new')]
        public function nuevaRuta(){
            $users = [
                ['nombre'=>'josemi', 'id' => '1'],
                ['nombre'=>'josepa', 'id' => '2'],
                ['nombre'=>'martin', 'id' => '3'],
                ['nombre'=>'berlango', 'id' => '4'],
            ];
            $html = $this->render('nueva.html.twig', [
                'titulo'=>'usuarios',
                'users'=> $users,
                
                
            ]);

            return $html;
            // return new response ('josemi');
            // $suma=$n1+$n2;
            //  die("La suma es: ".$suma);
        }
}