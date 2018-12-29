<?php



$nome = $_GET["a"];

var_dump($nome);

echo "<br/>";

//usando cast para mudar o tipo de dado
$numero = (int)$_GET["b"];

var_dump($numero);

echo "<br/>";

$numero2 = $numero + 1111;

echo $numero2;
echo "<br/>";

//////////////
//array super globais

$ip = $_SERVER["REMOTE_ADDR"];

echo $ip;

echo "<br/>";

$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;

?>