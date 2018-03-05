<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'FE_User Cards',
    'description' => 'An extension to display fe_user as cards.',
    'category' => 'plugin',
    'author' => 'HamburgerJungeJr',
    'author_company' => '',
    'author_email' => '',
    'state' => 'alpha',
    'clearCacheOnLoad' => true,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '8.0.0-8.9.99',
            'fluid' => '8.0.0-8.9.99',
        ]
    ],
    'autoload' => [
        'psr-4' => [
            'HamburgerJungeJr\\FeUserCards\\' => 'Classes'
        ]
    ],
];
