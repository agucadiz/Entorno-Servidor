<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Prueba de recogida de datos</h1>

    <?php if (isset($_GET['x'])): ?>
        <p>El valor del parámetro x es <?= $_GET['y'] ?></p>
    <?php else: ?> 
        <p>Falta el parámetro x</p>
    <?php endif ?>

    <?php if (isset($_GET['y'])): ?>
        <p>El valor del parámetro y es <?= $_GET['y'] ?></p>
    <?php else: ?> 
        <p>Falta el parámetro y</p>
    <?php endif ?>
       
    <?php if (isset($_GET['x'], $_GET['y'])): ?>
        <p>La suma vale <?= $_GET['x'] + $_GET['y'] ?></p>
    <?php endif ?>
</body>
</html>