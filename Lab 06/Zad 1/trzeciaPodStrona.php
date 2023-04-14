<?php
session_start();

if(isset($_POST['submit'])) {
    $_SESSION['peopleData'] = $_POST;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadanie z sesjami</title>
</head>
<body>
<?php
echo "<h2>Dane Zamawiającego</h2>";
echo $_SESSION['NumberOfCard']."<br>";
echo $_SESSION['dataOfPurchaser']."<br>";
foreach ($_SESSION['peopleData'] as $personData) { ?>
    <h2>Dane osoby</h2>
    <p>Imię: <?php echo $personData['firstName']; ?></p>
    <p>Nazwisko: <?php echo $personData['lastName']; ?></p>
    <p>Wiek: <?php echo $personData['age']; ?></p>
<?php } ?>
</body>
</html>
<?php
unset($_SESSION);
session_destroy();
?>