<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Strona główna</title>
</head>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>Marka</th>
        <th>Model</th>
        <th>Cena</th>
        <th>Rok</th>
        <th>Opis</th>
    </tr>
    <?php
    try {
        $db_connection = mysqli_connect("localhost", "root", "", "mojaBaza", "3307");
    }catch (mysqli_sql_exception $e){
        echo $e -> getMessage();
        exit("<h2>Błąd połączenia z bazą!</h2>");
    }
    $queryId = mysqli_query($db_connection, "SELECT id, marka, model, cena, rok, opis FROM samochody ORDER BY cena LIMIT 5;");
    while ($record = mysqli_fetch_row($queryId)){
        ?><tr><?php
        foreach ($record AS $value){?>
            <td><?php
            echo $value;?>
            </td><?php
        }
        ?>
        </tr><?php
    }
        mysqli_close($db_connection);
    ?>
</table>
</body>
</html>