<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <?php
    include("encabezado.html");
    ?>

    <form action="crear.php" method="post">
        Nombre:
        <input type="text" name="nombre" maxlength="50"><br>
        Contraseña:
        <input type="password" name="password"><br>
        Edad:
        <input type="edad" name="edad"><br>
        Educacion:
        <select name="educacion">
            <option value="sin-estudios">Sin estudios</option>
            <option value="educacion-obligatoria" selected="selected">Educación Obligatoria</option>
            <option value="formacion-profesional">Formación profesional</option>
            <option value="universidad">Universidad</option>
        </select> <br>
        Nacionalidad:
        <input type="radio" name="nacionalidad" value="hispana">Hispana</input>
        <input type="radio" name="nacionalidad" value="otra">Otra</input><br>
        Idiomas:
        <input type="checkbox" name="idiomas[]" value="español" checked="checked">Español</input>
        <input type="checkbox" name="idiomas[]" value="inglés">Inglés</input>
        <input type="checkbox" name="idiomas[]" value="francés">Francés</input>
        <input type="checkbox" name="idiomas[]" value="aleman">Alemán</input><br>
        Email:
        <input type="text" name="email"><br>
        Sitio Web:
        <input type="text" name="sitioweb"><br>
        
        <input type="submit" name="submit" value="Enviar">
    </form>

    <?php
    include("pie.html");
    ?>

</body>

</html>
