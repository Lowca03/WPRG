<!DOCTYPE html>
<html lang="en">
<head>
    <title>Moja Strona - Moje Samochody</title>
</head>
<body>
<?php
// Includowanie pliku z definicją klas
require_once 'DatabaseConnection.php';
require_once 'UserManager.php';
require_once 'CarManager.php';
require_once 'SessionManager.php';
require_once 'User.php';
require_once 'Car.php';

// Inicjalizacja połączenia z bazą danych
$dbConnection = new DatabaseConnection("localhost", "root", "", "mojaBaza", "3307");

// Inicjalizacja obiektów zarządzających
$userManager = new UserManager($dbConnection);
$carManager = new CarManager($dbConnection);
$sessionManager = new SessionManager();

// Rozpoczęcie sesji
$sessionManager->startSession();

// Pobranie zalogowanego użytkownika z sesji
$loggedInUser = $sessionManager->getLoggedInUser();

if ($loggedInUser) {
    echo "<h1>Moje Samochody</h1>";

    // Pobieranie samochodów z bazy danych dla zalogowanego użytkownika
    $userId = $loggedInUser->getId();
    $query = "SELECT * FROM samochody WHERE id_uzytkownik = $userId";
    $result = mysqli_query($dbConnection->getConnection(), $query);

    // Wyświetlanie samochodów
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<p>Marka: " . $row['marka'] . "</p>";
        echo "<p>Model: " . $row['model'] . "</p>";
        // Wyświetlanie innych informacji o samochodzie
        echo "<hr>";
    }
} else {
    echo "<p>Nie jesteś zalogowany.</p>";
}

// Zakończenie sesji
$sessionManager->destroySession();

// Zamknięcie połączenia z bazą danych
$dbConnection->closeConnection();
?>
</body>
</html>
