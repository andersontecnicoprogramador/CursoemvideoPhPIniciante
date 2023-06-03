<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Curso em video</title>
</head>
<body>
    <div>
        <?php
            $a = isset($_GET["ano"])?$_GET["ano"]:1900;
            $i = date("Y") - $a;
            echo "Voce nasceu em  $a e tera $i anos. <br>";
            if($i >=18) {
                $v = "ja pode votar";
                $d = "Ja pode dirigir";  
            }
            else {
                $v = "nao pode votar";
                $d = "nao pode dirigir";
            }
            echo "Com essa idade voce $v e tambem $d";
        ?>
    </div>
</body>
</html>