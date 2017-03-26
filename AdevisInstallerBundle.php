<?php

namespace Miky\Bundle\InstallerBundle;

use Miky\Bundle\InstallerBundle\DependencyInjection\Compiler\InstallerExtensionPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class MikyInstallerBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new InstallerExtensionPass());
    }
}
