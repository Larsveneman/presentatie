<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "presentatie";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn) {
    echo"connect";
}
else{
    echo("Connection failed: ". mysqli_connect_error());
}
