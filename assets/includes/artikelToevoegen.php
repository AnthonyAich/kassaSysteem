<?php
if (isset($_POST['submit'])) {

    require 'dbh.inc.php';

    $naam = $_POST['naam'];
    $prijs = $_POST['prijs'];
    $soort = $_POST['soort'];
    $opties = $_POST['opties'];

    $sql = "SELECT * FROM artikels;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo 'Sql statement mislukt 1 (connectie met tabel in databank mislukt)';
    } else {
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $rowCount = mysqli_num_rows($result);

        $sql = "INSERT INTO artikels (naam, prijs, opties, soort) VALUES (?, ?, ?,?);";

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo 'Sql statement mislukt 2 (vinden van rijen in de tabel mislukt)';
        } else {
            mysqli_stmt_bind_param($stmt, "ssss", $naam, $prijs, $opties, $soort);
            mysqli_stmt_execute($stmt);

            header("Location: ../../admin/admin.html");
        }
    }
} else {
    header("Location: ../index.html");
}