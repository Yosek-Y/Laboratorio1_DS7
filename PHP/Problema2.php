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
    //Conversión de pulgadas a centímetros
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pulgadas = $_POST["pulgadas"];
        $cm = $pulgadas * 2.54;
    ?>
    <div class="contenedor">

        <h1>Resultados</h1>
        <!--Impresión de los resultados-->
        <h2>Centímetros: <?php echo $cm . " cm"; ?></h2>
        <?php } ?>
        <a href="../HTML/Home.html" class="btn-volver">Volver al Inicio</a>
        <a href="../HTML/PaginasProblemas/Problema2.html" class="btn-volver">Calcular Nuevamente</a>
    </div>
</body>
</html>