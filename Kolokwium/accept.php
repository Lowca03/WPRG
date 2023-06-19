<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Akceptacja danych</title>
</head>
<body>
    <?php if (isset($_COOKIE['s28855'])){
    header("Location: wyslano.php");
    }?>
    <?php echo "Imię: {$_SESSION['firstname']}<br>
    Nazwisko: {$_SESSION['lastname']}<br>
    email: {$_SESSION['email']}<br>
    Odpowiedź Konnkursowa: {$_SESSION['answer']}"?>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <input type="submit" name="accept" value="Akceptuję">
        <input type="submit" name="no" value="Nie akceptuję">
    </form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if ($_POST['accept']){
        header("Location: back.php");
    }
    if ($_POST['no']){
        unset($_SESSION['firstname']);
        unset($_SESSION['lastname']);
        unset($_SESSION['email']);
        unset($_SESSION['answer']);
        header("Location: Formularz.php");
    }
}?>
</body>
</html>
