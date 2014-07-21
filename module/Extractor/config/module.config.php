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
];
