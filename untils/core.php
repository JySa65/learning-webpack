<?php 
require('vendor/autoload.php');

$tpl = new Smarty();
$tpl->template_dir = BASE_DIR . '/templates/';
$tpl->compile_dir = BASE_DIR . '/templates_c/';
// $tpl->config_dir = BASE_DIR . '/config/';
// $tpl->cache_dir = BASE_DIR . '/cache/';
// $tpl->assign('static', STATIC_DIR); 

 ?>