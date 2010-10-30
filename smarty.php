<?php
$path=dirname(__FILE__);
function path($p) {
	return str_replace(array('/','\\'), DIRECTORY_SEPARATOR, $p);
}
function is_windows() {
	return strpos(strtolower(PHP_OS), 'win') === 0;
}
$separator = is_windows() ? ';' : ':';

set_include_path(get_include_path().$separator.path("$path/smarty/libs"));
require('Smarty.class.php');

$smarty = new Smarty;


$smarty->template_dir = path($path);
$smarty->config_dir = path("$path/smarty/configs");
$smarty->cache_dir = path("$path/smarty/cache");
$smarty->compile_dir = path("$path/smarty/templates_c");

?>