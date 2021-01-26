<?php

// abs : retourne la valeur absolue du nombre
echo abs(-23.1)."<br>";
echo (5)."<br>";

//ceil : arrondit au nombre supérieur
echo ceil(23.1)."<br>";
echo ceil(321.86)."<br>";

//floor : arrondit à l'entier inférieur
echo floor(42.3)."<br>";
echo floor(2.7)."<br>";

//is_nan : indique si une valeur n'est pas un nombre
$nan = acos(8);
var_dump($nan, is_nan($nan));
echo "<br>";

//max : la plus grande valeur
echo max(3, 78, 25, 12, 6);
echo "<br>";
echo max(array(2, 4, 8, 10));
echo "<br>";

//min : la plus petite valeur
echo min(3, 78, 25, 12, 6);
echo "<br>";
echo min(array(2, 4, 8, 10));

//round : arrondit un nombre à virgule flottante
var_dump(round(2.356));
echo "<br>";
var_dump(round(2.8));
echo "<br>";
var_dump(round(678, -3));