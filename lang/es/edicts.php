<?php

return [
    'attributes' => [
        'title' => 'Título',
        'slug' => 'Slug',
        'content' => 'Contenido',
        'publish_date' => 'Fecha de publicación',
        'is_active' => 'Activo',
    ],
    'messages' => [
        'create' => 'El edicto ha sido creado con éxito',
        'update' => 'El edicto ha sido actualizado con éxito',
        'delete' => 'El edicto ha sido eliminado con éxito',
        'activate' => 'El edicto ha sido activado con éxito',
        'deactivate' => 'El edicto ha sido desactivado con éxito',
    ],
    'alerts' => [
        'delete' => [
            'title' => '¿Está seguro que desea eliminar el edicto?',
            'text' => 'Una vez eliminado, no podrá recuperar el edicto',
            'confirm' => 'Sí, eliminar el edicto',
            'cancel' => 'Cancelar',
        ],
        'success' => [
            'title' => 'Resultado de la operación',
        ]
    ],
    'titles' => [
        'index' => 'Listado de edictos',
        'create' => 'Nuevo edicto',
        'edit' => 'Editar edicto',
        'delete' => 'Eliminar edicto',
        'show' => 'Detalles del edicto',
    ],
    'table' => [
        'headers' => [
            'id' => 'ID',
            'title' => 'Título',
            'slug' => 'Slug',
            'publish_date' => 'Fecha de publicación',
            'is_active' => 'Estado',
            'actions' => 'Acciones',
        ],
        'values' => [
            'active' => 'Activo',
            'inactive' => 'Inactivo',
        ],
    ],
    'actions' => [
        'create' => 'Nuevo Edicto',
        'edit' => 'Editar',
        'delete' => 'Eliminar',
        'show' => 'Ver',
    ],
    'buttons' => [
        'create' => 'Nuevo Edicto',
        'update' => 'Actualizar',
        'delete' => 'Eliminar',
        'back' => 'Volver',
        'save' => 'Guardar',
    ],
    'forms' => [
        'labels' => [
            'title' => 'Título',
            'slug' => 'Slug',
            'content' => 'Contenido',
            'publish_date' => 'Fecha de publicación',
            'is_active' => 'Activo',
        ],
        'placeholders' => [
            'title' => 'Ingrese el título del edicto',
            'content' => 'Ingrese el contenido del edicto',
        ],
        'required-fields' => 'Campos obligatorios',
    ],
    'tooltips' => [
        'edit' => 'Editar edicto',
        'delete' => 'Eliminar edicto',
        'show' => 'Ver detalles del edicto',
        'activate' => 'Activar edicto',
        'deactivate' => 'Desactivar edicto',
    ],
];
