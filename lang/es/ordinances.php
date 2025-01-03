<?php

return [
    'attributes' => [
        'number' => 'Número',
        'is_active' => 'Activo',
        'date' => 'Fecha',
        'file' => 'Archivo',
        'user_id' => 'Usuario',
        'category_id' => 'Categoría',
        'title' => 'Título',
    ],
    'messages' => [
        'create' => 'La ordenanza ha sido creada con éxito',
        'update' => 'La ordenanza ha sido actualizada con éxito',
        'delete' => 'La ordenanza ha sido eliminada con éxito',
        'activate' => 'La ordenanza ha sido activada con éxito',
        'deactivate' => 'La ordenanza ha sido desactivada con éxito',
    ],
    'alerts' => [
        'delete' => [
            'title' => '¿Está seguro que desea eliminar la ordenanza?',
            'text' => 'Una vez eliminada, no podrá recuperar la ordenanza',
            'confirm' => 'Sí, eliminar la ordenanza',
            'cancel' => 'Cancelar',
        ],
        'success' => [
            'title' => 'Resultado de la operación',
        ]
    ],
    'titles' => [
        'index' => 'Ordenanzas',
        'create' => 'Nueva ordenanza',
        'edit' => 'Editar ordenanza',
        'delete' => 'Eliminar ordenanza',
        'show' => 'Ver ordenanza',
    ],
    'table' => [
        'headers' => [
            'id' => 'ID',
            'number' => 'Número',
            'title' => 'Título',
            'is_active' => 'Estado',
            'date' => 'Fecha',
            'file' => 'Archivo',
            'user_id' => 'Usuario',
            'category_id' => 'Categoría',
            'is_active' => 'Estado',
            'actions' => 'Acciones',
        ],
        'values' => [
            'is_active' => [
                'true' => 'Activa',
                'false' => 'Inactiva',
            ],
        ],
    ],
    'actions' => [
        'create' => 'Nueva Ordenanza',
        'edit' => 'Editar',
        'delete' => 'Eliminar',
        'show' => 'Ver',
    ],
    'buttons' => [
        'create' => 'Nueva Ordenanza',
        'update' => 'Actualizar',
        'delete' => 'Eliminar',
        'back' => 'Volver',
        'save' => 'Guardar',
    ],
    'forms' => [
        'labels' => [
            'number' => 'Número',
            'is_active' => 'Activo',
            'date' => 'Fecha de la ordenanza',
            'file' => 'Archivo',
            'author' => 'Autoría',
            'user_id' => 'Usuario',
            'category_id' => 'Categoría',
            'title' => 'Título',
        ],
        'placeholders' => [
            'number' => 'Ingrese el número de la ordenanza',
            'title' => 'Ingrese el título de la ordenanza',
            // 'is_active' => 'Seleccione el estado de la ordenanza',
            // 'date' => 'Seleccione la fecha de la ordenanza',
            // 'file' => 'Seleccione el archivo de la ordenanza',
            // 'user_id' => 'Seleccione el usuario de la ordenanza',
            // 'topic_id' => 'Seleccione el tema de la ordenanza',
        ],
        'required-fields' => 'Campos obligatorios',
    ],
    'tooltips' => [
        'delete' => 'Eliminar ordenanza',
        'edit' => 'Editar ordenanza',
        'show' => 'Ver ordenanza',
        'activate' => 'Activar ordenanza',
        'deactivate' => 'Desactivar ordenanza',
    ],
];
