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
		echo "O preco do produto e R$ " .number_format($preco, 2);

		$preco  += $preco *10/100;
		echo "<br/>E o novo preco com 10% de desconto sera R$ " .number_format($preco, 2);

	?>
</div>
</body>
</html>	