<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formularz kontaktowy</title>
</head>
<body>
<h3>Podaj pesel</h3>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <label>
        <input type="number" name="pesel" required>
    </label><br>
    <input type="submit" value="Oblicz">
</form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        function pesel($c)
        {
            $dzien = $c[4] . $c[5];
            if ($c[2] == "2") {
                $miesiac = "0" . $c[3];
            } elseif ($c[2] == "3") {
                $miesiac = "1" . $c[3];
            } else {
                $miesiac = $c[2] . $c[3];
            }
            if ($c[2] == "2" || $c[2] == "3") {
                $rok = "20" . $c[0] . $c[1];
            } else {
                $rok = "19" . $c[0] . $c[1];
            }
            echo $dzien . "/" . $miesiac . "/" . $rok . "\n";
            if ($c[9]%2==0) echo "Jesteś kobietą";
            else echo "Jesteś mężczyzną";
        }

        pesel($_POST["pesel"]);
    }
?>
</body>
</html>