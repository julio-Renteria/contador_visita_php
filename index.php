<?php

function Contar_usuarios()
{
    $archivo = 'contador.txt';

    if (file_exists($archivo)) {
        $cuenta =  file_get_contents($archivo) + 1;

        file_put_contents($archivo, $cuenta);

        return $cuenta;
    } else {
        file_put_contents($archivo, 1);
        return 1;
    }
}

?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Contador de Visita</title>
    <!--  -->
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <!--  -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Bubbles&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Contador de Visitas</h1>
    <div class="visitantes">
        <p class="numero"><?php echo Contar_usuarios(); ?></p> <!-- //aqui etoy llamando la funcionan -->
        <p class="texto">Visitas</p>
    </div>
</body>

</html>