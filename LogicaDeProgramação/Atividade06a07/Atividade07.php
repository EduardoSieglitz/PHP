<?php
echo"7. Desenvolva um algoritmo que mostre todos os números entre 1 e 200 que são múltiplos de 3 ou de 5.<br>";
    for ($i = 1; $i <= 200; $i++) {
        if ($i % 3 == 0 || $i % 5 == 0) {
                if($i == 200){
                echo $i . ". ";
                }else{
                    echo $i . ", ";
                }
        }
    }
?>
    