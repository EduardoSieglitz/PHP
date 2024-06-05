<?php
echo"1. Desenvolva um algoritmo que mostre os números pares entre 0 e 200 em ordem decrescente.<br>";
    for ($i = 200; $i >= 0; $i--) {
        if($i % 2 == 0){
            if($i == 0){
            echo $i . ". ";
            }else{
                echo $i . ", ";
            }
        }
    }
?>