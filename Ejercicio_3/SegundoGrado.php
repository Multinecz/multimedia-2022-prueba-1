<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Lógica de 7.-OperadorAritmético, en vez de definir resultado, dejamos array rellenar//
$a = (int) $_GET["a"] ?: "1";
$b = (int) $_GET["b"] ?: "1";
$c = (int) $_GET["c"] ?: "1";

    //Operador en 7.-OperadorAritmético.php
$x1 = ($b * -1) + (sqrt(($b**2) - (4 * $a * $c))) / (2 * $a);
$x2 = ($b * -1) - (sqrt(($b**2) - (4 * $a * $c))) / (2 * $a);

echo "RESULTADO POSITIVO= $x1 <br>";
echo "<br> ";
echo "<br> ";
echo "<br> ";
echo "RESULTADO NEGATIVO= $x2";

?>
</body>
</html>
