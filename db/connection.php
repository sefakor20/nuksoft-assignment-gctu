<?php
$servername = "localhost";
$username = "root";
$db = "nuksoftdb";

try {
  $connection = new PDO("mysql:host=$servername;dbname=$db", $username, '');
  // set the PDO error mode to exception
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}
