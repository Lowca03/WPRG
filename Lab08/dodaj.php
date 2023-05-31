<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadanie z bazami</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">
        <label>
            Marka: <br>
            <input type="text" name="marka" required> <br>
            Model: <br>
            <input type="text" name="model" required><br>
            Cena: <br>
            <input type="number" name="cena" min="0" required><br>
            Rok Produkcji: <br>
            <input type="number" name="rok" min="1900" required><br>
            Opis: <br>
            <input type="text" name="opis" required minlength="40"><br>
            <br>
        </label>
        <input type="submit" value="Dodaj Ogłoszenie">
    </form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET"){
        try {
            $db_connection = mysqli_connect("localhost", "root", "", "mojaBaza", "3307");
        } catch (mysqli_sql_exception $e) {
            echo $e->getMessage();
            exit("<h2>Błąd połączenia z bazą!</h2>");
        }
        $values = $_GET;
        $query = "INSERT INTO samochody (marka, model, cena, rok, opis) VALUES 
            ('{$values['marka']}', '{$values['model']}', '{$values['cena']}', '{$values['rok']}', '{$values['opis']}')";
        $queryId = mysqli_query($db_connection, $query);
        if (!$queryId){
            echo "Dodawanie nie powiodło się";
        }
        else {
            echo "Dodano";
        }
        mysqli_close($db_connection);
    }
?>
</body>
</html>