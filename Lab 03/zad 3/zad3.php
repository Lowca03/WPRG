<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formularz kontaktowy</title>
</head>
<body>
    <h3>Obliczanie Daty Wielkanocy</h3>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <label>
            <input type="number" name="rok" required>
        </label><br>
        <input type="submit" value="Oblicz">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rok = $_POST["rok"];
        if ($rok>=1 && $rok<=1582){
            $x=15;
            $y=6;
        }
        elseif ($rok>=1583 && $rok<=1699){
            $x=22;
            $y=2;
        }
        elseif ($rok>=1700 && $rok<=1799){
            $x=23;
            $y=3;
        }
        elseif ($rok>=1800 && $rok<=1899){
            $x=23;
            $y=4;
        }
        elseif ($rok>=1900 && $rok<=2099){
            $x=24;
            $y=5;
        }
        elseif ($rok>=2100 && $rok<=2199){
            $x=24;
            $y=6;
        }
        else {
            exit("Nieprawidłowy rok ($rok)");
        }
        $a=$rok%19;
        $b=$rok%4;
        $c=$rok%7;
        $d=(19*$a+$x)%30;
        $f=(2*$b+4*$c+6*$d+$y)%7;
        if ($f==6 && $d==29) echo "Wielkanoc jest 26 kwietnia";
        elseif ($f==6 && $d==28 && ((11*$x+11)%30)<19) echo "Wielkanoc jest 18 kwietnia";
        elseif (($d+$f)<10) echo "Wielkanoc jest ".($d+$f+22)." marca";
        elseif (($d+$f)>9) echo "Wielkanoc jest ".($d+$f-9)." kwietnia";
    }
    ?>
</body>
</html>