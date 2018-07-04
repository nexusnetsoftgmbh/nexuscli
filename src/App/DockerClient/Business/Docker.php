<?php


namespace App\DockerClient\Business;


use App\Shell\ShellFacade;

class Docker
{
    /**
     * @var \App\Shell\ShellFacade
     */
    private $shellFacade;

    /**
     * @var string
     */
    private $command = 'docker';

    /**
     * DockerCompose constructor.
     *
     * @param \App\Shell\ShellFacade $shellFacade
     */
    public function __construct(ShellFacade $shellFacade)
    {
        $this->shellFacade = $shellFacade;
    }

    /**
     * @param string $command
     *
     * @return string
     */
    public function execute(string $command) {
        return $this->shellFacade->runCommand($this->command . ' ' . $command);
    }
}