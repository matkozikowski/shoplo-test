<?php

declare(strict_types=1);

namespace App\DependencyInjection\Compiler;

use App\Chain\ServiceChain;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class ServicePass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container): void
    {
        if (!$container->has(ServiceChain::class)) {
            return;
        }

        $definition = $container->findDefinition(ServiceChain::class);

        $taggedServices = $container->findTaggedServiceIds('app.service_render');

        foreach ($taggedServices as $id => $tags) {
            foreach ($tags as $attributes) {
                $definition->addMethodCall(
                    'addService',
                    [
                        new Reference($id),
                        $attributes['alias']
                    ]
                );
            }
        }
    }
}
