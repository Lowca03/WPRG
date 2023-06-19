<?php
function czy_pierwsza($liczba){
    $x=1;
    if ($liczba<2) return $liczba."nie jest liczbą pierwszą";
    for ($i=2; $i*$i<=$liczba; $i++) {
        $x++;
        if ($liczba % $i == 0) {
            return "Tyle było iteracji pętli " . $x . "\n" . $liczba . " nie jest liczbą pierwszą";
        }
    }
    return "Tyle było iteracji pętli " . $x . "\n" . $liczba . " jest liczbą pierwszą";
}
while (true) {
    $x = readline();
    echo czy_pierwsza($x);
    echo "\n";
}