<?php
require_once("init.php");
$film = new Model\Film();
$films=$em->findAll($film);

foreach($films as $flim){
 echo $flim->title;
}


