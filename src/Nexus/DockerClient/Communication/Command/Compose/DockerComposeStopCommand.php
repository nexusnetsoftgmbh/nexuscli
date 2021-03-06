<?php


namespace Nexus\DockerClient\Communication\Command\Compose;


use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Xervice\Console\Business\Model\Command\AbstractCommand;

/**
 * @method \Nexus\DockerClient\Business\DockerClientFacade getFacade()
 */
class DockerComposeStopCommand extends AbstractCommand
{
    protected function configure(): void
    {
        $this
            ->setName('docker:compose:stop')
            ->setDescription('Docker composer stop')
            ->addArgument('files', InputArgument::IS_ARRAY, 'Compose file', ['docker-compose.yaml']);
    }

    /**
     * @param \Symfony\Component\Console\Input\InputInterface $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @return int|null|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $files = $input->getArgument('files');
        $fileSuffix = ' -f ' . implode(' -f ', $files);

        $command = sprintf('%s stop -d', $fileSuffix);
        $response = $this->getFacade()->runDockerCompose($command);

        if ($output->isVerbose()) {
            $output->writeln($response);
        }
    }


}