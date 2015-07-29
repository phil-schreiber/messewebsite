<?php
use Phalcon\Mvc\Router;


$router = new Phalcon\Mvc\Router();

$router->setDefaultModule("frontend");
$router->removeExtraSlashes(TRUE);

$router->add(
	'/:controller/:action[/]{0,1}', 
	array(	
		'module'=>'frontend',
		'controller' => 1,
		'action' => 2,
		'module'=>'frontend',
		'namespace'  => 'messetool\Modules\Modules\Frontend\Controllers',
	)
);

$router->add(
	'/{language:[a-z]{2}}/:controller[/]{0,1}', 
	array(
		'language' => 1,
		'controller' => 2,
		'action' => "index",
		'module'=>'frontend',
		'namespace'  => 'messetool\Modules\Modules\Frontend\Controllers',
	)
);

$router->add(
	'/{language:[a-z]{2}}/:controller/:action/:int[/]{0,1}', 
	array(
		'language' => 1,
		'controller' => 2,
		'action' => 3,
		'uid'=>4,
		'module'=>'frontend',
		'namespace'  => 'messetool\Modules\Modules\Frontend\Controllers',
	)
);



$router->add(
	'/{language:[a-z]{2}}/:controller/:action[/]{0,1}', 
	array(
		'language' => 1,
		'controller' => 2,
		'action' => 3,
		'module'=>'frontend',
		'namespace'  => 'messetool\Modules\Modules\Frontend\Controllers',
	)
);









$router->add(
	'/{language:[a-z]{2}}/', 
	array(
		'language' => 1,
		'controller' => "index",
		'action' => "index",
		'module'=>'frontend',
		'namespace'  => 'messetool\Modules\Modules\Frontend\Controllers',
));

$router->add(
    '/',
    array(		
		'controller' => 'index',
		'action'     => 'index',
		'module'=>'frontend',
		'namespace'  => 'messetool\Modules\Modules\Frontend\Controllers',
    )
);

$router->add(
    '/session/index/',
    array(
		'controller' => 'session',
		'action'     => 'index',
		'module'=>'backend',
		'namespace'  => 'messetool\Modules\Modules\Backend\Controllers',
    )
);

$router->add(
    '/session/start[/]{0,1}',
    array(
       'controller' => 'session',
       'action'     => 'start',
		'module'=>'backend',
		'namespace'  => 'messetool\Modules\Modules\Backend\Controllers',
    )
);

$router->add(
    '/session/logout[/]{0,1}',
    array(
       'controller' => 'session',
       'action'     => 'logout',
		'module'=>'backend',
		'namespace'  => 'messetool\Modules\Modules\Backend\Controllers',
    )
);





$router->add(
	'/backend/{language:[a-z]{2}}/:controller[/]{0,1}', 
	array(
		'language' => 1,
		'controller' => 2,
		'action' => "index",
		'module'=>'backend',
		'namespace'  => 'messetool\Modules\Modules\Backend\Controllers',
	)
);
$router->add(
	'/backend/{language:[a-z]{2}}/:controller/:action[/]{0,1}', 
	array(
		'language' => 1,
		'controller' => 2,
		'action' => 3,		
		'module'=>'backend',
		'namespace'  => 'messetool\Modules\Modules\Backend\Controllers',
	)
);

$router->add(
	'/backend/{language:[a-z]{2}}/:controller/:action/:int[/]{0,1}', 
	array(
		'language' => 1,
		'controller' => 2,
		'action' => 3,
		'uid'=>4,
		'module'=>'backend',
		'namespace'  => 'messetool\Modules\Modules\Backend\Controllers',
	)
);

$router->add(
	'/backend/login', 
	array(		
		'controller' => 'index',
		'action' => "index",
		'module'=>'backend',
		'namespace'  => 'messetool\Modules\Modules\Backend\Controllers',
	)
);
$router->add(
	'/search/index/:params[/]{0,1}', 
	array(
		'table' => 1,
		'controller' => 'search',
		'action' => 'index',
		'module'=>'frontend',
		'namespace'  => 'messetool\Modules\Modules\Frontend\Controllers',
	)
);

$router->handle();
return $router;