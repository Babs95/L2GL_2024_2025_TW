<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "l2gl_db";
$port = 3306;

$dsn = "mysql:host=$host;port=$port;dbname=$database";

try {
    $connection = new PDO($dsn, $user, $password);
    //die("Connection succes !");
}catch (PDOException $e) {
    die("Database Connection failed: " . $e->getMessage());
}