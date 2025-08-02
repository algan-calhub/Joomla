<?php
use Joomla\DI\Container;
use Joomla\CMS\Extension\Service\ProviderInterface;
use Joomla\CMS\Dispatcher\DispatcherInterface;

return new class implements ProviderInterface {
    public function register(Container $container)
    {
        $container->set('com_events.dispatcher', function(Container $container) {
            return new Joomla\CMS\Dispatcher\ComponentDispatcherFactory('com_events');
        }, true);
    }
};
