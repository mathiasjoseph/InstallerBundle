<?php
/**
 * Created by PhpStorm.
 * User: miky
 * Date: 02/10/16
 * Time: 15:24
 */

namespace Miky\Bundle\InstallerBundle\Command;

use Miky\Bundle\InstallerBundle\Event\InstallationEvent;
use Miky\Bundle\InstallerBundle\MikyInstallerEvents;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class InstallationCommand extends Command
{
    /**
     * @var EventDispatcherInterface
     */
    protected $eventDispatcher;

    protected $class;

    public function __construct(EventDispatcherInterface $eventDispatcher, $class)
    {
        $this->eventDispatcher = $eventDispatcher;
        $this->class = $class;
        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setName('miky:install')
            ->setDescription('Installation')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $event = new InstallationEvent(new $this->class);
        $this->eventDispatcher->dispatch(MikyInstallerEvents::INSTALL_INITIALIZE, $event);

        $this->eventDispatcher->dispatch(MikyInstallerEvents::INSTALL_COMPLETED, $event);
    }
}