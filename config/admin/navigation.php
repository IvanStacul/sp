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
            'Categorías' => [
                'url' => '#',
                'icon' => 'fas fa-tags',
                'active' => false,
                'submenu' => [
                    'Listado de Categorías' => [
                        'url' => 'admin.categories.index',
                        'icon' => 'fas fa-list',
                        'active' => false,
                    ],
                    'Nueva Categoría' => [
                        'url' => 'admin.categories.create',
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
                    'Listado de Ordenanzas' => [
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
        ],
    ],
];
