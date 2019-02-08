<?php
header('Content-type: text/html; charset=utf-8');
ini_set("display_errors",1);

include 'funcoes.php';

$valorDoFormulario = @$_POST['media'];

//numerosPrimos(0,50);

?>

<!DOCTYPE html>
<html>
<head>
	<title>pagina inicial</title>
	<meta />
</head>
<body>

<form action="index.php" method="post">
	
<input type="text" value="" name="media"></input>

<input type="submit" value="enviar"></input>
</form>
<?php echo media($valorDoFormulario);?>

</body>
</html>




<br />


<?php

for ($j=0; $j <=10 ; $j++) { //laço da linha
	
	for ($i=0; $i <= 10 ; $i++) { //laço da coluna
	    defineX($j,$i);
	}
	echo "<br>";
}





 