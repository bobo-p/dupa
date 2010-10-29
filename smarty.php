<?php
set_include_path(get_include_path().';d:\smarty\libs');
require('Smarty.class.php');

$smarty = new Smarty;

$smarty->template_dir = 'd:\xampp\htdocs\dupa';
$smarty->config_dir = 'd:\xampp\htdocs\dupa\configs';
$smarty->cache_dir = 'd:\xampp\cache';
$smarty->compile_dir = 'd:\xampp\templates_c';
?>