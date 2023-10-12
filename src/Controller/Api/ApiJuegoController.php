<?php

namespace App\Controller\Api;
 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Juego;
 
//Ruta de que es una api
#[Route('/api', name: 'api_')]
class ApiJuegoController extends AbstractController
{
    //ruta juego que nos devuelve todas las juegos con un get
    #[Route('/juego', name: 'juego_index', methods: ['GET'])]
    public function index(ManagerRegistry $doctrine): Response
    { 
        $juegos = $doctrine
            ->getRepository(Juego::class)
            ->findAll();
 
        $data = [];
 
        foreach ($juegos as $juego) {
           $data[] = [
               'id' => $juego->getId(),
               'nombre' => $juego->getNombre(),
               
           ];
        }
        return $this->json($data);
    }
    
    //ruta que nos crea una juego con el metodo post
    #[Route('/juego', name: 'juego_new', methods: ['POST'])]
    public function new(ManagerRegistry $doctrine, Request $request): Response
    {
        $entityManager = $doctrine->getManager();
 
        $juego = new Juego();
        $juego->setNombre($request->request->get('nombre'));
        $juego->setAncho($request->request->get('ancho'));
        $juego->setAlto($request->request->get('alto'));
        $juego->setX($request->request->get('x'));
        $juego->setY($request->request->get('y'));
 
        $entityManager->persist($juego);
        $entityManager->flush();
 
        return $this->json('Created new juego successfully with id ' . $juego->getId());
    }
    
    //ruta juego que nos devuelve una juego por su id get
    #[Route('/juego/{id}', name: 'juego_show', methods: ['GET'])]
    public function show(ManagerRegistry $doctrine, int $id): Response
    {
        $juego = $doctrine
            ->getRepository(juego::class)
            ->find($id);
 
        if (!$juego) {
            return $this->json('juego no encontrada por la id ' . $id, 404);
        }
        $data =  [
            'id' => $juego->getId(),
            'nombre' => $juego->getNombre(),
            'ancho' => $juego->getAncho(),
            'alto' => $juego->getAlto(),
            'x' => $juego->getX(),
            'y' => $juego->getY(),
        ];
         
        return $this->json($data);
    }
 
    //ruta que nos actualiza una msea con put
    #[Route('/juego/{id}', name: 'juego_edit', methods: ['PUT'])]
    public function edit(ManagerRegistry $doctrine, Request $request, int $id): Response
    {
        $entityManager = $doctrine->getManager();
        $juego = $entityManager->getRepository(juego::class)->find($id);
 
        if (!$juego) {
            return $this->json('No juego found for id' . $id, 404);
        }
 
        $juego->setNombre($request->request->get('nombre'));
        $juego->setAncho($request->request->get('ancho'));
        $juego->setAlto($request->request->get('alto'));
        $juego->setX($request->request->get('x'));
        $juego->setY($request->request->get('y'));
        $entityManager->flush();
 
        $data =  [
            'id' => $juego->getId(),
            'nombre' => $juego->getNombre(),
            'ancho' => $juego->getAncho(),
            'alto' => $juego->getAlto(),
            'x' => $juego->getX(),
            'y' => $juego->getY(),
        ];
         
        return $this->json($data);
    }
 
    //ruta que nos elimina una juego con delete
    #[Route('/juego/{id}', name: 'juego_delete', methods: ['DELETE'])]
    public function delete(ManagerRegistry $doctrine, int $id): Response
    {
        $entityManager = $doctrine->getManager();
        $juego = $entityManager->getRepository(juego::class)->find($id);
 
        if (!$juego) {
            return $this->json('No juego found for id' . $id, 404);
        }
 
        $entityManager->remove($juego);
        $entityManager->flush();
 
        return $this->json('Deleted a juego successfully with id ' . $id);
    }
 
 
}