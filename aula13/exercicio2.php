<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div>
    <form method="get" action="exercicio2.2.php">
        <select name="num">
            <?php
            for ($c = 1; $c <= 10; $c++) {
                echo "<option>$c</option>";
             }
            ?>
        </select>
        <input type="submit" value="tabuada"/>
    </form>
</div>

</body>
</html>
