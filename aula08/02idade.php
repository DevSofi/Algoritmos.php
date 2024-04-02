<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Title</title>
</head>
<body>
<div>
    <?php
$nome = isset($_GET["nome"])? $_GET["nome"]: "[não informado]";
    $ano = isset ($_GET["ano"]) ? $_GET["ano"] : "[não informado]";
    $sexo = isset ($_GET["sexo"]) ? $_GET["sexo"] : "[não informado]";
   /* $idade= date("Y")- $ano;*/
    echo "$nome é $sexo e tem  e $ano"
    ?>
    <a href="02exercicio.html">voltar</a>
</div>
</body>
</html>


