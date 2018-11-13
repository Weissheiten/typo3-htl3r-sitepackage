<?php

/**
 * Extension Manager/Repository config file for ext "htl3r_demo_sitepackage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'HTL3R Demo Sitepackage',
    'description' => 'This package is a demonstration site package for the HTL3R',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
            'fluid_styled_content' => '9.5.0-9.5.99',
            'rte_ckeditor' => '9.5.0-9.5.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Htl3r\\Htl3rDemoSitepackage\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Florian Weiss',
    'author_email' => 'wsf@htl.rennweg.at',
    'author_company' => 'HTL3R',
    'version' => '1.0.0',
];
