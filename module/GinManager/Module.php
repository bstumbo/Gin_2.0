<?php

namespace GinManager;

use Zend\ModuleManager\ModuleManager;

class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
    
     public function getServiceConfig(){
        return array(
            'factories' => array(
                'GinManager\Tables\GinTable' =>
                'GinManager\Tables\Factories\GinTableFactory',
                'GinManager\Tables\GinTableGateway' => 'GinManager\Tables\Factories\GinTableGatewayFactory'
                
            )
        );
    }
}