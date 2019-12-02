<?php
$servername = "localhost";
$dBUsername = "YOUR DATA HERE";
$dBPassword = "YOUR DATA HERE";
$dBName = "php-login-system";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
