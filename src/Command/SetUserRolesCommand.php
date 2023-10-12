<?php

namespace App\Command;

use App\Repository\UserRepository;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

// the name of the command is what users type after "php bin/console"
#[AsCommand(name: 'app:user:set-roles')]
class SetUserRolesCommand extends Command
{
    protected static $defaultname = 'app:user:set-roles';

    public function __construct(private UserRepository $userRepository){
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $user = $this -> userRepository->findOneByEmail('josemi@gmail.com');
        $user->setRoles(["ROLE_ADMIN"]);
        $this->userRepository->add($user);
        $output->write('Rol de usuario cambiado');
        return Command::SUCCESS;
    }

    // php bin/console app:user:set-roles
}