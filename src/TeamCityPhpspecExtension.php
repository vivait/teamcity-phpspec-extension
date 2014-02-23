<?php

use PHPSpec\Extension\ExtensionInterface,
    PHPSpec\ServiceContainer;

class TeamCityPhpspecExtension implements ExtensionInterface
{

    public function initialize(ServiceContainer $container)
    {
        $container->extend('event_dispatcher.listeners', function($container) {
                return new TeamCityPhpspecListener($container->get('io'));
            });
    }

}
