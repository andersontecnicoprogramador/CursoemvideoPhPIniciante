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
		$a = 3;

		$b = &$a;

		$b += 5;
		echo "A variavel A vale $a";
		echo "<br/> A variavel B vale $b";

	?>
</div>
</body>
</html>	