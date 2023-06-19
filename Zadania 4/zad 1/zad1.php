<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formularz kontaktowy</title>
</head>
<body>
<h3>Podaj datę swojego urodzenia</h3>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">
    <label>
        <input type="date" name="data"><br>
    </label>
    <input type="submit" value="Prześlij">
</form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET"){
            if(isset($_GET["data"])) {
                $date = date('d/m/Y', strtotime($_GET["data"]));
                $dayOfWeek = date('N', strtotime($_GET["data"]));
                $daysOfWeek = array('Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota', 'Niedziela');
                echo 'Dzień tygodnia: '.$daysOfWeek[$dayOfWeek-1].'<br>'.'Wiek: ';
                if (date('m')-date('m', strtotime($_GET["data"]))<0)
                    echo date('Y')-date('Y', strtotime($_GET["data"])-1);
                elseif (date('m')-date('m', strtotime($_GET["data"]))>0){
                    echo date('Y')-date('Y', strtotime($_GET["data"]));
                }
                else{
                    if (date('d')-date('d', strtotime($_GET["data"]))<0){
                        echo date('Y')-date('Y', strtotime($_GET["data"])-1);
                    }
                    else {
                        echo date('Y')-date('Y', strtotime($_GET["data"]));
                    }
                }
                echo '<br>';
                if (date('z')-date('z', strtotime($_GET["data"]))==0){
                    echo "100 lat!!!";
                }
                else{
                    echo 'Urodziny masz za: ';
                    echo (date('z', strtotime($_GET["data"]))-date('z'))%365+365;
                    echo ' dni';
                }
            }

    }
?>
</body>
</html>