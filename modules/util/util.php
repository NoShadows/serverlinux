<?php
/*
 *
 * OGP - Open Game Panel
 * Copyright (C) Copyright (C) 2008 - 2012 The OGP Development Team
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
 
 
function exec_ogp_module() 
{
?>
<h2>Util</h2>
	<table style="margin-left:auto;margin-right:auto">
		<tr style="background-color:black">
			<td style="background-color:cyan; text-align:center;">
				<h1>Add an admin on SourceMod</h1>
			</td>
		</tr>
		<tr >	
			<td style="background-color:cyan; text-align:center;">
			<?php  require("modules/util/sm_admin.php"); ?>
			</td>
		</tr>
		<tr style="background-color:black">
			<td style="background-color:orange; text-align:center;">
				<h1>Add an admin on Mani Admin Plugin</h1>
			</td>
		</tr>
		<tr >	
			<td style="background-color:orange; text-align:center;">
			<?php  require("modules/util/ma_admin.php"); ?>
			</td>
		</tr>
		<tr style="background-color:black">
			<td style="background-color:green; text-align:center;">
				<h1>Ping Servers</h1>
			</td>
		</tr>
		<tr>
			<td style="background-color:green; text-align:center;">
				<?php  require("modules/util/ping.php"); ?>
			</td>
		</tr>
		<tr style="background-color:DarkSlateGray">
			<td style="background-color:DarkSlateGray;text-align:center;">
				<h1 style="color:white;" >SteamID Converter</h1>
			</td>
		</tr>
		<tr>
			<td>
			<?php  require("modules/util/steamid_converter.php"); ?>
			</td>
		</tr>
		<tr>
			<td>
				&nbsp;</b><br><br>
			</td>
		</tr>
	</table>
<?php
}
?>