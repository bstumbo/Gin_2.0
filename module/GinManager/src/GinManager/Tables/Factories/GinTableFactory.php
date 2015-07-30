<?php

namespace GinManager\Tables\Factories;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use GinManager\Tables\GinTable;

class GinTableFactory implements FactoryInterface {
        public function createService (
            ServiceLocatorInterface $serviceLocator
        ){
            $tableGateway = $serviceLocator->get('GinManager\Tables\GinTableGateway'
        );
            $table = new GinTable($tableGateway);
            return $table;
            
        }  
}