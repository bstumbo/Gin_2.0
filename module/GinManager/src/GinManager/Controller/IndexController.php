<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace GinManager\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use GinManager\Models\Gin;
use Zend\View\Model\ViewModel;
use GinManager\Tables\GinTable;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        
        $ginTable = $this->getServiceLocator()->get('GinManager\Tables\GinTable');
        
        $formManager = $this->serviceLocator->get('FormElementManager');
        $form = $formManager->get('GinManager\Forms\QueryGinForm');
        
        if (isset($_POST['submit'])) {
    
        
        $results = $ginTable->ginQuery();
        print count($results);
       
    } 
         return new ViewModel(array(
            'form' => $form,
            'messages' => array(
                'info' => $this->flashMessenger()->hasInfoMessages()
            )
        ));
        
        }
    
    
    public function queryAction() {
        $formManger = $this->serviceLocator->get('FormElementManager');
        $form = $formManager->get('GinManager\Forms\QueryGinForm');
        
       
        
    }
}
