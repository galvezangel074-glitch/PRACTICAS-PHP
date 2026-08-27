<?php

// SUMA
$num1 = 4;
$num2 = 7;
$suma = $num1 + $num2;
echo "La suma de $num1 y $num2 es: $suma <br><br>";


// RESTA
$num1 = 10;
$num2 = 3;
$resta = $num1 - $num2;
echo "La resta de $num1 y $num2 es: $resta <br><br>";


// MULTIPLICACIÓN
$num1 = 5;
$num2 = 6;
$multiplicacion = $num1 * $num2;
echo "La multiplicación de $num1 y $num2 es: $multiplicacion <br><br>";


// DIVISIÓN
$num1 = 20;
$num2 = 4;
$division = $num1 / $num2;
echo "La división de $num1 y $num2 es: $division <br><br>";


// POTENCIACIÓN
$base = 2;
$exponente = 3;
$potencia = $base ** $exponente;
echo "La potencia de $base elevado a $exponente es: $potencia <br><br>";


// MÓDULO
$num1 = 15;
$num2 = 4;
$modulo = $num1 % $num2;
echo "El módulo de $num1 y $num2 es: $modulo <br><br>";


// REDONDEO: round(), ceil(), floor()
$numero = 4.6;
$redondeado = round($numero);
$redondeado_arriba = ceil($numero);
$redondeado_abajo = floor($numero);

echo "El número redondeado es: $redondeado <br>";
echo "El número redondeado hacia arriba es: $redondeado_arriba <br>";
echo "El número redondeado hacia abajo es: $redondeado_abajo <br><br>";


// EJEMPLO DE MÓDULO CON NÚMEROS NEGATIVOS
echo (5 % 3) . "<br>";   // muestra 2
echo (5 % -3) . "<br>";  // muestra 2
echo (-5 % 3) . "<br>";  // muestra -2
echo (-5 % -3) . "<br><br>"; // muestra -2


// VALOR ABSOLUTO: abs()
$numero = -7;
$valor_absoluto = abs($numero);
echo "El valor absoluto de $numero es: $valor_absoluto <br>";

?>