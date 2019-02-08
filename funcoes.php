<?php
//criando funcoes
function somar($a,$b){

	 $resultado = $a + $b;

	return $resultado;
}

function media($nota ){


	$nota *= somar(10,001);

 	if($nota > 5){
 		$nota = "aprovado";
 	}elseif($nota === 5){
 		$nota = "é exatamente a $nota";
 	}elseif($nota == 5){
 		$nota = "é somente $nota";
 	}else{
 		$nota = "nenhuma das anteriores";
 	}

 	return $nota;

 }

function definirPrimo($numero){
	$contador = 0;

	for ($i=1; $i <= $numero ; $i++) { 
		
		if($numero % $i == 0){
			$contador ++;
		}

	}

	if ($contador <= 2 && $contador > 0){
		return "<br>".$numero;

	}
	return "";



}

function numerosPrimos($inicial,$final){

	//Verifica números primos

	for($i = $inicial; $i <= $final ; $i++){ 

		echo definirPrimo($i);
	}

}


function defineX($linha,$coluna){
	if(($linha == $coluna)||(10-$linha==$coluna)){
	echo 'X';
	}else{
		echo 0;
	}

}

?>