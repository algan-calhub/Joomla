<?php
use Joomla\DI\Container;
use Joomla\CMS\Extension\Service\ProviderInterface;

return new class implements ProviderInterface {
    public function register(Container $container)
    {
        // Nothing special for now
    }
};
