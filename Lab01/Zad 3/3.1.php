<?php


function forowa($arr){
    $x=0;
    for($i=0; $i<100; $i++){
        if ($arr[$i]>$x) $x=$arr[$i];
    }
    return $x;
}

function whilowa($arr){
    $i=0;
    $x=0;
    while ($i<100){
        if ($arr[$i]>$x) $x=$arr[$i];
        $i++;
    }
    return $x;
}

function dowhilowa($arr){
    $i=0;
    $x=0;
    do{
        if ($arr[$i]>$x) $x=$arr[$i];
        $i++;
    }while($i<100);
    return $x;
}

function foreachowa($arr){
    $i=0;
    $x=0;
    foreach ($arr as $i => $value){
        if ($value>$x) $x=$value;
    }
    return $x;
}

$arr=array();
for ($i=0; $i<100; $i++){
    $arr[$i]=rand(1,100);
}
echo forowa($arr)."\n";
echo whilowa($arr)."\n";
echo dowhilowa($arr)."\n";
echo foreachowa($arr);