<?php

return [
    '' => [
        'type' => 'group',
        'links' => [
            'Noticias' => [
                'url' => '#',
                'icon' => 'fas fa-newspaper',
                'active' => false,
                'submenu' => [
                    'Listado de noticias' => [
                        'url' => 'admin.news.index',
                        'icon' => 'fas fa-list',
                        'active' => false,
                    ],
                    'Nueva noticia' => [
                        'url' => 'admin.news.create',
                        'icon' => 'fas fa-plus',
                        'active' => false,
                    ],
                ],
            ],
            'Ordenanzas' => [
                'url' => '#',
                'icon' => 'fas fa-gavel',
                'active' => false,
                'submenu' => [
                    'Categorías' => [
                        'url' => 'admin.categories.index',
                        'icon' => 'fas fa-tags',
                        'active' => false,
                    ],
                    'Ordenanzas' => [
                        'url' => 'admin.ordinances.index',
                        'icon' => 'fas fa-list',
                        'active' => false,
                    ],
                    'Nueva Ordenanza' => [
                        'url' => 'admin.ordinances.create',
                        'icon' => 'fas fa-plus',
                        'active' => false,
                    ],
                ],
            ],
            'Documentos oficiales' => [
                'url' => '#',
                'icon' => 'fas fa-file-alt',
                'active' => false,
                'submenu' => [
                    'Categorías' => [
                        'url' => 'admin.document-categories.index',
                        'icon' => 'fas fa-tags',
                        'active' => false,
                    ],
                    'Documentos' => [
                        'url' => 'admin.documents.index',
                        'icon' => 'fas fa-list',
                        'active' => false,
                    ],
                    'Nuevo documento' => [
                        'url' => 'admin.documents.create',
                        'icon' => 'fas fa-plus',
                        'active' => false,
                    ],
                ],
            ],
        ],
    ],
];
