<?php
function pesel($c){
    $dzien=$c[4].$c[5];
    if ($c[2]=="2"){
        $miesiac="0".$c[3];
    }
    elseif ($c[2]=="3"){
        $miesiac="1".$c[3];
    }
    else{
        $miesiac=$c[2].$c[3];
    }
    if ($c[2]=="2" || $c[2]=="3"){
        $rok="20".$c[0].$c[1];
    }
    else{
        $rok="19".$c[0].$c[1];
    }
    echo $date=$dzien."/".$miesiac."/".$rok."\n";
}
$a="03271038473";
pesel($a);
$b="03021038473";
pesel($b);
