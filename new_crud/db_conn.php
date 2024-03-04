<?php
$servername = "localhost";
$username ="root";
$password = "";
$bdname = "tutorial";

$conn = mysqli_connect($servername, $username, $password, $bdname);
// teste connexion
if(!$conn){
    die("connection failed" . mysqli_connect_error());
}
// echo"connected successfully";