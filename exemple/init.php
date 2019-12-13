<?php

use Susano\Database;
use Susano\EntityManager;
use Susano\Executer;

require_once("../vendor/autoload.php");
require_once("../src/config/config.php");

$config=[
    "host"=>"localhost:8889",
    "dbname"=>"films",
    "user"=>"root",
    "password"=>"root"
];

$exe=Executer::getInstance();
// $db=new Executer('mysql:host=' . $config["host"] . ';dbname=' . $config["dbname"] . ';charset=utf8;', $config["user"], $config["password"]);
$em = new EntityManager;

