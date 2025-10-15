<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Moderación de Comentarios
    |--------------------------------------------------------------------------
    |
    | Configuración para el sistema de moderación de comentarios del archivo histórico
    |
    */

    // Palabras prohibidas en los comentarios
    'bad_words' => [
        // Agregar aquí palabras ofensivas o inapropiadas
        // Ejemplo: 'palabra1', 'palabra2', etc.
    ],

    // Límite de comentarios por hora por IP
    'rate_limit' => 3,

    // Tiempo de espera en segundos (1 hora = 3600 segundos)
    'rate_limit_decay' => 3600,

    // Longitud mínima del comentario
    'min_length' => 10,

    // Longitud máxima del comentario
    'max_length' => 1000,

    // Todos los comentarios requieren aprobación
    'require_approval' => true,

    // Notificar a administradores cuando hay nuevos comentarios pendientes
    'notify_admins' => false,

    // Email de notificación (si notify_admins está en true)
    'notification_email' => env('ADMIN_EMAIL', 'admin@example.com'),
];
