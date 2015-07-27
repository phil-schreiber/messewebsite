<?php

return new \Phalcon\Config(array(

    
    'application' => array(
        'controllersDir' => APP_PATH . '/app/controllers/',
        'modelsDir'      => APP_PATH . '/app/models/',
        'viewsDir'       => APP_PATH . '/app/views/',
		'frontendViewsDir'       => APP_PATH . '/app/modules/frontend/views/',
        'pluginsDir'     => APP_PATH . '/app/plugins/',
        'libraryDir'     => APP_PATH . '/app/library/',
		'messagesDir'     => APP_PATH . '/app/messages/',
		'frontendDir'     => APP_PATH . '/app/modules/frontend/',
		'frontendControllersDir'     => APP_PATH . '/app/modules/frontend/controllers',
		'formsDir'     => APP_PATH . '/app/forms',
		'backendDir'     => APP_PATH . '/app/modules/backend/',
		'backendControllersDir'     => APP_PATH . '/app/modules/backend/controllers',
		'appsDir' => APP_PATH.'/app/',
        'development'    => array(
            'staticBaseUri' => '/baywa-messetool/',
            'baseUri'       => '/baywa-messetool/'
        ),
        'production'     => array(
            'staticBaseUri' => '/',
            'baseUri'       => '/'
        ),
        'debug'          => true,
		'dontSendReally' => false,
		'dontSendDuplicates' => true,
		'version' => '0.1 alpha'
    ),    
    'smtp'        => array(
        'host'     => "smtp.iq-pi.org",
        'port'     => 25,
        'security' => "tls",
        'username' => "mailing@iq-pi.org",
        'password' => "hpkYhxr&mdm7", //
		'mailcycle' => 300
    ),
	
	'languages'=>array(
		'de' => 'Deutsch',
		'en' => 'English'
	),
	'database'=>array(
		'production'=>array(
			'adapter'  => 'Mysql',
			'host'     => '002.mysql.db.fge.5hosting.com',
			'username' => 'u1272_nltool',
			'password' => 'b8A1uy1Hhz',
			'dbname'   => 'db1272_nltool',
			'charset'  => 'utf8'
		),
		'debug'=>array(
			'adapter'  => 'Mysql',
			'host'     => 'localhost',
			'username' => 'root',
			'password' => '',
			'dbname'   => 'messetool',
			'charset'  => 'utf8'
		)
		
	)
    
));

