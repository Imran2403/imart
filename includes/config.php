<?php
if(!isset($_SESSION)) { session_start(); }
error_reporting(E_ALL & ~E_NOTICE  &  ~E_STRICT  &  ~E_WARNING);
$servername = "127.0.0.1:3306";
 $username = "root";
 $password = "";
 $dbname = "shopping"; 
 $con = mysqli_connect($servername, $username, $password, $dbname);
 if (!$con) 
 {
    die("Connection failed: " . mysqli_connect_error()); 
} 
?>