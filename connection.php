<?php
declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);
function openConnection() {
    // Try to figure out what these should be for you
    $dbhost    = "localhost"; //where is the data base hosted!
    $dbuser    = "Rafah"; // who is going to inter my data base "GRANT ALL PRIVILEGES ON"
    $dbpass    = "Wachtwoord123";//password
    $db        = "becode"; // file of that data base
    // varchar could be defined here as a variable to for example use the arabic language

    // Try to understand what happens here
    $pdo = new PDO('mysql:host='. $dbhost .';dbname='. $db, $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//turn on errors in the form of exceptions
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);//turn on errors in the form of exceptions

    // Why we do this here
    return $pdo;
}

//Creating a New Database Connection
//PDO