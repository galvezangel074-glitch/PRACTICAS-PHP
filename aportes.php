<?php

// Validar que se hayan enviado datos mediante POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Obtener variables enviadas desde el formulario
    $Nombre = $_POST['nombre'] ?? '';
    $Edad = $_POST['edad'] ?? 0;

    // Mostrar el nombre
    echo "El nombre es: " . $Nombre . "<br><br>";

    // Validar si es mayor de edad (18 años o más)
    if (!empty($Edad) && $Edad >= 18) {
        echo "Usted puede votar en las próximas elecciones 2028";
    } else {
        echo "Usted no es mayor de edad";
    }

} else {
    echo "Por favor ingresa los datos desde el formulario.";
}

?>