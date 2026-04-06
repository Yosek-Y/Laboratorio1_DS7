<?php
//Variables
$resultado = "";
$num1 = "";
$num2 = "";
$operacion = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Seteo de las variables
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operacion = $_POST["operacion"];

    //Comprobacion de cual operacion se va a realizar
    if (is_numeric($num1) && is_numeric($num2)) {
        switch ($operacion) {
            case "suma":
                $resultado = $num1 + $num2;
                break;
            case "resta":
                $resultado = $num1 - $num2;
                break;
            case "multiplicacion":
                $resultado = $num1 * $num2;
                break;
            case "division":
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                } else {
                    $resultado = "Error: División por cero";
                }
                break; 
        }
    } else {
        $resultado = "Ingrese valores válidos";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="../CSS/CssProblemas/Calculadora.css">
</head>
<body>

<div class="contenedor">

    <h1>Calculadora</h1>

    <form method="post">

        <input type="number" name="num1" placeholder="Primer Número" required value="<?php echo $num1; ?>">

        <!-- Selección de la operación a realizar -->
        <select name="operacion" required>
            <option value="">Seleccione operación</option>
            <option value="suma" <?php if($operacion=="suma") echo "selected"; ?>>+ Suma</option>
            <option value="resta" <?php if($operacion=="resta") echo "selected"; ?>>- Resta</option>
            <option value="multiplicacion" <?php if($operacion=="multiplicacion") echo "selected"; ?>>X Multiplicación</option>
            <option value="division" <?php if($operacion=="division") echo "selected"; ?>>/ División</option>
        </select>

        <input type="number" name="num2" placeholder="Segundo Número" required value="<?php echo $num2; ?>">

        <button type="submit">Calcular</button>
        <button type="button" onclick= "window.location.href='../HTML/Home.html'">Volver al inicio</button>

    </form>

    <?php if ($resultado !== "") { ?>
        <!-- Impresión del resultado -->
        <div class="resultado">
            <h2>Resultado:</h2>
            <p><?php echo $resultado; ?></p>
        </div>
    <?php } ?>

</div>

</body>
</html>