<?php

$var1 = 1;
$var2 = 20;

if ($var1 < $var2) {
    echo "$var1 é maior que $var2.\n";
}

switch ($var1) {
    case 10:
        echo "var1 é igual a 10";
        break;
    case 20:
        echo "var1 é igual a 20";
        break;
    default:
        echo "var1 não é igual a 10 e nem a 20\n";
        break;
}

$var2 = ($var1 >= 5) ? "8" : "445";

echo "$var2\n";
