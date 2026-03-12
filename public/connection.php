<?php
$host = "localhost";
$databasename = "testing_db";
$username = "root";
$password = "";
try {
    $dbs = "mysql:port=" . $host . ";dbname=" . $databasename . ";";
    $connect = new PDO($dbs, $username, $password);
    return $connect;
    //code...
} catch (Exception $error) {
    echo $error->getMessage();
    //throw $th;
}