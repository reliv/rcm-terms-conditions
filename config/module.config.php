<?php
return [
    /**
     * Configuration
     */
    'Reliv\RcmTermsConditions' => [
    ],
    'controllers' => [
        'invokables' => [
            'Reliv\RcmTermsConditions\Controller\ApiTermsConditionsController'
            => 'Reliv\RcmTermsConditions\Controller\ApiTermsConditionsController'
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
                            'Reliv\RcmTermsConditions\Controller\ApiTermsConditionsController',
                    ]
                ],
            ],
        ],
    ],
    //
    'service_manager' => [
        'factories' => [
            'Reliv\RcmTermsConditions\Repository\TermsConditions' =>
                'Reliv\RcmTermsConditions\Factory\RepositoryDoctrineTermsConditions'
        ]
    ],
    //
    'doctrine' => [
        'driver' => [

            'RelivRcmTermsConditions' => [
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
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
