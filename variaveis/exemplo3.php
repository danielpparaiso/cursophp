<?php

$nome = "Hcode";
$site = 'www.udemy.com.br';

$ano = 1990;
$salario = 5500.99;
$bloqueado = false;

//array

$frutas = array("abacaxi","laranja","manga");

echo $frutas[2]."<br/>";
echo "<br/>";

//

//objeto
$nascimento = new DateTime();

//var_dump($nascimento);


//variaveis especiais

$arquivo = fopen("exemplo2.php", "r");

//var_dump($arquivo);

$nulo = NULL;

var_dump($nulo);

?>