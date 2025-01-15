<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
define ("__ROOT__",__DIR__);
session_start();

// Configuration
require_once (__ROOT__.'/config.php');

// ApplicationController
require_once (CONTROLLERS_DIR.'/ApplicationController.php');


// Add routes here
ApplicationController::getInstance()->addRoute('connect', CONTROLLERS_DIR.'/connect.php');
ApplicationController::getInstance()->addRoute('disconnect', CONTROLLERS_DIR.'/disconnect.php');
ApplicationController::getInstance()->addRoute('dashboard', CONTROLLERS_DIR.'/dashboard.php');
ApplicationController::getInstance()->addRoute('user_gestion', CONTROLLERS_DIR.'/user_gestion.php');
ApplicationController::getInstance()->addRoute('user_update', CONTROLLERS_DIR.'/user_update.php');

// Process the request
ApplicationController::getInstance()->process();

?>
