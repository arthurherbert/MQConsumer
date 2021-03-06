<?php 
namespace MQConsumer;

spl_autoload_register(function ($class) {
	if(strpos($class, __NAMESPACE__) === 0) {
		require_once(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php');
	}
});