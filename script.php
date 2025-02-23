<?php
#creating DB
//nel caso metterli in un file .env
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //insert db name 
  $sql = "CREATE DATABASE php_csv_import";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Database created successfully<br>";
} catch(PDOException $e) {
  echo   "<br>" . $e->getMessage();
}
//vedere perchè diventa null(secondo me per motivi di sicurezza così non rimane traccia )
$conn = null;









?>