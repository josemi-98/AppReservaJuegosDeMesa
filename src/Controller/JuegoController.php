<?php

namespace App\Controller;

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

//PersistenceManagerRegistry $doctrine , PaginatorInterface $paginator

#[Route('/juego')]
class JuegoController extends AbstractController
{
    // private $em;

    // public function __construct(EntityManagerInterface $em)
    // {
    //     $this->em = $em;
    // }
    
    // #[Route('/', name: 'app_juego_index', methods: ['GET'])]
    // public function index(Request $request,DataService $query){
    //     $data=$query->ReturnData($request);
    //     //dump($data);
    //     //die();
    //     return $this->render('sheet/tables-data.html.twig',[
    //         'data'=>$data,
    //     ]);
    // }
    

    #[Route('/', name: 'app_juego_index', methods: ['GET'])]
    public function index(JuegoRepository $juegoRepository): Response
    {
        return $this->render('juego/index.html.twig', [
            'juegos' => $juegoRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_juego_new', methods: ['GET', 'POST'])]
    public function new(Request $request, JuegoRepository $juegoRepository): Response
    {
        $juego = new Juego();
        $form = $this->createForm(JuegoType::class, $juego);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $juegoRepository->save($juego, true);

            $this->addFlash(
                'notice',
                'Juego creado correctamente'
            );

            return $this->redirectToRoute('app_juego_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('juego/new.html.twig', [
            'juego' => $juego,
            'form' => $form,
        ]);
   
    }

    #[Route('/{id}', name: 'app_juego_show', methods: ['GET'])]
    public function show(Juego $juego): Response
    {
        return $this->render('juego/show.html.twig', [
            'juego' => $juego,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_juego_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Juego $juego, JuegoRepository $juegoRepository): Response
    {
        $form = $this->createForm(JuegoType::class, $juego);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $juegoRepository->save($juego, true);

            $this->addFlash(
                'actualizar',
                'Juego actualizado correctamente'
            );

            return $this->redirectToRoute('app_juego_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('juego/edit.html.twig', [
            'juego' => $juego,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_juego_delete', methods: ['POST'])]
    public function delete(Request $request, Juego $juego, JuegoRepository $juegoRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$juego->getId(), $request->request->get('_token'))) {
            $juegoRepository->remove($juego, true);
            $this->addFlash(
                'actualizar',
                'Juego eliminado correctamente'
            );
        }

        return $this->redirectToRoute('app_juego_index', [], Response::HTTP_SEE_OTHER);
    }

    // Include the paginator through dependency injection, the autowire needs to be enabled in the project
    #[Route('/paginacion', name: 'paginacion')]
    public function listAction(EntityManagerInterface $em, PaginatorInterface $paginator, Request $request)
{
    $dql   = "SELECT a FROM juego a";
    $query = $em->createQuery($dql);

    $pagination = $paginator->paginate(
        $query, /* query NOT result */
        $request->query->getInt('page', 1), /*page number*/
        10 /*limit per page*/
    );

    // parameters to template
    return $this->render('juego/paginacion.html.twig', ['pagination' => $pagination]);
}
    
}
