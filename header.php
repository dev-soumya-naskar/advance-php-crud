<!DOCTYPE html>
<html>
<?php 
include_once ('class/config.php');
include_once ('class/database.php');

$objDB = new DB();
?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Advance PHP CRUD </title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="topnav">
        <a class="active" href="index.php">Home</a>
        <span style="float:right">
            <a href="add.php">Add User</a>
        </span>

    </div>