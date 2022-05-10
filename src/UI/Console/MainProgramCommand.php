<?php
declare(strict_types=1);

namespace MiniConsole\UI\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MainProgramCommand extends Command
{
    public const NAME = 'app:check';
    
    protected function configure()
    {
        $this
            ->setName(self::NAME)
            ->setDescription('Check the application')
            ->setHelp('Inits the application with happy message');
    }
    
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln(['It Works!',]);
        return Command::SUCCESS;
    }
}
