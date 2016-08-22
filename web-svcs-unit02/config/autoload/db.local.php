<?php
return array(
	'db' => array('adapters' => array(
			'Db\StatusApi' => array(
					'driver'   => 'Pdo_Sqlite',
					'database' => __DIR__ . '/../../data/db/status.db',
			),
	)),
);
