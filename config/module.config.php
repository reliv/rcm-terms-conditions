<?php
return [
    /**
     * Configuration
     */
    'Reliv\RcmTermsConditions' => [
        'defaultLocale' => 'en_US'
    ],
    'controllers' => [
        'invokables' => [
            \Reliv\RcmTermsConditions\Controller\ApiTermsConditionsController::class
            => \Reliv\RcmTermsConditions\Controller\ApiTermsConditionsController::class
        ],
    ],
    //
    'router' => [
        'routes' => [
            'Reliv\RcmTermsConditions\ApiTermsConditions' => [
                'type' => 'Zend\Mvc\Router\Http\Segment',
                'options' => [
                    'route' => '/api/terms-conditions[/:id]',
                    'defaults' => [
                        'controller' =>
                            \Reliv\RcmTermsConditions\Controller\ApiTermsConditionsController::class,
                    ]
                ],
            ],
        ],
    ],
    //
    'service_manager' => [
        'factories' => [
            \Reliv\RcmTermsConditions\Repository\TermsConditions::class =>
                \Reliv\RcmTermsConditions\Factory\RepositoryDoctrineTermsConditions::class
        ]
    ],
    //
    'doctrine' => [
        'driver' => [

            'RelivRcmTermsConditions' => [
                'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
                'cache' => 'array',
                'paths' => [
                    __DIR__ . '/../src/Entity'
                ]
            ],
            'orm_default' => [
                'drivers' => [
                    'Reliv\RcmTermsConditions' => 'RelivRcmTermsConditions'
                ]
            ]
        ],
        'configuration' => [
            'orm_default' => [
                'metadata_cache' => 'doctrine_cache',
                'query_cache' => 'doctrine_cache',
                'result_cache' => 'doctrine_cache',
            ]
        ],
    ],
];
