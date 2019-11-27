<?php

use Susano\Database;
use Susano\EntityManager;

require_once("vendor/autoload.php");
$model = Setup::createAnnotationMetadataConfiguration([
    __DIR__."/src"
], true);

$config=[
    "host"=>"host",
    "dbname"=>"films",
    "user"=>"root",
    "password"=>"root"
];


$db=new Database($config,$model);

$em = new EntityManager($db);

