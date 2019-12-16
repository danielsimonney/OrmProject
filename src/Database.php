<?php
// namespace Susano;

// use PDO;
// use PDOException;

// class Database
// {
//     private $host;
//     private $hostname;
//     private $user;
//     private $password;
//     public function __construct($conn)
//     {
//         $this->host=$conn["host"];
//         $this->hostname=$conn["dbname"];
//         $this->user=$conn["user"];
//         $this->password=$conn["password"];
//     }
//     public function connexion()
//     {
//         try 
//         {
//             $db = new \PDO('mysql:host=' . $this->host . ';dbname=' . $this->hostname . ';charset=utf8;', $this->user, $this->password);
//             return $db;
//         }
//         catch(PDOException $e)
//         {
//             var_dump($e);
//             die('database out of the game !');
//             exit();
//         }
//     }
// }