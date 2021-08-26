<?php
include_once 'dbh.inc.php';
//sql code om alles uit de databank te halen. Alles wordt uit tabel evenementen gehaald.
$sql = "SELECT * FROM artikels";

$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo 'sql statement failed';
} else {
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    //lus beginnen
    echo '        <table class="table">

            <tr>
                <th scope="col">naam</th>
                <th scope="col">prijs</th>
            </tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td>' . $row["naam"] . ' </td><td> €' . $row["prijs"] . '</td><td><form action="../assets/includes/artikelVerwijderen.php" method="post"> <input type="hidden" name="id" value=' . $row["artikelId"] . '> <input type="hidden" name="naam" value=' . $row["naam"] . '> <button type="submit" name="submit" class="btn rood">verwijderen</button> </form></td></tr>';
    } // ← einde lus
    echo "</table>";
}