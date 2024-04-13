<?php
error_reporting(E_ERROR | E_PARSE);
echo"13. Escreva um algoritmo que leia um valor inicial A e uma razão R e imprima uma sequência em P.A. contendo 10 valores. 
<br>";
$valor = $_POST["valor"];
$razao = $_POST["razao"];
$valorT = $valor;
echo "Valor digitado: ".$valor."<br>";
echo "Razão digitado: ".$razao."<br><br>";
for ($i = 1; $i <= 10; $i++) {
    $valorT += $razao;
    echo $valorT."<br>";
}
?>