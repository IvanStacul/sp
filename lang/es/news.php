<?php

return [
    'attributes' => [
        'title' => 'Título',
        'slug' => 'Slug',
        'summary' => 'Resumen',
        'content' => 'Contenido',
        'cover_image' => 'Imagen de portada',
        'publish_date' => 'Fecha de publicación',
        'is_active' => 'Activo',
    ],
    'messages' => [
        'create' => 'La noticia ha sido creada con éxito',
        'update' => 'La noticia ha sido actualizada con éxito',
        'delete' => 'La noticia ha sido eliminada con éxito',
        'activate' => 'La noticia ha sido activada con éxito',
        'deactivate' => 'La noticia ha sido desactivada con éxito',
    ],
    'alerts' => [
        'delete' => [
            'title' => '¿Está seguro que desea eliminar la noticia?',
            'text' => 'Una vez eliminada, no podrá recuperar la noticia',
            'confirm' => 'Sí, eliminar la noticia',
            'cancel' => 'Cancelar',
        ],
        'success' => [
            'title' => 'Resultado de la operación',
        ]
    ],
    'titles' => [
        'index' => 'Listado de noticias',
        'create' => 'Nueva noticia',
        'edit' => 'Editar noticia',
        'delete' => 'Eliminar noticia',
        'show' => 'Detalles de la noticia',
    ],
    'table' => [
        'headers' => [
            'id' => 'ID',
            'title' => 'Título',
            'slug' => 'Slug',
            'summary' => 'Resumen',
            'publish_date' => 'Fecha de publicación',
            'is_active' => 'Estado',
            'actions' => 'Acciones',
        ],
        'values' => [
            'active' => 'Activa',
            'inactive' => 'Inactiva',
        ],
    ],
    'actions' => [
        'create' => 'Nueva Noticia',
        'edit' => 'Editar',
        'delete' => 'Eliminar',
        'show' => 'Ver',
    ],
    'buttons' => [
        'create' => 'Nueva Noticia',
        'update' => 'Actualizar',
        'delete' => 'Eliminar',
        'back' => 'Volver',
        'save' => 'Guardar',
    ],
    'forms' => [
        'labels' => [
            'title' => 'Título',
            'slug' => 'Slug',
            'summary' => 'Resumen',
            'content' => 'Contenido',
            'cover_image' => 'Imagen de portada',
            'publish_date' => 'Fecha de publicación',
            'is_active' => 'Activo',
        ],
        'placeholders' => [
            'title' => 'Ingrese el título de la noticia',
            'content' => 'Ingrese el contenido de la noticia',
            'summary' => 'Ingrese el resumen de la noticia',
            // 'cover_image' => 'Seleccione una imagen de portada',
            // 'publish_date' => 'Seleccione la fecha de publicación',
        ],
        'required-fields' => 'Campos obligatorios',
    ],
    'tooltips' => [
        'edit' => 'Editar noticia',
        'delete' => 'Eliminar noticia',
        'show' => 'Ver detalles de la noticia',
        'activate' => 'Activar noticia',
        'deactivate' => 'Desactivar noticia',
    ],
];
