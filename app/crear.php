<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creación </title>
</head>

<body>



    <h1>Has introducido los siguientes datos en el formulario</h1>

    <?php

    //Leemos los datos del formulario:
        
    $nombre = $_POST["nombre"];
    $password = $_POST["password"];
    $edad = $_POST["edad"];
    $educacion = $_POST["educacion"];
    $idiomas = $_POST["idiomas"];
    $nacionalidad = $_POST["nacionalidad"];
    $email = $_POST["email"];
    $sitioweb = $_POST["sitioweb"];

    echo "Se creará el usuario $nombre $password $edad $educacion $nacionalidad $email $sitioweb" . "<br>";

    echo "Idiomas: ";
    echo "<ul>";
    foreach ($idiomas as $idioma) {
        echo "<li>" . $idioma . "</li>";
    }
    echo "</ul>";
    ?>

</body>

</html>
