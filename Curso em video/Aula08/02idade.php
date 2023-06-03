<DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
		<title>Curso de Php - CursoemVideo.com</title>

</head>
<body>
<div>
	<?php
		$nome = isset($_GET["nome"])?$_GET["nome"]:"[nao informado]";
		$ano =  isset($_GET["ano"])?$_GET["ano"]:0;
		$sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[sem sexo]";
		$idade = date("y") - $ano;
		echo "$nome e tem $idade anos.";
	?>
	<a href="02exercicio.html">Voltar</a>
</div>
</body>
</html>	