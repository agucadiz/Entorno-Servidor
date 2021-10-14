<?php

function filtrar_nombre(string $par, array &$error): ?string
{
    $val = null;

    if (isset($_GET[$par])) {
        $val = trim($_GET[$par]);
        if ($val === '') {
            $error[] = "El parámetro $par es obligatorio.";
        } elseif (is_numeric($val)) {
            $error[] = "El parámetro $par no es correcto.";
        }
    }

    return $val;
}

function filtrar_apellido(string $par, array &$error): ?string
{
    $val = null;

    if (isset($_GET[$par])) {
        $val = trim($_GET[$par]);
        if ($val === '') {
            $error[] = "El parámetro $par es obligatorio.";
        } elseif (is_numeric($val)) {
            $error[] = "El parámetro $par no es correcto.";
        }
    }

    return $val;
}

function mostrar_errores(array $error): void
{
    foreach ($error as $err): ?>
        <p>Error: <?= $err ?></p>
    <?php
    endforeach;
}
