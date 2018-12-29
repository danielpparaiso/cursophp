<?php 

/*Variaveis com nome e nascimento*/
$anoNascimento = 1989;

$nomeCompleto = "Daniel Perez";

$nome1 = "João";

//Impressão das variaveis
echo $nomeCompleto." "." ".$anoNascimento;

echo "<br/>";

//unset usado para apagar uma variavel
unset($nome1, $nomeCompleto);

if (isset/*usado para testar uma variavel iniciada*/($nome1, $nomeCompleto)) {
	echo $nome1;
	echo $nomeCompleto;
}



 ?>