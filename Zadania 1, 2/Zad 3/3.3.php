<?php
function wyswietl_tabliczke_mnozenia($bok) {
    for ($i=1; $i<=$bok; $i++) {
        for ($j=1; $j<=$bok; $j++) {
            echo ($i * $j) . "\t";
        }
        echo "\n";
    }
}

// Przykładowe wywołanie funkcji
wyswietl_tabliczke_mnozenia(9);
