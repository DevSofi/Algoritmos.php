<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>aula 06</title>
<body>
<div>
    <?php
       $preco= $_GET["p"];
       echo "o preço do produto é R$:". number_format($preco,2);
       $preco -= + ($preco*10/100);
       echo"<br/> e o novo preço com 10% de desconto será R$". number_format($preco,2);
    ?>
</div>
</body>
</head>
</html>

