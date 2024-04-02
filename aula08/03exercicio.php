<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <?php
    $txt=isset($_GET["t"])? $_GET["t"]: "texto genérico";
    $tam= isset($_GET["tam"])?$_GET["tam"]: "12pt";
    $cor = isset($_GET["cor"])? $_GET["cor"] : "black";
    ?>
<style>
    span.texto{
        font-size: <?php echo $tam; ?>;
        color: <?php echo $cor;?>;
    }
</style>

</head>
<body>
<div>
 <!--   --><?php
/*    $txt=isset($_GET["t"])? $_GET["t"]: "texto genérico";
    $tam= isset($_GET["tam"])?$_GET["tam"]: "12pt";
    $cor = isset($_GET["cor"])? $_GET["cor"] : "black";*/
    echo " <span class='texto'>$txt</span> "

    ?>
</div>
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div>
    <?php
    $nota1 = isset($_GET["m1"]) ? $_GET["m1"] : "não informado";
    $nota2 = isset($_GET["m2"]) ? $_GET["m2"] : "não informado";
    $m1 = isset($_GET["m1"]) ? (float)$_GET["m1"] : 0;
    $m2 = isset($_GET["m2"]) ? (float)$_GET["m2"] : 0;

    $valor = ($m1 + $m2) / 2;

    if ($valor >= 7) {
        $total = "aprovado";
    } else {
        $total = "RECUPERAÇÃO";
    }

    echo "Nota 1: $nota1 <br/>";
    echo "Nota 2: $nota2 <br/>";
    echo "Média: $valor <br/>";

    ?>
</div>
<p style="color: red">
    <?php echo "Resultado:  $total"; ?>
</body>
</html>


<p style="color: red">echo "Resultado: "</p>


