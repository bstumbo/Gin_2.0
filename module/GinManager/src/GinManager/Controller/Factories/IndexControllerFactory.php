<?php

namespace VideoManager\Controller\Factories;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use GinManager\Controller\IndexController;

class IndexControllerFactory implements FactoryInterface{
    
    public function createService(ServiceLocatorInterface $serviceLocator){
        $sm = $serviceLocatore->getServiceLocator();
        $controller = new IndexController(
            $sm->get('GinManager\Tables\GinTable')
        );
        
        return $controller;
        
    }
    
}
