<?php
//Test Suite bootstrap
include __DIR__ . "/../vendor/autoload.php";

define('TESTS_ROOT_DIR', dirname(__FILE__));

$configArray = require_once dirname(__FILE__) . '/config.php';

$config = new \Phalcon\Config($configArray);
$di = new \Phalcon\DI\FactoryDefault();

$di->set('db', function() use ($config) {
    return new Vegas\Db\Adapter\Pdo\MsSql(array(
        'host' => $config->database->host,
        'username' => $config->database->username,
        'password' => $config->database->password,
        'dbname' => $config->database->dbname,
        'pdoType'	=> $config->database->pdoType,
        'dialectClass' => $config->database->dialectClass
    ));
});

\Phalcon\DI::setDefault($di);