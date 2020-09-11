<?php
ob_start(); // Turns on output buffering
session_start();
date_default_timezone_set("Europe/London");

try {
  

    //$con = new PDO('mysql:dbname=heroku_6256616d7ff11ea;host=eu-cdbr-west-03.cleardb.net', 'bbeafe52c7b661', '80c9e66b');
    
    // $con = new PDO('mysql:dbname=premiere;host=localhost', 'root', '');
    $con = new PDO('mysql:host=trinatestserver.mysql.database.azure.com;port=3306;dbname=testdb', 'myadmin@trinatestserver', 'Password123');

    // $con = new PDO('mysql:host=trinatestserver.mysql.database.azure.com;port=3306;dbname=testdb', 'myadmin@trinatestserver', 'Password123', $options);

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    exit('Connection failed:' . $e->getMessage());
}