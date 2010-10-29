<?php
set_include_path(get_include_path().';c:\smarty');
require('Smarty.class.php');

$smarty = new Smarty;

$smarty->template_dir = 'c:\xampp\htdocs\smarty';
$smarty->config_dir = 'c:\xampp\htdocs\smarty\configs';
$smarty->cache_dir = 'c:\xampp\htdocs\smarty\cache';
$smarty->compile_dir = 'c:\xampp\htdocs\smarty\templates_c';
?>