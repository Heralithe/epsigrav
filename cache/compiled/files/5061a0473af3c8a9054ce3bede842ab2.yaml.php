<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grav-admin/user/config/plugins/git-sync.yaml',
    'modified' => 1493123190,
    'data' => [
        'enabled' => true,
        'text_var' => 'Custom Text added by the **Git Sync** plugin (disable plugin to remove)',
        'folders' => [
            0 => 'pages'
        ],
        'repository' => 'https://github.com/Heralithe/epsigrav',
        'user' => 'Heralithe',
        'password' => 'gitsync-def502000e650858c66ed5478464c2334fb5b0231172f3546a0b84ed9fe124fa29eef1f4f7407136a8e1b85aa735d463dcedc666447f726bea26596e5e29e4fd3e213969f83a6c675aaf6d16f854eea84cfa319d95ae423f1beb9611',
        'webhook' => '/_git-sync',
        'branch' => 'master',
        'remote' => [
            'name' => 'origin',
            'branch' => 'master'
        ],
        'git' => [
            'author' => 'gituser',
            'name' => 'GitSync',
            'email' => 'git-sync@trilby.media',
            'bin' => 'git'
        ],
        'logging' => false
    ]
];
