<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formularz kontaktowy</title>
</head>
<body>
    <?php
    function checkVar()
    {
        return isset($_POST['liczba1']) && isset($_POST['liczba2']);
    }
    function checkNumeric()
    {
        return is_numeric($_POST['liczba1']) && is_numeric($_POST['liczba2']);
    }
    $liczba1 = '';
    $liczba2 = '';
    if (checkVar())
    {
        $liczba1 = $_POST['liczba1'];
        $liczba2 = $_POST['liczba2'];
    }
?>


<h1>Kalkulator</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <h4>Prosty</h4>

        <label>
            <INPUT name="liczba1" value="<?php echo $liczba1?>">
            <select name='operacja' required>
                <option name='dodawanie' value="+">Dodawanie</option>
                <option name='odejmowanie' value="-">Odejmowanie</option>
                <option name="mnozenie" value="x">Mnożenie</option>
                <option name="dzielenie" value="/">Dzielenie</option>

            </select>
            <INPUT name="liczba2" value="<?php echo $liczba2?>">
        </label><br>
        <input type="submit" value="Oblicz">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if (checkVar()) {
                if (checkNumeric()) {
                    if ($_POST['operacja'] == '+') {
                        echo "{$_POST['liczba1']} + {$_POST['liczba2']} = ";
                        echo $_POST['liczba1'] + $_POST['liczba2'];
                    } elseif ($_POST['operacja'] == '-') {
                        echo "{$_POST['liczba1']} - {$_POST['liczba2']} = ";
                        echo $_POST['liczba1'] - $_POST['liczba2'];
                    } elseif ($_POST["operacja"] == "x") {
                        echo "{$_POST['liczba1']} * {$_POST['liczba2']} = ";
                        echo $_POST['liczba1'] * $_POST['liczba2'];
                    } elseif ($_POST["operacja"] == "/") {
                        if ($liczba2 == 0) {
                            echo "Nie można dzielić przez 0";
                        } else {
                            echo "{$_POST['liczba1']} / {$_POST['liczba2']} = ";
                            echo $_POST['liczba1'] / $_POST['liczba2'];
                        }
                    }
                    else echo "Nie działa";
                }
            }
        }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <h4>Zaawansowany</h4>
        <label>
            <input name="liczba1" >
            <select name='operacja2' required>
                <option value="cos">cos</option>
                <option value="sin">sin</option>
                <option value="tan">tan</option>
                <option value="binToDec">Binarne na dziesiętne</option>
                <option value="decToBin">Dziesiętne na binarne</option>
                <option value="decToHex">Dziesiętne na szesnastkowe</option>
                <option value="hexToDec">Szesnastkowe na dziesiętne</option>
                <option value="angleToRad">Stopnie na radiany</option>
                <option value="radToAngle">Radiany na stopnie</option>
            </select>
        </label><br>
        <input type="submit" value="Oblicz">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $liczba1 = $_POST['liczba1'];
        $operacja2 = $_POST['operacja2'];

        if ($operacja2 == 'cos') {
            echo cos($liczba1);
        } elseif ($operacja2 == 'sin') {
            echo sin($liczba1);
        } elseif ($operacja2 == "tan") {
            echo tan($liczba1);
        } elseif ($operacja2 == "binToDec") {
            echo bindec($liczba1);
        } elseif ($operacja2 == "decToBin") {
            echo decbin($liczba1);
        } elseif ($operacja2 == "decToHex") {
            echo dechex($liczba1);
        } elseif ($operacja2 == "hexToDec") {
            echo hexdec($liczba1);
        } elseif ($operacja2 == "angleToRad") {
            echo deg2rad($liczba1);
        } elseif ($operacja2 == "radToAngle") {
            echo rad2deg($liczba1);
        }
    }
    ?>

</body>
</html>