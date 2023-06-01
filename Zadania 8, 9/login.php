<!DOCTYPE html>
<html lang="en">
<head>
    <title>Moja Strona - Logowanie</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <label for="username">Nazwa użytkownika:</label>
    <input type="text" id="username" name="username"><br>
    <label for="password">Hasło:</label>
    <input type="password" id="password" name="password"><br>
    <input type="submit" value="Zaloguj">
</form>
<?php
require_once 'DatabaseConnection.php';
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $_SESSION["connection"] = new DatabaseConnection("localhost", "root", "", "mojaBaza", "3307");
        if (isset($_POST["username"]) && isset($_POST["password"])) {
            $_SESSION["username"] = $_POST["username"];
            if ($_POST["username"] == "admin" && $_POST["password"] == "admin") {
                header('Location: all_cars.php');
                exit;
            } else {
                $id = "SELECT id FROM uzytkownicy WHERE login = {$_POST["username"]} AND {$_POST["password"]}";
                $user = new User($id, $_POST["username"], $_POST["password"], "user");
                header('Location: my_cars.php');
                exit();
            }
        }else{
            $guest = new User(1, "", "", "user");
            header('Location: all_cars.php');
            exit();
        }
    }
    ?>
</body>
</html>
