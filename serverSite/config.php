<?php

session_start();

$dbserver = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "supershop";

$connection = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname);

// Check connection
if ($connection->connect_error) {
    die("could not established connection: " . $connection->connect_error);
} else {
}
