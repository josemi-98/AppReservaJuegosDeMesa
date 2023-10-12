<?php
namespace App\Controller\Api;

    use App\Entity\User;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Doctrine\Persistence\ManagerRegistry;

#[Route(path:'/api', name:'api_')]
class ApiUser extends AbstractController
{

    public function __construct(private ManagerRegistry $doctrine)
    {
        
    }

    //DEVUELVE UN JSON CON TODAS LOS USUARIOS DE LA BD
    #[Route(path:'/user', name:'user_index', methods:'GET')]
    public function index(): Response
    {
        //BUSCA TODOS LOS USUARIOS DE LA BD
        $usuarios = $this->doctrine
            ->getRepository(User::class)
            ->findAll();
 
        $data = [];
 
        //METE TODOS LOS USUARIOS EN EL ARRAY DATA
        foreach ($usuarios as $usuario) {
           $data[] = [
                'id' => $usuario->getId(),
                'email' => $usuario->getEmail(),
                'nombre' => $usuario->getNombre(),
                'contacto' => $usuario->getContacto(),
                'roles' => $usuario->getRoles()
           ];
        }
 
        //DEVUELVE EL JSON CON LOS USUARIOS
        return $this->json($data);
    }
}