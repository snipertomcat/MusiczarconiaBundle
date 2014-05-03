<?php

namespace Stc\MusiczarconiaBundle;

use Stc\MusiczarconiaBundle\DependencyInjection\Compiler\RepositoryCompilerPass;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class StcMusiczarconiaBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new RepositoryCompilerPass());
    }
}
