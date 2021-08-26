<link rel="shortcut icon" href="images/LogoFavicon.png" type="image/png" />
<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "Elioth02";
$dBName = "4adtestdatabase";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
}