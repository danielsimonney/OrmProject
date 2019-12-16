<?php

use Repository\FilmRepository;
require_once("init.php");
$repo=new FilmRepository();
$film=$repo->find(4);
var_dump($film->id);
$film->setTitle("ROGNOGNO");
 $film->setCategory("Merde");
$em->save($film);
var_dump($film->releasedate);