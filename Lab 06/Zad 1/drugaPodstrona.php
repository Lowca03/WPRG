<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadanie z sesjami</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
<?php for ($i = 1; $i <= $_SESSION["numberOfPeople"]; $i++) { ?>
    <h2>Dane osoby <?php echo $i ?></h2>
        <label>
            Imię: <br>
            <input type="text" name="firstName[]"> <br>
            Nazwisko: <br>
            <input type="text" name="lastName[]"> <br>
            Wiek: <br>
            <input type="number" name="age[]" min="0"> <br>
        </label>
        <br>
        <?php } ?>
        <input type="submit" value="Zapisz dane">
    </form>

<?php
if (isset($_POST["firstName"]) && isset($_POST["lastName"]) && isset($_POST["age"])) {
    $peopleData = array();
    for ($i = 0; $i < count($_POST["firstName"]); $i++) {
        $personData = array(
        "firstName" => $_POST["firstName"][$i],
        "lastName" => $_POST["lastName"][$i],
        "age" => $_POST["age"][$i],
        );
        $peopleData[] = $personData;
    }
    $_SESSION["peopleData"] = $peopleData;
    header("Location: trzeciaPodstrona.php");
    exit;
}
?>
</body>
</html>
