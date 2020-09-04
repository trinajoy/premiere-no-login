<?php
ob_start(); // Turns on output buffering
session_start();
date_default_timezone_set("Europe/London");

try {
  
    // $con = new PDO('mysql:dbname=premiere;host=localhost', 'root', '');
    $db = new PDO('mysql:host=premiereserver.mysql.database.azure.com;port=3306;dbname=test', 'myadmin@premiereserver', 'Password123', $options);

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    exit('Connection failed:' . $e->getMessage());
}