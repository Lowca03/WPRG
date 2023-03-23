<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formularz kontaktowy</title>
</head>
<body>
<h3>Zaloguj się</h3>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <label>
        Login:<input type="text" name="login" required><br>
        Hasło:<input type="password" name="pass" required>
    </label><br>
    <input type="submit" value="Prześlij">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Correct_login = "Wojtek";
    $Correct_password = "Si";
    if (($Correct_login == $_POST["login"]) && ($Correct_password == $_POST["pass"])) echo "Zalogowano pomyślnie";
    else echo "Błędny login lub hasło";
}
?>
</body>
</html>