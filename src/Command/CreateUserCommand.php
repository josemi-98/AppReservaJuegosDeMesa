<?php 
namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

// the name of the command is what users type after "php bin/console"
#[AsCommand(name: 'app:create-user')]
class CreateUserCommand extends Command
{

    // the command description shown when running "php bin/console list"
    protected static $defaultDescription = 'Creates a new user.';

    // ...
    protected function configure(): void
    {
        $this
            // the command help shown when running the command with the "--help" option
            ->setHelp('This command allows you to create a user...')
        ;
    }
    public function __construct(bool $requirePassword = false)
    {
        // best practices recommend to call the parent constructor first and
        // then set your own properties. That wouldn't work in this case
        // because configure() needs the properties set in this constructor
        $this->requirePassword = $requirePassword;

        parent::__construct();
    }

    // protected function configure(): void
    // {
    //     $this
    //         // ...
    //         ->addArgument('password', $this->requirePassword ? InputArgument::REQUIRED : InputArgument::OPTIONAL, 'User password')
    //     ;
    // }
    protected function execute(InputInterface $input, OutputInterface $output): int
{
    // outputs multiple lines to the console (adding "\n" at the end of each line)
    $output->writeln([
        'User Creator',
        '============',
        '',
    ]);

    // the value returned by someMethod() can be an iterator (https://php.net/iterator)
    // that generates and returns the messages with the 'yield' PHP keyword
    //$output->writeln($this->someMethod());

    // outputs a message followed by a "\n"
    $output->writeln('Whoa!');

    // outputs a message without adding a "\n" at the end of the line
    $output->write('You are about to ');
    $output->write('create a user.');

    return Command::SUCCESS;
}
}