<?php

namespace Stc\MusiczarconiaBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class RepositoryCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        //collect tagged services (all):
        $taggedServiceIds = $container->findTaggedServiceIds('stc_repository');

        $objectRendererDefinition = $container->getDefinition('stc_musiczarconia.repository.scheduler');

        foreach ($taggedServiceIds as $serviceId => $tags) {
            //services can have many tagged elements with the same tag name
            foreach ($tags as $tagAttributes) {
                //call setConn to set the doctrine connection:
                $objectRendererDefinition->addMethodCall('setConn', array(
                    new Reference('database_connection')
                ));
            }
        }
    }
}