<?php

namespace Miky\Bundle\InstallerBundle\Entity;

/**
 * Installation
 */
class Installation extends \Miky\Bundle\InstallerBundle\Model\Installation
{
    /**
     * @var int
     */
    private $id;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

