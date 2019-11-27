<?php
require_once("bootstrap.php");
$filmRepository = $entityManager->getRepository("Film");
$film = $filmRepository->findOneBy(["id" => $argv[1]]);

