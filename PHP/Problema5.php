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
//Seteo de variables ingresadas
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Nombre = $_POST["nombre"];
    $Edad = $_POST["edad"];
?>

<div class="contenedor">

    <h1>Resultados</h1>
    <h2>Su Nombre es: <?php echo $Nombre; ?></h2>

    <!--Condicinal para la verificación de la edad para votar-->
    <?php if ($Edad > 18) { ?>
        <h2>Usted puede votar en las próximas elecciones 2028.</h2>
    <?php } else { ?>
        <h2>Usted no es mayor de edad, no puedo votar en las siguientes elecciones 2028.</h2>
    <?php } ?>

    <a href="../HTML/Home.html" class="btn-volver">Volver al Inicio</a>
    <a href="../HTML/PaginasProblemas/Problema5.html" class="btn-volver">Verificar Otro Dato</a>

</div>

<?php } ?>

</body>
</html>