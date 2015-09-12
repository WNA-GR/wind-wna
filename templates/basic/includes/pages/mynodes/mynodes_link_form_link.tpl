{*
 * WiND - Wireless Nodes Database
 * Basic HTML Template
 *
 * Copyright (C) 2005 Konstantinos Papadimitriou <vinilios@cube.gr>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; version 2 dated June, 1991.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 *
 *}
{literal}
<script type="text/javascript" language="javascript">
function type_changed() {
	t = document.getElementById("{/literal}{$extra_data.FORM_NAME}{literal}_t")
	form = document.{/literal}{$extra_data.FORM_NAME}{literal}
	
	form.links__ospfcost.disabled = true
	form.links__ospfcost.value = 0
	var a=0; var b=0;
	a=Number(form.links__throughput.value)
	b=Number(form.links__tspeed.value)
	form.links__ospfcost.value = Math.round(700/((a+b)/2 ))
	
	switch (form.links__protocol.value) {
		
		case 'IEEE 802.3 (Ethernet)':
		 form.links__tspeed.disabled= true
		 form.links__tspeed.value = '100'
		 break
		
		case 'VPN':
		 form.links__tspeed.value = ''
		 form.links__tspeed.disabled= false
		break
	}	 
	
	switch (form.links__type.value) {
		case 'p2p':
			form.links__peer_node_id.disabled = false
			form.links__peer_ap_id.value = ''
			form.links__peer_ap_id.disabled = true
			form.links__protocol.disabled = false
			form.links__equipment.disabled= false
			form.links__tspeed.disabled= false
			form.links__ssid.disabled = false
			form.links__channel.disabled = false
			form.links__hs_logged_in_msg.disabled= true
			form.links__security.disabled = false
			try {
				t.rows[1].style.display = 'table-row';
			} catch(e) {
				t.rows[1].style.display = 'block';
			}
			t.rows[2].style.display = "none"
			try {
				t.rows[3].style.display = 'table-row';
				t.rows[4].style.display = 'table-row';
				t.rows[5].style.display = 'table-row';
			} catch(e) {
				t.rows[3].style.display = 'block';
				t.rows[4].style.display = 'block';
				t.rows[5].style.display = 'block';
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
		case 'ap':
			form.links__peer_node_id.value = ''
			form.links__peer_node_id.disabled = true
			form.links__peer_ap_id.value = ''
			form.links__peer_ap_id.disabled = true
			form.links__protocol.disabled = false
			form.links__ssid.disabled = false
			form.links__tspeed.disabled= true
			form.links__channel.disabled = false
			form.links__equipment.disabled= false
			form.links__hs_logged_in_msg.value= ''
			form.links__hs_logged_in_msg.disabled= true
			t.rows[1].style.display = "none"
			t.rows[2].style.display = "none"
			t.rows[3].style.display = "none"
			t.rows[4].style.display = "none"
			try {
				t.rows[3].style.display = 'table-row';
				t.rows[4].style.display = 'table-row';
				t.rows[5].style.display = 'table-row';
			} catch(e) {
				t.rows[3].style.display = 'block';
				t.rows[4].style.display = 'block';
				t.rows[5].style.display = 'block';
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
		
		case 'client':
			form.links__peer_node_id.disabled = true
			form.links__peer_ap_id.disabled = false
			form.links__protocol.disabled = true
			form.links__ssid.disabled = true
			form.links__channel.disabled = true
			form.links__protocol.value = ''
			form.links__ssid.value = ''
    		form.links__tspeed.disabled= true
			form.links__channel.value = ''
			t.rows[1].style.display = "none"
			form.links__equipment.disabled= false
			form.links__hs_logged_in_msg.value= ''
			form.links__hs_logged_in_msg.disabled= true
			try {
				t.rows[2].style.display = 'table-row';
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
		case 'hs':
			form.links__peer_node_id.value = ''
			form.links__peer_node_id.disabled = true
			form.links__peer_ap_id.value = ''
			form.links__peer_ap_id.disabled = true
			form.links__protocol.disabled = true
			form.links__protocol.value = ''
			form.links__ssid.disabled = false
  	        form.links__channel.disabled = true
			form.links__tspeed.disabled= true
			form.links__equipment.disabled= true
			form.links__equipment.value = ''
			form.links__hs_logged_in_msg.disabled= false
			t.rows[1].style.display = "none"
			t.rows[2].style.display = "none"
			t.rows[3].style.display = "none"
			t.rows[4].style.display = "none"
			
			try {
				
				t.rows[4].style.display = 'table-row';
				t.rows[5].style.display = 'table-row';
			} catch(e) {
				
				t.rows[4].style.display = 'block';
				t.rows[5].style.display = 'block';
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
{/literal}
<script language="JavaScript" type="text/javascript" src="{$js_dir}pickup.js"></script>
<form name="{$extra_data.FORM_NAME}" method="post" action="?">
<input type="hidden" name="query_string" value="{$hidden_qs}" />
<input type="hidden" name="form_name" value="{$extra_data.FORM_NAME}" />
<table class="table-form" id="{$extra_data.FORM_NAME}_t">
		<tr class="table-form-row1">
		<td class="table-form-title">{$lang.db[$data.0.fullField]}{if $data[0].Null != 'YES'}*{/if}:</td>
		<td class="table-form-field">
			<!--0--><select class="fld-form-input" name="{$data[0].fullField}" onchange="type_changed()">
				{if $data[0].Null == 'YES'}<option value=""></option>{/if}
				{section loop=$data[0].Type_Enums name=e}
				<option value="{$data[0].Type_Enums[e].value|escape}"{if $data[0].Type_Enums[e].value == $data[0].value} selected="selected"{/if}>{include file=constructors/form_enum.tpl fullField=$data.0.fullField value=$data[0].Type_Enums[e].output}</option>
				{/section}
			</select>
		</td>
		</tr>	
		<tr class="table-form-row2">
		<td class="table-form-title">{$lang.db[$data.1.fullField]}{if $data[1].Null != 'YES'}*{/if}:</td>
		<td class="table-form-field">
			<!--1--><input type="hidden" name="{$data[1].fullField}" value="{$data[1].Type_Pickup.value|escape}" />
			<input type="text" disabled="disabled" class="fld-form-input-pickup" name="{$data[1].fullField}_output" value="{$data[1].Type_Pickup.output|escape}" />
			{include file=generic/link.tpl content="`$lang.change`" onclick="javascript: t = window.open('`$data[1].Pickup_url`', 'popup_pickup', 'width=700,height=600,toolbar=0,resizable=1,scrollbars=1'); t.focus(); return false;"}
			{if $data[1].Null == 'YES'}{include file=generic/link.tpl content="`$lang.delete`" onclick="javascript: `$data[1].fullField`.value = ''; `$data[1].fullField`_output.innerText = ''; return false;"}{/if}
		</td>	
		</tr>	
		<tr class="table-form-row2">
		<td class="table-form-title">{$lang.db[$data.2.fullField]}{if $data[2].Null != 'YES'}*{/if}:</td>
		<td class="table-form-field">
			<!--2--><input type="hidden" name="{$data[2].fullField}" value="{$data[2].Type_Pickup.value|escape}" />
			<input type="text" disabled="disabled" class="fld-form-input-pickup" name="{$data[2].fullField}_output" value="{$data[2].Type_Pickup.output|escape}" />
			{include file=generic/link.tpl content="`$lang.change`" onclick="javascript: t = window.open('`$data[2].Pickup_url`', 'popup_pickup', 'width=700,height=600,toolbar=0,resizable=1,scrollbars=1'); t.focus(); return false;"}
			{if $data[2].Null == 'YES'}{include file=generic/link.tpl content="`$lang.delete`" onclick="javascript: `$data[2].fullField`.value = ''; `$data[2].fullField`_output.innerText = ''; return false;"}{/if}
		</td>	
        </tr>	
        
		<tr class="table-form-row2"><td class="table-form-title">{$lang.db[$data.3.fullField]}{if $data[3].Null != 'YES'}*{/if}:</td>
		<td class="table-form-field">
			<!--<sup>3</sup>--><select class="fld-form-input" name="{$data[3].fullField}" onchange="type_changed()">
				{if $data[3].Null == 'YES'}<option value=""></option>{/if}
				{section loop=$data[3].Type_Enums name=e}
				<option value="{$data[3].Type_Enums[e].value|escape}"{if $data[3].Type_Enums[e].value == $data[3].value} selected="selected"{/if}>{include file=constructors/form_enum.tpl fullField=$data.3.fullField value=$data[3].Type_Enums[e].output}</option>
				{/section}
			</select>
		</td></tr>	
        

		<tr class="table-form-row2"><td class="table-form-title">{$lang.db[$data.4.fullField]}{if $data[4].Null != 'YES'}*{/if}:</td>
		<td class="table-form-field"><sup><!--4-r4</sup>-->
		  <input class="fld-form-input" name="{$data[4].fullField}" type="text" value="{$data[4].value|escape}" /></td></tr>
		<tr class="table-form-row2"><td class="table-form-title">{$lang.db[$data.5.fullField]}{if $data[5].Null != 'YES'}*{/if}:</td>
		<td class="table-form-field"><!--<sup>5-r5</sup>-->
		  <input class="fld-form-input" name="{$data[5].fullField}" type="text" value="{$data[5].value|escape}" /></td></tr>
		<tr class="table-form-row2"><td class="table-form-title">{$lang.db[$data.10.fullField]}{if $data[10].Null != 'YES'}*{/if}:</td>
		<td class="table-form-field"><!--<sup>10-r6</sup>-->
		  <input class="fld-form-input" name="{$data[10].fullField}" type="text" value="{$data[10].value|escape}" /></td></tr>

		<tr class="table-form-row1"><td class="table-form-title">{$lang.db[$data.6.fullField]}{if $data[6].Null != 'YES'}*{/if}:</td>
		<td class="table-form-field">
			<!--<sup>6-r7</sup>-->
			<select class="fld-form-input" name="{$data[6].fullField}">
				{if $data[6].Null == 'YES'}<option value=""></option>{/if}
				{section loop=$data[6].Type_Enums name=e}
				<option value="{$data[6].Type_Enums[e].value|escape}"{if $data[6].Type_Enums[e].value == $data[6].value} selected="selected"{/if}>{include file=constructors/form_enum.tpl fullField=$data.6.fullField value=$data[6].Type_Enums[e].output}</option>
				{/section}
			</select>
		</td></tr>	


<tr class="table-form-row2"><td class="table-form-title">{$lang.db[$data.13.fullField]}{if $data[13].Null != 'YES'}*{/if}:</td>
<td class="table-form-field"><!--13-r8-Real Throughput--> Real Throughput = mikrotik bandwidth test max "both" result (up+down)/2
  <input name="{$data[13].fullField}" type="text" class="fld-form-input" value="{$data[13].value|escape}" maxlength="2"/></td></tr>                


<tr class="table-form-row2"><td class="table-form-title">{$lang.db[$data.12.fullField]}{if $data[12].Null != 'YES'}*{/if}:</td>
		<td class="table-form-field">
			<!-- <sup> 12-r9 - MAx data rates</sup>-->Max Data Rates
			<select class="fld-form-input" name="{$data[12].fullField}" onchange="type_changed()">
				{if $data[12].Null == 'YES'}<option value=""></option>{/if}
				{section loop=$data[12].Type_Enums name=e}
				<option value="{$data[12].Type_Enums[e].value|escape}"{if $data[12].Type_Enums[e].value == $data[12].value} selected="selected"{/if}>{include file=constructors/form_enum.tpl fullField=$data.12.fullField value=$data[12].Type_Enums[e].output}</option>
				{/section}
			</select>
		</td></tr>	

<tr class="table-form-row2"><td class="table-form-title">{$lang.db[$data.14.fullField]}{if $data[14].Null != 'YES'}*{/if}:</td>
<td class="table-form-field"><!--<sup>14-r10 -ospf cost--></sup>(CAUTION: OSPF cost must be the same on both sides of the link)
  <input name="{$data[14].fullField}" type="text" class="fld-form-input" value="{$data[14].value|escape}" onchange="type_changed()"/></td></tr>       



		<tr class="table-form-row2"><td class="table-form-title">{$lang.db[$data.7.fullField]}{if $data[7].Null != 'YES'}*{/if}:</td>
		<td class="table-form-field"><!--<sup>7-r11</sup>-->
		  <textarea class="fld-form-input" name="{$data[7].fullField}">{$data[7].value|escape}</textarea></td></tr>
		<tr class="table-form-row1"><td class="table-form-title">{$lang.db[$data.8.fullField]}{if $data[8].Null != 'YES'}*{/if}:</td>
		<td class="table-form-field"><!--<sup>8-r-12</sup>-->
          <textarea class="fld-form-input" name="{$data[8].fullField}">{$data[8].value|escape}</textarea></td></tr>
        	<tr class="table-form-row1"><td class="table-form-title">{$lang.db[$data.11.fullField]}{if $data[11].Null != 'YES'}*{/if}:</td>
        	<td class="table-form-field"><sup>11r-13</sup>
        	  <textarea class="fld-form-input" name="{$data[11].fullField}">{$data[11].value|escape}</textarea></td></tr>

		<tr class="table-form-row1"><td class="table-form-title">{$lang.db[$data.9.fullField]}{if $data[9].Null != 'YES'}*{/if}:</td>
		<td class="table-form-field">
			<!--9-r14-->
			  <select class="fld-form-input" name="{$data[9].fullField}">
				{if $data[9].Null == 'YES'}<option value=""></option>{/if}
				{section loop=$data[9].Type_Enums name=e}
				<option value="{$data[9].Type_Enums[e].value|escape}"{if $data[9].Type_Enums[e].value == $data[9].value} selected="selected"{/if}>{include file=constructors/form_enum.tpl fullField=$data.9.fullField value=$data[9].Type_Enums[e].output}</option>
				{/section}
			</select>
		</td></tr>	
		

<tr><td class="table-form-submit" colspan="2"><input class="fld-form-submit" type="submit" name="submit" value="{$lang.submit}" /></td></tr>
</table>
</form>
<script type="text/javascript" language="javascript">
type_changed()
</script>