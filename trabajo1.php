<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Document</title>
</head>

<body>

<?php
 $saludo = "Hola Mundo";
echo "<h1> $saludo </h1>"; 
?>

<h2>Operaciones</h2> <br>

<?php
$num1 = 54;
$num2 = 25;
$resultado1 = $num1 + $num2;
$resultado2 = $num1 - $num2;
$resultado3 = $num1 * $num2;
$resultado4 = $num1 / $num2;
$resultado5 = $num1 % $num2;

echo "<h1>$num1 + $num2 = $resultado1</h1>";
echo "<h1>$num1 - $num2 = $resultado2</h1>";
echo "<h1>$num1 * $num2 = $resultado3</h1>";
echo "<h1>$num1 / $num2 = $resultado4</h1>";
echo "<h1>$num1 % $num2 = $resultado5</h1>";
?>

<br><h2>Celsius a Fahrenheit</h2><br>

<?php
$C = 20;
$dato1 = 1.8;
$dato2 = 32;
$F = $C * $dato1 + $dato2;

echo "<h1> Fahrenheit = $F °</h1>";
?>

<br><h2>Perímetro y Área</h2><br>
<h3>Rectángulo</h3>

<?php
$base = 18;
$altura = 12;
$perimetro = $base * 2 + $altura * 2;
$area = $base * $altura;

echo "<h1> Perímetro = $perimetro cm</h1>";
echo "<h1> Área = $area cm²</h1>";
?>

<br><h3>Círculo</h3>

<?php
$radio = 30;
$diametro = $radio * 2;
$Pi = 3.141592;
$perimetro = 2 * $Pi * $radio;
$area = $Pi * $radio * $radio;

echo "<h1> Perímetro = $perimetro cm</h1>";
echo "<h1> Área = $area cm²</h1>";
?>

</body>
</html>