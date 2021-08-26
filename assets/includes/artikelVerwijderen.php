<?php
if (isset($_POST['submit'])) {

    require 'dbh.inc.php';

    $id = $_POST['id'];
    $naam = $_POST['naam'];

    $sql = "DELETE FROM artikels WHERE artikelId='$id';";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo 'Sql statement mislukt 1 (connectie met tabel in databank mislukt)';
    } else {
        mysqli_stmt_execute($stmt);
        header("Location: ../../admin/verwijderen.html?alert=verwijderd&naam=$naam");
    }
} else {
    header("Location: ../index.html");
}