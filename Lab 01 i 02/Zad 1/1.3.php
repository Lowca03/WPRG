<?php
function cenzura($zdanie): array|string
{
    $brzydkieSlowa=array("Motyla noga", "cholipka", "do jasnej anieli", "niech to dunder świśnie");
    foreach ($brzydkieSlowa as $slowo){
        $gwiazdki=str_repeat("*", strlen($slowo));
        $zdanie=str_ireplace($slowo, $gwiazdki, $zdanie);
    }
    return $zdanie;
}
$zdanie="To jest zdanie z brzydkimi słowami: Motyla noga, cholipka";
echo cenzura($zdanie);