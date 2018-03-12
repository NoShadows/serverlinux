<?php /* Smarty version Smarty3rc4, created on 2016-11-02 03:20:30
         compiled from "/srv/www/htdocs/ts3wi/templates/new/servertraffic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114886628258195b7eac86a5-56810109%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bac462ab9d7e0a2cbfb16e5401c7c8bd75a0855c' => 
    array (
      0 => '/srv/www/htdocs/ts3wi/templates/new/servertraffic.tpl',
      1 => 1467056337,
    ),
  ),
  'nocache_hash' => '114886628258195b7eac86a5-56810109',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!isset($_smarty_tpl->getVariable('sid')->value)){?>
	<?php if (!isset($_GET['refresh'])||$_GET['refresh']=='on'){?>
	<meta http-equiv="refresh" content="3; URL=index.php?site=servertraffic" />
	<?php }?>
	<table align="center" style="width:50%" class="border" cellpadding="1" cellspacing="0">
		<tr>
			<td style="width:100%" class="thead" colspan="3"><?php echo $_smarty_tpl->getVariable('lang')->value['instancetraffic'];?>
</td>
		</tr>
		<tr>
			<td style="width:33%" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['description'];?>
</td>
			<td style="width:33%" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['incoming'];?>
</td>
			<td style="width:33%" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['outgoing'];?>
</td>
		</tr>
		<tr>
			<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['packetstransfered'];?>
</td>
			<td class="green1 center"><?php echo $_smarty_tpl->getVariable('hostinfo')->value['connection_packets_received_total'];?>
</td>
			<td class="green1 center"><?php echo $_smarty_tpl->getVariable('hostinfo')->value['connection_packets_sent_total'];?>
</td>
		</tr>
		<tr>
			<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['bytestransfered'];?>
</td>
			<td class="green2 center"><?php echo $_smarty_tpl->getVariable('hostinfo')->value['connection_bytes_received_total'];?>
</td>
			<td class="green2 center"><?php echo $_smarty_tpl->getVariable('hostinfo')->value['connection_bytes_sent_total'];?>
</td>
		</tr>
		<tr>
			<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['bandwidthlastsecond'];?>
</td>
			<td class="green1 center"><?php echo $_smarty_tpl->getVariable('hostinfo')->value['connection_bandwidth_received_last_second_total'];?>
 /s</td>
			<td class="green1 center"><?php echo $_smarty_tpl->getVariable('hostinfo')->value['connection_bandwidth_sent_last_second_total'];?>
 /s</td>
		</tr>
		<tr>
			<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['bandwidthlastminute'];?>
</td>
			<td class="green2 center"><?php echo $_smarty_tpl->getVariable('hostinfo')->value['connection_bandwidth_received_last_minute_total'];?>
 /s</td>
			<td class="green2 center"><?php echo $_smarty_tpl->getVariable('hostinfo')->value['connection_bandwidth_sent_last_minute_total'];?>
 /s</td>
		</tr>
		<tr>
			<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['filetransferbandwidth'];?>
</td>
			<td class="green1 center"><?php echo $_smarty_tpl->getVariable('hostinfo')->value['connection_filetransfer_bandwidth_received'];?>
 /s</td>
			<td class="green1 center"><?php echo $_smarty_tpl->getVariable('hostinfo')->value['connection_filetransfer_bandwidth_sent'];?>
 /s</td>
		</tr>
		<tr>
			<td colspan="3">
			<?php if (!isset($_GET['refresh'])||$_GET['refresh']=='on'){?>
				<a href="index.php?site=servertraffic&amp;refresh=off"><?php echo $_smarty_tpl->getVariable('lang')->value['stoprefresh'];?>
</a>
			<?php }else{ ?>
			<a href="index.php?site=servertraffic&amp;refresh=on"><?php echo $_smarty_tpl->getVariable('lang')->value['autorefresh'];?>
</a>
			<?php }?>
			</td>
		</tr>
	</table>
<?php }else{ ?>
	<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_info_view'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_info_view'])){?>
		<table align="center" style="width:50%" class="border" cellpadding="1" cellspacing="0">

		<tr>
			<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['error'];?>
</td>
		</tr>
		<tr>
			<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['nopermissions'];?>
</td>
		</tr>
		</table>
	<?php }else{ ?>
	<?php if (!isset($_GET['refresh'])||$_GET['refresh']=='on'){?>
		<meta http-equiv="refresh" content="3; URL=index.php?site=servertraffic&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
" />
	<?php }?>
	<table align="center" style="width:50%" class="border" cellpadding="1" cellspacing="0">
		<tr>
			<td style="width:100%" class="thead" colspan="3"><?php echo $_smarty_tpl->getVariable('lang')->value['virtualtraffic'];?>
</td>
		</tr>
		<tr>
			<td style="width:33%" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['description'];?>
</td>
			<td style="width:33%" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['incoming'];?>
</td>
			<td style="width:33%" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['outgoing'];?>
</td>
		</tr>
		<tr>
			<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['packetstransfered'];?>
</td>
			<td class="green1 center"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['connection_packets_received_total'];?>
</td>
			<td class="green1 center"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['connection_packets_sent_total'];?>
</td>
		</tr>
		<tr>
			<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['bytestransfered'];?>
</td>
			<td class="green2 center"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['connection_bytes_received_total'];?>
</td>
			<td class="green2 center"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['connection_bytes_sent_total'];?>
</td>
		</tr>
		<tr>
			<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['bandwidthlastsecond'];?>
</td>
			<td class="green1 center"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['connection_bandwidth_received_last_second_total'];?>
 /s</td>
			<td class="green1 center"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['connection_bandwidth_sent_last_second_total'];?>
 /s</td>
		</tr>
		<tr>
			<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['bandwidthlastminute'];?>
</td>
			<td class="green2 center"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['connection_bandwidth_received_last_minute_total'];?>
 /s</td>
			<td class="green2 center"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['connection_bandwidth_sent_last_minute_total'];?>
 /s</td>
		</tr>
		<tr>
			<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['filetransferbandwidth'];?>
</td>
			<td class="green1 center"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['connection_filetransfer_bandwidth_received'];?>
 /s</td>
			<td class="green1 center"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['connection_filetransfer_bandwidth_sent'];?>
 /s</td>
		</tr>
		<tr>
			<td colspan="3">
			<?php if (!isset($_GET['refresh'])||$_GET['refresh']=='on'){?>
			<a href="index.php?site=servertraffic&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
&amp;refresh=off"><?php echo $_smarty_tpl->getVariable('lang')->value['stoprefresh'];?>
</a>
			<?php }else{ ?>
			<a href="index.php?site=servertraffic&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
&amp;refresh=on"><?php echo $_smarty_tpl->getVariable('lang')->value['autorefresh'];?>
</a>
			<?php }?>
			</td>
		</tr>
	</table>
<?php }?>
<?php }?>