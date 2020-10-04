<?php

declare(strict_types=1);

namespace App\DependencyInjection\Compiler;

use App\Chain\GeneratorChain;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class GeneratorPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container): void
    {
        if (!$container->has(GeneratorChain::class)) {
            return;
        }

        $definition = $container->findDefinition(GeneratorChain::class);

        $taggedServices = $container->findTaggedServiceIds('app.generator_pdf');

        foreach ($taggedServices as $id => $tags) {

            foreach ($tags as $attributes) {
                $definition->addMethodCall(
                    'addService',
                    [
                        new Reference($id),
                        $attributes['service_key'],
                        $attributes['language_code']
                    ]
                );
            }
        }
    }
}
