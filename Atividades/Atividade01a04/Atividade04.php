<?php
echo"4. Desenvolva um algoritmo que mostre os 40 primeiros números pares.<br>";
    for ($i = 0; $i <= 78; $i++) {
        if($i % 2 == 0){
            if($i == 78){
            echo $i . ". ";
            }else{
                echo $i . ", ";
            }
        }
    }    
?>