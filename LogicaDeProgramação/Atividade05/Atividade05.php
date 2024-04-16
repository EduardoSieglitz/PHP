<?php
echo"5. Desenvolva um algoritmo que mostre todos os números no intervalo entre n e m.<br>";
$Num1 = $_POST['num1'];
$Num2 = $_POST['num2'];
if($Num1 < $Num2){
    for ($i = $Num1; $i <= $Num2; $i++) {
        echo $i . "<br>";
    }
}elseif($Num2 < $Num1){
    for ($i = $Num2; $i <= $Num1; $i++) {
        echo $i . "<br>";
    }
}else{
    echo "Foi digitado numeros iguais.";
}
?>