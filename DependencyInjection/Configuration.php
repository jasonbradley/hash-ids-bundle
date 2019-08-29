<?php

namespace JasonBradley\HashIdsBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('jason_bradley_hash_ids');

        if (method_exists($treeBuilder, 'getRootNode')) {
            $rootNode = $treeBuilder->getRootNode();
        } else {
            $rootNode = $treeBuilder->root('jason_bradley_hash_ids');
        }

        $rootNode
            ->children()
                ->scalarNode('salt')->defaultNull()->end()
                ->scalarNode('min_hash_length')->defaultValue(0)->end()
                ->scalarNode('alphabet')->defaultValue('')->end()
        ;

        return $treeBuilder;
    }
}
