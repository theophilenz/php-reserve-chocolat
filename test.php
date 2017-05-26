<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=chocolats", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sth= $conn->prepare("SELECT * FROM chocolats WHERE id=3");
    $sth->execute();
    $results= $sth->fetch(PDO::FETCH_OBJ);
    echo "Connected successfully";
    var_dump($results);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }