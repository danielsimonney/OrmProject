<?php

use Susano\Database;
use Susano\EntityManager;

require_once("../vendor/autoload.php");


$config=[
    "host"=>"localhost:8889",
    "dbname"=>"films",
    "user"=>"root",
    "password"=>"root"
];


$db=new Database($config);
$em = new EntityManager($db->connexion());

