<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formularz kontaktowy</title>
</head>
<body>

<?php
        $licznikPlik = "licznik.txt";
        $licznik = file_get_contents($licznikPlik);
        $licznik++;
        file_put_contents($licznikPlik, $licznik);
        echo "Liczba odwiedzeń strony: " . $licznik;
?>
</body>
</html>
