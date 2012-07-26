<?php
// Parsing configuration file, which is automatically updated on every build.
$ini = parse_ini_file('version.ini');

error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Managing development status.
// NOTE: It's absolutely necessary to switch off development mode on production
// environment, as only than packages CSS/JavaScript files will be loaded,
// instead of uncompressed once.
define('DEVELOPMENT', false);

// Setting up project version.
// NOTE: When DEVELOPMENT is set to 'false', real project version used. It comes
// from 'project.ini' configuration file.
define('VERSION', DEVELOPMENT ? rand() : $ini['version']);

// Some more global constrants definitions.
define('DOMAIN', $_SERVER['HTTP_HOST']);
define('DOMAINURI', 'http://'.DOMAIN);
define('ROOT', dirname(dirname(__FILE__)));

// IMPORTANT: When DEVELOPMENT is set to 'false', CSS/JavaScript files are
// loaded from production build folder. Example:
// http://domain.com/assets/build/260720121037
define('ASSETS', DOMAINURI . '/assets' . 
	(DEVELOPMENT ? '/development' : '/production/' . VERSION));

?>