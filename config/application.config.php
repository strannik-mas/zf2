<?php
/**
 * Configuration file generated by ZFTool
 * The previous configuration file is stored in application.config.old
 *
 * @see https://github.com/zendframework/ZFTool
 */
return array(
    'modules' => array(
        'Zend\\Router',
        'Zend\\Validator',
        'Application',
        'SomeModule',
    ),
    'module_listener_options' => array(
        'module_paths' => array(
            './module',
            './vendor',
        ),
        'config_glob_paths' => array(
            'D:\\domains\\zf2\\config/autoload/{{,*.}global,{,*.}local}.php',
        ),
        'config_cache_enabled' => true,
        'config_cache_key' => 'application.config.cache',
        'module_map_cache_enabled' => true,
        'module_map_cache_key' => 'application.module.cache',
        'cache_dir' => 'data/cache/',
    ),
);
