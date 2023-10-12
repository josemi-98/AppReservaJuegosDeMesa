<?php 
namespace App\Controller\form;

use App\Entity\Eventos;
use App\Repository\EventosRepository;
use App\Form\Type\EventosType; 


use App\Entity\GamesEvents;
use App\Repository\GamesEventsRepository;
use App\Form\Type\GamesEventsType;

use App\Entity\Juego;
use App\Form\JuegoType;
use App\Repository\JuegoRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\File;
use Knp\Component\Pager\PaginatorInterface;
use Doctrine\Persistence\ManagerRegistry as PersistenceManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;


#[Route('/admin')]
class EventosController extends AbstractController
{
    private $em;
    public function __construct(EntityManagerInterface $em) {
        $this->em=$em;
    }
   
    #[Route('/invitacionEventos', name:'invitacionEventos', methods: ['GET', 'POST'])]
    public function newEvents(Request $request, GamesEventsRepository $gamesEventsRepository): Response
    {
        // creates a evento object and initializes some data for this example
        $evento = new Eventos();
        // $evento->setevento('Write a blog post');
        // $evento->setParticipantes('2');
        // $evento->setFechaInicio(new \DateTime('tomorrow'));
        // $evento->setFechaFin(new \DateTime('tomorrow'));

        $form = $this->createForm(EventosType::class, $evento);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            // $evento = $form->getData();
            $this->em->persist($evento);
            $this->em->flush();

            // ... perform some action, such as saving the task to the database

            return $this->redirectToRoute('gamesEvents');
        }
        // $form = $this->createFormBuilder($evento)
        //     ->add('nombre', TextType::class)
        //     ->add('participantes', IntegerType::class)
        //     ->add('fechaInicio', DateType::class)
        //     ->add('fechaFin', DateType::class)
        //     ->add('save', SubmitType::class, ['label' => 'Crear evento'])
        //     ->getForm();

        return $this->render('admin/invitacionEventos.html.twig', [
            'form' => $form->createView(),
            'juegos' => $gamesEventsRepository->findAll(),
        ]);
    }


    #[Route('/gamesEvents', name:'gamesEvents')]
    public function newGamesEvents(Request $request, GamesEventsRepository $gamesEventsRepository): Response
    {
        $juego = new GamesEvents();
        $form = $this->createForm(GamesEventsType::class, $juego);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->persist($juego);
            $this->em->flush();
            return $this->redirectToRoute('invitacionUsuario');
        }
        return $this->render('admin/invitacionEventos.html.twig', [
            'form' => $form->createView(),
            'juegos' => $gamesEventsRepository->findAll(),

        ]);
    }


    #[Route('/invitacionUsuario', name:'invitacionUsuario')]
    public function invitacionUsuario()
    {
        $html = $this->render('admin/invitaUsuario.html.twig');
        return $html;
    }




    // #[Route('/invitacionEventos', name: 'app_invitacion_index', methods: ['GET'])]
    // public function index(GamesEventsRepository $gamesEventsRepository): Response
    // {
    //     return $this->render('admin/invitacionEventos.html.twig', [
    //         'juegos' => $gamesEventsRepository->findAll(),
    //     ]);
    // }
    #[Route('invitacionEventos/{id}/edit', name: 'app_gamesEvents_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, GamesEvents $gamesEvents, GamesEventsRepository $gamesEventsRepository): Response
    {
        $form = $this->createForm(GamesEventsType::class, $gamesEvents);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $gamesEventsRepository->save($gamesEvents, true);

            // $this->addFlash(
            //     'actualizar',
            //     'Juego actualizado correctamente'
            // );

            return $this->redirectToRoute('invitacionEventos', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/invitacionEventosEdit.html.twig', [
            'juego' => $gamesEvents,
            'form' => $form,
        ]);
    }


    #[Route('invitacionEventos/{id}', name: 'app_gamesEvent_delete', methods: ['POST'])]
    public function delete(Request $request, GamesEvents $gamesEvents, GamesEventsRepository $gamesEventsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$gamesEvents->getId(), $request->request->get('_token'))) {
            $gamesEventsRepository->remove($gamesEvents, true);
        }

        return $this->redirectToRoute('invitacionEventos', [], Response::HTTP_SEE_OTHER);
    }
}