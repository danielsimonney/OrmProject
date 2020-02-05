<?php

use Repository\FilmRepository;
require_once("init.php");
$filmRepo=new FilmRepository();
// $film=$filmRepo->find(1);
var_dump($film);

$film=$filmRepo->findBy(["synopsis"=>"`fezefvzevezv"],["releaseDate"=>"ASC"]);


$films=$filmRepo->findBy(["name"=>["synopsis"=>"fezefvzevezv"],"orderBy"=>["releaseDate"=>"ASC"],"limit"=>5]);



// $count=$filmRepo->count();
var_dump($film);
// foreach ($film as $key => $value) {
//     var_dump($value->releasedate);

// }


