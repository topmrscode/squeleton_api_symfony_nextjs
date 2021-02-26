<?php

namespace Container8uxdFzx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApp_Product_ControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'app.product.controller' shared autowired service.
     *
     * @return \App\Controller\ProductController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ApiController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ProductController.php';

        $container->services['app.product.controller'] = $instance = new \App\Controller\ProductController(($container->privates['app.product.repository'] ?? $container->load('getApp_Product_RepositoryService')), 'Psr\\Log\\LoggerInterface');

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('app.product.controller', $container));

        return $instance;
    }
}
