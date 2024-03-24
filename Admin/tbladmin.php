<?php
//connect to db
$server = 'localhost';
$user = 'root';
$password = '';
$database = 'tbladmin';
// establish connection
$connect =
mysqli_connect($server, $user, $password, $database);
if (!$connect)
{
    die(mysqli_connect_error());
}