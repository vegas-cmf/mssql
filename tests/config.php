<?php
return array(
    'database' => array(
        'adapter'     => 'Vegas\Db\Adapter\Pdo\MsSql',
        'host'		=> 'localhost',
        'username'	=> 'root',
        'password'	=> 'root',
        'dbname'	=> 'test',
        'pdoType'       => 'dblib',
        'dialectClass'	=> 'Vegas\Db\Dialect\MsSql'
    )
);