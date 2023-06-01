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
		$nome = $_GET["nome"]
		$ano  = $_GET["ano"];
		$sexo = $_GET["sexo"];
		$idade = date(y) - $ano;
		echo "$nome tem $idade anos";
	?>
</div>
</body>
</html>	