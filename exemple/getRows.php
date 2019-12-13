<?php

use Repository\FilmRepository;

require_once("init.php");
$film = new Model\Film();
$filmRepo=new FilmRepository();
$films=$filmRepo->findAll();
$filmorder=$filmRepo->findAll(Array("releaseDate"=>"ASC"));
foreach($filmorder as $flim){
  var_dump($flim->releasedate);
}

