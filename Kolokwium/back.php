<?php
session_start();
if (isset($_COOKIE['s28855'])){
    header("Location: wyslano.php");
}
echo "Wysłano, które zobaczy tylko bystre oko ;)";
$time = time();
$cookie=setcookie("s28855", "$time", time()+604800);
try {
    $db_connection = mysqli_connect("localhost", "root", "", "konkurs", "3307");
}catch (mysqli_sql_exception $e){
    echo $e -> getMessage();
    exit("<h2>Błąd połączenia z bazą!</h2>");
}
$imie = $_SESSION['firstname'];
$nazwisko = $_SESSION['lastname'];
$adres_email = $_SESSION['email'];
$odpowiedz = $_SESSION['answer'];

$query = "INSERT INTO zgloszenia (imie, nazwisko, adres_email, odpowiedz) VALUES ('$imie', '$nazwisko', '$adres_email', '$odpowiedz')";
$queryId = mysqli_query($db_connection, $query);
if (!$queryId) {
    echo "Dodawanie nie powiodło się";
}
unset($_SESSION['firstname']);
unset($_SESSION['lastname']);
unset($_SESSION['email']);
unset($_SESSION['answer']);
session_destroy();
mysqli_close($db_connection);
header('Location: wyslano.php');