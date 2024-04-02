<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
 <div>
    <?php
    function soma ($a, $b){
        $s= $a + $b;
     /*   echo "<p>a soma vale $s </p>";*/
        return $s;
    }
  /*  soma(3,4);
    soma(8,10);*/
    $x=9;
    $y=1;
    $r=soma($x,$y);

  /*  soma($x,$y);*/
  // echo"a soma entre $x e $y é igual a $r";
    ?>
</div>

</body>
</html>

