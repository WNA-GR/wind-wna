<?php
/*
 * WiND - Wireless Nodes Database
 *
 * Copyright (C) 2005 Nikolaos Nikalexis <winner@cube.gr>
 * Copyright (C) 2007 John Kolovos <cirrus@awmn.net>
 * Copyright (C) 2010 Leonidas Papadopoulos <leonidas@wna.gr>
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
 */

#if (isset($argv[1])) {
#	$conf_file = basename($argv[1]).'.conf';
#} else {
#	$conf_file = basename($_GET['zonefile']).'.conf';
#}
#@# fix
$poller_path='/home/wnagr/public_html/wind/tools/dnszones-poller/';
$conf_file = $poller_path.'10.in-addr.arpa.conf';
#echo $conf_file;
if ( file_exists($conf_file) ) {
	include $conf_file;
} else {
	exit;
}
if (!isset($conf)) exit;

$mysql_link = mysql_connect($conf['db']['server'], $conf['db']['username'], $conf['db']['password']);

mysql_select_db($conf['db']['database'], $mysql_link);

function replace($array, $string) {
	$ret = $string;
	foreach ($array as $key => $value) {
		$ret = str_replace("##".$key."##", $value, $ret);
	}
	return $ret;
}

if ($conf['zone_type'] == 'forward') {
	
	$replace = array('NAMESERVERS' => '', 'ZONES' => '', 'NS-SUBDOMAIN' => '', 'SERIAL' => '');
	
	## NAMESERVERS
	$query = "SELECT dns_nameservers.name AS ns_num, nodes.name_ns AS name_ns
			  FROM dns_nameservers
			  INNER JOIN nodes ON nodes.id = dns_nameservers.node_id
			  WHERE dns_nameservers.status = 'active'
			  ORDER BY nodes.name_ns ASC, dns_nameservers.name ASC";
	$q = mysql_query($query, $mysql_link);
	while ($ret = mysql_fetch_assoc($q)) {
		$replace['NAMESERVERS'] .= " NS ".$ret['ns_num'].".".$ret['name_ns'].$conf['ns_domain']."\n";
	}
	
	## ZONES
	$query = "SELECT dns_zones.name AS zone_name, dns_nameservers.name AS ns_num, nodes.name_ns AS name_ns
			  FROM dns_zones
			  INNER JOIN dns_zones_nameservers ON dns_zones.id = dns_zones_nameservers.zone_id
			  INNER JOIN dns_nameservers ON dns_zones_nameservers.nameserver_id = dns_nameservers.id
			  INNER JOIN nodes ON dns_nameservers.node_id = nodes.id
			  WHERE dns_nameservers.status = 'active' AND dns_zones.type = 'forward' AND dns_zones.status = 'active'
			  ORDER BY dns_zones.name ASC, dns_zones_nameservers.id ASC";
	$q = mysql_query($query, $mysql_link);
	echo mysql_error();
	while ($ret = mysql_fetch_assoc($q)) {
		$replace['ZONES'] .= $ret['zone_name']." NS ".$ret['ns_num'].".".$ret['name_ns'].$conf['ns_domain']."\n";
	}

	## NS-SUBDOMAIN
	$query = "SELECT dns_nameservers.ip AS ip, dns_nameservers.name AS ns_num, nodes.name_ns AS name_ns
			  FROM dns_nameservers
			  INNER JOIN nodes ON nodes.id = dns_nameservers.node_id
			  WHERE dns_nameservers.status = 'active'
			  ORDER BY nodes.name_ns ASC, dns_nameservers.name ASC";
	$q = mysql_query($query, $mysql_link);
	while ($ret = mysql_fetch_assoc($q)) {
		$replace['NS-SUBDOMAIN'] .= $ret['ns_num'].".".$ret['name_ns'].$conf['ns_domain']." A ".long2ip($ret['ip'])."\n";
		if ($ret['ns_num'] == 'ns0') {
			$replace['NS-SUBDOMAIN'] .= $ret['name_ns'].$conf['ns_domain']." CNAME ".$ret['ns_num'].".".$ret['name_ns'].$conf['ns_domain']."\n";	
		}
	}
	
	
} elseif ($conf['zone_type'] == 'reverse') {
	
	$replace = array('NAMESERVERS' => '', 'ZONES' => '', 'SERIAL' => '');

	## NAMESERVERS
	$query = "SELECT dns_nameservers.name AS ns_num, nodes.name_ns AS name_ns
			  FROM dns_nameservers
			  INNER JOIN nodes ON nodes.id = dns_nameservers.node_id
			  WHERE dns_nameservers.status = 'active'
			  ORDER BY nodes.name_ns ASC, dns_nameservers.name ASC";
	$q = mysql_query($query, $mysql_link);
	while ($ret = mysql_fetch_assoc($q)) {
		$replace['NAMESERVERS'] .= " NS ".$ret['ns_num'].".".$ret['name_ns'].$conf['ns_domain']."\n";
	}

	## ZONES
	$query = "SELECT dns_zones.name AS zone_name, dns_nameservers.name AS ns_num, nodes.name_ns AS name_ns
			  FROM dns_zones
			  INNER JOIN dns_zones_nameservers ON dns_zones.id = dns_zones_nameservers.zone_id
			  INNER JOIN dns_nameservers ON dns_zones_nameservers.nameserver_id = dns_nameservers.id
			  INNER JOIN nodes ON dns_nameservers.node_id = nodes.id
			  WHERE dns_nameservers.status = 'active' AND dns_zones.type = 'reverse' AND dns_zones.status = 'active'
			  ORDER BY dns_zones.name ASC, dns_zones_nameservers.id ASC";
	$q = mysql_query($query, $mysql_link);
	echo mysql_error();
	while ($ret = mysql_fetch_assoc($q)) {
		$replace['ZONES'] .= $ret['zone_name']." NS ".$ret['ns_num'].".".$ret['name_ns'].$conf['ns_domain']."\n";
	}
	
	## PTR backbone
	$query = "SELECT
			`links`.`ip` AS `decip`,
			`regions`.`dns_suffix` AS `city`,
			`as n2`.`name_ns` AS `gw`,
			`as n1`.`name_ns` AS `this`,
			`as n1`.`id` AS `windid`,
			`links`.`security` AS `security`,
			`links`.`protocol`,
			`links`.`tspeed`
			FROM
			`links`
			Left Join `nodes` AS `as n1` ON `links`.`node_id` = `as n1`.`id` 
			Left Join `nodes` AS `as n2` ON `links`.`peer_node_id` = `as n2`.`id`
			Inner Join `areas` ON `as n1`.`area_id` = `areas`.`id`
			Inner Join `regions` ON `areas`.`region_id` = `regions`.`id`
			WHERE
			`links`.`type` =  'p2p' AND
			`links`.`ip` <>  '0'
			ORDER BY
			`regions`.`dns_suffix` ASC
	";
	$q = mysql_query($query, $mysql_link);
	echo mysql_error();
	while ($ret = mysql_fetch_assoc($q)) {
		#157.122.17.10.in-addr.arpa. PTR gw-THESSALONIKI.thmmy.the.wn.
		#242.1.126.10.in-addr.arpa.	IN	PTR	test.wind.wn.
		$ret2 = explode(".", long2ip($ret['decip']));
		$ret2 = $ret2[3].".".$ret2[2].".".$ret2[1].".".$ret2[0].".".$vars['dns']['reverse_zone'];
		#/etc/bind/10.in-addr.arpa:162: warning: gw-.anthemous-100.pol.wn: bad name (check-names)
		#debug if empty replace text	
		if($ret['this']==null){$ret['this']="UNKNOWN";}
		if($ret['gw']==null){$ret['gw']="UNKNOWN";}
    	if(($ret['tspeed']==null)||($ret['tspeed']=="")){$ret['tspeed']="unknown";}
		
		if($ret['protocol']=='VPN'){$linktype="-VPN";}elseif($ret['protocol']=='IEEE 802.3 (Ethernet)'){$linktype="-ETHERNET";}else{$linktype="";}
		if($ret['security']=='sec_active'){
		$replace['PTR'] .= $ret2."in-addr.arpa. IN PTR gw-".$ret['gw'].".".$ret['this']."-".$ret['tspeed']."MBit-id".$ret['windid'].$linktype."-secure.".strtolower($ret['city']).".\n";}
		else{
		$replace['PTR'] .= $ret2."in-addr.arpa. IN PTR gw-".$ret['gw'].".".$ret['this']."-".$ret['tspeed']."MBit-id".$ret['windid'].$linktype.".".strtolower($ret['city']).".\n";
		}
	}
	
	
	

}

## ECHO ZONE
#echo replace($replace, file_get_contents($conf['shema']));
#@#fix
$output= replace($replace, file_get_contents($poller_path."10.in-addr.arpa-add.schema"));
echo $output;

mysql_close($mysql_link);

?>