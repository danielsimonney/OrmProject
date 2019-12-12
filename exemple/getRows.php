<?php

use Repository\FilmRepository;

require_once("init.php");
$film = new Model\Film();
$filmRepo=new FilmRepository;
$films=$filmRepo->findAll();

foreach($films as $flim){
  var_dump($flim->releasedate);
}

