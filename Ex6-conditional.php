<?php
$note1=12;
$note2=14;
$note3=15;
$moy=($note1+$note2+$note3)/3;
if($moy<10)
    echo "refusé";
elseif($moy>=14)
    echo "admis avec mention bien";
elseif($moy>=12)
    echo "admis avec mention assez bien";
elseif($moy<12)
    echo "admis avec mention passable";
?>