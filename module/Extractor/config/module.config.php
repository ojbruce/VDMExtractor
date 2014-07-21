<?php

return [
    'controllers' => [
        'invokables' => [
            'extractor.controller' => 'Extractor\Controller\ExtractorController',
        ],
    ],
    'service_manager' => [
        'invokables'         => [
            'extractor.service'  => 'Extractor\Service\ExtractorService',
        ],
    ],
    'console' => [
        'router' => [
            'routes' => [
                'extractor.extract' => [
                    'type'    => 'Zend\Mvc\Router\Console\Simple',
                    'options' => [
                        'route'    => 'extract vdm [<limit>]',
                        'defaults' => [
                            'controller' => 'extractor.controller',
                            'action'     => 'extract',
                        ],
                    ],
                ],
            ],
        ],
    ],
    'doctrine' => [
        'driver' => [
            'extractor_entities' => [
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => [
                    __DIR__ . '/../src/Extractor/Entity',
                ],
            ],
            'orm_default' => [
                'drivers' => [
                    'Extractor\Entity' => 'extractor_entities',
                ],
            ],
        ],
    ],
];
