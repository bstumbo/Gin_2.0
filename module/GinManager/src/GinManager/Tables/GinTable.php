<?php

namespace GinManager\Tables;

use GinManager\Models\Gin;
use Zend\Db\TableGateway\TableGateway;
use Zend\Db\Sql\Where as WherePredicate;

class GinTable {
    
    protected $tableGateway;
    
    public function __construct(TableGateway $tableGateway){
        $this->tableGateway = $tableGateway;
        
    }
    
    public function fetchAll()
    {
        $select = $this->tableGateway->getSql()->select();
        $select->where(array(
           'Juniper' => '1' 
        ));
        $results = $this->tableGateway->selectWith($select);

        return $results->buffer();
    }
    
}
