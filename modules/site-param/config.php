<?php
/**
 * site-param config file
 * @package site-param
 * @version 0.0.1
 * @upgrade true
 */

return [
    '__name' => 'site-param',
    '__version' => '0.0.1',
    '__git' => 'https://github.com/getphun/site-param',
    '__files' => [
        'modules/site-param' => [
            'install',
            'remove',
            'update'
        ]
    ],
    '__dependencies' => [
        'core',
        'db-mysql'
    ],
    '_services' => [
        'setting' => 'SiteParam\\Service\\Setting'
    ],
    '_autoload' => [
        'classes' => [
            'SiteParam\\Service\\Setting'   => 'modules/site-param/service/Setting.php',
            'SiteParam\\Model\\SiteParam'   => 'modules/site-param/model/SiteParam.php'
        ],
        'files' => []
    ]
];