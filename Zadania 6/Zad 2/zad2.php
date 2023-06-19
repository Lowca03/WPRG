<?php
if(isset($_COOKIE['visits'])){
    $visits = $_COOKIE['visits'];
} else {
    $visits = 0;
}
$visits++;
setcookie('visits', $visits, time()+24*60*60);
echo "Liczba wizyt: ".$visits;