<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div>
    <?php
    $estado = isset($_GET["estado"]) ? $_GET["estado"] : null;
    function getRegiao ($estado)
    {
        switch ($estado)
        {
             case "AC":
             case "AP":
             case "AM":
             case "PA":
             case "RO":
             case "RR":
                 return "Norte";
             case "BA":
             case "CE":
             case "MA":
             case "PI":
             case "SE":
             case "AL":
             case "PE":
             case "PB":
             case "RN":
                 return "Nordeste";
             case "DF":
             case "GO":
             case "MT":
             case "MS":
                 return "Centro-Oeste";
             case "MG":
             case "ES":
             case "RJ":
             case "SP":
                 return "Sudeste";
             case "PR":
             case "SC":
             case "RS":
                 return "Sul";
        }
    }
    echo "<p>A região do estado<span style='color: red'> $estado</span>  é <span style='color:red'>" . getRegiao ($estado). "</span> </p>";

/*    echo "A região do estado " . $estado . " é " . <span> getRegiao ($estado)</span> . ".";*/
    ?>
</div>


</body>
</html>




