<?php
/**
 * Created by PhpStorm.
 * User: miky
 * Date: 02/10/16
 * Time: 15:24
 */

namespace Miky\Bundle\InstallerBundle\Command;


use Miky\Bundle\InstallerBundle\Provider\InstallerProvider;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class UpdateCommand extends Command
{
    protected $installerProvider;

    public function __construct(InstallerProvider $installerProvider)
    {
        $this->installerProvider = $installerProvider;
        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setName('miky:update')
            ->setDescription('Installation')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->installerProvider->runAll();
    }
}