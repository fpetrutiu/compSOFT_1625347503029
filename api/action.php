<?php
//dependency import
require 'properties.php';
require 'lib/Slim/Slim.php';
require 'security/Security.php';

//init Slim Framework
\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();
$app->add(new \Security($app));
require 'security/Login.php';
require 'security/ManageUser.php';

//resources
	//db compSOFT_db
		require('./resource/compSOFT_db/custom/CompanyCustom.php');
		require('./resource/compSOFT_db/Company.php');
		require('./resource/compSOFT_db/custom/UserCustom.php');
		require('./resource/compSOFT_db/User.php');
	

$app->run();


?>
