<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../CSS/CssPHP/PHPstyle.css">
</head>
<body>
    <?php
        //Calculo del area y perimetro del circulo
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $radio = $_POST["radio"];
            $area = round(pi() * pow($radio, 2), 2);
            $perimetro = round(2 * pi() * $radio, 2);
    ?>
<div class="contenedor">

    <h1>Resultados</h1>
    <!--Impresión de los resultados-->
    <h2>Área: <?php echo $area . " cm²"; ?></h2>
    <h2>Perímetro: <?php echo $perimetro . " cm"; ?></h2>
    <?php } ?>
    <a href="../HTML/Home.html" class="btn-volver">Volver al Inicio</a>
    <a href="../HTML/PaginasProblemas/Problema1.html" class="btn-volver">Calcular Nuevamente</a>
</div>
</body>
</html>