<?php

echo "<h2>Exemplo de constantes pré-definidas</h2>";

echo "<br><strong>Diretório do projeto: </strong>".__DIR__;
echo "<br><strong>Nome do arquivo: </strong>".__FILE__;
echo "<br><strong>Número da linha: </strong>".__LINE__;

echo "<br><strong>Server name: </strong>".$_SERVER['SERVER_NAME'];
echo "<br><strong>Server software: </strong>".$_SERVER['SERVER_SOFTWARE'];
echo "<br><strong>Server user agente: </strong>".$_SERVER['HTTP_USER_AGENT'];
echo "<br><br>";
echo "<h2>Super Global SERVER</h2>";
echo "<pre>";
echo print_r($_SERVER);
echo "</pre>";

echo phpinfo();