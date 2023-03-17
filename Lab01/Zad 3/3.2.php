<?php
function rzutykostka($iloscRzutow)
{   $arr=array();
    for ($i = 0; $i < $iloscRzutow; $i++) {
        $arr[$i] = rand(1, 6);
        echo "Wynik rzutu kostką " . $i+1 . " wynosi $arr[$i] \n";
    }
}

rzutykostka(5);