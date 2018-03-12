<?php
/*
 *
 * OGP - Open Game Panel
 * Copyright (C) Copyright (C) 2008 - 2013 The OGP Development Team
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

function exec_ogp_module() {
	global $db, $view;
	require_once('includes/lib_remote.php');
	$home_id = $_GET['home_id'];
	$y = isset($_GET['y']) ? $_GET['y'] : "";
	$files = isset($_GET['files']) ? $_GET['files'] : "";
	$force = isset($_GET['force']) ? $_GET['force'] : "";

	$home_info = $db->getGameHomeWithoutMods($home_id);

	if( $home_info === FALSE )
	{
		print_failure("User home_id $home_id not found.");
		$view->refresh("?m=user_games");
		return;
	}
	
	$remote = new OGPRemoteLibrary($home_info['agent_ip'], $home_info['agent_port'], $home_info['encryption_key'], $home_info['timeout']);
	$agent_online = $remote->status_chk() === 1;
	
	if($y != 'y')
	{
		echo "<p>".get_lang_f('sure_to_delete_serverid_from_remoteip_and_directory', 
							  $home_info['home_id'], $home_info['agent_ip'], $home_info['home_path'])."</p>";
		if($agent_online)
		{
			$r = $remote->rfile_exists($home_info['home_path']);
			if($r == 1)
			{
				echo "<p><a href=\"?m=user_games&amp;p=del&amp;y=y&amp;home_id=$home_id&amp;files=y\">" . 
					 yes_and_delete_the_files . "</a> | ";		
			}
		}
		else
			print_failure(agent_offline . " " . remove_it_anyway . "?");
		echo "<a href=\"?m=user_games&amp;p=del&amp;y=y&amp;home_id=$home_id\">".
		yes . "</a> | <a href=\"?m=user_games\">".
		no . "</a></p>";
		return;
	}

	if ( $db->IsFtpEnabled($home_id) and $force != 'y' and $agent_online )
	{
		$ftp_login = isset($home_info['ftp_login']) ? $home_info['ftp_login'] : $home_id;
		if ( $remote->ftp_mgr("userdel", $ftp_login) === 0 )
		{
			$del_files = $files == 'y' ? '&amp;files=y' : '';
			print_failure(failed_to_remove_ftp_account_from_remote_server);
			echo "<p>" . remove_it_anyway . "<p>
				<a href=\"?m=user_games&amp;p=del&amp;y=y&amp;force=y&amp;home_id=$home_id$del_files\">".
				yes . "</a> | <a href=\"?m=user_games\">".
				no . "</a></p>";
			return;
		}
	}
		
	if($y == 'y')
	{
		if($agent_online)
		{
			$assigned = $db->getHomeIpPorts($home_id);
			if( !empty($assigned) )
			{
				foreach($assigned as $address)
				{
					if($remote->rfile_exists( "startups/".$address['ip']."-".$address['port'] ) === 1)
					{
						require_once("modules/gamemanager/home_handling_functions.php");
						require_once("modules/config_games/server_config_parser.php");
						exec_operation('stop', $home_id, FALSE, $address['ip'], $address['port']);
						break;
					}
				}
			}
		}
		
		if ( $db->deleteGameHome($home_id) === FALSE )
		{
			print_failure(failed_to_remove_gamehome_from_database);
			return;
		}
		else
		{
			print_success(get_lang_f('successfully_deleted_game_server_with_id', $home_info['home_id']));
			$db->logger(get_lang_f('successfully_deleted_game_server_with_id', $home_info['home_id']));
		}
	}

	if($files == 'y' and $agent_online)
	{
		if($remote->remove_home($home_info['home_path']) == 1)
		{
			print_success(get_lang_f('sucessfully_deleted', $home_info['home_path']));
			$db->logger(get_lang_f('sucessfully_deleted', $home_info['home_path']));
		}
		else
		{
			print_failure(get_lang_f('the_agent_had_a_problem_deleting', $home_info['home_path']));
		}
	}
	$view->refresh("?m=user_games");
}
?>