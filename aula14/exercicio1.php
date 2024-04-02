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
        echo "<p>a soma vale $s </p>";
    }
    soma(3,4);
    soma(8,10);
    $x=9;
    $y=1;
    soma($x,$y);
    ?>
</div>

</body>
</html>

