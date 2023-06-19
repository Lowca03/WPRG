<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formularz kontaktowy</title>
</head>
<body>
<?php
$file = "adresy.txt";
echo "<ul>";
$contents = file($file, FILE_IGNORE_NEW_LINES);
foreach ($contents as $content){
    $a = stripos($content, ";");
    $address = substr($content, 0, $a);
    $desription = substr($content, $a +1 );
    echo "<li>Link do $desription: $address</li>";
}
echo "<ul>";
?>

</body>
</html>