<?php

return [
    'controllers' => [
        'invokables' => [
            'api.controller' => 'API\Controller\APIController',
        ],
    ],
    'service_manager' => [
        'invokables' => [
            'api.service' => 'API\Service\APIService',
        ],
    ],
    'router' => [
        'routes' => [
            'api.posts' => [
                'type'         => 'Zend\Mvc\Router\Http\Literal',
                'options'      => [
                    'route'    => '/api/posts',
                    'defaults' => [
                        'controller' => 'api.controller',
                        'action'     => 'get',
                    ],
                ],
            ],
            'api.post' => [
                'type'         => 'Zend\Mvc\Router\Http\Segment',
                'options'      => [
                    'route'    => '/api/posts/:id',
                    'defaults' => [
                        'controller' => 'api.controller',
                        'action'     => 'getUnique',
                        'id'         => '[0-9]+',
                    ],
                ],
            ],
        ],
    ],
    'doctrine' => [
        'driver' => [
            'vdm_entities' => [
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => [
                    __DIR__ . '/../../Extractor/src/Extractor/Entity',
                ],
            ],
            'orm_default' => [
                'drivers' => [
                    'Extractor\Entity' => 'vdm_entities',
                ],
            ],
        ],
    ],
    'view_manager' => [
        'strategies' => [
            'ViewJsonStrategy',
        ],
    ],
];
