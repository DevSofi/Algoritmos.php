<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div>
    <?php
    $nota1 = isset($_GET["m1"]) && is_numeric($_GET["m1"]) ? (float)$_GET["m1"] : null;
    $nota2 = isset($_GET["m2"]) && is_numeric($_GET["m2"]) ? (float)$_GET["m2"] : null;
/*    $m1 = isset($_GET["m1"]) ? (float)$_GET["m1"] : 0;
    $m2 = isset($_GET["m2"]) ? (float)$_GET["m2"] : 0;*/

    $valor = ($nota1 + $nota2) / 2;

    /*if ($valor >= 7) {
        $total = "aprovado";
    } else {
        $total = "RECUPERAÇÃO";
    }*/
    $total = $valor >= 7 ? "aprovado" : "RECUPERAÇÃO";

    echo "Nota 1: $nota1 <br/>";
    echo "Nota 2: $nota2 <br/>";
    echo "Média: $valor <br/>";
    echo "<p>Resultado: <span style='color: red'>$total</span></p>";


    ?>
</div>

</body>
</html>


