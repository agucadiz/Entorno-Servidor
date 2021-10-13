<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require 'auxiliar.php';
    $error = [];
    $x = filtrar_nombre('x', $error);
    $x = filtrar_apellido('y', $error);
    ?>

    <section>
        <h1>Formulario</h1>
        <form action="" method="GET">
            <div>
                <label for="nombre">Nombre:</label>
                <input id="nombre" type="text" name="x" value="<?= $x ?>">
                <br/> <br/>
            </div>
            <div>
                <label for="apellido">Apellidos:</label>
                <input id="apellido" type="text" name="y" value="<?= $y ?>">
                <br/> <br/>
            </div>
            <div>
                <label for="fecha">Fecha de nacimiento</label>
                <input type="date">
                <br/> <br/>
            </div>
            <div>
                <button type="submit">Enviar</button>
            </div>
        </form>

        <?php mostrar_errores($error) ?>

        <?php if (isset($x, $y, $oper)): ?>
            <?php if (empty($error)):
                $res = calcular($x, $y, $oper) ?>
                <p>El resultado es <?= $res ?></p>
            <?php endif ?>
        <?php endif ?>

    </section>
</body>
</html>