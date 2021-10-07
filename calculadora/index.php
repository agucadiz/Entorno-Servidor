<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba de recogida de datos</title>
</head>
<body>
    <h1>Prueba de recogida de datos</h1>

    <?php

    function filtrar_numero($par)
    {
        global $error;

        $val = null;

        if (isset($_GET[$par])) {
            $val = trim($_GET[$par]);
            if (!is_numeric($val)) {
                $error[] = "El parámetro $par no es correcto.";
            }
        } else {
            $error[] = "Falta el parámetro $par.";
        }

        return $val;
    }

    function filtrar_opciones($par, $opciones)
    {
        global $error;

        $val = null;

        if (isset($_GET[$par])) {
            $val = trim($_GET[$par]);
            if (!in_array($val, $opciones)) {
                $error[] = "El parámetro $par no es correcto.";
            }
        } else {
            $error[] = "Falta el parámetro $par.";
        }

        return $val;
    }

    function mostrar_errores($error)
    {
        foreach ($error as $err): ?>
            <p>Error: <?= $err ?></p>
        <?php 
        endforeach;
    }

    $error = [];

    $x = filtrar_numero('x');
    $y = filtrar_numero('y');
    $oper = filtrar_opciones('oper', ['suma', 'resta', 'mult', 'div']);

    ?>

    <?php foreach ($error as $err): ?>
        <p>Error: <?= $err ?></p>
    <?php endforeach ?>

    <?php if (empty($error)): ?>
        <?php
        switch ($_GET['oper']) {
            case 'suma':
                $res = $_GET['x'] + $_GET['y'];
                break;

            case 'resta':
                $res = $_GET['x'] - $_GET['y'];
                break;

            case 'mult':
                $res = $_GET['x'] * $_GET['y'];
                break;

            case 'div':
                $res = $_GET['x'] / $_GET['y'];
                break;
        }
        ?>

        <p>El resultado es <?= $res ?></p>
    <?php endif ?>

    <a href="index.html">Volver</a>
</body>
</html>