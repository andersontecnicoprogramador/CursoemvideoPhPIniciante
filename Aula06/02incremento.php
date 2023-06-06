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
		$atual = $_GET["aa"];
		echo "<br/>O ano atual e $atual e o ano anterior e  " . --$atual;

	?>
</div>
</body>
</html>	