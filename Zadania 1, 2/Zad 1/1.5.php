<?php
function trojkat(): float|int
{   echo "Podstawa: ";
    $podstawa=readline();
    echo "Wysokość: ";
    $wysokosc=readline();
    return $podstawa*$wysokosc/2;
}

function prostokat(): float|int{
    echo "Podstawa: ";
    $podstawa=readline();
    echo "Wysokość: ";
    $wysokosc=readline();
    return $podstawa*$wysokosc;
}

function trapez(): float|int{
    echo "Podstawa 1: ";
    $podstawa1=readline();
    echo "Podstawa 2: ";
    $podstawa2=readline();
    echo "Wysokość: ";
    $wysokosc=readline();
    return ($podstawa1+$podstawa2)*$wysokosc/2;
}

echo "Którą figurę chcesz obliczyć? \n";
echo "1. Trójkąt \n";
echo "2. Prostokąt \n";
echo "3. Trapez \n";
$wybor = readline();

switch ($wybor){
    case 1: echo "Pole trójkąta wynosi: ".trojkat();
        break;
    case 2: echo "Pole prostokąta wynosi: ".prostokat();
        break;
    case 3: echo "Pole trapezu wynosi: ".trapez();
        break;
}

