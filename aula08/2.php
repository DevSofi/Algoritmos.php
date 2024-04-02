<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Title</title>
</head>
<body>
<div>
    <?php
$valor= $_GET["v"];
$rq = sqrt($valor);
echo "a raiz de $valor é igual a". number_format($rq,2);

    ?>
</div>
</body>
</html>


