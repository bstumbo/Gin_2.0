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
    
    public function ginQuery() {
		$Juniper = $_POST['Juniper'];
        $Citrus = $_POST['Citrus'];
        $Spice = $_POST['Spice'];
        $Herbal = $_POST['Herbal'];
        $Floral = $_POST['Floral'];
        
		$where = new WherePredicate;
        
        $where -> equalTo('Juniper', $Juniper)
               ->  AND
               -> equalTo('Citrus', $Citrus)
               ->  AND
               -> equalTo('Spice', $Spice)
               ->  AND
               -> equalTo('Herbal', $Herbal)
               -> AND
               -> equalTo('Floral', $Floral);
               
         $select = $this->tableGateway->getSql()->select();
         $select->where($where);
        
        $results = $this->tableGateway->selectWith($select);
        $num_results = count($results);
        
         if ($num_results < 1){
           
           $message = "<p class=\"description\">This flavor profile hasn't been developed yet. You should make it!</p>";
           
        echo $message;
            
        } else {
			
			return $results;
		
     }
        
        
    }

    
}

