<?php

namespace GinManager\Forms;

use Zend\Form\Form;


class QueryGinForm extends Form
{
    public function __construct()
    {
        parent::__construct('QueryGinForm');
        

    }

    public function init()
    {
        
        /*$this->setAttribute('class', 'form-horizontal')
             ->setAttribute('action', '/video/manage');*/

        // Add form elements
   
        $this->add(array(
            'type' => 'Zend\Form\Element\Select',
            'name' => 'Juniper',
            'options' => array(
                'label' => 'Juniper',
                'value_options' => array(
                    '1' => 'Light',
                    '2' => 'Medium',
                    '3' => 'Heavy',
                ),
            )
            
        ));

        $this->add(array(
            'type' => 'Zend\Form\Element\Select',
            'name' => 'Citrus',
            'options' => array(
                'label' => 'Citrus:',
                'value_options' => array(
                    '4' => 'Not Set',
                    '0' => 'Light',
                    '1' => 'Medium',
                    '2' => 'Heavy',
                    '3' => 'Extra Heavy',
                ),
            )
           
        ));
        
         $this->add(array(
            'type' => 'Zend\Form\Element\Select',
            'name' => 'Spice',
            'options' => array(
                'label' => 'Spice:',
                'value_options' => array(
                    '4' => 'Not Set',
                    '0' => 'Light',
                    '1' => 'Medium',
                    '2' => 'Heavy',
                    '3' => 'Extra Heavy',
                ),
            )
           
        ));
         
          $this->add(array(
            'type' => 'Zend\Form\Element\Select',
            'name' => 'Herbal',
            'options' => array(
                'label' => 'Herbal:',
                'value_options' => array(
                    '4' => 'Not Set',
                    '0' => 'Light',
                    '1' => 'Medium',
                    '2' => 'Heavy',
                    '3' => 'Extra Heavy',
                ),
            )
           
        ));
          
           $this->add(array(
            'type' => 'Zend\Form\Element\Select',
            'name' => 'Floral',
            'options' => array(
                'label' => 'Floral:',
                'value_options' => array(
                    '4' => 'Not Set',
                    '0' => 'Light',
                    '1' => 'Medium',
                    '2' => 'Heavy',
                    '3' => 'Extra Heavy',
                ),
            )
           
        ));

        $this->add(array(
            'name' => 'submit',
            'type' => 'Zend\Form\Element\Submit',
            'options' => array(
                'label' => 'Sumbit'
            ),
            'attributes' => array(
                'class' => 'btn btn-default'
            )
        ));

        $this->get('submit')->setValue('Submit');
    }
}
