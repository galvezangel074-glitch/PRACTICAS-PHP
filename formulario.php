<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulario de entrada del dato</title>
</head>
<body>

    <form method="post" action="">
        Ingrese su nombre:
        <input type="text" name="nombre" id="nombre">
        <br><br>

        Ingrese su Edad:
        <input type="text" name="edad" id="edad">
        <br><br>

        <input type="submit" value="confirmar">
    </form>

    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];

        echo "<strong>Nombre:</strong> " . $nombre . "<br>";
        echo "<strong>Edad:</strong> " . $edad;
    }
    ?>

</body>
</html>