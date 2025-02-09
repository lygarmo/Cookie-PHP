<?php
    // Configuración de la cookie
    $nombre = "pruebaCookie";
    $valor = "mi_valor";  // Definir un valor para la cookie
    $fecha_expiracion = time() + 60*60*24*365; // Expiración en 1 año
    $path_valido = "/";  // Path válido para la cookie ("/" significa accesible en todo el dominio)
    $dominio = "";  // Deja vacío para el dominio actual
    $segura = false;  // Establece en true si usas HTTPS
    $httponly = true;  // Solo accesible vía HTTP, no por JavaScript

    // Establecer la cookie
    setcookie($nombre, $valor, $fecha_expiracion, $path_valido, $dominio, $segura, $httponly);

    // Confirmación de cookie establecida
    echo "Cookie 'pruebaCookie' establecida correctamente.<br>";
    echo "Recarga la página o ve a 'verCookie.php' para ver la cookie.<br>";
    
?>