<?php /* Smarty version 2.6.19, created on 2014-05-17 15:39:56
         compiled from includes/head.tpl */ ?>
<?php if ($this->_tpl_vars['title'] != ''): ?>
	<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<?php endif; ?>
<link type="text/css" href="http://www.wna.gr/forum/chat/cometchatcss.php" rel="stylesheet" charset="utf-8">
<script type="text/javascript" src="http://www.wna.gr/forum/chat/cometchatjs.php" charset="utf-8"></script>

<?php $_from = $this->_tpl_vars['base']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
	<base<?php $_from = $this->_tpl_vars['i']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
?><?php if ($this->_tpl_vars['value'] != ''): ?> <?php echo $this->_tpl_vars['key']; ?>
="<?php echo $this->_tpl_vars['value']; ?>
"<?php endif; ?><?php endforeach; endif; unset($_from); ?> />
<?php endforeach; endif; unset($_from); ?>
<?php $_from = $this->_tpl_vars['link']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
	<link<?php $_from = $this->_tpl_vars['i']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
?><?php if ($this->_tpl_vars['value'] != ''): ?> <?php echo $this->_tpl_vars['key']; ?>
="<?php echo $this->_tpl_vars['value']; ?>
"<?php endif; ?><?php endforeach; endif; unset($_from); ?> />
<?php endforeach; endif; unset($_from); ?>
<?php $_from = $this->_tpl_vars['meta']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
	<meta<?php $_from = $this->_tpl_vars['i']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
?><?php if ($this->_tpl_vars['value'] != ''): ?> <?php echo $this->_tpl_vars['key']; ?>
="<?php echo $this->_tpl_vars['value']; ?>
"<?php endif; ?><?php endforeach; endif; unset($_from); ?> />
<?php endforeach; endif; unset($_from); ?>
<?php $_from = $this->_tpl_vars['script']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i']):
?>
	<script<?php $_from = $this->_tpl_vars['i']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
?><?php if ($this->_tpl_vars['value'] != ''): ?> <?php echo $this->_tpl_vars['key']; ?>
="<?php echo $this->_tpl_vars['value']; ?>
"<?php endif; ?><?php endforeach; endif; unset($_from); ?>></script>
<?php endforeach; endif; unset($_from); ?>
<?php if ($this->_tpl_vars['extra'] != ''): ?>
<?php echo $this->_tpl_vars['extra']; ?>

<?php endif; ?>
