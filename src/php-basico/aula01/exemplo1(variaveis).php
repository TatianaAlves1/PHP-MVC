<?php
//função Mostrar mensagem na página
echo "Olá, mundo!!!";
echo "<h3>Análise e Desenvolvimento de software</h3>";
//declaração de variáveis
$nome = "Tatiana Alves";
$disciplina = "Desenvolvimento Web II";
$ch = 60;
$mensalidade = 600.99;
$matricula = true;
//Concatenação de variáveis
echo "<h4> Concatenação em PHP </h4>";
echo "<br>Bem-vindo, ".$nome;
echo "<br>O nome da disciplina é $disciplina";
echo "<br>O valor pago é $mensalidade";
echo "<br>O status da sua matrícula é: $matricula";
echo "O(a) Aluno(a) $nome está matriculado(a) em $disciplina, cujo a mensalidade é R$ $mensalidade";
//verificação de tipos
echo "<h4> Verificação de tipos de dados em PHP </h4>";
echo gettype($nome)."<br>"; //string - cadeia de caracteres
echo gettype($ch)."<br>"; //int - números inteiros 
echo gettype($mensalidade)."<br>";//float - números com casas décimais
echo gettype($matricula)."<br>";//bool - dados booleanos (verdadeiro ou falso)

echo "<h4> Informações gerais sobre os dados em PHP </h4>";
echo var_dump($nome)."<br>"; 
echo var_dump($ch)."<br>"; 
echo var_dump($mensalidade)."<br>";
echo var_dump($matricula)."<br>";

?>