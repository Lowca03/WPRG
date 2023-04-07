<?php
echo "Z jakiego kraju jesteś: ";
$kraj=readline();
$narodowosc=array("Polska"=>"polskiej", "Wielka Brytania"=>"brytyjskiej", "Niemcy"=>"niemieckiej", "Francja"=>"francuskiej");
if (array_key_exists($kraj,$narodowosc)){
    echo $narodowosc[$kraj];
}
else echo "Nieznana";