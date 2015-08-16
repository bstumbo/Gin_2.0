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
	
	//Query for Juniper and Citrus/Spice/Herbal/Floral
        
    public function ginQuery() {
		
		$Juniper = $_POST['Juniper'];
		
		//Setting database identifiers
		$Citrus1 = 'Citrus';
		$Spice1 = 'Spice';
		$Herbal1 = 'Herbal';
		$Floral1 = 'Floral';
       
	   if ($_POST['Citrus'] < 4) {
		
		$Citrus = array($_POST['Citrus']);
	  
	   } else  {
		
		$Citrus = array(0, 1, 2, 3);
	
	   }
	   
	   if ($_POST['Spice'] < 4) {
		
		$Spice = array($_POST['Spice']);
	  
	   } else  {
		
		$Spice = array(0, 1, 2, 3);
	
	   }
	   
	    if ($_POST['Herbal'] < 4) {
		
		$Herbal = array($_POST['Herbal']);
	  
	   } else  {
		
		$Herbal = array(0, 1, 2, 3);
		
	   }
	   
	   if ($_POST['Floral'] < 4) {
		
		$Floral = array($_POST['Floral']);
	  
	   } else  {
		
		$Floral = array(0, 1, 2, 3);
		
	   }
	   
		$where = new WherePredicate;
        
        $where -> equalTo('Juniper', $Juniper)
               ->  AND
               -> in($Citrus1, $Citrus)
               ->  AND
               -> in($Spice1, $Spice)
               ->  AND
               -> in($Herbal1, $Herbal)
               -> AND
               -> in($Floral1, $Floral);
               
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
	
	public function indiQuery() {
		
		$gindata = $_POST['tbl-row'];
		
		$where = new WherePredicate;
        
		$where -> equalTo('gin_key', $gindata);
		
		$select = $this->tableGateway->getSql()->select();
        $select->where($where);
        
        $results = $this->tableGateway->selectWith($select);
		
		return $results;
			
	}
    
}

