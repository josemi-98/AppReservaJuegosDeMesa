<?php

namespace App\Controller\Api;
 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Eventos;
 
//Ruta de que es una api
#[Route('/api', name: 'api_')]
class ApiEventosController extends AbstractController
{
    //ruta evento que nos devuelve todas las eventos con un get
    #[Route('/evento', name: 'evento_index', methods: ['GET'])]
    public function index(ManagerRegistry $doctrine): Response
    { 
        $eventos = $doctrine
            ->getRepository(Eventos::class)
            ->findAll();
 
        $data = [];
 
        foreach ($eventos as $evento) {
           $data[] = [
               'id' => $evento->getId(),
               'nombre' => $evento->getNombre(),
               'descripcion' => $evento->getDescripcion(),
               'fechaInicio' => $evento->getFechaInicio(),
               'fechaFin' => $evento->getFechaFin(),
               
           ];
        }
        return $this->json($data);
    }
    
    //ruta que nos crea una evento con el metodo post
    #[Route('/evento', name: 'evento_new', methods: ['POST'])]
    public function new(ManagerRegistry $doctrine, Request $request): Response
    {
        $entityManager = $doctrine->getManager();
 
        $evento = new Eventos();
        $evento->setNombre($request->request->get('nombre'));
        $evento->setDescripcion($request->request->get('descripcion'));
        $evento->setFechaInicio($request->request->get('fechaInicio'));
        $evento->setFechaFin($request->request->get('fechaFin'));
       // $evento->setInvitacion($request->request->get('invitacion'));
 
        $entityManager->persist($evento);
        $entityManager->flush();
 
        return $this->json('Created new evento successfully with id ' . $evento->getId());
    }
    
    //ruta evento que nos devuelve una evento por su id get
    #[Route('/evento/{id}', name: 'evento_show', methods: ['GET'])]
    public function show(ManagerRegistry $doctrine, int $id): Response
    {
        $evento = $doctrine
            ->getRepository(Eventos::class)
            ->find($id);
 
        if (!$evento) {
            return $this->json('evento no encontrada por la id ' . $id, 404);
        }
        $data =  [
            'id' => $evento->getId(),
            'nombre' => $evento->getNombre(),
            'ancho' => $evento->getDescripcion(),
            'fechaInicio' => $evento->getFechaInicio(),
            'fechaFin' => $evento->getFechaFin(),
           // 'invitacion' => $evento->getInvitacion()->getNombre(),
        ];
         
        return $this->json($data);
    }
 
    //ruta que nos actualiza una msea con put
    #[Route('/evento/{id}', name: 'evento_edit', methods: ['PUT'])]
    public function edit(ManagerRegistry $doctrine, Request $request, int $id): Response
    {
        $entityManager = $doctrine->getManager();
        $evento = $entityManager->getRepository(Eventos::class)->find($id);
 
        if (!$evento) {
            return $this->json('No evento found for id' . $id, 404);
        }
 
        $evento->setNombre($request->request->get('nombre'));
        $evento->setDescripcion($request->request->get('ancho'));
        $evento->setFechaInicio($request->request->get('fechaInicio'));
        $evento->setFechaFin($request->request->get('fechaFin'));
       // $evento->setInvitacion($request->request->get('invitacion'));
        $entityManager->flush();
 
        $data =  [
            'id' => $evento->getId(),
            'nombre' => $evento->getNombre(),
            'ancho' => $evento->getDescripcion(),
            'fechaInicio' => $evento->getFechaInicio(),
            'fechaFin' => $evento->getFechaFin(),
          //  'invitacion' => $evento->getInvitacion(),
        ];
         
        return $this->json($data);
    }
 
    //ruta que nos elimina una evento con delete
    #[Route('/evento/{id}', name: 'evento_delete', methods: ['DELETE'])]
    public function delete(ManagerRegistry $doctrine, int $id): Response
    {
        $entityManager = $doctrine->getManager();
        $evento = $entityManager->getRepository(Eventos::class)->find($id);
 
        if (!$evento) {
            return $this->json('No evento found for id' . $id, 404);
        }
 
        $entityManager->remove($evento);
        $entityManager->flush();
 
        return $this->json('Deleted a evento successfully with id ' . $id);
    }
 
 
}