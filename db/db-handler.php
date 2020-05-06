<?php // "dbh" stands for 'DataBase Handling'

$dbServername = "localhost";
$dbUsername   = "root";
$dbPassword   = "";
$dbName       = "hus.bm-it";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

include "db/dbc-quotes.php";