<?php /* Smarty version 2.6.19, created on 2014-05-17 16:12:33
         compiled from includes/pages/mynodes/mynodes_link_form_link.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'includes/pages/mynodes/mynodes_link_form_link.tpl', 200, false),)), $this); ?>
<?php echo '
<script type="text/javascript" language="javascript">
function type_changed() {
	t = document.getElementById("'; ?>
<?php echo $this->_tpl_vars['extra_data']['FORM_NAME']; ?>
<?php echo '_t")
	form = document.'; ?>
<?php echo $this->_tpl_vars['extra_data']['FORM_NAME']; ?>
<?php echo '
	
	form.links__ospfcost.disabled = true
	form.links__ospfcost.value = 0
	var a=0; var b=0;
	a=Number(form.links__throughput.value)
	b=Number(form.links__tspeed.value)
	form.links__ospfcost.value = Math.round(700/((a+b)/2 ))
	
	switch (form.links__protocol.value) {
		
		case \'IEEE 802.3 (Ethernet)\':
		 form.links__tspeed.disabled= true
		 form.links__tspeed.value = \'100\'
		 break
		
		case \'VPN\':
		 form.links__tspeed.value = \'\'
		 form.links__tspeed.disabled= false
		break
	}	 
	
	switch (form.links__type.value) {
		case \'p2p\':
			form.links__peer_node_id.disabled = false
			form.links__peer_ap_id.value = \'\'
			form.links__peer_ap_id.disabled = true
			form.links__protocol.disabled = false
			form.links__equipment.disabled= false
			form.links__tspeed.disabled= false
			form.links__ssid.disabled = false
			form.links__channel.disabled = false
			form.links__hs_logged_in_msg.disabled= true
			form.links__security.disabled = false
			try {
				t.rows[1].style.display = \'table-row\';
			} catch(e) {
				t.rows[1].style.display = \'block\';
			}
			t.rows[2].style.display = "none"
			try {
				t.rows[3].style.display = \'table-row\';
				t.rows[4].style.display = \'table-row\';
				t.rows[5].style.display = \'table-row\';
			} catch(e) {
				t.rows[3].style.display = \'block\';
				t.rows[4].style.display = \'block\';
				t.rows[5].style.display = \'block\';
			}
			t.rows[7].style.display = "table-row"
			t.rows[8].style.display="table-row"
			t.rows[9].style.display="table-row"
			t.rows[10].style.display="table-row"
			t.rows[11].style.display="none"
			t.rows[12].style.display="table-row"
			t.rows[14].style.display="table-row"
			t.rows[13].style.display="none"

			break
		case \'ap\':
			form.links__peer_node_id.value = \'\'
			form.links__peer_node_id.disabled = true
			form.links__peer_ap_id.value = \'\'
			form.links__peer_ap_id.disabled = true
			form.links__protocol.disabled = false
			form.links__ssid.disabled = false
			form.links__tspeed.disabled= true
			form.links__channel.disabled = false
			form.links__equipment.disabled= false
			form.links__hs_logged_in_msg.value= \'\'
			form.links__hs_logged_in_msg.disabled= true
			t.rows[1].style.display = "none"
			t.rows[2].style.display = "none"
			t.rows[3].style.display = "none"
			t.rows[4].style.display = "none"
			try {
				t.rows[3].style.display = \'table-row\';
				t.rows[4].style.display = \'table-row\';
				t.rows[5].style.display = \'table-row\';
			} catch(e) {
				t.rows[3].style.display = \'block\';
				t.rows[4].style.display = \'block\';
				t.rows[5].style.display = \'block\';
			}
			t.rows[7].style.display = "table-row"
			t.rows[8].style.display="none"
			t.rows[9].style.display="none"
			t.rows[10].style.display="none"
			t.rows[11].style.display="none"
			t.rows[12].style.display="none"
			t.rows[13].style.display="none"
			t.rows[14].style.display="none"


			break
		
		case \'client\':
			form.links__peer_node_id.disabled = true
			form.links__peer_ap_id.disabled = false
			form.links__protocol.disabled = true
			form.links__ssid.disabled = true
			form.links__channel.disabled = true
			form.links__protocol.value = \'\'
			form.links__ssid.value = \'\'
    		form.links__tspeed.disabled= true
			form.links__channel.value = \'\'
			t.rows[1].style.display = "none"
			form.links__equipment.disabled= false
			form.links__hs_logged_in_msg.value= \'\'
			form.links__hs_logged_in_msg.disabled= true
			try {
				t.rows[2].style.display = \'table-row\';
			} catch(e) {
				t.rows[2].style.display = "block2";
			}
			t.rows[3].style.display = "none"
			t.rows[4].style.display = "none"
			t.rows[5].style.display = "none"
			t.rows[7].style.display = "table-row"
			t.rows[10].style.display = "none"
			t.rows[11].style.display = "none"
			t.rows[9].style.display = "none"
    		t.rows[8].style.display="none"
			t.rows[14].style.display="none"

			break
		case \'hs\':
			form.links__peer_node_id.value = \'\'
			form.links__peer_node_id.disabled = true
			form.links__peer_ap_id.value = \'\'
			form.links__peer_ap_id.disabled = true
			form.links__protocol.disabled = true
			form.links__protocol.value = \'\'
			form.links__ssid.disabled = false
  	        form.links__channel.disabled = true
			form.links__tspeed.disabled= true
			form.links__equipment.disabled= true
			form.links__equipment.value = \'\'
			form.links__hs_logged_in_msg.disabled= false
			t.rows[1].style.display = "none"
			t.rows[2].style.display = "none"
			t.rows[3].style.display = "none"
			t.rows[4].style.display = "none"
			
			try {
				
				t.rows[4].style.display = \'table-row\';
				t.rows[5].style.display = \'table-row\';
			} catch(e) {
				
				t.rows[4].style.display = \'block\';
				t.rows[5].style.display = \'block\';
			}
			t.rows[7].style.display = "none"
			t.rows[10].style.display="none"
			t.rows[11].style.display="none"
			t.rows[12].style.display="none"
			t.rows[14].style.display="none"
			
			break
	}
}
</script>
'; ?>

<script language="JavaScript" type="text/javascript" src="<?php echo $this->_tpl_vars['js_dir']; ?>
pickup.js"></script>
<form name="<?php echo $this->_tpl_vars['extra_data']['FORM_NAME']; ?>
" method="post" action="?">
<input type="hidden" name="query_string" value="<?php echo $this->_tpl_vars['hidden_qs']; ?>
" />
<input type="hidden" name="form_name" value="<?php echo $this->_tpl_vars['extra_data']['FORM_NAME']; ?>
" />
<table class="table-form" id="<?php echo $this->_tpl_vars['extra_data']['FORM_NAME']; ?>
_t">
		<tr class="table-form-row1">
		<td class="table-form-title"><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['data']['0']['fullField']]; ?>
<?php if ($this->_tpl_vars['data'][0]['Null'] != 'YES'): ?>*<?php endif; ?>:</td>
		<td class="table-form-field">
			<!--0--><select class="fld-form-input" name="<?php echo $this->_tpl_vars['data'][0]['fullField']; ?>
" onchange="type_changed()">
				<?php if ($this->_tpl_vars['data'][0]['Null'] == 'YES'): ?><option value=""></option><?php endif; ?>
				<?php unset($this->_sections['e']);
$this->_sections['e']['loop'] = is_array($_loop=$this->_tpl_vars['data'][0]['Type_Enums']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data'][0]['Type_Enums'][$this->_sections['e']['index']]['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php if ($this->_tpl_vars['data'][0]['Type_Enums'][$this->_sections['e']['index']]['value'] == $this->_tpl_vars['data'][0]['value']): ?> selected="selected"<?php endif; ?>><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "constructors/form_enum.tpl", 'smarty_include_vars' => array('fullField' => $this->_tpl_vars['data']['0']['fullField'],'value' => $this->_tpl_vars['data'][0]['Type_Enums'][$this->_sections['e']['index']]['output'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></option>
				<?php endfor; endif; ?>
			</select>
		</td>
		</tr>	
		<tr class="table-form-row2">
		<td class="table-form-title"><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['data']['1']['fullField']]; ?>
<?php if ($this->_tpl_vars['data'][1]['Null'] != 'YES'): ?>*<?php endif; ?>:</td>
		<td class="table-form-field">
			<!--1--><input type="hidden" name="<?php echo $this->_tpl_vars['data'][1]['fullField']; ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data'][1]['Type_Pickup']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
			<input type="text" disabled="disabled" class="fld-form-input-pickup" name="<?php echo $this->_tpl_vars['data'][1]['fullField']; ?>
_output" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data'][1]['Type_Pickup']['output'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/link.tpl", 'smarty_include_vars' => array('content' => ($this->_tpl_vars['lang']['change']),'onclick' => "javascript: t = window.open('".($this->_tpl_vars['data'][1]['Pickup_url'])."', 'popup_pickup', 'width=700,height=600,toolbar=0,resizable=1,scrollbars=1'); t.focus(); return false;")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php if ($this->_tpl_vars['data'][1]['Null'] == 'YES'): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/link.tpl", 'smarty_include_vars' => array('content' => ($this->_tpl_vars['lang']['delete']),'onclick' => "javascript: ".($this->_tpl_vars['data'][1]['fullField']).".value = ''; ".($this->_tpl_vars['data'][1]['fullField'])."_output.innerText = ''; return false;")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
		</td>	
		</tr>	
		<tr class="table-form-row2">
		<td class="table-form-title"><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['data']['2']['fullField']]; ?>
<?php if ($this->_tpl_vars['data'][2]['Null'] != 'YES'): ?>*<?php endif; ?>:</td>
		<td class="table-form-field">
			<!--2--><input type="hidden" name="<?php echo $this->_tpl_vars['data'][2]['fullField']; ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data'][2]['Type_Pickup']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
			<input type="text" disabled="disabled" class="fld-form-input-pickup" name="<?php echo $this->_tpl_vars['data'][2]['fullField']; ?>
_output" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data'][2]['Type_Pickup']['output'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/link.tpl", 'smarty_include_vars' => array('content' => ($this->_tpl_vars['lang']['change']),'onclick' => "javascript: t = window.open('".($this->_tpl_vars['data'][2]['Pickup_url'])."', 'popup_pickup', 'width=700,height=600,toolbar=0,resizable=1,scrollbars=1'); t.focus(); return false;")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php if ($this->_tpl_vars['data'][2]['Null'] == 'YES'): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "generic/link.tpl", 'smarty_include_vars' => array('content' => ($this->_tpl_vars['lang']['delete']),'onclick' => "javascript: ".($this->_tpl_vars['data'][2]['fullField']).".value = ''; ".($this->_tpl_vars['data'][2]['fullField'])."_output.innerText = ''; return false;")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
		</td>	
        </tr>	
        
		<tr class="table-form-row2"><td class="table-form-title"><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['data']['3']['fullField']]; ?>
<?php if ($this->_tpl_vars['data'][3]['Null'] != 'YES'): ?>*<?php endif; ?>:</td>
		<td class="table-form-field">
			<!--<sup>3</sup>--><select class="fld-form-input" name="<?php echo $this->_tpl_vars['data'][3]['fullField']; ?>
" onchange="type_changed()">
				<?php if ($this->_tpl_vars['data'][3]['Null'] == 'YES'): ?><option value=""></option><?php endif; ?>
				<?php unset($this->_sections['e']);
$this->_sections['e']['loop'] = is_array($_loop=$this->_tpl_vars['data'][3]['Type_Enums']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data'][3]['Type_Enums'][$this->_sections['e']['index']]['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php if ($this->_tpl_vars['data'][3]['Type_Enums'][$this->_sections['e']['index']]['value'] == $this->_tpl_vars['data'][3]['value']): ?> selected="selected"<?php endif; ?>><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "constructors/form_enum.tpl", 'smarty_include_vars' => array('fullField' => $this->_tpl_vars['data']['3']['fullField'],'value' => $this->_tpl_vars['data'][3]['Type_Enums'][$this->_sections['e']['index']]['output'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></option>
				<?php endfor; endif; ?>
			</select>
		</td></tr>	
        

		<tr class="table-form-row2"><td class="table-form-title"><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['data']['4']['fullField']]; ?>
<?php if ($this->_tpl_vars['data'][4]['Null'] != 'YES'): ?>*<?php endif; ?>:</td>
		<td class="table-form-field"><sup><!--4-r4</sup>-->
		  <input class="fld-form-input" name="<?php echo $this->_tpl_vars['data'][4]['fullField']; ?>
" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data'][4]['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></td></tr>
		<tr class="table-form-row2"><td class="table-form-title"><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['data']['5']['fullField']]; ?>
<?php if ($this->_tpl_vars['data'][5]['Null'] != 'YES'): ?>*<?php endif; ?>:</td>
		<td class="table-form-field"><!--<sup>5-r5</sup>-->
		  <input class="fld-form-input" name="<?php echo $this->_tpl_vars['data'][5]['fullField']; ?>
" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data'][5]['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></td></tr>
		<tr class="table-form-row2"><td class="table-form-title"><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['data']['10']['fullField']]; ?>
<?php if ($this->_tpl_vars['data'][10]['Null'] != 'YES'): ?>*<?php endif; ?>:</td>
		<td class="table-form-field"><!--<sup>10-r6</sup>-->
		  <input class="fld-form-input" name="<?php echo $this->_tpl_vars['data'][10]['fullField']; ?>
" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data'][10]['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></td></tr>

		<tr class="table-form-row1"><td class="table-form-title"><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['data']['6']['fullField']]; ?>
<?php if ($this->_tpl_vars['data'][6]['Null'] != 'YES'): ?>*<?php endif; ?>:</td>
		<td class="table-form-field">
			<!--<sup>6-r7</sup>-->
			<select class="fld-form-input" name="<?php echo $this->_tpl_vars['data'][6]['fullField']; ?>
">
				<?php if ($this->_tpl_vars['data'][6]['Null'] == 'YES'): ?><option value=""></option><?php endif; ?>
				<?php unset($this->_sections['e']);
$this->_sections['e']['loop'] = is_array($_loop=$this->_tpl_vars['data'][6]['Type_Enums']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data'][6]['Type_Enums'][$this->_sections['e']['index']]['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php if ($this->_tpl_vars['data'][6]['Type_Enums'][$this->_sections['e']['index']]['value'] == $this->_tpl_vars['data'][6]['value']): ?> selected="selected"<?php endif; ?>><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "constructors/form_enum.tpl", 'smarty_include_vars' => array('fullField' => $this->_tpl_vars['data']['6']['fullField'],'value' => $this->_tpl_vars['data'][6]['Type_Enums'][$this->_sections['e']['index']]['output'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></option>
				<?php endfor; endif; ?>
			</select>
		</td></tr>	


<tr class="table-form-row2"><td class="table-form-title"><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['data']['13']['fullField']]; ?>
<?php if ($this->_tpl_vars['data'][13]['Null'] != 'YES'): ?>*<?php endif; ?>:</td>
<td class="table-form-field"><!--13-r8-Real Throughput--> Real Throughput = mikrotik bandwidth test max "both" result (up+down)/2
  <input name="<?php echo $this->_tpl_vars['data'][13]['fullField']; ?>
" type="text" class="fld-form-input" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data'][13]['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maxlength="2"/></td></tr>                


<tr class="table-form-row2"><td class="table-form-title"><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['data']['12']['fullField']]; ?>
<?php if ($this->_tpl_vars['data'][12]['Null'] != 'YES'): ?>*<?php endif; ?>:</td>
		<td class="table-form-field">
			<!-- <sup> 12-r9 - MAx data rates</sup>-->Max Data Rates
			<select class="fld-form-input" name="<?php echo $this->_tpl_vars['data'][12]['fullField']; ?>
" onchange="type_changed()">
				<?php if ($this->_tpl_vars['data'][12]['Null'] == 'YES'): ?><option value=""></option><?php endif; ?>
				<?php unset($this->_sections['e']);
$this->_sections['e']['loop'] = is_array($_loop=$this->_tpl_vars['data'][12]['Type_Enums']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data'][12]['Type_Enums'][$this->_sections['e']['index']]['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php if ($this->_tpl_vars['data'][12]['Type_Enums'][$this->_sections['e']['index']]['value'] == $this->_tpl_vars['data'][12]['value']): ?> selected="selected"<?php endif; ?>><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "constructors/form_enum.tpl", 'smarty_include_vars' => array('fullField' => $this->_tpl_vars['data']['12']['fullField'],'value' => $this->_tpl_vars['data'][12]['Type_Enums'][$this->_sections['e']['index']]['output'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></option>
				<?php endfor; endif; ?>
			</select>
		</td></tr>	

<tr class="table-form-row2"><td class="table-form-title"><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['data']['14']['fullField']]; ?>
<?php if ($this->_tpl_vars['data'][14]['Null'] != 'YES'): ?>*<?php endif; ?>:</td>
<td class="table-form-field"><!--<sup>14-r10 -ospf cost--></sup>(CAUTION: OSPF cost must be the same on both sides of the link)
  <input name="<?php echo $this->_tpl_vars['data'][14]['fullField']; ?>
" type="text" class="fld-form-input" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data'][14]['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" onchange="type_changed()"/></td></tr>       



		<tr class="table-form-row2"><td class="table-form-title"><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['data']['7']['fullField']]; ?>
<?php if ($this->_tpl_vars['data'][7]['Null'] != 'YES'): ?>*<?php endif; ?>:</td>
		<td class="table-form-field"><!--<sup>7-r11</sup>-->
		  <textarea class="fld-form-input" name="<?php echo $this->_tpl_vars['data'][7]['fullField']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][7]['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td></tr>
		<tr class="table-form-row1"><td class="table-form-title"><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['data']['8']['fullField']]; ?>
<?php if ($this->_tpl_vars['data'][8]['Null'] != 'YES'): ?>*<?php endif; ?>:</td>
		<td class="table-form-field"><!--<sup>8-r-12</sup>-->
          <textarea class="fld-form-input" name="<?php echo $this->_tpl_vars['data'][8]['fullField']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][8]['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td></tr>
        	<tr class="table-form-row1"><td class="table-form-title"><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['data']['11']['fullField']]; ?>
<?php if ($this->_tpl_vars['data'][11]['Null'] != 'YES'): ?>*<?php endif; ?>:</td>
        	<td class="table-form-field"><sup>11r-13</sup>
        	  <textarea class="fld-form-input" name="<?php echo $this->_tpl_vars['data'][11]['fullField']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['data'][11]['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea></td></tr>

		<tr class="table-form-row1"><td class="table-form-title"><?php echo $this->_tpl_vars['lang']['db'][$this->_tpl_vars['data']['9']['fullField']]; ?>
<?php if ($this->_tpl_vars['data'][9]['Null'] != 'YES'): ?>*<?php endif; ?>:</td>
		<td class="table-form-field">
			<!--9-r14-->
			  <select class="fld-form-input" name="<?php echo $this->_tpl_vars['data'][9]['fullField']; ?>
">
				<?php if ($this->_tpl_vars['data'][9]['Null'] == 'YES'): ?><option value=""></option><?php endif; ?>
				<?php unset($this->_sections['e']);
$this->_sections['e']['loop'] = is_array($_loop=$this->_tpl_vars['data'][9]['Type_Enums']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['data'][9]['Type_Enums'][$this->_sections['e']['index']]['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php if ($this->_tpl_vars['data'][9]['Type_Enums'][$this->_sections['e']['index']]['value'] == $this->_tpl_vars['data'][9]['value']): ?> selected="selected"<?php endif; ?>><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "constructors/form_enum.tpl", 'smarty_include_vars' => array('fullField' => $this->_tpl_vars['data']['9']['fullField'],'value' => $this->_tpl_vars['data'][9]['Type_Enums'][$this->_sections['e']['index']]['output'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></option>
				<?php endfor; endif; ?>
			</select>
		</td></tr>	
		

<tr><td class="table-form-submit" colspan="2"><input class="fld-form-submit" type="submit" name="submit" value="<?php echo $this->_tpl_vars['lang']['submit']; ?>
" /></td></tr>
</table>
</form>
<script type="text/javascript" language="javascript">
type_changed()
</script>