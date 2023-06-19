<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formularz</title>
</head>
<body>
<?php if (isset($_COOKIE['s28855'])){
    header("Location: wyslano.php");
}?>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <label>
        Imię: <br>
        <input type="text" name="firstname" required> <br>
        Nazwisko: <br>
        <input type="text" name="lastname" required> <br>
        Email: <br>
        <input type="email" name="email" required><br>
        Odpowiedź konkursowa: <br>
        <textarea typeof="text" name="answer" maxlength="255" aria-live="off"></textarea>
    </label>
    <br>
    <input type="submit" value="Wyślij">
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['answer'])){
                $_SESSION['firstname']=$_POST['firstname'];
                $_SESSION['lastname']=$_POST['lastname'];
                $_SESSION['email']=$_POST['email'];
                $_SESSION['answer']=$_POST['answer'];
                header('Location: accept.php');
            }
        }
    ?>
</form>
</body>
</html>