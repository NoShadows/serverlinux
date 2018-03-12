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
	
	global $view;
	global $db;

	#This will add a remote host to the list
	if ( isset($_REQUEST['add_remote_host']) )
	{
		$rhost_ip = trim($_POST['remote_host']);
		$rhost_name = trim($_POST['remote_host_name']);
		$rhost_port = trim($_POST['remote_host_port']);
		$rhost_ftp_ip = trim($_POST['remote_host_ftp_ip']);
		$rhost_ftp_port = trim($_POST['remote_host_ftp_port']);
		$encryption_key = trim($_POST['remote_encryption_key']);
		$timeout = trim($_POST['timeout']);
		$use_nat = trim($_POST['use_nat']);
		
		if ( empty($rhost_ip) ){
			print_failure( enter_ip_host );
			$view->refresh("?m=server");
			return;
		}

		if ( !isPortValid($rhost_port) ){
			print_failure( enter_valid_ip );
			$view->refresh("?m=server");
			return;
		}

		require_once('includes/lib_remote.php');

		$remote = new OGPRemoteLibrary($rhost_ip,$rhost_port,$encryption_key,$timeout);
		$status = $remote->status_chk();
		if($status === 0)
		{
			print_failure( agent_offline . "<br>" . could_not_add_server . " " . $rhost_ip );
			echo create_back_button($_GET['m']);
			return;
		}
		elseif($status === -1)
		{
			print_failure( encryption_key_mismatch . "<br>" . could_not_add_server . " " . $rhost_ip );
			echo create_back_button($_GET['m']);
			return;
		}
		
		$rhost_user_name = trim($remote->exec('echo %USERNAME%'));
		if( $rhost_user_name == '%USERNAME%' ) $rhost_user_name = trim($remote->exec('whoami'));
		
		$rhost_id = $db->addRemoteServer($rhost_ip,$rhost_name,$rhost_user_name,$rhost_port,$rhost_ftp_ip,$rhost_ftp_port,$encryption_key,$timeout,$use_nat);
		if ( !$rhost_id )
		{
			print_failure( could_not_add_server ." ".$rhost_ip." ". to_db );
			$view->refresh("?m=server");
			return;
		}

		print_success( added_server ." $rhost_ip ". with_port ." $rhost_port ". to_db_succesfully );

		$iplist = $remote->discover_ips();

		if ( empty($iplist) )
			print_failure( unable_discover ." ".$rhost_ip.". ". set_ip_manually );
		else
		{
			print_success( found_ips ." (".implode(",",$iplist).") ". for_remote_server );
			foreach ( $iplist as $remote_ip )
			{
				$remote_ip = trim($remote_ip);
				if ( empty($remote_ip) )
					continue;

				if ( !$db->addRemoteServerIp($rhost_id,$remote_ip) )
					print_failure( failed_add_ip ." (".$remote_ip.") ". for_remote_server );
			}
		}
		$view->refresh("?m=server");
		return;
	}
}
?>

