<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Title</title>
</head>
<body>
<div>
    <?php
    $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
    $i = date("Y") - $a;
    echo "voce nasceu em $a e tera $i anos<br/>";
    if ($i < 16) {
        $tipoVoto = "nao vota";
    }
    elseif (($i >= 16 && $i < 18) || ($i > 65)) {
            $tipoVoto = "voto opcional";
        }
    else {
            $tipoVoto = "voto obrigatório";
        }

    echo "com essa idade você tem $tipoVoto";
    ?>
</div>
</body>
</html>


