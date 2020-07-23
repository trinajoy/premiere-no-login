<?php
require_once("includes/config.php");
require_once("includes/classes/PreviewProvider.php");
require_once("includes/classes/Entity.php");

if (!isset($_SESSION['userLoggedIn'])) {
    header('Location: register.php');
}

$userLoggedIn = $_SESSION["userLoggedIn"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/style/style.css" />

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/91e380c2cc.js" crossorigin="anonymous"></script>

    <script src="assets/js/script.js"></script>
    <title> Movie App</title>
</head>

<body>

    <div class="wrapper">