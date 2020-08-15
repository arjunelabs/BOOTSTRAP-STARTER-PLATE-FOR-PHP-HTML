<?php

// CONNECT TO MYSQL DATABASE USING PDO
// try {
//   $con = new PDO("mysql:host=localhost;dbname=login-db", "root", "");
// } catch (PDOException $e) {
//   echo $e->getMessage();
// }

// CONNECT TO MYSQL DATABASE USING MYSQLI
$con = mysqli_connect("localhost", "root", "", "login-db");
