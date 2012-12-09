<?php
session_start();
var_dump($_SESSION);

// change the following paths if necessary
ini_set('session.cookie_domain', '.npeasy.com:13100');

$yii=dirname(__FILE__).'/../../../../usr/local/src/yii/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';
// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();
