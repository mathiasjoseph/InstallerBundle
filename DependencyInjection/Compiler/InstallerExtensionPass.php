<?php
/**
 * Created by PhpStorm.
 * User: miky
 * Date: 16/08/16
 * Time: 14:19
 */

namespace Miky\Bundle\InstallerBundle\DependencyInjection\Compiler;


use Miky\Bundle\AdBundle\Field\FieldCollectionInterface;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class InstallerExtensionPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        // always first check if the primary service is defined
        if (!$container->has('miky_installer.provider.installer_provider')) {
            return;
        }
        $definition = $container->findDefinition('miky_installer.provider.installer_provider');

        // find all service IDs with the app.mail_transport tag
        $taggedServices = $container->findTaggedServiceIds('miky.installer');


        foreach ($taggedServices as $id => $tags) {
            $definition->addMethodCall('addInstaller', array(new Reference($id)));
        }
    }
}