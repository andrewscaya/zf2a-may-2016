<?php
namespace Application\Repo;

use Application\Model\Attendee;
use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\AbstractResultSet;
use Zend\Db\TableGateway\Feature\RowGatewayFeature;
class EventRepo
{
    const TABLE_NAME = 'event';
    protected $table;
    public function setTable($adapter)
    {
        $this->table = new TableGateway(
            self::TABLE_NAME, 
            $adapter,
            new RowGatewayFeature('id'));
    }
}
