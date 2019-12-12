<?php

use Susano\Database;
use Susano\EntityManager;
use Susano\Executer;

require_once("../vendor/autoload.php");


$config=[
    "host"=>"localhost:8889",
    "dbname"=>"films",
    "user"=>"root",
    "password"=>"root"
];

$db=new Executer('mysql:host=' . $config["host"] . ';dbname=' . $config["dbname"] . ';charset=utf8;', $config["user"], $config["password"]);
$em = new EntityManager($db);

