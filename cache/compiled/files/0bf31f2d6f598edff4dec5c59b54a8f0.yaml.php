<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav-admin/user/plugins/shoppingcart/blueprints/pages/shoppingcart_product.yaml',
    'modified' => 1493106689,
    'data' => [
        'title' => 'Product',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'content' => [
                            'type' => 'tab',
                            'fields' => [
                                'product' => [
                                    'type' => 'section',
                                    'title' => 'Product',
                                    'underline' => true,
                                    'fields' => [
                                        'header.price' => [
                                            'type' => 'text',
                                            'label' => 'Price',
                                            'default' => '10',
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ],
                                        'header.default_photo' => [
                                            'toggleable' => true,
                                            'type' => 'pagemediaselect',
                                            'label' => 'Default Photo',
                                            'help' => 'Used as the main product image'
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
