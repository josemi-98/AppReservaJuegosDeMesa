<?php 
namespace App\Controller\form;

use App\Entity\Reservas;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Form\Type\ReservasType; 

class ReservasController extends AbstractController
{
    private $em;
    public function __construct(EntityManagerInterface $em) {
        $this->em=$em;
    }
   
    #[Route('/reservas', name:'reservas')]
    public function new(Request $request): Response
    {
        // creates a reserva object and initializes some data for this example
        $reserva = new Reservas();
        // $reserva->setReserva('Write a blog post');
        // $reserva->setParticipantes('2');
        // $reserva->setFechaInicio(new \DateTime('tomorrow'));
        // $reserva->setFechaFin(new \DateTime('tomorrow'));

        $form = $this->createForm(ReservasType::class, $reserva);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            // $reserva = $form->getData();
            $this->em->persist($reserva);
            $this->em->flush();

            // ... perform some action, such as saving the task to the database

            return $this->redirectToRoute('reservas');
        }
       
   
        // $form = $this->createFormBuilder($reserva)
        //     ->add('nombre', TextType::class)
        //     ->add('participantes', IntegerType::class)
        //     ->add('fechaInicio', DateType::class)
        //     ->add('fechaFin', DateType::class)
        //     ->add('save', SubmitType::class, ['label' => 'Crear reserva'])
        //     ->getForm();

        return $this->render('user/reservas.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}