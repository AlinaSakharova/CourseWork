<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Console Application',

	// preloading 'log' component
	'preload'=>array('log'),

	// application components
	'components'=>array(

		// database settings are configured in database.php
		
         'db'=>array(
		  //'class'=>'CDbConnection',
	      'connectionString' => 'mysql:host=localhost;dbname=company',
	      'emulatePrepare' => true,
	      'username' => 'root',
	      'password' => 'alina',
	      'charset' => 'utf8',
		  'tablePrefix' => 'tbl_',
		 ),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
			),
		),

	),
);
