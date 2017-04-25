<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav-admin/user/themes/g5_helium/blueprints/styles/footer.yaml',
    'modified' => 1493121372,
    'data' => [
        'name' => 'Footer Styles',
        'description' => 'Footer section styles for the Helium theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#312f38'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#ffffff'
                ]
            ]
        ]
    ]
];
