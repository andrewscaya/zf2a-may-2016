<?php
return array(
    'router' => array('routes' => array(
        'status-api' => array(
            'type' => 'Segment',
            'options' => array(
                'route' => '/api/status[/:id]',
                'defaults' => array(
                    'controller' => 'Status\StatusController',
                ),
                'constraints' => array(
                    'id' => '[a-f0-9]{32}',
                ),
            ),
        ),
    )),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Db\Adapter\AdapterAbstractServiceFactory',
        ),
    ),

    // Your task: enable the ViewJsonStrategy here:
    'view_manager' => array(
        'strategies' => array( 'ViewJsonStrategy' ),
    ),
);
