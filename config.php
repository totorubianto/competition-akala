<?php 

global $config;
$config = array();

define("BASE","http://localhost:8888/akala-project");
define("BASEADMIN", BASE. "admin");
define("BASEDIR", __DIR__ . '/');
define("PROJECTPATH", dirname(__DIR__) . '/akala-project');

$config['dbname']= 'akala_DB';
$config['host']= 'localhost';
$config['password']= 'root';
$config['dbuser']= 'root';

// <?php 

// global $config;
// $config = array();

// define("BASE","http://akala.sebuahstudio.com");
// define("BASEADMIN", BASE. "admin");
// define("BASEDIR", __DIR__ . '/');
// define("PROJECTPATH", dirname(__DIR__) . '/akala.sebuahstudio.com');

// $config['dbname']= 'yoyo';
// $config['host']= 'localhost';
// $config['password']= 'brilyan1';
// $config['dbuser']= 'totorubianto';

