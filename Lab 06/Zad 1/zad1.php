<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadanie z sesjami</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <label>
        Nr karty: <br>
        <input type="text" name="numberOfCard"> <br>
        Dane zamawiającego: <br>
        <input type="text" name="dataOfPurchaser"> <br>
        Ilość osób <br>
        <input type="number" name="numberOfPeople" min="0">
    </label>
    <br>
    <input type="submit" value="send">
</form>
<?php
if (isset($_POST["numberOfCard"]) && isset($_POST["dataOfPurchaser"]) && isset($_POST["numberOfPeople"])){
    $_SESSION["NumberOfCard"] = $_POST["numberOfCard"];
    $_SESSION["dataOfPurchaser"] = $_POST["dataOfPurchaser"];
    $_SESSION["numberOfPeople"] = $_POST["numberOfPeople"];
    header('Location: drugaPodstrona.php');
    exit;
}
?>
</body>
</html>