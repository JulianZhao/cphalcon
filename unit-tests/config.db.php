<?php

$configMysql = array(
	'host' => 'localhost',
	'username' => 'root',
	'password' => '',
	'dbname' => 'phalcon_test'
);

$configPostgresql = array(
	'host' => '127.0.0.1',
	'username' => 'postgres',
	'password' => '',
	'dbname' => 'phalcon_test',
    'schema' => 'public'
);

$configSqlite = array(
	'host' => '',
	'username' => '',
	'password' => '',
	'dbname' => '/tmp/phalcon_test.sqlite',
);
