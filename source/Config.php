<?php 

define("ROOT", "http://www.localhost:8080");
//define("ROOT", "http://www.localhost/");
define("SITE", "Teste Pratico");

define("DATA_LAYER_CONFIG", [
    "driver"    => "pgsql",
    "host"      => "localhost",
    "port"      => "5432",
    "dbname"    => "teste_pratico",
    "username"  => "postgres",
    "passwd"    => "place123",
    "options"   => [
        PDO::MYSQL_ATTR_INIT_COMMAND    => "SET NAMES utf8",
        PDO::ATTR_ERRMODE               => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE    => PDO::FETCH_OBJ,
        PDO::ATTR_CASE                  => PDO::CASE_NATURAL
    ]
]);

function url(string $uri = null): string
{
    if($uri){
        return ROOT."/{$uri}";
    }
    return ROOT;
}