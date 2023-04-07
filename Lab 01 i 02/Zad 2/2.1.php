<?php
function getValueOfIndex($index){
    $arr=array();

    for ($i=0; $i<100; $i++){
        $arr[$i]=rand(1,100);
    }
    return $arr[$index];
}
$index=readline();
echo getValueOfIndex($index);