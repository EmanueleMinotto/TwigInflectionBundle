<?php

namespace EmanueleMinotto\TwigInflectionBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * This is the class that loads and manages your bundle configuration.
 *
 * @link http://symfony.com/doc/current/cookbook/bundles/extension.html
 */
class TwigInflectionExtension extends Extension
{
    /**
     * Loads a specific configuration.
     *
     * @param array            $configs   An array of configuration values.
     * @param ContainerBuilder $container A ContainerBuilder instance.
     *
     * @throws \InvalidArgumentException When provided tag is not defined in this extension.
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new Loader\XmlFileLoader(
            $container,
            new FileLocator(__DIR__.'/../Resources/config')
        );
        $loader->load('services.xml');
    }
}
