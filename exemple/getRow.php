<?php

use Repository\FilmRepository;
require_once("init.php");
$filmRepo=new FilmRepository();
$film=$filmRepo->find(1);
var_dump($film);
// $film=$filmRepo->findBy(["synopsis"=>"`fezefvzevezv"],["releaseDate"=>"ASC"]);
// $count=$filmRepo->count();
var_dump($film->releasedate);
// foreach ($film as $key => $value) {
//     var_dump($value->releasedate);

// }

