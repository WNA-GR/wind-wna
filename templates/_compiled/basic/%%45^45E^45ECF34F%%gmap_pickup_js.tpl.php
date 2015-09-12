<?php /* Smarty version 2.6.19, created on 2014-11-15 21:33:10
         compiled from includes/pages/gmap/gmap_pickup_js.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'upper', 'includes/pages/gmap/gmap_pickup_js.tpl', 68, false),array('modifier', 'escape', 'includes/pages/gmap/gmap_pickup_js.tpl', 82, false),array('modifier', 'default', 'includes/pages/gmap/gmap_pickup_js.tpl', 87, false),)), $this); ?>
<?php echo '
var map;
var marker;
var marker_point;

'; ?>

<?php if (isset ( $this->_tpl_vars['custom_map'] )): ?>
<?php echo '
function CustomGetTileUrl(a,b) {
var z = 17 - b;
var f = "'; ?>
<?php echo $this->_tpl_vars['custom_map']['url']; ?>
<?php echo '?x="+a.x+"&y="+a.y+"&zoom="+z;
return f;
}
'; ?>

<?php endif; ?>
<?php echo '

function gmap_onload() {
if (GBrowserIsCompatible()) {
'; ?>

<?php if (isset ( $this->_tpl_vars['custom_map'] )): ?>
<?php echo '
var copyright = new GCopyright(1, new GLatLngBounds(new GLatLng(-90, -180), new GLatLng(90, 180)), 0,
"'; ?>
<?php echo $this->_tpl_vars['custom_map']['copyright']; ?>
<?php echo '");
var copyrightCollection = new GCopyrightCollection(\''; ?>
<?php echo $this->_tpl_vars['custom_map']['name']; ?>
<?php echo '\');
copyrightCollection.addCopyright(copyright);
var tilelayers = [new GTileLayer(copyrightCollection , 0, 19)];
tilelayers[0].getTileUrl = CustomGetTileUrl;
var G_CUSTOM_MAP = new GMapType(tilelayers, new GMercatorProjection(20), "'; ?>
<?php echo $this->_tpl_vars['custom_map']['name']; ?>
<?php echo '", {errorMessage:"No data available"});
'; ?>

<?php endif; ?>

<?php $_from = $this->_tpl_vars['maps_available']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['map_name'] => $this->_tpl_vars['map_enabled']):
?>
<?php if ($this->_tpl_vars['map_enabled'] === true): ?>
<?php if ($this->_tpl_vars['map_types'] != null): ?>
<?php $this->assign('map_types', ($this->_tpl_vars['map_types']).","); ?>
<?php endif; ?>
<?php $this->assign('map_types', ($this->_tpl_vars['map_types'])." G_".($this->_tpl_vars['map_name'])."_MAP"); ?>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php if (isset ( $this->_tpl_vars['custom_map'] )): ?>
<?php if ($this->_tpl_vars['map_types'] != null): ?>
<?php $this->assign('map_types', ($this->_tpl_vars['map_types']).","); ?>
<?php endif; ?>
<?php $this->assign('map_types', ($this->_tpl_vars['map_types'])." G_CUSTOM_MAP"); ?>
<?php endif; ?>
<?php echo '
var map_types = ['; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['map_types'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
<?php echo '];
map = new GMap2(document.getElementById("map"), {mapTypes: map_types});
if(map_types.length > 1)
map.addControl(new GMapTypeControl());
map.addControl(new GLargeMapControl());

if (window.opener.document.'; ?>
<?php echo $this->_tpl_vars['object_lat']; ?>
<?php echo '.value != \'\' && window.opener.document.'; ?>
<?php echo $this->_tpl_vars['object_lon']; ?>
<?php echo '.value != \'\') {
var center = new GLatLng(window.opener.document.'; ?>
<?php echo $this->_tpl_vars['object_lat']; ?>
<?php echo '.value, window.opener.document.'; ?>
<?php echo $this->_tpl_vars['object_lon']; ?>
<?php echo '.value);
var zoom = 16;
marker = new GMarker(center, {draggable: true});
marker_point = center;
GEvent.addListener(marker, \'dragend\', function() {
marker_point.x = marker.getPoint().x;
marker_point.y = marker.getPoint().y;
var html = \'<div style="padding-right: 15px; white-space: nowrap; text-align:left; font-size:10px;">'; ?>
<?php echo $this->_tpl_vars['lang']['db']['nodes__latitude']; ?>
<?php echo ': \' + (Math.round(marker_point.y * 1000000)/1000000) + \'<br />\' + \''; ?>
<?php echo $this->_tpl_vars['lang']['db']['nodes__longitude']; ?>
<?php echo ': \' + (Math.round(marker_point.x * 1000000)/1000000) + \'<br /><br />\' + \'<a href="" onclick="window.opener.pickup_value(window.opener.document.'; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['object_lat'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
<?php echo ', Math.round(marker_point.y * 1000000) / 1000000); window.opener.pickup_value(window.opener.document.'; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['object_lon'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
<?php echo ', Math.round(marker_point.x * 1000000)/1000000); window.close(); return false;">'; ?>
<?php echo $this->_tpl_vars['lang']['select_the_coordinates']; ?>
<?php echo '</a></div>\';
marker.openInfoWindowHtml(html);
});
} else {
var center = new GLatLng('; ?>
<?php echo $this->_tpl_vars['center_latitude']; ?>
<?php echo ', '; ?>
<?php echo $this->_tpl_vars['center_longitude']; ?>
<?php echo ');
var bound_sw = new GLatLng('; ?>
<?php echo ((is_array($_tmp=@$this->_tpl_vars['min_latitude'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['center_latitude']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['center_latitude'])); ?>
<?php echo ','; ?>
<?php echo ((is_array($_tmp=@$this->_tpl_vars['min_longitude'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['center_longitude']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['center_longitude'])); ?>
<?php echo ');
var bound_ne = new GLatLng('; ?>
<?php echo ((is_array($_tmp=@$this->_tpl_vars['max_latitude'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['center_latitude']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['center_latitude'])); ?>
<?php echo ','; ?>
<?php echo ((is_array($_tmp=@$this->_tpl_vars['max_longitude'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['center_longitude']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['center_longitude'])); ?>
<?php echo ');
var bounds = new GLatLngBounds(bound_sw, bound_ne);
var zoom = map.getBoundsZoomLevel(bounds);

}
map.setCenter(center, zoom, G_'; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['maps_available']['default'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
<?php echo '_MAP);
GEvent.addListener(map, \'click\', function(overlay, point) {
if (overlay) {
map.clearOverlays();
} else if (point) {
if (marker) map.clearOverlays();
marker = new GMarker(point, {draggable: true});
marker_point = point;
var html = \'<div style="padding-right: 15px; white-space: nowrap; text-align:left; font-size:10px;">'; ?>
<?php echo $this->_tpl_vars['lang']['db']['nodes__latitude']; ?>
<?php echo ': \' + (Math.round(marker_point.y * 1000000)/1000000) + \'<br />\' + \''; ?>
<?php echo $this->_tpl_vars['lang']['db']['nodes__longitude']; ?>
<?php echo ': \' + (Math.round(marker_point.x * 1000000)/1000000) + \'<br /><br />\' + \'<a href="" onclick="window.opener.pickup_value(window.opener.document.'; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['object_lat'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
<?php echo ', Math.round(marker_point.y * 1000000) / 1000000); window.opener.pickup_value(window.opener.document.'; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['object_lon'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
<?php echo ', Math.round(marker_point.x * 1000000)/1000000); window.close(); return false;">'; ?>
<?php echo $this->_tpl_vars['lang']['select_the_coordinates']; ?>
<?php echo '</a></div>\';
map.addOverlay(marker);
marker.openInfoWindowHtml(html);
GEvent.addListener(marker, \'dragstart\', function() {
map.closeInfoWindow();
});
GEvent.addListener(marker, \'dragend\', function() {
marker_point.x = marker.getPoint().x;
marker_point.y = marker.getPoint().y;
var html = \'<div style="padding-right: 15px; white-space: nowrap; text-align:left; font-size:10px;">'; ?>
<?php echo $this->_tpl_vars['lang']['db']['nodes__latitude']; ?>
<?php echo ': \' + (Math.round(marker_point.y * 1000000)/1000000) + \'<br />\' + \''; ?>
<?php echo $this->_tpl_vars['lang']['db']['nodes__longitude']; ?>
<?php echo ': \' + (Math.round(marker_point.x * 1000000)/1000000) + \'<br /><br />\' + \'<a href="" onclick="window.opener.pickup_value(window.opener.document.'; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['object_lat'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
<?php echo ', Math.round(marker_point.y * 1000000) / 1000000); window.opener.pickup_value(window.opener.document.'; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['object_lon'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
<?php echo ', Math.round(marker_point.x * 1000000)/1000000); window.close(); return false;">'; ?>
<?php echo $this->_tpl_vars['lang']['select_the_coordinates']; ?>
<?php echo '</a></div>\';
marker.openInfoWindowHtml(html);
});
}
});

if (marker) map.addOverlay(marker);
}
}

'; ?>
