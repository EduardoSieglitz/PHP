<?php
error_reporting(E_ERROR | E_PARSE);
echo "15. Desenvolver um algoritmo que efetue a soma de todos os números ímpares que são múltiplos de três
 e que se encontram no conjunto dos números de a a n.";
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$soma = 0;
for ($i = $n1; $i <= $n2; $i++) {
    if ($i % 3 == 0) {
        if ($i % 2 != 0) {
            $soma += $i;
        }
    }
}
echo "<br>Soma: " . $soma;
?>