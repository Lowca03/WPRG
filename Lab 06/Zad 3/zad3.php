<?php
if (isset($_COOKIE['visits'])) {
    $visits = $_COOKIE['visits'];
} else {
    $visits = 1;
    setcookie('visits', $visits, time()+24*60*60);
}
echo $visits;