<?php
 
    namespace App\Controller\Api;

    use App\Entity\Eventos;
    use App\Entity\InvitacionEvento;
    use App\Entity\User;
    //use App\Service\BotTelegram;
    use App\Service\mail;
    use App\Service\Correo;
    use Doctrine\Persistence\ManagerRegistry;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Component\HttpFoundation\Request;

#[Route(path:'/api', name:'api_')]
class ApiInvitacionUser extends AbstractController
{
    private Correo $correo;
   // private BotTelegram $botTelegram;

    public function __construct(private ManagerRegistry $doctrine,  Correo $correo)
    {
        $this->correo =$correo;
       // $this->botTelegram =$botTelegram;
    }

    //ruta evento que nos devuelve todas las eventos con un get
    #[Route('/invitacion', name: 'invitacion_index', methods: ['GET'])]
    public function index(ManagerRegistry $doctrine): Response
    { 
        $eventos = $doctrine
            ->getRepository(InvitacionEvento::class)
            ->findAll();
 
        $data = [];
 
        foreach ($eventos as $evento) {
           $data[] = [
               'id' => $evento->getId(),
               'evento_Id' => $evento->getEvento()->getId(),
               'user_Id' => $evento->getUser()->getId(),
           ];
        }
        return $this->json($data);
    }

    //CREA UNA NUEVA MESA SEGUN LOS DATOS PASADOS POR POST
    #[Route(path:'/invitacion', name:"invitacion_new", methods:'POST')]
    public function new(Request $request): Response
    {
        $entityManager = $this->doctrine->getManager();

        //BUSCO EL USUARIO
        $user = $this->doctrine
        ->getRepository(User::class)
        ->find($request->request->get('user'));

        //BUSCO EL EVENTO
        $evento = $this->doctrine
        ->getRepository(Eventos::class)
        ->find($request->request->get('evento'));

        //CREO LA NUEVA INVITACION CON LAS PROPIEDADES 
        $invitacion = new InvitacionEvento();
        $invitacion->setUser($user);
        $invitacion->setEvento($evento);
        
        //LA GUARDO EN LA BASE DE DATOS
        $entityManager->persist($invitacion);
        $entityManager->flush();

        //MANDO LA INVITACION AL USUARIO
        // $this->correo->sendEcorreo($user->getEcorreo());
        // $this->botTelegram->main();
 
        return $this->json('Created new invitacion successfully with id ' . $invitacion->getId());
    }
}