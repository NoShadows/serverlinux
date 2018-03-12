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
						  "Dystopia",
						  "Garrys Mod",
						  "Half-Life 2: Deathmatch",
						  "Hidden: Source",
						  "Pirates, Vikings and Knights II",
						  "Team Fortress 2",
						  "Team Fortress 2 Beta",
						  "Left 4 Dead",
						  "Left 4 Dead 2" );


$admin_flags = array( "a" => "Reserved slot access.",
					  "b" => "Generic admin; required for admins.",
					  "c" => "Kick other players.",
					  "d" => "Ban other players.",
					  "e" => "Remove bans.",
					  "f" => "Slay/harm other players.",
					  "g" => "Change the map or major gameplay features.",
					  "h" => "Change most cvars.",
					  "i" => "Execute config files.",
					  "j" => "Special chat privileges.",
					  "k" => "Start or create votes.",
					  "l" => "Set a password on the server.",
					  "m" => "Use RCON commands.",
					  "n" => "Change sv_cheats or use cheating commands." );

$i = 0;		
foreach ($server_homes as $server_home)
{
	if ( in_array( $server_home['game_name'], $supported_games ) )
		$sm_admin_server_homes[$i] = $server_home;
	$i++;
}
if( !isset( $_GET['sm_admin']) )
{
	$select = $_GET['home_id-mod_id-ip-port'];
	unset( $_GET['home_id-mod_id-ip-port'] );
}
create_home_selector_address("util","",$sm_admin_server_homes);

?>
<script type="text/javascript">
var theForm = document.forms['select'];
var input = document.createElement('input');
    input.type = 'hidden';
    input.name = 'sm_admin';
    theForm.appendChild(input);
</script>
</td>
</tr>
<?php
if ( empty( $_GET['home_id-mod_id-ip-port'] ) )
	 unset( $_GET['home_id-mod_id-ip-port'] );
if( isset( $_GET['home_id-mod_id-ip-port'] ) and isset( $_GET['sm_admin'] ) )
{
	$pieces = explode( "-", $_GET['home_id-mod_id-ip-port'] );
	$home_id = $pieces[0];
	$mod_id = $pieces[1];
	$ip = $pieces[2];
	$port = $pieces[3];
		
	if($isAdmin) 
		$server_home = $db->getGameHome($home_id);
	else
		$server_home = $db->getUserGameHome($_SESSION['user_id'],$home_id);

	$_SESSION['inmunityLvl'] = $_POST['ainmunity'];
	if(isset($_POST['sm_admin']))
	{
		if($_POST['asteamid'])
			print_failure('A steam_id is needed!');
		
		$flagsStr = "";
		foreach($_POST as $key => $val)
		{
			if(preg_match('/flag_/',$key))
				$flagsStr .= $val;
		}
		$inmunityLvl = $_POST['ainmunity'] != '0' ? $_POST['ainmunity'].':' : "";
		if($_POST['steamid'] == "" or $flagsStr == "")
		{
			if($_POST['steamid'] == "")
				print_failure('A steam_id is needed!');
			if($flagsStr == "")
				print_failure('Must select at least 1 flag!');
		}
		else
		{
			$admins_simple_location = $server_home['home_path']."/".$server_home['mods'][$mod_id]['mod_key']."/addons/sourcemod/configs/admins_simple.ini";
			require_once('includes/lib_remote.php');
			$remote = new OGPRemoteLibrary($server_home['agent_ip'], $server_home['agent_port'], $server_home['encryption_key'], $server_home['timeout']);
			if($remote->rfile_exists($admins_simple_location) != 1)
				print_failure("SourceMod is not properly installed in your server,<br>/".$server_home['mods'][$mod_id]['mod_key']."/addons/sourcemod/configs/admins_simple.ini does not exist!");
			else
			{
				$remote->remote_readfile($admins_simple_location,$file_content);
				
				$replace = FALSE;
				if(preg_match("/".$_POST['steamid']."/i",$file_content))
					$replace = TRUE;
					
				if($replace)
					$file_content = preg_replace("/.*".$_POST['steamid'].".*/i","\"".$_POST['steamid']."\"\t\t\"$inmunityLvl$flagsStr\"",$file_content);
				else
					$file_content .= "\n\"".$_POST['steamid']."\"\t\t\"$inmunityLvl$flagsStr\"";
				
				$remote->remote_writefile($admins_simple_location, $file_content);
				print_success("Admin added/changed successfully at admins_simple.ini");
				$remote_retval = $remote->remote_send_rcon_command( $server_home['home_id'], $ip, $port, 'rcon2', $server_home['control_password'],'',"sm_reloadadmins",$return);
				if ( $remote_retval === -1 )
				{
					print_failure("Failed to reload admins, the server may be down or the agent is offline.");
				}
				elseif ( $remote_retval === 1 )
				{
					if( preg_match('/Admin cache has been refreshed/i',$return) )
						print_success("Admin cache has been refreshed.");
					else
						print_failure("SourceMod is not properly installed in your server, the error was:<br><xmp>".$return."</xmp>");
				}
				elseif ( $remote_retval === -10 )
				{
					print_failure("You must set the control password (rcon password)<br>in order to reload admins without restarting the server,<br>the new admin will be loaded once the server is restarted.");
				}
			}
		}
	}
?>
<tr>
<td>
<form action="" method="post">
<tr>
<td>
Steam_ID
<input type="text" name="steamid" value="<?php echo (isset($_POST['steamid']) and $_POST['steamid'] != "") ? $_POST['steamid'] : "";?>" />
</td>
</tr>
<tr>
<td>
Inmunity level
<input type="number" name="ainmunity" min="0" max="99" value="<?php echo isset($_SESSION['inmunityLvl']) ? $_SESSION['inmunityLvl'] : "99";?>"/><br>
<em>Every admin can have an arbitrary immunity value assigned to them.</em>
<br>
<em>Whether an admin can target another admin depends on who has a higher immunity value.</em>
</td>
</tr>
<tr>
<td>
Admin Flags
<?php
$selected = ( isset( $_POST['flags'] ) and $_POST['flags'] == "custom" ) ? "selected='selected'" : "";
echo "<select name='flags' onchange='this.form.submit();'>\n".
	 "<option value='z' >Root Admin</option>\n".
	 "<option value='custom' $selected>Customize Flags</option>\n".
	 "</select>\n<br>\n";
if( isset( $_POST['flags'] ) and $_POST['flags'] == "custom" )
{
	foreach($admin_flags as $flag => $desc )
	{
		echo "<input type='checkbox' name='flag_$flag' value='$flag' />$desc\n<br>\n";
	}
}
else
	echo "<input type='hidden' name='flag_z' value='z' />";
?>
</td>
</tr>
<tr>
<td>
<input name="sm_admin" value="ADD ADMIN" type="submit"/>
</form>
</td>
</tr>
<?php
}
else
	$_GET['home_id-mod_id-ip-port'] = $select;
?>
</table>