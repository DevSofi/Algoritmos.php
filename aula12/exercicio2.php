<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="aulaPHP/_css/estilo.css">-->
    <title>Document</title>
</head>
<body>

<?php
$v = isset($_GET["val"]) ? $_GET["val"] : 0;
echo "<h1> calculando o fatorial de $v </h1>";
$c = $v;
$fat = 1;
do {
    $fat *= $c;
    $c--;
} while ($c >= 1);
echo"<h2> $v ! = $fat"

?>
<br>
<p>  <a href="exercicio2.html" class="botao">voltar</a></p>


</div>
</body>
</html>

