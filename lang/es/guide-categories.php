<?php

return [
    'attributes' => [
        'name' => 'Nombre',
        'description' => 'Descripción',
        'is_active' => 'Activo'
    ],
    'messages' => [
        'create' => 'Categoría creado con éxito.',
        'update' => 'Categoría actualizado con éxito.',
        'delete' => 'Categoría eliminado con éxito.',
    ],
    'alerts' => [
        'delete' => [
            'title' => '¿Está seguro que desea eliminar el categoría?',
            'text' => 'Una vez eliminado, no podrá recuperar este categoría.',
            'confirm' => 'Sí, eliminar categoría',
            'cancel' => 'Cancelar',
        ],
        'success' => [
            'title' => 'Resultado de la operación',
        ]
    ],
    'titles' => [
        'index' => 'Listado de categorías',
        'create' => 'Nuevo categoría',
        'edit' => 'Editar categoría'
    ],
    'table' => [
        'headers' => [
            'id' => 'ID',
            'name' => 'Nombre',
            'description' => 'Descripción',
            'actions' => 'Acciones'
        ]
    ],
    'actions' => [
        'create' => 'Nuevo categoría',
    ],
    'buttons' => [
        'create' => 'Nuevo categoría',
        'update' => 'Actualizar',
        'delete' => 'Eliminar',
        'back' => 'Volver',
        'save' => 'Guardar',
    ],
    'forms' => [
        'labels' => [
            'name' => 'Nombre',
        ],
        'placeholders' => [
            'name' => 'Ingrese el nombre del categoría',
        ],
        'required-fields' => 'Campos obligatorios',
    ],
    'tooltips' => [
        'edit' => 'Editar categoría',
        'delete' => 'Eliminar categoría',
        'activate' => 'Activar categoría',
    ],
];
