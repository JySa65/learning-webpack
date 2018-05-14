<?php

define('BASE_DIR', __DIR__);

require('untils/core.php');

if (isset($_GET['route'])) {
	$route = strtolower($_GET['route']); 
	if (file_exists("controllers/{$route}Controller.php")){
		include("controllers/{$route}Controller.php");
	}else{
		echo "Error 404";
	}
}else{
	include('controllers/indexController.php');
}
?>