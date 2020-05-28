<?php
/**
 * ZF2rapid library
 *
 * @package    ZFrapidLibrary
 * @link       https://github.com/ZFrapid/zfrapid-library
 * @copyright  Copyright (c) 2014 - 2016 Ralf Eggert
 * @license    http://opensource.org/licenses/MIT The MIT License (MIT)
 */

/**
 * ZFrapidLibrary module configuration
 *
 * @package    ZFrapidLibrary
 */
return [
    'view_helpers' => [
        'invokables' => [
            'zfrapidLibH1'            => 'ZFrapidLibrary\View\Helper\H1',
            'zfrapidLibDate'          => 'ZFrapidLibrary\View\Helper\Date',
            'zfrapidLibBootstrapForm' => 'ZFrapidLibrary\View\Helper\BootstrapForm',
            'zfrapidLibBootstrapMenu' => 'ZFrapidLibrary\View\Helper\BootstrapMenu',
        ],
        'factories'  => [
            'zfrapidLibBootstrapFlashMessenger' => 'ZFrapidLibrary\View\Helper\BootstrapFlashMessengerFactory',
        ],
    ],

    'view_manager' => [
        'template_map'        => include __DIR__ . '/template_map.php',
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
