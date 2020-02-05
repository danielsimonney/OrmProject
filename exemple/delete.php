<?php
use Repository\FilmRepository;
require_once("init.php");
$filmRepo=new FilmRepository();
$film=$filmRepo->find(3);
$em->delete($film);