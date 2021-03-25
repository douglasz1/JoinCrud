<?php
return [
     'controllers' => [
         'invokables' => [
            'CategoryHome' => 'Category\Controllers\CategoryHomeController',
            'CategoryAdd' => 'Category\Controllers\CategoryAddController',
            'CategoryEdit' => 'Category\Controllers\CategoryEditController',
            'CategoryDelete' => 'Category\Controllers\CategoryDeleteController'
         ],
     ],
     'view_manager' => [
         'template_path_stack' => [
             'category' => __DIR__ . '/../view',
         ],
    ],
    'router' => [
        'routes' => [
            'category_home' => [
                'type' => 'literal',
                'options' => [
                    'route' => '/category',
                    'defaults' => [
                        'controller' => 'CategoryHome',
                        'action' => 'handle',
                    ],
                ],
            ],
            'category_add' => [
                'type' => 'literal',
                'options' => [
                    'route' => '/category/add',
                    'defaults' => [
                        'controller' => 'CategoryAdd',
                        'action' => 'handle',
                    ],
                ],
            ],
            'category_edit' => [
                'type' => 'segment',
                'options' => [
                    'route' => '/category/edit[/:id]',
                    'constraints' => [
                        'id' => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => 'CategoryEdit',
                        'action' => 'handle',
                    ],
                ],
            ],
            'category_delete' => [
                'type' => 'segment',
                'options' => [
                    'route' => '/category/delete[/:id]',
                    'constraints' => [
                        'id' => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => 'CategoryDelete',
                        'action' => 'handle',
                    ],
                ],
            ],
        ],
    ],
];