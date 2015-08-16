<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'router' => array(
        'routes' => array(
            // The following is a route to simplify getting started creating
            // new controllers and actions without needing to create a new
            // module. Simply drop new controllers in, and you can access them
            // using the path /application/:controller/:action
            'gin' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/gin',
                    'defaults' => array(
                        '__NAMESPACE__' => 'GinManager\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                'query' => array(
                        'type' => 'segment',
                        'options' => array(
                            'route' => '/query',
                            'defaults' => array(
                                'action' => 'query',
                            )
                        ),
                        'may_terminate' => true,
                    ),
                'indi' => array(
                        'type' => 'segment',
                        'options' => array(
                            'route' => '/indi',
                            'defaults' => array(
                                'action' => 'indi',
                            )
                        ),
                        'may_terminate' => true,
                    )
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'factories' => array(
            'translator' => 'Zend\Mvc\Service\TranslatorServiceFactory',
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'GinManager\Controller\Index' => 'GinManager\Controller\IndexController'
        ),
    ),
    'view_manager' => array(
        'template_map' => array(
        'gin' => __DIR__ . '/../view/layouts/gin-layout.phtml',
        'indi' => __DIR__ . '/../view/layouts/query-layout.phtml',
        'query' => __DIR__ . '/../view/layouts/query-layout.phtml',
        'layout/layout'           => __DIR__ . '/../view/layouts/gin-layout.phtml',
        
        ),
        'template_path_stack' => array(
          'gin' =>  __DIR__ . '/../view',
        ),
        'strategies' => array (
            'ViewJsonStrategy'
        )
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
);
