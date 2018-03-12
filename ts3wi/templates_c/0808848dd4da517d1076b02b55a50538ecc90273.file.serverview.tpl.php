<?php /* Smarty version Smarty3rc4, created on 2016-11-10 12:53:48
         compiled from "/var/www/html/ts3wi/templates/new/serverview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169529947658245fcc0c6b79-89011540%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0808848dd4da517d1076b02b55a50538ecc90273' => 
    array (
      0 => '/var/www/html/ts3wi/templates/new/serverview.tpl',
      1 => 1467056337,
    ),
  ),
  'nocache_hash' => '169529947658245fcc0c6b79-89011540',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/ts3wi/libs/Smarty/libs/plugins/modifier.date_format.php';
?><?php if (!empty($_smarty_tpl->getVariable('error')->value)||!empty($_smarty_tpl->getVariable('noerror')->value)){?>
<table>
	<?php if (!empty($_smarty_tpl->getVariable('error')->value)){?>
	<tr>
		<td class="error"><?php echo $_smarty_tpl->getVariable('error')->value;?>
</td>
	</tr>
	<?php }?>
	<?php if (!empty($_smarty_tpl->getVariable('noerror')->value)){?>
	<tr>
		<td class="noerror"><?php echo $_smarty_tpl->getVariable('noerror')->value;?>
</td>
	</tr>
	<?php }?>
</table>
<?php }?>
<table style="width:100%" cellpadding="1" cellspacing="0">
<?php if ($_smarty_tpl->getVariable('newserverversion')->value!==true&&!empty($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_version'])){?>
	<tr>
		<td class="green1 warning center" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['serverupdateav'];?>
<?php echo $_smarty_tpl->getVariable('newserverversion')->value;?>
</td>
	</tr>
<?php }?>
<tr valign="top">

<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_info_view'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_info_view'])){?>
	<td style="width:50%">
	<table class="border" style="width:100%;" cellpadding="1" cellspacing="0">
		<tr>
			<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['error'];?>
</td>
		</tr>
		<tr>
			<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['nopermissions'];?>
</td>
		</tr>
	</table>
	</td>
<?php }else{ ?>
	<td style="width:50%">
	<form method="post" action="index.php?site=serverview&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
">
	<table class="border" style="width:100%;" cellpadding="1" cellspacing="0">
		<tr>
			<td class="thead" colspan="7"><?php echo $_smarty_tpl->getVariable('lang')->value['msgtoserver'];?>
</td>
		</tr>
		<tr>
			<td class="green1"><textarea style="width:375px" type="text" name="msgtoserver" size="100"></textarea></td>
			<td class="green1">
			<input type="hidden" name="sid" value="<?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_id'];?>
" />
			<input style="width:60px" class="button" type="submit" name="sendmsg" value="<?php echo $_smarty_tpl->getVariable('lang')->value['send'];?>
" />
			</td>
		</tr>
	</table>
	</form>
	<br />
	<table style="width:100%" class="border" cellpadding="1" cellspacing="0">
		<tr>
			<td class="center">
			<form method="post" action="index.php?site=serverview&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
">
			<input type="hidden" name="sid" value="<?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_id'];?>
" />
			<input class="start" type="submit" name="start" value="" title="<?php echo $_smarty_tpl->getVariable('lang')->value['start'];?>
" />
			</form>
			</td>
			<td class="center">
			<form method="post" action="index.php?site=serverview&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
">
			<input type="hidden" name="sid" value="<?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_id'];?>
" />
			<input class="stop" type="submit" name="stop" value="" title="<?php echo $_smarty_tpl->getVariable('lang')->value['stop'];?>
" onclick="return confirm('<?php echo $_smarty_tpl->getVariable('lang')->value['stopservermsg'];?>
')" />
			</form>
			</td>
		</tr>
			<tr>
				<td class="thead" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['virtualserver'];?>
 #<?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_id'];?>
</td>
			</tr>
			<tr>
				<td class="maincat" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['basics'];?>
</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['autostart'];?>
:</td>
				<td class="green1">
				<?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_autostart']==1){?>
					<?php echo $_smarty_tpl->getVariable('lang')->value['yes'];?>

				<?php }else{ ?>
					<?php echo $_smarty_tpl->getVariable('lang')->value['no'];?>

				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['serveraddress'];?>
:</td>
				<td class="green2"><?php echo $_SESSION['server_ip'];?>
:<?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_port'];?>
</td>
			</tr>
			<tr>
				<td class="green1" style="width:50%"><?php echo $_smarty_tpl->getVariable('lang')->value['minclientversion'];?>
:</td>
				<td class="green1" style="width:50%"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_min_client_version'];?>
</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['uniqueid'];?>
:</td>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_unique_identifier'];?>
</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['name'];?>
:</td>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_name'];?>
</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['welcomemsg'];?>
:</td>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_welcomemessage'];?>
</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['version'];?>
:</td>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_version'];?>
</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['platform'];?>
:</td>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_platform'];?>
</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['created'];?>
:</td>
				<td class="green1"><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_created'],"%d.%m.%Y - %H:%M:%S");?>
</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['status'];?>
:</td>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_status'];?>
</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['runtime'];?>
:</td>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_uptime'];?>

				</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['clients'];?>
:</td>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_clientsonline']-$_smarty_tpl->getVariable('serverinfo')->value['virtualserver_queryclientsonline'];?>
 / <?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_maxclients'];?>
</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['queryclients'];?>
:</td>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_queryclientsonline'];?>
</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['maxreservedslots'];?>
:</td>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_reserved_slots'];?>
</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['showonweblist'];?>
:</td>
				<td class="green1">
				<?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_weblist_enabled']==1){?>
					<?php echo $_smarty_tpl->getVariable('lang')->value['yes'];?>

				<?php }else{ ?>
					<?php echo $_smarty_tpl->getVariable('lang')->value['no'];?>

				<?php }?>				
				</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['codecencryptionmode'];?>
:</td>
				<td class="green2">
				<?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_codec_encryption_mode']==0){?>
				<?php echo $_smarty_tpl->getVariable('lang')->value['codecencryptionmodeindi'];?>

				<?php }elseif($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_codec_encryption_mode']==1){?>
				<?php echo $_smarty_tpl->getVariable('lang')->value['codecencryptionmodegoff'];?>

				<?php }elseif($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_codec_encryption_mode']==2){?>
				<?php echo $_smarty_tpl->getVariable('lang')->value['codecencryptionmodegon'];?>

				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['channel'];?>
:</td>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_channelsonline'];?>
</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['minclientschan'];?>
:</td>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_min_clients_in_channel_before_forced_silence'];?>
</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['clientsdimm'];?>
:</td>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_priority_speaker_dimm_modificator'];?>
</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['passwordset'];?>
:</td>
				<td class="green2">
				<?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_flag_password']==1){?>
					<?php echo $_smarty_tpl->getVariable('lang')->value['yes'];?>

				<?php }else{ ?>
					<?php echo $_smarty_tpl->getVariable('lang')->value['no'];?>

				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['securitylevel'];?>
:</td>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_needed_identity_security_level'];?>
</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['iconid'];?>
:</td>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_icon_id'];?>
</td>
			</tr>
			<tr>
				<td class="maincat" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['standardgroups'];?>
</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['servergroup'];?>
:</td>
				<td class="green1">
				<?php if (!empty($_smarty_tpl->getVariable('servergroups')->value)){?>
					<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('servergroups')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
						<?php if ($_smarty_tpl->tpl_vars['value']->value['sgid']==$_smarty_tpl->getVariable('serverinfo')->value['virtualserver_default_server_group']){?>
							(<?php echo $_smarty_tpl->tpl_vars['value']->value['sgid'];?>
)<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>

						<?php }?>
					<?php }} ?>
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['channelgroup'];?>
:</td>
				<td class="green2">
				<?php if (!empty($_smarty_tpl->getVariable('channelgroups')->value)){?>
					<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('channelgroups')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
						<?php if ($_smarty_tpl->tpl_vars['value']->value['cgid']==$_smarty_tpl->getVariable('serverinfo')->value['virtualserver_default_channel_group']){?>
							(<?php echo $_smarty_tpl->tpl_vars['value']->value['cgid'];?>
)<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>

						<?php }?>
					<?php }} ?>
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['chanadmingroup'];?>
:</td>
				<td class="green1">
				<?php if (!empty($_smarty_tpl->getVariable('channelgroups')->value)){?>
					<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('channelgroups')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
						<?php if ($_smarty_tpl->tpl_vars['value']->value['cgid']==$_smarty_tpl->getVariable('serverinfo')->value['virtualserver_default_channel_admin_group']){?>
							(<?php echo $_smarty_tpl->tpl_vars['value']->value['cgid'];?>
)<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>

						<?php }?>
					<?php }} ?>
				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="maincat" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['host'];?>
</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['hostmessage'];?>
:</td>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_hostmessage'];?>
</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['hostmessageshow'];?>
:</td>
				<td class="green2">
				<?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_hostmessage_mode']=='0'){?>
					<?php echo $_smarty_tpl->getVariable('lang')->value['nomessage'];?>

					<?php }elseif($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_hostmessage_mode']=='1'){?>
					<?php echo $_smarty_tpl->getVariable('lang')->value['showmessagelog'];?>

					<?php }elseif($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_hostmessage_mode']=='2'){?>
					<?php echo $_smarty_tpl->getVariable('lang')->value['showmodalmessage'];?>

					<?php }elseif($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_hostmessage_mode']=='3'){?>
					<?php echo $_smarty_tpl->getVariable('lang')->value['modalandexit'];?>

				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green1" colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['hosturl'];?>
:</td>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_hostbanner_url'];?>
</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['hostbannerurl'];?>
:</td>
				<td class="green2">
				<?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_hostbanner_gfx_url']!=''){?>
				<img style="width:350px" src="<?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_hostbanner_gfx_url'];?>
" alt="" /><br />
				<?php }?>
				<?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_hostbanner_gfx_url'];?>
</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['hostbannerintval'];?>
:</td>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_hostbanner_gfx_interval'];?>
</td>
			</tr>
			<tr>
				<td class="green2" colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['hostbuttongfx'];?>
:</td>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_hostbutton_gfx_url'];?>
</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['hostbuttontooltip'];?>
:</td>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_hostbutton_tooltip'];?>
</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['hostbuttonurl'];?>
:</td>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_hostbutton_url'];?>
</td>
			</tr>
			<tr>
				<td class="maincat" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['autoban'];?>
</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['autobancount'];?>
:</td>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_complain_autoban_count'];?>
</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['autobantime'];?>
:</td>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_complain_autoban_time'];?>
</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['removetime'];?>
:</td>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_complain_remove_time'];?>
</td>
			</tr>
			<tr>
				<td class="maincat" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['antiflood'];?>
</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['pointstickreduce'];?>
:</td>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_antiflood_points_tick_reduce'];?>
</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['pointsneededblockcmd'];?>
:</td>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_antiflood_points_needed_command_block'];?>
</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['pointsneededblockip'];?>
:</td>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_antiflood_points_needed_ip_block'];?>
</td>
			</tr>
			<tr>
				<td class="thead" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['transfers'];?>
</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['upbandlimit'];?>
:</td>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_max_upload_total_bandwidth'];?>
 Byte/s</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['uploadquota'];?>
:</td>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_upload_quota'];?>
 MiB</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['downbandlimit'];?>
:</td>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_max_download_total_bandwidth'];?>
 Byte/s</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['downloadquota'];?>
:</td>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('serverinfo')->value['virtualserver_download_quota'];?>
 MiB</td>
			</tr>
			<tr>
				<td class="maincat" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['logs'];?>
</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['logclient'];?>
:</td>
				<td class="green1">
				<?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_log_client']==1){?>
					<?php echo $_smarty_tpl->getVariable('lang')->value['yes'];?>

				<?php }else{ ?>
					<?php echo $_smarty_tpl->getVariable('lang')->value['no'];?>

				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['logquery'];?>
:</td>
				<td class="green2">
				<?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_log_query']==1){?>
					<?php echo $_smarty_tpl->getVariable('lang')->value['yes'];?>

				<?php }else{ ?>
					<?php echo $_smarty_tpl->getVariable('lang')->value['no'];?>

				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['logchannel'];?>
:</td>
				<td class="green1">
				<?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_log_channel']==1){?>
					<?php echo $_smarty_tpl->getVariable('lang')->value['yes'];?>

				<?php }else{ ?>
					<?php echo $_smarty_tpl->getVariable('lang')->value['no'];?>

				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['logpermissions'];?>
:</td>
				<td class="green2">
				<?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_log_permissions']==1){?>
					<?php echo $_smarty_tpl->getVariable('lang')->value['yes'];?>

				<?php }else{ ?>
					<?php echo $_smarty_tpl->getVariable('lang')->value['no'];?>

				<?php }?>
				</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['logserver'];?>
:</td>
				<td class="green1">
				<?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_log_server']==1){?>
					<?php echo $_smarty_tpl->getVariable('lang')->value['yes'];?>

				<?php }else{ ?>
					<?php echo $_smarty_tpl->getVariable('lang')->value['no'];?>

				<?php }?>	
				</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['logfiletransfer'];?>
:</td>
				<td class="green2">
				<?php if ($_smarty_tpl->getVariable('serverinfo')->value['virtualserver_log_filetransfer']==1){?>
					<?php echo $_smarty_tpl->getVariable('lang')->value['yes'];?>

				<?php }else{ ?>
					<?php echo $_smarty_tpl->getVariable('lang')->value['no'];?>

				<?php }?>	
				</td>
			</tr>			
		</table>
		</td>
		<<?php ?>?php } ?<?php ?>>
		<td style="width:50%" align="center">
		<table style="width:100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>
				<div class="content">
				<?php echo $_smarty_tpl->getVariable('tree')->value;?>

				</div>
				</td>
			</tr>
			<tr>
				<td>
				<?php echo $_smarty_tpl->getVariable('lang')->value['tsviewpubhtml'];?>

				<textarea rows="20" cols="20" style="width:445px; height:100px;" readonly="readonly" class="green1"><?php echo $_smarty_tpl->getVariable('pubtsview')->value;?>
</textarea>
				</td>
			</tr>
		</table>
		</td>
	<?php }?>
	</tr>
</table>
