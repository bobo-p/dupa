<?php
$path=dirname(__FILE__);

set_include_path(get_include_path().";$path\smarty\libs");
require('Smarty.class.php');

$smarty = new Smarty;

$smarty->template_dir = "$path";
$smarty->config_dir = "$path\configs";
$smarty->cache_dir = "$path\smarty\cache";
$smarty->compile_dir = $path.'\smarty\templates_c';
?>