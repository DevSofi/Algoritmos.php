<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <div>
          <?php
 /*   $n = isset($_GET["num"]) && is_numeric($_GET["num"]) ? (float)$_GET["num"] : null;*/
          $n = isset($_GET["num"]) ? $_GET["num"] : 0;
          $o = isset($_GET["oper"]) ? $_GET["oper"] : 1;

          switch ($o)
          {
              case 1:
                  $r = $n * 2;
                  break;
              case 2:
                  $r = $n ** 3;
                  break;
              case 3:
                  $r = sqrt($n);
                  break;
          }

          if (isset($r)) {
              echo "O resultado da operação solicitada foi $r";
          } else {
              echo "Operação inválida.";
          }

         ?>
        <br>
        <a href="2.html">Voltar</a>
</div>

</body>
</html>




