<?php

return [
    'attributes' => [
        'title' => 'Título',
        'content' => 'Contenido',
        'guide_category_id' => 'Categoría',
        'is_active' => 'Activo',
    ],
    'messages' => [
        'create' => 'La guía de trámite ha sido creada con éxito',
        'update' => 'La guía de trámite ha sido actualizada con éxito',
        'delete' => 'La guía de trámite ha sido eliminada con éxito',
        'activate' => 'La guía de trámite ha sido activada con éxito',
        'deactivate' => 'La guía de trámite ha sido desactivada con éxito',
    ],
    'alerts' => [
        'delete' => [
            'title' => '¿Está seguro que desea eliminar la guía de trámite?',
            'text' => 'Una vez eliminada, no podrá recuperar la guía de trámite',
            'confirm' => 'Sí, eliminar la guía de trámite',
            'cancel' => 'Cancelar',
        ],
        'success' => [
            'title' => 'Resultado de la operación',
        ]
    ],
    'titles' => [
        'index' => 'Listado de guías de trámites',
        'create' => 'Nueva guía de trámite',
        'edit' => 'Editar guía de trámite',
        'delete' => 'Eliminar guía de trámite',
        'show' => 'Detalles de la guía de trámite',
    ],
    'table' => [
        'headers' => [
            'id' => 'ID',
            'title' => 'Título',
            'guide_category' => 'Categoría',
            'is_active' => 'Estado',
            'actions' => 'Acciones',
        ],
        'values' => [
            'active' => 'Activa',
            'inactive' => 'Inactiva',
        ],
    ],
    'actions' => [
        'create' => 'Nueva guía de trámite',
        'edit' => 'Editar',
        'delete' => 'Eliminar',
        'show' => 'Ver',
    ],
    'buttons' => [
        'create' => 'Nueva guía de trámite',
        'update' => 'Actualizar',
        'delete' => 'Eliminar',
        'back' => 'Volver',
        'save' => 'Guardar',
    ],
    'forms' => [
        'labels' => [
            'title' => 'Título',
            'guide_category_id' => 'Categoría',
            'content' => 'Contenido',
            'is_active' => 'Activo',
        ],
        'placeholders' => [
            'title' => 'Ingrese el título de la guía de trámite',
            'content' => 'Ingrese el contenido de la guía de trámite',
            'guide_category_id' => 'Seleccione una categoría',
        ],
        'required-fields' => 'Campos obligatorios',
    ],
    'tooltips' => [
        'edit' => 'Editar guía de trámite',
        'delete' => 'Eliminar guía de trámite',
        'show' => 'Ver detalles de la guía de trámite',
        'activate' => 'Activar guía de trámite',
        'deactivate' => 'Desactivar guía de trámite',
    ],
];
