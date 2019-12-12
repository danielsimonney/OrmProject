<?php
require_once("init.php");
$film = new Model\Film();
$film=$em->find($film,1);
$film=$em->findBy($film,["title"=>"django"],[""]);
$film=$em->find($film);
$count=$em->count(findAll($film));
var_dump($film);

