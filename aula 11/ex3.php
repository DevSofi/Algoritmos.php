<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <!--  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="aulaPHP/_css/estilo.css">-->
    <title>Document</title>
</head>
<body>
<div class="form">

    <?php
    $i = isset($_GET["inicio"])?$_GET["inicio"]:"0";
    $f = isset($_GET["fim"])?$_GET["fim"]:"0";
    $p = isset($_GET["passo"])?$_GET["passo"]:"0";
    $soma = $i;
    if($f>$i){
        while($soma <= $f){
            echo $soma.", ";
            $soma += $p;
        }
    }
    else{
        while($soma >= $f){
            echo $soma.", ";
            $soma -= $p;
        }
    }
    echo "FIM!"

    ?>


</div>
</body>
</html>

