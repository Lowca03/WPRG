<?php
include ('Ubezpieczenie.php');

    $g=new NoweAuto();
    $g->setModel("hhdf");
    $g->setCenaEUR(4645);
   echo $g->obliczCene()." ";
    $auto = new AutoZDodatkami();
    $auto->setModel("auto");
    $auto->setCenaEUR(4000);
    $auto->setAlarm(140);
    $auto->setKlimatyzacja(250);
    $auto->setRadio(100);
    echo $auto->obliczCene()." ";
    $ubezpieczenie = new Ubezpieczenie();
    $ubezpieczenie->setModel("auto");
    $ubezpieczenie->setCenaEUR(4000);
    $ubezpieczenie->setProcentowaWartoscUbezpieczenia(20);
    $ubezpieczenie->setLataPosiadaniaAuta(3);
    $ubezpieczenie->setAlarm(140);
    $ubezpieczenie->setKlimatyzacja(250);
    $ubezpieczenie->setRadio(100);
    echo $ubezpieczenie->obliczCene();


