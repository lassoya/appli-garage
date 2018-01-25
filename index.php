<?php
namespace Application;

use Application\Bootstrap;

//session_start();

require_once 'application/autoloader.php';
Autoloader::register();

$application = new Bootstrap();
$application->run();
