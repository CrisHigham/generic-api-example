<?php
require_once "./vendor/autoload.php";

//Initialize Sqlite Database Connection
global $DBA;
$DBA = new \Tina4\DataSQLite3($_ENV["DB_NAME"], $_ENV["DB_USER"], $_ENV["DB_PASSWORD"], "d/m/Y");

$config = new \Tina4\Config(static function (\Tina4\Config $config){
    //Your own config initializations
    $config->setAuth(new AuthHelper());
});

echo new \Tina4\Tina4Php($config);