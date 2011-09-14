<?php

  namespace DeBaasMedia\Bundle\XhtmlBundle\DependencyInjection;

  use Symfony\Component\Config\FileLocator
    , Symfony\Component\Config\Definition\Processor
    , Symfony\Component\Config\Definition\Builder\TreeBuilder
    , Symfony\Component\DependencyInjection\Loader\XmlFileLoader
    , Symfony\Component\DependencyInjection\ContainerBuilder
    , Symfony\Component\HttpKernel\DependencyInjection\Extension;

  /**
   * DeBaasMediaFrameworkBundle.
   *
   * @author  Marijn Huizendveld <marijn.huizendveld@gmail.com>
   */
  class DeBaasMediaFrameworkExtension extends Extension
  {

    /**
     * {@inheritDoc}
     */
    public function load (array $configs, ContainerBuilder $container)
    {
      $loader = new XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));

      $loader->load('framework.xml');
    }

    /**
     * {@inheritDoc}
     */
    public function getNamespace ()
    {
      return 'http://symfony.com/schema/dic/symfony/debaasmedia_framework';
    }

    /**
     * {@inheritDoc}
     */
    public function getAlias ()
    {
      return 'debaasmedia_framework';
    }

  }