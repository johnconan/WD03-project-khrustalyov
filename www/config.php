<?php 
	// db settings
	define('DB_HOST','localhost');
	define('DB_NAME','project');
	define('DB_USER','root');
	define('DB_PASS','');

	// Путь до корневой директории скрипта по протоколу HTTP
	define('HOST', $_SERVER['REQUEST_SCHEME'] .  '://' . $_SERVER['HTTP_HOST'] . '/');
	// физический путь до корневой директирии скрипта 
	define('ROOT', dirname(__FILE__) . '/');
	
 ?>