<?php
require_once("init.php");
$film = new Model\Film();
$film=$em->findAll($film);
var_dump($film);

