<?php /* Smarty version 2.6.19, created on 2014-05-17 16:19:54
         compiled from includes/pages/mynodes/mynodes_nodesettingschanges_form_nodesettingschanges.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'includes/pages/mynodes/mynodes_nodesettingschanges_form_nodesettingschanges.tpl', 27, false),)), $this); ?>
<form name="<?php echo $this->_tpl_vars['extra_data']['FORM_NAME']; ?>
" method="post" action="?">
<input type="hidden" name="query_string" value="<?php echo $this->_tpl_vars['hidden_qs']; ?>
" />
<input type="hidden" name="form_name" value="<?php echo $this->_tpl_vars['extra_data']['FORM_NAME']; ?>
" />
<table class="table-form" id="<?php echo $this->_tpl_vars['extra_data']['FORM_NAME']; ?>
_t">
		<tr class="table-form-row1" style="display:none">
			<td class="table-form-title"><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['data']['0']['fullField']]; ?>
<?php if ($this->_tpl_vars['data'][0]['Null'] != 'YES'): ?>*<?php endif; ?>:</td>
			<td class="table-form-field"><input class="fld-form-input" name="<?php echo $this->_tpl_vars['data'][0]['fullField']; ?>
" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data'][0]['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></td>
		</tr>
		<tr class="table-form-row2" style="display:none">
			<td class="table-form-title"><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['data']['1']['fullField']]; ?>
<?php if ($this->_tpl_vars['data'][1]['Null'] != 'YES'): ?>*<?php endif; ?>:</td>
			<td class="table-form-field"><input class="fld-form-input" name="<?php echo $this->_tpl_vars['data'][1]['fullField']; ?>
" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data'][1]['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></td>
		</tr>

		<tr class="table-form-row1" style="display:none">
			<td class="table-form-title"><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['data']['2']['fullField']]; ?>
<?php if ($this->_tpl_vars['data'][2]['Null'] != 'YES'): ?>*<?php endif; ?>:</td>
			<td class="table-form-field"><input class="fld-form-input" name="<?php echo $this->_tpl_vars['data'][2]['fullField']; ?>
" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data'][2]['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></td>
		</tr>
		<tr class="table-form-row2">
			<td class="table-form-title"><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['data']['3']['fullField']]; ?>
<?php if ($this->_tpl_vars['data'][3]['Null'] != 'YES'): ?>*<?php endif; ?>:</td>
		<td class="table-form-field"><textarea class="fld-form-input" name="<?php echo $this->_tpl_vars['data'][3]['fullField']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][3]['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
		</tr>
 
       	<tr class="table-form-row1">
			<td class="table-form-title"><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['data']['4']['fullField']]; ?>
<?php if ($this->_tpl_vars['data'][4]['Null'] != 'YES'): ?>*<?php endif; ?>:</td>
			<td class="table-form-field">
            <select class="fld-form-input" name="<?php echo $this->_tpl_vars['data'][4]['fullField']; ?>
">
				<?php if ($this->_tpl_vars['data'][4]['Null'] == 'YES'): ?><option value=""></option><?php endif; ?>
				<?php unset($this->_sections['e']);
$this->_sections['e']['loop'] = is_array($_loop=$this->_tpl_vars['data'][4]['Type_Enums']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['e']['name'] = 'e';
$this->_sections['e']['show'] = true;
$this->_sections['e']['max'] = $this->_sections['e']['loop'];
$this->_sections['e']['step'] = 1;
$this->_sections['e']['start'] = $this->_sections['e']['step'] > 0 ? 0 : $this->_sections['e']['loop']-1;
if ($this->_sections['e']['show']) {
    $this->_sections['e']['total'] = $this->_sections['e']['loop'];
    if ($this->_sections['e']['total'] == 0)
        $this->_sections['e']['show'] = false;
} else
    $this->_sections['e']['total'] = 0;
if ($this->_sections['e']['show']):

            for ($this->_sections['e']['index'] = $this->_sections['e']['start'], $this->_sections['e']['iteration'] = 1;
                 $this->_sections['e']['iteration'] <= $this->_sections['e']['total'];
                 $this->_sections['e']['index'] += $this->_sections['e']['step'], $this->_sections['e']['iteration']++):
$this->_sections['e']['rownum'] = $this->_sections['e']['iteration'];
$this->_sections['e']['index_prev'] = $this->_sections['e']['index'] - $this->_sections['e']['step'];
$this->_sections['e']['index_next'] = $this->_sections['e']['index'] + $this->_sections['e']['step'];
$this->_sections['e']['first']      = ($this->_sections['e']['iteration'] == 1);
$this->_sections['e']['last']       = ($this->_sections['e']['iteration'] == $this->_sections['e']['total']);
?>
				<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data'][4]['Type_Enums'][$this->_sections['e']['index']]['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php if ($this->_tpl_vars['data'][4]['Type_Enums'][$this->_sections['e']['index']]['value'] == $this->_tpl_vars['data'][4]['value']): ?> selected="selected"<?php endif; ?>><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "constructors/form_enum.tpl", 'smarty_include_vars' => array('fullField' => $this->_tpl_vars['data']['4']['fullField'],'value' => $this->_tpl_vars['data'][4]['Type_Enums'][$this->_sections['e']['index']]['output'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></option>
				<?php endfor; endif; ?>
			</select>
            </td>
		</tr>
        
   	<tr class="table-form-row2">
			<td class="table-form-title"><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['data']['5']['fullField']]; ?>
<?php if ($this->_tpl_vars['data'][5]['Null'] != 'YES'): ?>*<?php endif; ?>:</td>
			<td class="table-form-field">
            <select class="fld-form-input" name="<?php echo $this->_tpl_vars['data'][5]['fullField']; ?>
">
				<?php if ($this->_tpl_vars['data'][5]['Null'] == 'YES'): ?><option value=""></option><?php endif; ?>
				<?php unset($this->_sections['e']);
$this->_sections['e']['loop'] = is_array($_loop=$this->_tpl_vars['data'][5]['Type_Enums']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['e']['name'] = 'e';
$this->_sections['e']['show'] = true;
$this->_sections['e']['max'] = $this->_sections['e']['loop'];
$this->_sections['e']['step'] = 1;
$this->_sections['e']['start'] = $this->_sections['e']['step'] > 0 ? 0 : $this->_sections['e']['loop']-1;
if ($this->_sections['e']['show']) {
    $this->_sections['e']['total'] = $this->_sections['e']['loop'];
    if ($this->_sections['e']['total'] == 0)
        $this->_sections['e']['show'] = false;
} else
    $this->_sections['e']['total'] = 0;
if ($this->_sections['e']['show']):

            for ($this->_sections['e']['index'] = $this->_sections['e']['start'], $this->_sections['e']['iteration'] = 1;
                 $this->_sections['e']['iteration'] <= $this->_sections['e']['total'];
                 $this->_sections['e']['index'] += $this->_sections['e']['step'], $this->_sections['e']['iteration']++):
$this->_sections['e']['rownum'] = $this->_sections['e']['iteration'];
$this->_sections['e']['index_prev'] = $this->_sections['e']['index'] - $this->_sections['e']['step'];
$this->_sections['e']['index_next'] = $this->_sections['e']['index'] + $this->_sections['e']['step'];
$this->_sections['e']['first']      = ($this->_sections['e']['iteration'] == 1);
$this->_sections['e']['last']       = ($this->_sections['e']['iteration'] == $this->_sections['e']['total']);
?>
				<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data'][5]['Type_Enums'][$this->_sections['e']['index']]['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php if ($this->_tpl_vars['data'][5]['Type_Enums'][$this->_sections['e']['index']]['value'] == $this->_tpl_vars['data'][5]['value']): ?> selected="selected"<?php endif; ?>><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "constructors/form_enum.tpl", 'smarty_include_vars' => array('fullField' => $this->_tpl_vars['data']['5']['fullField'],'value' => $this->_tpl_vars['data'][5]['Type_Enums'][$this->_sections['e']['index']]['output'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></option>
				<?php endfor; endif; ?>
			</select>
            </td>
		</tr>
 
 
   	<tr class="table-form-row1">
			<td class="table-form-title"><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['data']['6']['fullField']]; ?>
<?php if ($this->_tpl_vars['data'][6]['Null'] != 'YES'): ?>*<?php endif; ?>:</td>
			<td class="table-form-field"><textarea class="fld-form-input" name="<?php echo $this->_tpl_vars['data'][6]['fullField']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][6]['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td>
		</tr>


		
		<tr>
			<td class="table-form-submit" colspan="2"><input class="fld-form-submit" type="submit" name="submit" value="<?php echo $this->_tpl_vars['lang']['submit']; ?>
" /></td>
		</tr>
</table>
</form>