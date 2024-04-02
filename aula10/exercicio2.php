<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div>
    <?php
   $d= isset($_GET["ds"])?$_GET["ds"] : 0;
   switch ($d){
       case 2:
       case 3:
       case 4:
       case 5:
       case 6:
           echo "levante e vai estudar!";
           break;
       case 7:
       case 8:
           echo"Descanse";
           break;
       default:
           echo "dia da semana inválido";
   }

    ?>
    <br/><a href="javascript:history.go(-1)" class="botao">voltar</a>
</div>

</body>
</html>


