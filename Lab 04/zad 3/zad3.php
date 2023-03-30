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
        Path<input type="text" name="path"><br>
        Name Of Directory<input type="text" name="nameOfDirectory"><br>
        <select name="operation">
            <option value="create">create</option>
            <option value="delete">delete</option>
            <option value="read">read</option>
        </select><br>
    </label>
    <input type="submit" value="Send">
</form>
<?php
function goToDirectory($path, $nameOfDirectory, $operation){
    $id=opendir($path);
    if ($operation=="create"){
        if (!is_dir($nameOfDirectory)) {
            mkdir($nameOfDirectory);
            echo "Katalog został stworzony";
        }
        else echo "Istnieje już taki katalog";
    }
    elseif ($operation=="delete"){
        if (is_dir($nameOfDirectory)) {
            rmdir($nameOfDirectory);
            echo "Katalog został usunięty";
        }
        else echo "Nie istnieje taki katalog";
    }
    elseif ($operation=="read"){
        if(!$id){
            echo "Nie mogę otworzyć katalogu/Katalog nie istnieje";
        }
        else{
            echo "Zawartość katalogu:<br>";
            while (($file = readdir($id))!= false){
                echo "$file<br>\n";
            }
        }
        closedir($id);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if(isset($_GET["path"]) && isset($_GET["nameOfDirectory"])) {
        $path=$_GET["path"];
        if (($path . (ob_get_length() - 1)) == "/")
        goToDirectory($_GET["path"], $_GET["nameOfDirectory"], $_GET["operation"]);
        else echo "postaw '/' na końcu ścieżki do pliku";
    }

}

?>
</body>
</html>
