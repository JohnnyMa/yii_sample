<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
    'name'=>'Blog Demo',
    'theme'=>'classic',

    // preloading 'log' component
    'preload'=>array('log'),

    // autoloading model and component classes
    'import'=>array(
        'application.models.*',
        'application.components.*',
    ),

    'defaultController'=>'stock',

    // application components
    'components'=>array(
        'user'=>array(
            // enable cookie-based authentication
            'allowAutoLogin'=>true,
        ),
        'db'=>array(
            'connectionString' => 'mysql:host=localhost;dbname=tinyblog',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'tablePrefix' => 'tbl_',
            'enableProfiling'=>true,
            'enableParamLogging'=>true,
        ),
        'errorHandler'=>array(
            // use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
        'urlManager'=>array(
            'urlFormat'=>'path',
            'rules'=>array(
                'post/<id:\d+>/<title:.*?>'=>'post/view',
                'posts/<tag:.*?>'=>'post/index',
                '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
            ),
        ),
        'log'=>array(
            'class'=>'CLogRouter',
            'routes'=>array(
                array(
                    // 'class'=>'CFileLogRoute',
                    // 'levels'=>'error, warning',
                    'class'=>'ext.yii-debug-toolbar.YiiDebugToolbarRoute',
                    'ipFilters'=>array('127.0.0.1','192.168.1.215'),
                ),
                // send log info to email
                // array(
                    // 'class'=>'CEmailLogRoute',
                    // 'levels'=>'error, warning, info',
                    // 'emails'=>'johnnyma1988@gmail.com'
                // ),
                array(
                    'class'=>'CDbLogRoute',
                    'levels'=>'error, warning',
                    'connectionID'=>'tinyblog',
                    'logTableName'=>'tbl_log',
                ),
                // uncomment the following to show log messages on web pages
                // array(
                    // 'class'=>'CWebLogRoute',
                // ),
            ),
        ),
    ),

    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params'=>require(dirname(__FILE__).'/params.php'),
);