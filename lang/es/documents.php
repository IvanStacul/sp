<?php

return [
    'attributes' => [
        'file' => 'Archivo',
        'description' => 'Descripción',
        'document_category_id' => 'Categoría',
        'title' => 'Título',
    ],
    'messages' => [
        'create' => 'El documento ha sido creada con éxito',
        'update' => 'El documento ha sido actualizada con éxito',
        'delete' => 'El documento ha sido eliminada con éxito',
        'activate' => 'El documento ha sido activada con éxito',
        'deactivate' => 'El documento ha sido desactivada con éxito',
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
        'index' => 'Documentos',
        'create' => 'Nuevo documento',
        'edit' => 'Editar documento',
        'delete' => 'Eliminar documento',
        'show' => 'Ver documento',
    ],
    'table' => [
        'headers' => [
            'id' => 'ID',
            'title' => 'Título',
            'description' => 'Descripción',
            'document_category_id' => 'Categoría',
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
        'create' => 'Nuevo documento',
        'edit' => 'Editar',
        'delete' => 'Eliminar',
        'show' => 'Ver',
    ],
    'buttons' => [
        'create' => 'Nuevo documento',
        'update' => 'Actualizar',
        'delete' => 'Eliminar',
        'back' => 'Volver',
        'save' => 'Guardar',
    ],
    'forms' => [
        'labels' => [
            'description' => 'Descripción',
            'document_category_id' => 'Categoría',
            'title' => 'Título',
            'file' => 'Archivo',
        ],
        'placeholders' => [
            'title' => 'Ingrese el título del documento',
            'description' => 'Ingrese la descripción de la documento',
            'file' => 'Seleccione un archivo',
            'document_category_id' => 'Seleccione una categoría',
        ],
        'required-fields' => 'Campos obligatorios',
    ],
    'tooltips' => [
        'delete' => 'Eliminar documento',
        'edit' => 'Editar documento',
        'show' => 'Ver documento',
        'activate' => 'Activar documento',
        'deactivate' => 'Desactivar documento',
    ],
];
