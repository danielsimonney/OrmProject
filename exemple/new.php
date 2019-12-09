<?php

require_once("init.php");

$film = new Model\Film();
$film->setTitle("Django");
$film->setCategory("SF");
$film->setDuree(45);
$film->setStudio("Blizzard");
$film->setSynopsis("Un petit film sur les violences contre les noirs");
$film->setReleaseDate(new DateTime("2009-12-16"));
$em->save($film);

// var_dump($film->getModel());


