<?php /* Smarty version Smarty3rc4, created on 2016-11-02 02:40:35
         compiled from "/srv/www/htdocs/ts3wi/templates/new/server.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1566363278581952234c0475-26138588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90fd44d6b66a54ef95f7246155f21f45b783983c' => 
    array (
      0 => '/srv/www/htdocs/ts3wi/templates/new/server.tpl',
      1 => 1467056337,
    ),
  ),
  'nocache_hash' => '1566363278581952234c0475-26138588',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('hoststatus')->value===false&&$_smarty_tpl->getVariable('serverhost')->value===true){?>
<table>
	<tr>
		<td class="error"><?php echo $_smarty_tpl->getVariable('lang')->value['nohoster'];?>
</td>
	</tr>
</table>
<?php }else{ ?>
<?php if (!empty($_smarty_tpl->getVariable('error')->value)||!empty($_smarty_tpl->getVariable('noerror')->value)){?>
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
<form method="post" action="index.php?site=server">
<table class="border" style="width:100%;" cellpadding="1" cellspacing="0">
	<tr>
		<td class="thead" colspan="7"><?php echo $_smarty_tpl->getVariable('lang')->value['msgtoall'];?>
</td>
	</tr>
	<tr>
		<td class="green1"><textarea style="width:830px" type="text" name="msgtoall" size="100"></textarea></td>
		<td class="green1"><input style="width:60px" class="button" type="submit" name="sendmsg" value="<?php echo $_smarty_tpl->getVariable('lang')->value['send'];?>
" /></td>
	</tr>
</table>
</form>
<br />
<form method="post" name="saction" action="index.php?site=server">
<table class="border" style="width:100%;" cellpadding="1" cellspacing="0">
	<tr>
		<td colspan="8" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['server'];?>
</td>
	</tr>

	<?php if (!empty($_smarty_tpl->getVariable('serverlist')->value)){?>

	<tr>
		<td colspan="8"><?php echo $_smarty_tpl->getVariable('serverstats')->value;?>
</td>
	</tr>
	<?php }?>
	<tr>
		<td class="thead"><a class="headlink" href="index.php?site=server&amp;sortby=id&amp;sorttype=<?php if ($_smarty_tpl->getVariable('sortby')->value=='virtualserver_id'&&$_smarty_tpl->getVariable('sorttype')->value==@SORT_ASC){?>desc<?php }else{ ?>asc<?php }?>"><?php echo $_smarty_tpl->getVariable('lang')->value['id'];?>
</a></td>
		<td class="thead"><a class="headlink" href="index.php?site=server&amp;sortby=name&amp;sorttype=<?php if ($_smarty_tpl->getVariable('sortby')->value=='virtualserver_name'&&$_smarty_tpl->getVariable('sorttype')->value==@SORT_ASC){?>desc<?php }else{ ?>asc<?php }?>"><?php echo $_smarty_tpl->getVariable('lang')->value['name'];?>
</a></td>
		<td class="thead"><a class="headlink" href="index.php?site=server&amp;sortby=port&amp;sorttype=<?php if ($_smarty_tpl->getVariable('sortby')->value=='virtualserver_port'&&$_smarty_tpl->getVariable('sorttype')->value==@SORT_ASC){?>desc<?php }else{ ?>asc<?php }?>"><?php echo $_smarty_tpl->getVariable('lang')->value['port'];?>
</a></td>
		<td class="thead"><a class="headlink" href="index.php?site=server&amp;sortby=status&amp;sorttype=<?php if ($_smarty_tpl->getVariable('sortby')->value=='virtualserver_status'&&$_smarty_tpl->getVariable('sorttype')->value==@SORT_ASC){?>desc<?php }else{ ?>asc<?php }?>"><?php echo $_smarty_tpl->getVariable('lang')->value['status'];?>
</a></td>
		<td class="thead"><a class="headlink" href="index.php?site=server&amp;sortby=uptime&amp;sorttype=<?php if ($_smarty_tpl->getVariable('sortby')->value=='virtualserver_uptime'&&$_smarty_tpl->getVariable('sorttype')->value==@SORT_ASC){?>desc<?php }else{ ?>asc<?php }?>"><?php echo $_smarty_tpl->getVariable('lang')->value['runtime'];?>
</a></td>
		<td class="thead"><a class="headlink" href="index.php?site=server&amp;sortby=clients&amp;sorttype=<?php if ($_smarty_tpl->getVariable('sortby')->value=='virtualserver_clientsonline'&&$_smarty_tpl->getVariable('sorttype')->value==@SORT_ASC){?>desc<?php }else{ ?>asc<?php }?>"><?php echo $_smarty_tpl->getVariable('lang')->value['clients'];?>
</a></td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['autostart'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['options'];?>
</td>
	</tr>
	<?php if (!empty($_smarty_tpl->getVariable('serverlist')->value)){?>
	<tr>
		<td class="thead" colspan="7" align="right"></td>
		<td class="thead"><input type="submit" name="massaction" value="<?php echo $_smarty_tpl->getVariable('lang')->value['action'];?>
" onclick="return confirm(confirmAction())" /></td>
	</tr>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('serverlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<?php if ($_smarty_tpl->getVariable('change_col')->value%2){?> <?php $_smarty_tpl->tpl_vars['td_col'] = new Smarty_variable("green1", null, null);?> <?php }else{ ?> <?php $_smarty_tpl->tpl_vars['td_col'] = new Smarty_variable("green2", null, null);?> <?php }?>
			<tr>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php echo $_smarty_tpl->tpl_vars['value']->value['virtualserver_id'];?>
</td>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><a href="index.php?site=serverview&amp;sid=<?php echo $_smarty_tpl->tpl_vars['value']->value['virtualserver_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['virtualserver_name'];?>
</a></td>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php echo $_smarty_tpl->tpl_vars['value']->value['virtualserver_port'];?>
</td>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center">
				<?php if ($_smarty_tpl->tpl_vars['value']->value['virtualserver_status']=="online"){?>
				<span class="online"><?php echo $_smarty_tpl->getVariable('lang')->value['online'];?>
</span>
				<?php }elseif($_smarty_tpl->tpl_vars['value']->value['virtualserver_status']=="online virtual"){?>
				<span class="onvirtual"><?php echo $_smarty_tpl->getVariable('lang')->value['onlinevirtual'];?>
</span>
				<?php }elseif($_smarty_tpl->tpl_vars['value']->value['virtualserver_status']=="offline"){?>
				<span class="offline"><?php echo $_smarty_tpl->getVariable('lang')->value['offline'];?>
</span>
				<?php }?>
				</td>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php echo $_smarty_tpl->tpl_vars['value']->value['virtualserver_uptime'];?>
</td>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php echo $_smarty_tpl->tpl_vars['value']->value['virtualserver_clientsonline'];?>
 / <?php echo $_smarty_tpl->tpl_vars['value']->value['virtualserver_maxclients'];?>
</td>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><input type="checkbox" name="caction[<?php echo $_smarty_tpl->tpl_vars['value']->value['virtualserver_id'];?>
][auto]" value="1" <?php if ($_smarty_tpl->tpl_vars['value']->value['virtualserver_autostart']==1){?>checked="checked"<?php }?>/></td>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center">
				<select id="caction<?php echo $_smarty_tpl->tpl_vars['value']->value['virtualserver_id'];?>
" name="caction[<?php echo $_smarty_tpl->tpl_vars['value']->value['virtualserver_id'];?>
][action]" onchange="confirmArray('<?php echo $_smarty_tpl->tpl_vars['value']->value['virtualserver_id'];?>
', '<?php echo addslashes($_smarty_tpl->tpl_vars['value']->value['virtualserver_name']);?>
', '<?php echo $_smarty_tpl->tpl_vars['value']->value['virtualserver_port'];?>
', '');">
					<option value=""><?php echo $_smarty_tpl->getVariable('lang')->value['select'];?>
</option>
					<option value="start"><?php echo $_smarty_tpl->getVariable('lang')->value['start'];?>
</option>
					<option value="stop"><?php echo $_smarty_tpl->getVariable('lang')->value['stop'];?>
</option>
					<option value="del"><?php echo $_smarty_tpl->getVariable('lang')->value['delete'];?>
</option>
				</select>
				</td>
			</tr>
			<?php $_smarty_tpl->tpl_vars['change_col'] = new Smarty_variable(($_smarty_tpl->getVariable('change_col')->value+1), null, null);?>
		<?php }} ?>
	<tr>
		<td class="thead" colspan="7" align="right"></td>
		<td class="thead"><input type="submit" name="massaction" value="<?php echo $_smarty_tpl->getVariable('lang')->value['action'];?>
" onclick="return confirm(confirmAction())" /></td>
	</tr>
	<?php }else{ ?>
	<tr><td class='green1' colspan='8'><?php echo $_smarty_tpl->getVariable('lang')->value['noserver'];?>
</td></tr>
	<?php }?>
</table>
</form>
<?php }?>