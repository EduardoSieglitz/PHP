<?php
echo"9. Desenvolva um algoritmo que leia números e diga quantos são pares e quantos são ímpares. <br>";
error_reporting(E_ERROR | E_PARSE);
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$n3 = $_POST["n3"];
$quantImpar = 0;
$quantPar = 0;
if($n1 % 2 == 0){
    $quantPar++;
}
if($n2 % 2 == 0){
    $quantPar++;
}
if($n3 % 2 == 0){
    $quantPar++;
}
if($n1 % 2 != 0){
    $quantImpar++;
}
if($n2 % 2 != 0){
    $quantImpar++;
}
if($n3 % 2 != 0){
    $quantImpar++;
}
echo "Par: " . $quantPar. "<br>";
echo "impar: " . $quantImpar;
?>
    