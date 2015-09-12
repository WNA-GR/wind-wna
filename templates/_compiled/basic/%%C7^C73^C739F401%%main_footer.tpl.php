<?php /* Smarty version 2.6.19, created on 2014-05-17 15:40:04
         compiled from includes/main_footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'round', 'includes/main_footer.tpl', 29, false),)), $this); ?>
<table cellpadding="5" cellspacing="0" class="table-main">
      <tr>
        <td class="footer" align="left" width="33%">
        	<a href="http://www.php.net/"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
logo-php.gif" alt="PHP Hypertext Preprocessor" /></a>
        	<a href="http://www.mysql.com/"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
logo-mysql.gif" alt="MySQL database server" /></a>
        	<a href="http://smarty.php.net/"><img src="<?php echo $this->_tpl_vars['img_dir']; ?>
logo-smarty.gif" alt="smarty template engine" /></a>
        </td>
        <td class="footer" align="center" width="33%">
        	PHP time: <?php echo ((is_array($_tmp=$this->_tpl_vars['php_time'])) ? $this->_run_mod_handler('round', true, $_tmp, 3) : round($_tmp, 3)); ?>
 s<br />MySQL time: <?php echo ((is_array($_tmp=$this->_tpl_vars['mysql_time'])) ? $this->_run_mod_handler('round', true, $_tmp, 3) : round($_tmp, 3)); ?>
 s<?php if ($this->_tpl_vars['debug_mysql']): ?><br />Debug: <a href="<?php echo $this->_tpl_vars['debug_mysql']; ?>
" target="debug">MySQL</a><?php endif; ?>
        </td>
        <td class="footer" align="right" width="33%">
        	<b>WiND - Wireless Nodes Database</b><br />
        	Project page: <a href="http://www.wna.gr/trac/wiki/wind-wna">WNA-WiND/</a><br />
            <a href="http://www.wna.gr/wiki/WiND" target="_blank">Wiki-Manual</a> |<a href="http://www.wna.gr/wiki/Changelog" target="_blank">Change log</a> | <a href="http://www.wna.gr/forum/tracker/project-2.html" target="_blank">Comments-Suggestions-Bugs</a> | <b><a href="http://www.wna.gr/forum/thread-48.html" target="_blank">Forum Thread about this project</b></a> <br />
        	&copy; 2005-2014 <a href="http://www.wna.gr/trac/wiki/wind-wna/Team" target="_top">WiND development team</a>
		   <br /><br /><br />
        </td>
      </tr>
</table>