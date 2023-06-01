<!DOCTYPE html>
<html>
<head>
    <title>Moja Strona - Dodaj Samochód</title>
</head>
<body>
<form action="add_car.php" method="POST">
    <label for="marka">Marka:</label>
    <input type="text" id="marka" name="marka" required><br>
    <label for="model">Model:</label>
    <input type="text" id="model" name="model" required><br>
    <label for="cena">Cena:</label>
    <input type="number" id="cena" name="cena" required><br>
    <label for="rok">Rok:</label>
    <input type="number" id="rok" name="rok" required><br>
    <label for="opis">Opis:</label>
    <textarea id="opis" name="opis" required></textarea><br>
    <input type="submit" value="Dodaj">
</form>
</body>
</html>
