<?php

namespace App\Controller\Api;
 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Reservas;
use App\Entity\Mesa;
use App\Entity\Juego;
use App\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
 
//Ruta de que es una api
#[Route('/api', name: 'api_')]
class ApiReservaController extends AbstractController
{
    //ruta reserva que nos devuelve todas las reservas con un get
    #[Route('/reserva', name: 'reserva_index', methods: ['GET'])]
    public function index(ManagerRegistry $doctrine): Response
    { 
        $reservas = $doctrine
            ->getRepository(Reservas::class)
            ->findAll();
 
        $data = [];
 
        foreach ($reservas as $reserva) {
           $data[] = [
               'id' => $reserva->getId(),
               'nombre' => $reserva->getNombre(),
               'participantes' => $reserva->getParticipantes(),
               'fechaInicio' => $reserva->getFechaInicio(),
               'fechaFin' => $reserva->getFechaFin(),
               'presentado' => $reserva->getPresentado(),
               'fechaCancelacion' => $reserva->getFechaCancelacion(),
               'juego' => $reserva->getJuego()->getNombre(),
               'user' => $reserva->getUser()->getEmail(),
               'mesa' => $reserva->getMesa()->getId(),
           ];
        }
        return $this->json($data);
    }
    
    
    //ruta que nos crea una reserva con el metodo post
    #[Route('/reserva', name: 'reserva_new', methods: ['POST'])]
    public function new(ManagerRegistry $doctrine, Request $request): Response
    {
        $entityManager = $doctrine->getManager();
 
        $reserva = new Reservas();
        $reserva->setNombre($request->request->get('nombre'));
        $reserva->setParticipantes($request->request->get('participantes'));

      $reserva->setFechaInicio(new \DateTime($request->request->get('fechaInicio')));
      $reserva->setFechaFin(new \DateTime($request->request->get('fechaFin')));

       $reserva->setPresentado($request->request->get('presentado'));
      //$reserva->setFechaCancelacion($request->request->get('fechaCancelacion'));
       //$reserva->setJuego(new Juego($request->request->get('juego')));
       $reserva->setUser($request->request->get('email'));
      // $reserva->setMesa(new Mesa($request->request->get('id')));
 
        $entityManager->persist($reserva);
        $entityManager->flush();
 
        return $this->json('Tu reserva con nombre '.$reserva->getNombre(). ' ha sido creada con exito y enviada a tu correo ');
    }
    
    //ruta reserva que nos devuelve una reserva por su id get
    #[Route('/reserva/{id}', name: 'reserva', methods: ['GET'])]
    public function show(ManagerRegistry $doctrine, int $id): Response
    {
        $reserva = $doctrine
            ->getRepository(Reservas::class)
            ->find($id);
 
        if (!$reserva) {
            return $this->json('reserva no encontrada por la id ' . $id, 404);
        }
        $data =  [
            'id' => $reserva->getId(),
            'nombre' => $reserva->getNombre(),
            'participantes' => $reserva->getParticipantes(),
            'fechaInicio' => $reserva->getFechaInicio(),
            'fechaFin' => $reserva->getFechaFin(),
            'presentado' => $reserva->getPresentado(),
            'fechaCancelacion' => $reserva->getFechaCancelacion(),
            'juego' => $reserva->getJuego()->getNombre(),
            'user' => $reserva->getUser()->getEmail(),
            'mesa' => $reserva->getMesa()->getId(),
        ];
         
        return $this->json($data);
    }
 
    //ruta que nos actualiza una msea con put
    #[Route('/reserva/{id}', name: 'reserva_edit', methods: ['PUT'])]
    public function edit(ManagerRegistry $doctrine, Request $request, int $id): Response
    {
        $entityManager = $doctrine->getManager();
        $reserva = $entityManager->getRepository(Reservas::class)->find($id);
 
        if (!$reserva) {
            return $this->json('No reserva found for id' . $id, 404);
        }
 
        $reserva->setNombre($request->request->get('nombre'));
        $reserva->setParticipantes($request->request->get('participantes'));
        $reserva->setFechaInicio($request->request->get('fechaInicio'));
        $reserva->setFechaFin($request->request->get('fechaFin'));
        $reserva->setPresentado($request->request->get('presentado'));
        $reserva->setFechaCancelacion($request->request->get('fechaCancelacion'));
        $reserva->setJuego($request->request->get('juego'));
        $reserva->setUser($request->request->get('email'));
        $reserva->setMesa($request->request->get('id'));
        $entityManager->flush();
 
        $data =  [
            'id' => $reserva->getId(),
            'nombre' => $reserva->getNombre(),
            'participantes' => $reserva->getParticipantes(),
            'fechaInicio' => $reserva->getFechaInicio(),
            'fechaFin' => $reserva->getFechaFin(),
            'presentado' => $reserva->getPresenetado(),
            'fechaCancelacion' => $reserva->getFechaCancelacion(),
            'juego' => $reserva->getJuego()->getNombre(),
            'user' => $reserva->getUser()->getEmail(),
            'mesa' => $reserva->getMesa()->getId(),
        ];
         
        return $this->json($data);
    }
 
    //ruta que nos elimina una reserva con delete
    #[Route('/reserva/{id}', name: 'reserva_delete', methods: ['DELETE'])]
    public function delete(ManagerRegistry $doctrine, int $id): Response
    {
        $entityManager = $doctrine->getManager();
        $reserva = $entityManager->getRepository(Reservas::class)->find($id);
 
        if (!$reserva) {
            return $this->json('No reserva found for id' . $id, 404);
        }
 
        $entityManager->remove($reserva);
        $entityManager->flush();
 
        return $this->json('Deleted a reserva successfully with id ' . $id);
    }
 
 
}