<?php
namespace Status;

use Zend\Db\TableGateway\TableGateway;

class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getServiceConfig()
    {
        return array('factories' => array(
            'Status\TableGateway' => function ($services) {
                $db = $services->get('Db\StatusApi');
                return new TableGateway('status', $db);
            },
        ));
    }

    public function getControllerConfig()
    {
        return array('factories' => array(
            'Status\StatusController' => function ($controllers) {
                $services = $controllers->getServiceLocator();
                $table    = $services->get('Status\TableGateway');
                return new StatusController($table);
            },
        ));
    }
}
