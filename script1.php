
<?php
$numeros = array
(1,2,14, 98, 45, 556);
$n = count ($numeros);
$maior = $numeros[0];


for($i=0; $i<10; $i++){
    if ($numeros [$i]> $maior)
 {$maior=$numeros[$i];}}

 echo "O maior elemento é:", $maior;
?>