<?php

namespace Ginmanager\Tables\Factories;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Stdlib\Hydrator\ArraySerializable;
use GinManager\Models\Gin;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;

class GinTableGatewayFactory implements FactoryInterface {
    public function createService(
        ServiceLocatorInterface $serviceLocator
    ){
        $dbAdapter = $serviceLocator->get('Zend\Db\Adapter\Adapter');
        $hydrator = new ArraySerializable();
        $rowObjectPrototype = new Gin();
        $resultSet = new HydratingResultSet(
            $hydrator, $rowObjectPrototype
        );
         return new TableGateway(
            'gins_2', $dbAdapter, null, $resultSet
         );
    }
}
