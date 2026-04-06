<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../CSS/CssPHP/PHPstyle.css">
</head>
<body>

<div class="contenedor">

    <?php
        $author1 = "John Doe";
        $author2 = "Max Mustermann";
    ?>

    <h1>Hello World!</h1>
    <h2>This dynamic web page was created by <?php echo $author1; ?> and <?php echo $author2; ?>.</h2>

    <a href="../HTML/Home.html" class="btn-volver">Volver al Inicio</a>
</div>

</body>
</html>