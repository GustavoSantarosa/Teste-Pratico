<?php

if($_SERVER['REQUEST_URI'] != "/"){
    //echo json_encode($_SERVER);exit;    
    $_GET["route"] = $_SERVER['REQUEST_URI'];

    echo json_encode($_GET["route"]);exit;
    // = explode("/", $_SERVER['REQUEST_URI']);
    //echo json_encode(explode("/", $_SERVER['REQUEST_URI']));exit;
    include_once 'index.php';
}
else{
    include_once 'index.php';
}
exit;
/* $root = $_SERVER['DOCUMENT_ROOT'];
//echo $_SERVER['REQUEST_URI'];exit; 
chdir($root);
$path = '/'.ltrim(parse_url($_SERVER['REQUEST_URI'])['path'],'/');
set_include_path(get_include_path().':'.__DIR__);
if(file_exists($root.$path))
{
	if(is_dir($root.$path) && substr($path,strlen($path) - 1, 1) !== '/')
		$path = rtrim($path,'/').'/index.php';
	if(strpos($path,'.php') === false) return false;
	else {
		chdir(dirname($root.$path));
		require_once $root.$path;
	}
}else include_once 'index.php'; */

//https://imasters.com.br/back-end/funcao-para-criar-url-amigavel-com-php