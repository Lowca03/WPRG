<?php

function petlami($x){
    $time1 = microtime(true);
    $wynik=1;
    for ($i=1; $i<=$x; $i++){
        $wynik*=$i;
    }
    $time2 = microtime(true);
    return $time2-$time1;
//    return $wynik;
}

function rekurencyjnie($x){

    $time1 = microtime(true);
    $wynik=1;
    if($x>0) {
        $wynik *= $x * rekurencyjnie($x - 1);

    }
    $time2 = microtime(true);
    return $time2-$time1;
//    return $wynik;
}

$liczba = readline();
//echo petlami($liczba) . "\n";
//echo rekurencyjnie($liczba)."\n";
if (petlami($liczba) < rekurencyjnie($liczba)) {
    echo "Rekurencyjnie jest wolniej \nRóznica wynosi: ";
    echo rekurencyjnie($liczba) - petlami($liczba);
}
else{
    echo "Rekurencyjnie jest szybciej \nRóznica wynosi: ";
    echo petlami($liczba) - rekurencyjnie($liczba);
}