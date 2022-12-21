<?php 

$server = "185.210.95.61";
$user = "atescemc_php";
$pass = "Cem!2468";
$database = "atescemc_php";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>