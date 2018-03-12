<table style="background-color:white;color:blue; margin-left:auto;margin-right:auto">
<tr>
<td>
<?php 
global $db;

$isAdmin = $db->isAdmin( $_SESSION['user_id'] );

if ( $isAdmin )
		$server_homes = $db->getIpPorts();
	else
		$server_homes = $db->getIpPortsForUser($_SESSION['user_id']);
		
$supported_games = array( "Counter Strike Global Offensive",
						  "Counter Strike Source",
						  "Day of Defeat: Source",
						  "Half-Life 2: Deathmatch",
						  "Team Fortress 2",
						  "Team Fortress 2 Beta" );

$i = 0;		
foreach ($server_homes as $server_home)
{
	if ( in_array( $server_home['game_name'], $supported_games ) )
		$ma_admin_server_homes[$i] = $server_home;
	$i++;
}

if( isset( $_GET['sm_admin']) )
	unset( $_GET['home_id-mod_id-ip-port'] );
create_home_selector_address("util","",$ma_admin_server_homes);
?>
</td>
</tr>
<?php
if ( empty( $_GET['home_id-mod_id-ip-port'] ) )
	 unset( $_GET['home_id-mod_id-ip-port'] );
if( isset( $_GET['home_id-mod_id-ip-port']) and !isset( $_GET['sm_admin']) )
{
	$pieces = explode( "-", $_GET['home_id-mod_id-ip-port'] );
	$post_home_id = $pieces[0];
	$post_mod_id = $pieces[1];
	$ip = $pieces[2];
	$port = $pieces[3];

	if (isset($_POST['mani']))
	{
		if($_POST['asteamid'] == "" or $_POST['aname'] == "")
		{
			if($_POST['steamid'] == "")
				print_failure('A steam_id is needed!');
			if($_POST['aname'] == "")
				print_failure('A nickname is needed!');
		}
		else
		{
			if($isAdmin) 
				$server_home = $db->getGameHome($post_home_id);
			else
				$server_home = $db->getUserGameHome($_SESSION['user_id'],$post_home_id);
			
			$asteamid = '"'.$_POST['asteamid'].'"';
			$rcommand = 'ma_client addclient '.$_POST['aname'].'; ma_client addsteam '.$_POST['aname'].' '.$asteamid.'; ma_client setaflag '.$_POST['aname'].' +#';
			require_once('includes/lib_remote.php');
			$remote = new OGPRemoteLibrary($server_home['agent_ip'], $server_home['agent_port'], $server_home['encryption_key'], $server_home['timeout']);
			
			$remote_retval = $remote->remote_send_rcon_command( $server_home['home_id'], $ip, $port, 'rcon2', $server_home['control_password'],'',$rcommand,$return);
			if ( $remote_retval === -1 )
			{
				print_failure("Failed adding admin, the server may be down or the agent is offline.");
			}
			elseif ( $remote_retval === 1 )
			{
				if( preg_match('/Unknown command "ma_client"/i',$return) )
					print_failure("Mani Admin Plugin is not properly installed in your server, the error was:<br><xmp>Unknown command \"ma_client\"</xmp>");
				else
					print_success("Admin added successfully.");
			}
			elseif ( $remote_retval === -10 )
			{
				print_failure("You must set the control password (rcon password) in order to add admins.");
			}
		}
	}
?>
<tr>
<td>
<form action="" method="post">
NickName
<input type="text" name="aname" value="<?php echo (isset($_POST['aname']) and $_POST['aname'] != "") ? $_POST['aname'] : "";?>"/>
</td>
</tr>
<tr>
<td>
Steam_ID
<input type="text" name="asteamid" value="<?php echo (isset($_POST['asteamid']) and $_POST['asteamid'] != "") ? $_POST['asteamid'] : "";?>"/>
</td>
</tr>
<tr>
<td>
<input name="mani" value="ADD ADMIN" type="submit"/>
</form>
</td>
</tr>
<?php
}
?>
</table>