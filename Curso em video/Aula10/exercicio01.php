<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Curso em  video</title>
</head>
<body>
    <div>
        <?php
            $n =isset($_GET["num"])?$_GET["num"]:0;
            $o = isset($_GET["oper"])?$_GET["oper"]:1;

            switch ($o) {
                case 1:
                    $r = $n * 2;
                    break;
                case 2:
                    $r = $n ^ 3;
                    break;
                case 3:
                    $r = sqrt($n); //$n ^ (1/2);     
            }
            echo "Oresultado da operacao solicitada foi <span class='foco'>$r</span>";
        ?>
        <a href="exercicio01.html" "botao">voltar</a>
    </div>
</body>
</html>