<?php /* Smarty version 2.6.26, created on 2010-10-29 22:56:41
         compiled from dupa.tpl */ ?>
<!DOCTYPE html>

<html>
<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<META http-equiv="Refresh" content="50">
		<title>Dupa dla ludzi którym sie nudzi</title>
		<link rel="stylesheet" type="text/css" href="dupa.css"/>
</head>
<body>
		<!--Pasek-->
		<h1>dupa</h1>
		<ul class="navigate">
			<?php $_from = $this->_tpl_vars['dane']['linki']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['link'] => $this->_tpl_vars['nazwa']):
?>
			<li>
				<?php if ($this->_tpl_vars['link'] == $this->_tpl_vars['tpl']): ?>
				<a id="a1" href="?dupa=<?php echo $this->_tpl_vars['link']; ?>
"><?php echo $this->_tpl_vars['nazwa']; ?>
</a>
				<?php else: ?>
				<a href="?dupa=<?php echo $this->_tpl_vars['link']; ?>
"><?php echo $this->_tpl_vars['nazwa']; ?>
</a>
				<?php endif; ?>
			</li>
			<?php endforeach; endif; unset($_from); ?>
		</ul>
		
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['plik'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>		