<?php 

$nome = "Glaucio";

//funcao

function teste(){

	//puxa variavel de escopo global
	global $nome;
	echo $nome;

}

teste();

?>