<?php /* Smarty version 2.6.19, created on 2014-05-25 19:09:48
         compiled from includes/pages/nodes/nodes_contact_form_contact.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'includes/pages/nodes/nodes_contact_form_contact.tpl', 25, false),)), $this); ?>
<form name="<?php echo $this->_tpl_vars['extra_data']['FORM_NAME']; ?>
" method="post">
<input type="hidden" name="query_string" value="<?php echo $this->_tpl_vars['hidden_qs']; ?>
" />
<input type="hidden" name="form_name" value="<?php echo $this->_tpl_vars['extra_data']['FORM_NAME']; ?>
" />
<table class="table-form">
	<tr class="table-form-row1"><td class="table-form-title"><?php echo $this->_tpl_vars['lang']['from']; ?>
:</td><td class="table-form-field"><?php echo ((is_array($_tmp=$this->_tpl_vars['extra_data']['from_username'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 &lt;<?php echo ((is_array($_tmp=$this->_tpl_vars['extra_data']['from_email'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
&gt;</td></tr>
<tr class="table-form-row2"><td class="table-form-title"><?php echo $this->_tpl_vars['lang']['to']; ?>
:</td><td class="table-form-field">
		<select class="fld-form-input" name="email_to_type">
			<option value="all"><?php echo $this->_tpl_vars['lang']['mailto_all']; ?>
</option>
			<option value="owner"><?php echo $this->_tpl_vars['lang']['mailto_owner']; ?>
</option>
		</select>
</td></tr>
<tr class="table-form-row1"><td class="table-form-title"><?php echo $this->_tpl_vars['lang']['subject']; ?>
:</td><td  class="table-form-field"><input class="fld-form-input" type="text" name="email_subject" /></td></tr>
<tr class="table-form-row2"><td class="table-form-title"><?php echo $this->_tpl_vars['lang']['body']; ?>
:</td><td  class="table-form-field"><textarea class="fld-form-input" name ="email_body"></textarea></td></tr>
<tr><td  class="table-form-submit" colspan="2"><input class="fld-form-submit" type="submit" name="submit" value="<?php echo $this->_tpl_vars['lang']['send']; ?>
" /></td></tr>
</table>
</form>