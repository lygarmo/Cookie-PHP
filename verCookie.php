<?php

    // Verificar si existe la cookie 'pruebaCookie'
    if (isset($_COOKIE['pruebaCookie'])) {
        echo 'Valor de pruebaCookie: ' . $_COOKIE['pruebaCookie'] . '<br>';
    } else {
        echo 'La cookie "pruebaCookie" no está establecida.<br>';
    }

    // Mostrar todas las cookies disponibles
    echo '<pre>';
    print_r($_COOKIE);
    echo '</pre>';

?>