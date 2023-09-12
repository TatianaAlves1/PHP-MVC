<?php
$n1 = 15;
$n2 = 7;

echo "<h2>Trabalhando com operadores aritméticos</h2>";
$soma = $n1 + $n2;
$sub  = $n1 - $n2;
$mult = $n1 * $n2;
$div  = $n1 / $n2;
$exp  = $n1**3; 
$raiz = sqrt($n1);

echo "<h4>O soma de $n1 com $n2 é $soma</h4>";
echo "<h4>A subtração de $n1 com $n2 é $sub</h4>";
echo "<h4>A multiplicação de $n1 com $n2 é $mult</h4>";
echo "<h4>A divisão de $n1 com $n2 é $div </h4>";
echo "<h4>A divisão de $n1 com $n2 com arredondamento é ".round($div,2)."</h4>";
echo "<h4>A divisão de $n1 com $n2 com arredondamento(cima) é ".ceil($div)."</h4>";
echo "<h4>A divisão de $n1 com $n2 com arredondamento(baixo) é ".floor($div)."</h4>";
echo "<h4>A exponenciação de  $n1 por 3 é $exp</h4>";
echo "<h4>A raiz de $n1 é $raiz</h4>";





