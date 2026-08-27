<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora en PHP</title>
</head>
<body>

    <h2>===== CALCULADORA =====</h2>

    <form method="POST" action="lab2.php">
        <label>Elija una opción:</label><br>
        <select name="opcion" required>
            <option value="1">1. Sumar</option>
            <option value="2">2. Restar</option>
            <option value="3">3. Multiplicar</option>
            <option value="4">4. Redondear decimales</option>
        </select>
        <br><br>

        <label>Primer número (o número a redondear):</label><br>
        <input type="number" step="any" name="num1" required>
        <br><br>

        <label>Segundo número (o cantidad de decimales):</label><br>
        <input type="number" step="any" name="num2">
        <br><br>

        <button type="submit">Calcular</button>
    </form>

    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $opcion = (int) $_POST['opcion'];
        $num1 = (float) $_POST['num1'];
        $num2 = (float) $_POST['num2'];

        if ($opcion == 4) {
            $decimales = (int) $num2;
            $resultado = round($num1, $decimales);
            echo "<strong>Resultado:</strong> $resultado";
        } else {
            switch ($opcion) {
                case 1:
                    $resultado = $num1 + $num2;
                    echo "<strong>Resultado:</strong> $num1 + $num2 = $resultado";
                    break;
                case 2:
                    $resultado = $num1 - $num2;
                    echo "<strong>Resultado:</strong> $num1 - $num2 = $resultado";
                    break;
                case 3:
                    $resultado = $num1 * $num2;
                    echo "<strong>Resultado:</strong> $num1 * $num2 = $resultado";
                    break;
                default:
                    echo "Opción no válida";
            }
        }
    }
    ?>

</body>
</html>