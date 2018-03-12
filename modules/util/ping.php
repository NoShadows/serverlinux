<?php
create_home_selector("util","",$server_homes); 
if( isset( $_GET['home_id']) )
{
	
	if ( isset($_SERVER["REMOTE_ADDR"]) )
	{
		$client_ip = $_SERVER["REMOTE_ADDR"];
	}
	elseif ( isset($_SERVER["HTTP_X_FORWARDED_FOR"]) )
	{
		$client_ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
	} 
	elseif( isset($_SERVER["HTTP_CLIENT_IP"]) )
	{
		$client_ip = $_SERVER["HTTP_CLIENT_IP"]; 
	}
	?>
	<form method="post" action="">
	<input name="ping" type="submit" value="PING SERVER" />
	</form>
	<?php 
	if(isset($_POST['ping']))
	{
		$ip = $client_ip;
		
		if(!empty($ip)) 
		{
			$ping = "";
			$home_info = $db->getGameHomeWithoutMods($server_home['home_id']);
			require_once('includes/lib_remote.php');
			$remote = new OGPRemoteLibrary($home_info['agent_ip'],$home_info['agent_port'],$home_info['encryption_key'],$home_info['timeout']);
			$os = $remote->what_os();
			if(preg_match("/CYGWIN/",$os)) 
			{
				$exec = $remote->exec("ping -n 1 -l 64 ".$ip);
				$ping = end(explode(" ", $exec ));
			}
			else 
			{
				$exec = $remote->exec("ping -c 1 -s 64 -t 64 ".$ip);
				$array = explode("/", end(explode("=", $exec )) );
				$ping = ceil($array[1]) . 'ms';
			}
		}
		?><p style="color:blue;text-align:center;">Server IP: <?php 
		echo $server_home['agent_ip'];
		echo " --> ".$ping." --> ";
		?>Your IP: <?php 
		echo $ip;
		?></p><?php 
	}
}
?>
