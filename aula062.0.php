<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>aula 06</title>
<body>
<div>
    <?php
$ano= $_GET["an"];
$idade= 2024 - $ano;
echo "quem nasceu em $ano tem idade de $idade <br/>";
$tipo= ($idade>=18 && $idade<65)? "obrigatorio":"não obrigatório";
    echo " e dessa forma seu voto e $tipo";
    ?>
</div>
</body>
</head>
</html>


