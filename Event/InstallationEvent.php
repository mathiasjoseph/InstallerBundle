<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/05/17
 * Time: 00:10
 */

namespace Miky\Bundle\InstallerBundle\Event;


use Miky\Bundle\InstallerBundle\Model\Installation;
use Symfony\Component\EventDispatcher\Event;

class InstallationEvent extends Event
{
    /**
     * @var Installation
     */
    protected $installation;

    /**
     * InstallationEvent constructor.
     * @param Installation $installation
     */
    public function __construct(Installation $installation)
    {
        $this->installation = $installation;
    }


    /**
     * @return Installation
     */
    public function getInstallation()
    {
        return $this->installation;
    }

    /**
     * @param Installation $installation
     */
    public function setInstallation($installation)
    {
        $this->installation = $installation;
    }
}