<?php

//============ DO NOT CHANGE START! ============//

date_default_timezone_set('Europe/Sofia');
mb_internal_encoding('UTF-8');

$path = dirname(__FILE__);
$fullWebPath = realpath($path . '/web');

$cnf['templates_dir'] = $path . '/src/Views/';
$cnf['twig_extensions'] = [
    'PiwiApp\\Twig\\Common'
];

$cnf['session']['type'] = 'native';
$cnf['session']['name'] = '__sess';
$cnf['session']['lifetime'] = 0;
$cnf['session']['path'] = '/';
$cnf['session']['domain'] = '';
$cnf['session']['secure'] = false;

//============ DO NOT CHANGE END! ============//


$cnf['templates_dir_cache'] = false;
$cnf['display_exceptions'] = true;

$cnf['db']['connection_uri'] = 'mysql:dbname=piwiapp;host=localhost';
$cnf['db']['username'] = 'root';
$cnf['db']['password'] = '1';
$cnf['db']['pdo_options'][\PDO::MYSQL_ATTR_INIT_COMMAND] = 'SET NAMES \'UTF8\'';

$cnf['globals']['test'] = 'test_twig'; //globals array can be used in twig templates

return $cnf;
