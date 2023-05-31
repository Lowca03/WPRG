<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadanie z bazami</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Marka</th>
            <th>Model</th>
            <th>Cena</th>
            <th>Rok</th>
        </tr>
        <?php
        try {
            $db_connection = mysqli_connect("localhost", "root", "", "mojaBaza", "3307");
        }catch (mysqli_sql_exception $e){
            echo $e -> getMessage();
            exit("<h2>Błąd połączenia z bazą!</h2>");
        }
        $queryId = mysqli_query($db_connection, "SELECT id, marka, model, cena, rok FROM samochody ORDER BY rok;");
        ?><form action="info.php">
                <input type="hidden" name="page" value="{$_SERVER['PHP_SELF']}"><?php
        while ($record = mysqli_fetch_assoc($queryId)){
            ?><tr>
                <td><input type="submit" name="id" value="<?php echo $record['id']?>"></td>
                <td><?php echo $record['marka']?></td>
                <td><?php echo $record['model']?></td>
                <td><?php echo $record['cena']?></td>
                <td><?php echo $record['rok']?></td>
            </tr>
        <?php
        }
        mysqli_close($db_connection);
        ?>
        </form>
    </table>
</body>
</html>
