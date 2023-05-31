<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Informacje o samochodzie</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if (isset($_GET["page"])) {
        $page = $_GET["page"];
    } else {
        $page = "zad 1.php";
        echo "<a href=\"$page\"> Powrót do strony początkowej </a>";
    }
    if (isset($_GET["id"])) {
        try {
            $db_connection = mysqli_connect("localhost", "root", "", "mojaBaza", "3307");
        } catch (mysqli_sql_exception $e) {
            echo $e->getMessage();
            exit("<h2>Błąd połączenia z bazą!</h2>");
        }
        $id = $_GET["id"];
        $queryId = mysqli_query($db_connection, "SELECT id, marka, model, cena, rok, opis FROM samochody WHERE id = $id;");
        $record = mysqli_fetch_assoc($queryId);
        ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Marka</th>
                <th>Model</th>
                <th>Cena</th>
                <th>Rok</th>
                <th>Opis</th>
            </tr>
            <tr>
                <td><?php echo $record['id']; ?></td>
                <td><?php echo $record['marka']; ?></td>
                <td><?php echo $record['model']; ?></td>
                <td><?php echo $record['cena']; ?></td>
                <td><?php echo $record['rok']; ?></td>
                <td><?php echo $record['opis']; ?></td>
            </tr>
        </table>
        <?php
        mysqli_close($db_connection);
    }
}
?>
</body>
</html>
