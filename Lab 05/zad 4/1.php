<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formularz kontaktowy</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
    <label>
        Wybierz plik do odwrócenia:
        <input type="file" name="file">
    </label>
    <br>
    <input type="submit" value="send">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["file"])) {
        $file = $_FILES["file"]["tmp_name"];
        $reversedLines = array_reverse(file($file));
        $output = implode("<br>", $reversedLines);
        file_put_contents($file, $output);
        echo $output."<br>"."Plik został odwrócony.";
    }
}
?>
</body>
</html>

