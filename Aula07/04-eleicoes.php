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
		$ano = $_GET["an"];

		$idade = 2023 - $ano;
		echo "Quem nasceu em $ano tem idade de $idade anos";
		$tipo = ($idade>18 && $idade<65)?"OBRIGATORIO":"NAO OBRIGATORIO";
		echo "E dessa forma seu voto e $tipo";

	?>
</div>
</body>
</html>	