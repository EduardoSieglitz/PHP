<?php
echo"10. Desenvolva um algoritmo que calcule o valor de an. Sendo que, a e n devem ser informados pelo usuário.<br>";
error_reporting(E_ERROR | E_PARSE);
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$soma = $n1 + $n2;
echo "Soma: " . $soma;
?>