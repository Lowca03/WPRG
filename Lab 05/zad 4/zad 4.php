<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formularz kontaktowy</title>
</head>
<body>
<?php
$arr = file("adresy_ip.txt");
$needle = $_SERVER['REMOTE_ADDR'];
    if (in_array($needle, $arr)) {
        require("1.php");
    }
    else {
        require("2.php");
    }

?>
</body>
</html>
