<?php
$quantPar = 0;
$quantImpar = 0;
echo"12. Desenvolver um algoritmo que dentro de um intervalo mostre:
A quantidade de valores pares.
A quantidade de valores ímpares;
Os múltiplos de 3;
<br>";
$Num1 = $_POST['num1'];
$Num2 = $_POST['num2'];
for ($i = $Num1; $i <= $Num2; $i++) {
    if($i % 2 == 0){
        $quantPar++;
    }else{
        $quantImpar++;
    }
    if ($i % 3 == 0) {
        echo $i."<br>";
    }
}
 echo "Par: " .$quantPar."<br>";
echo "Impar: " . $quantImpar;
?>