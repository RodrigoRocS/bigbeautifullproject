<?php

$i = 2;
while ($i <= 20) {
    echo $i;
    $i += 2;
    echo "\n";
}

/*Sintaxe alternativa*/
// $i = 2;
// while ($i <= 20):
//     echo $i;
//     $i += 2;
//     echo "\n";
// endwhile;

$f = 2;
do {
    echo "F$f";
    $f += 2;
    echo "\n";
} while ($f <= 20);

for ($a = 1; $a <= 20; $a++) {
    echo "A$a";
    echo "\n";
}

$carros = array("Fusca", "Monza", "Passat");

foreach ($carros as $carro) {
    echo $carro;
    echo "\n";
}

for ($i = 0; $i < count($carros); $i++) {
    echo $carros[$i];
    echo "\n";
}