<?php 

global $config;
$config = array();


<<<<<<< HEAD
define("BASE","http://localhost:8888/akala-backend");
define("BASEADMIN", BASE. "admin");
define("BASEDIR", __DIR__ . '/');
define("PROJECTPATH", dirname(__DIR__) . '/akala-backend');
=======
define("BASE","http://localhost:8888/akala-project");
define("BASEADMIN", BASE. "admin");
define("BASEDIR", __DIR__ . '/');
define("PROJECTPATH", dirname(__DIR__) . '/akala-project');

>>>>>>> 2d7c4b46f76f82f6d0173d935f63aef2a45608d9

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

