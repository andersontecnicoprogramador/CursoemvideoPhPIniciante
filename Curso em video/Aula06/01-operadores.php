<DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
		<title></title>

</head>
<body>
<div>
	<?php

		$preco = $_GET["p"];
		echo "O preco do produto e R$ $preco";

		$preco  += $preco *10/100;
		echo "<br/>E o novo preco com 10% de aumento sera R$ $preco";

	?>
</div>
</body>
</html>	