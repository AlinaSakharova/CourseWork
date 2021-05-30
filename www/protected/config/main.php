<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.

//Yii::setPathOfAlias("actions", dirname(__FILE__)."/../actions");
/*
 return array(
    'preload' => array(
        'debug',
    ),
    'components' => array(
        'debug' => array(
            'class' => 'ext.yii2-debug.Yii2Debug',
        ),
        'db' => array(
            'enableProfiling' => true,
            'enableParamLogging' => true,
        ),
    ),
);
*/
   
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Психологическая, социально-правовая и юридическая поддержка людей, попавших в трудную жизненную ситуацию',
    'language'=>'ru',
    'sourceLanguage'=>'ru',
	// preloading 'log' component
	'preload'=>array('log',
					'debug',
 					),


	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.vendors.*',
	),

	'modules' => array(
		'gii' => array(
			'class'=>'system.gii.GiiModule',
			'password'=>'alina',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			//'ipFilters'=>array('127.0.0.1','83.169.216.40'),
	),
	
	'admin' => array(
	'pageSize' =>20,
	),
	 ),
	  
	 // 'defaultController'=>'post',


	// application components
	'components'=>array(
	
        'cache' => array('class' => 'system.caching.CFileCache'),
		'session' => array(
            'class' => 'system.web.CDbHttpSession',
            'connectionID' => 'db',
            'sessionTableName' => 'sessions',
        ),
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		
		'url_test' => array(
			'class' => 'application.components.Url',
		),

		// uncomment the following to enable URLs in path-format
		
	 /*	'urlManager'=>array(
			'urlFormat'=>'path',
            'showScriptName' => false,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
     */

		// database settings are configured in database.php
		//'db'=>array(
	   // 'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	     // uncomment the following lines to use a MySQL database
		 
        'db'=>array(
		  //'class'=>'CDbConnection',
	      'connectionString' => 'mysql:host=localhost;dbname=company',
	      'emulatePrepare' => true,
	      'username' => 'root',
	      'password' => 'alina',
	      'charset' => 'utf8',
		  'enableProfiling' => true,
          'enableParamLogging' => true,
		  //'tablePrefix' => 'tbl_',
		 ),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			//'errorAction'=>YII_DEBUG ? null : 'site/error',
			'errorAction'=>'site/error',
		),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	    'debug' => array(
            'class' => 'ext.yii2-debug.Yii2Debug',

	    ),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
),
);
