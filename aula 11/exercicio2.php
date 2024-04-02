<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div>
    <form method="get" action="exercicio02-parte2.php">
        <?php
$c=1;
while ($c<=5){

    echo "valor $c:  <input type='number' name='v$c' max='100' min='0' value='0'/><br>";
    $c++;
}
      /*  valor 1: <input type="number" name="vl" max="100" min="0" value="0"/><br>*/

?>
        <input type="submit" value="Enviar" class="botao"/>
    </form>
</div>

</body>
</html>

