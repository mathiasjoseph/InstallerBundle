<?php
/**
 * Created by PhpStorm.
 * User: miky
 * Date: 19/08/16
 * Time: 01:26
 */

namespace Miky\Bundle\InstallerBundle\Provider;


use Miky\Bundle\InstallerBundle\Model\InstallerInterface;
use Doctrine\Common\Collections\ArrayCollection;

class InstallerProvider
{
    /**
     * @var InstallerInterface[]
     */
    protected $installers;

    /**
     * AdExtensionProvider constructor.
     */
    public function __construct()
    {
        $this->installers = new ArrayCollection();
    }


    public function addInstaller(InstallerInterface $installer)
    {
        $this->installers->add($installer);
    }

    /**
     * @return \Miky\Bundle\InstallerBundle\Model\InstallerInterface[]
     */
    public function getInstallers()
    {
        return $this->installers;
    }

    /**
     * @param \Miky\Bundle\InstallerBundle\Model\InstallerInterface[] $installers
     */
    public function setInstallers($installers)
    {
        $this->installers = $installers;
    }

    public function runAll(){
        foreach ($this->installers as $installer){
            $installer->run();
        }
    }

}