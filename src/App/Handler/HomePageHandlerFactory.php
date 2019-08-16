<?php
declare(strict_types=1);

namespace App\Handler;

use Psr\Container\ContainerInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Expressive\Router\RouterInterface;
use Zend\Expressive\Template\TemplateRendererInterface;
use function get_class;

class HomePageHandlerFactory
{

    public function __invoke(ContainerInterface $container
    ): RequestHandlerInterface {
        $entityManager = $container->get(\Doctrine\ORM\EntityManager::class);
        $router = $container->get(RouterInterface::class);
        $template = $container->has(TemplateRendererInterface::class)
            ? $container->get(TemplateRendererInterface::class)
            : null;

        return new HomePageHandler(get_class($container), $router, $template);
    }
}
