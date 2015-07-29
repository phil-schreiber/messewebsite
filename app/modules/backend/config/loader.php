<?php


$loader = new \Phalcon\Loader();

/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerNamespaces(
    array(
		'messetool\Models'        => $this->config->application->modelsDir,
		'messetool\Forms'        => $this->config->application->formsDir,		
		'messetool\Controllers'   => $this->config->application->controllersDir,
		'messetool\Modules\Modules\Frontend'=>$this->config->application->frontendDir,
		'messetool\Modules\Modules\Frontend\Controllers'=>$this->config->application->frontendControllersDir,
		'messetool\Modules\Modules\Backend'=>$this->config->application->backendDir,
		'messetool\Modules\Modules\Backend\Controllers'=>$this->config->application->backendControllersDir,
		'messetool\app' => $this->config->application->appsDir,
		'messetool' => $this->config->application->libraryDir,	
		'Sum' => $this->config->application->libraryDir
       
    )
);

 $loader->registerDirs(array(
        $this->config->application->controllersDir,
        $this->config->application->modelsDir
    ));

$loader->register();