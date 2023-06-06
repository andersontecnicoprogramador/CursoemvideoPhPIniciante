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
		$valor = $_GET["v"];
		$rq = sqrt($valor);
		echo "A raiz de $valor e igual a " .number_format($rq,2);
	?>
	<a href="01-exercicio.html">voltar</a>
</div>
</body>
</html>	