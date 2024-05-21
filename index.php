<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once("Config/Config.php");
require_once("Helpers/Helpers.php");

$url = isset($_GET['url']) ? $_GET['url'] : 'home/home';
$arrUrl = explode("/", $url);
$controller = ucwords($arrUrl[0]);
$method = isset($arrUrl[1]) && $arrUrl[1] !== "" ? $arrUrl[1] : 'index';
$params = isset($arrUrl[2]) ? array_slice($arrUrl, 2) : [];

require_once("Libraries/Core/Autoload.php");
require_once("Libraries/Core/Load.php");



