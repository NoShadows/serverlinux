<?php
/*
 *
 * OGP - Open Game Panel
 * Copyright (C) 2008 - 2014 The OGP Development Team
 *
 * http://www.opengamepanel.org/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 */

require_once("modules/config_games/server_config_parser.php");
require_once('includes/lib_remote.php');
require_once('modules/fastdl/functions.php');
function exec_ogp_module() 
{
	global $db,$view;
	echo "<h2>".fast_dl."</h2>\n";
	$isAdmin = $db->isAdmin($_SESSION['user_id']);
	if($isAdmin)
		$server_homes = $db->getIpPorts();
	else
		$server_homes = $db->getIpPortsForUser($_SESSION['user_id']);
	if( $server_homes === FALSE )
	{
		print_failure(no_game_homes_assigned);
		return;
	}
	echo "<p>".create_alias_for." :</p>";
	create_home_selector_address($_GET['m'], $_GET['p'], $server_homes);

	if( isset( $_GET['home_id-mod_id-ip-port'] ) and $_GET['home_id-mod_id-ip-port'] != "" )
	{
		list($home_id, $mod_id, $ip, $port) = explode( "-", $_GET['home_id-mod_id-ip-port'] );
		$server_home = $db->getGameHomeByIP($ip, $port);
		if ( !$server_home )
			return;
		$remote = new OGPRemoteLibrary($server_home['agent_ip'], 
									   $server_home['agent_port'], 
									   $server_home['encryption_key'], 
									   $server_home['timeout']);
		$fastdl_info = $remote->fastdl_get_info();
		if( preg_match("/^(127|0)/",$fastdl_info['ip']) )
			$fastdl_info['ip'] = $server_home['agent_ip'];
		$fastdl_settings = get_fastdl_settings($server_home['remote_server_id']);
		$address = ($fastdl_info['port'] == '80' OR ($fastdl_settings and $fastdl_settings['port_forwarded_to_80'] == '1')) ? $fastdl_info['ip'] : $fastdl_info['ip'].":".$fastdl_info['port'];
		$alias = isset( $_POST['alias'] ) ? $_POST['alias'] : str_replace(".","_",$ip)."_$port";
		$path = isset( $_POST['path'] ) ? $_POST['path'] : "fastdl";
		$aliases = $remote->fastdl_get_aliases();
		if( isset( $_POST['delete'] ) )
		{
			$rmalias = $_POST['rmalias'];
			if( $remote->fastdl_del_alias($rmalias) !== -1 and 
				$remote->rfile_exists($aliases[$rmalias]['home']) === 1 
				and isset($_POST['remove']) )
				$remote->shell_action('remove_recursive', $aliases[$rmalias]['home']);
			$aliases = $remote->fastdl_get_aliases();
		}
		$aliases = $aliases === -1 ? array() : $aliases;
		if( isset( $_POST['create'] ) )
		{
			if(!array_key_exists($alias , $aliases))
			{
				$home = clean_path($server_home['home_path']."/".clean_string($_POST['path']));
				$alias = clean_string($_POST['alias']);
				if( $remote->rfile_exists( $home ) !== 1 )
				{
					$remote->shell_action('create_dir', $home);
				}
				$index = createIndexString( get_lang_f( 
						 "fast_download_service_for", 
						 $server_home["home_name"] ), 
						 $view->charset );
				$file = clean_path("$home/index.html");
				$remote->remote_writefile($file, $index);
				$rules = get_access_rules($server_home['home_cfg_id']);
				if( $remote->fastdl_add_alias($alias,$home,$rules['match_file_extension'],$rules['match_client_ip']) == 1 )
				{
					print_success(success);
				}
				else
				{
					print_failure(failure);
				}
			}
			else
				print_failure(get_lang_f('alias_already_exists',$alias));
			$aliases = $remote->fastdl_get_aliases();
		}

		$alias_info = get_alias_by_home_path($server_home['home_path'], $aliases);
		if(is_array($alias_info))
		{
			$home = clean_path("/".preg_replace("#".preg_quote($server_home['home_path'])."#", "", $alias_info['home']));
			$url = "<a href='http://$address/".$alias_info['alias']."' target='_blank' >http://$address/".$alias_info['alias']."</a>";
			echo "<p>".at_url.
				 " : <b style='color:black;background:#FFF;padding:2.5px 0 1px 0;".
				 "border:1.5px solid gray;' >$url</b></p><p>".
				 to_the_path.
				 " : <b style='color:black;background:#FFF;padding:2.5px 0 1px 0;".
				 "border:1.5px solid gray;' >".$home."</b></p>".
				 "<form method=POST >".
				 "<input type=hidden name=rmalias value='".$alias_info['alias']."'/>".
				 "<input type=checkbox name=remove />".remove_folder."<br>".
				 "<input type=submit name=delete value='".delete_alias."' />".
				 "</form>";
		}
		else
		{
			echo "<form method=POST ><p>".at_url.
				 " :</p><b style='color:black;background:#FFF;padding:2.5px 0 1px 0;".
				 "border:1.5px solid gray;' >http://$address/</b>".
				 "<input type=text name=alias value='$alias' /><br><p>".
				 to_the_path." :</p><b style='color:black;background:#FFF;padding:2.5px 0 1px 0;".
				 "border:1.5px solid gray;' >/</b>".
				 "<input type=text name=path value='$path' /><br>".
				 "<input type=submit name=create value='".create_alias
				 ."'/>\n</form>";
		}
	} 
}
?>