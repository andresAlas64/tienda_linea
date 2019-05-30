<?php
    $con = mysqli_connect("localhost", "root", "", "tienda");

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    /*$server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'tienda';

    try {
        $con = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
    } catch (PDOException $e) {
        die('Connection Failed: ' . $e->getMessage());
    }*/
?>