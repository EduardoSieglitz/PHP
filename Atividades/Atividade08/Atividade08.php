<?php
echo"8. Desenvolva um algoritmo que leia 3 notas e mostre a maior e a média das notas.<br>";
error_reporting(E_ERROR | E_PARSE);
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$n3 = $_POST["n3"];
if ($n1 > $n2 && $n1 > $n3) {
    echo "A primeira nota foi a maior, $n1.";
} elseif ($n2 > $n3) {
    echo "A segunda nota foi a maior, $n2.";
}else {
    echo "A terceira nota foi a maior, $n3.";
}
$soma =  $n1 + $n2 + $n3;
echo "<br>Soma: $soma";

?>