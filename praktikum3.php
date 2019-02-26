<?php
    function luas_segitiga($a, $b){
        return $a * $b * 1/2;
    } 
    function keliling_segitiga($nilaiA, $nilaiB, $nilaiC){
        return $nilaiA + $nilaiB + $nilaiC;
    }
    $a = 10;
    $b = 20;
    $nilaiA = 15;
    $nilaiB = 15;
    $nilaiC = 15;
    echo "Luas segitiga = ";
    echo luas_segitiga  ($a , $b);
    echo "<br>";
    echo "Keliling segitiga = ";
    echo keliling_segitiga ($nilaiA, $nilaiB, $nilaiC);
?>