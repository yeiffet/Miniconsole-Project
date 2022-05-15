<?php
declare(strict_types=1);

namespace MiniConsole\UI\Console;

use MiniConsole\Application\Query\GetFIleContents\GetFileContentsQuery;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use MiniConsole\Application\Query\GetFIleContents\GetFIleContentsHandler;

class MainProgramCommand extends Command
{
    public const NAME = 'app:check';
    private GetFIleContentsHandler $handler;
    
    public function __construct(GetFIleContentsHandler $handler)
    {
        parent::__construct();
        $this->handler = $handler;
    }
    
    protected function configure()
    {
        $this
            ->setName(self::NAME)
            ->setDescription('Check the application')
            ->setHelp('Inits the application with happy message');
    }
    
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln($this->handler->handle(GetFileContentsQuery::create()));
        $output->writeln(['It Works!',]);
        return Command::SUCCESS;
    }
}
