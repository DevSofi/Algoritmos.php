<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

        <?php
    $tabuada = isset($_GET["tabuada"]) ? $_GET["tabuada"] : null ;
    $contar=1;
    while($contar<=10){
        echo $tabuada. "x". $contar. "=".($tabuada*$contar)."<br>";
        $contar++;
    }



        ?>
        <p>  <a href="exercicio2.html" class="botao">voltar</a></p>


</body>
</html>

