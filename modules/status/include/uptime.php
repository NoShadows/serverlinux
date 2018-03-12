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
include_once("modules/status/config.php");
if ($os == "windows")
{
	$upsince = filemtime($pagefilelocation);
	$uptime = (time() - $upsince);
}
elseif ($os == "linux" or $os == "cygwin")
{
	if( isset($_GET['remote_server_id']) )
	{
		require_once('includes/lib_remote.php');
		$rhost_id = $_GET['remote_server_id'];
		$remote_server = $db->getRemoteServer($rhost_id);
		$remote = new OGPRemoteLibrary($remote_server['agent_ip'], $remote_server['agent_port'], $remote_server['encryption_key'], $remote_server['timeout']);
		list($uptime,$upsince) = $remote->shell_action('get_uptime', 'seconds');
	}
	else
	{
		$uptime = round(current(explode(" ", exec("cat /proc/uptime"))));
		$upsince = (time() - $uptime);
	}
}
$days = floor($uptime / (24 * 3600));
$uptime = $uptime - ($days * (24 * 3600));
$hours = floor($uptime / (3600));
$uptime = $uptime - ($hours * (3600));
$minutes = floor($uptime / (60));
$uptime = $uptime - ($minutes * 60);
$seconds = $uptime;
$days = $days != 1 ? $days . ' Days' : $days . ' Day';
$hours = $hours != 1 ? $hours . ' Hours' : $hours . ' Hour';
$minutes = $minutes != 1 ? $minutes . ' Minutes' : $minutes . ' Minute';
$seconds = $seconds != 1 ? $seconds . ' Seconds' : $seconds . ' Second';
if ($days == 0) {
	$days = "";
}
if ($hours == 0) {
	$hours = "";
}
if ($minutes == 0) {
	$minutes = "";
}
if ($seconds == 0) {
	$seconds = "";
}
$indexuptime = $days . ' ' . $hours . ' ' . $minutes . ' ' . $seconds;
$indexuptimesince = date('F jS, Y. h:i A', $upsince);
?>