<?php
$valor = $_POST['valor'];

echo $valor;
echo "<br>";
echo gettype($valor);
echo "<br>";
if(is_numeric($valor)){
    echo $valor*2;
}



?>