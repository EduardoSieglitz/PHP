<?php
error_reporting(E_ERROR | E_PARSE);
echo"14. Um determinado material radioativo perde metade de sua massa a cada 50 segundos.
 Dada a massa inicial, em gramas, desenvolva um algoritmo que determine o tempo necessário
 para que a massa se torne menor que 0,5 gramas. O algoritmo deve mostrar a massa inicial,
 a final e o tempo calculado mostrado na forma de horas, minutos e segundos.";
$massaInicial = $_POST["massa"];
$massaFinal = $massaInicial;
while ($massaFinal >= 0.5) {
    $massaFinal *= 0.5;
    $tempoSeg += 50;
}
$tempoHr = floor($tempoSeg / 3600);
$tempoSeg %= 3600;
$tempoMin = floor($tempoSeg / 60);
$tempoSeg %= 60;
echo "Massa Inicial: ".$massaInicial." gramas<br>";
echo "Massa Final: ".$massaFinal." gramas<br>";
echo "Tempo Necessário: $tempoHr horas, $tempoMin minutos e $tempoSeg segundos";
?>