<?php
echo"6. Desenvolva um algoritmo que mostre todos os números entre 1 e 200 que são múltiplos de 3.<br>";
for ($i = 1; $i <= 200; $i++) {
    if($i % 3 == 0){
        if($i == 198){
        echo $i . ". ";
        }else{
            echo $i . ", ";
        }
    }
}
?>
   