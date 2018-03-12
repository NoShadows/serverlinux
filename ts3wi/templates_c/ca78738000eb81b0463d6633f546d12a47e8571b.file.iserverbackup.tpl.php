<?php /* Smarty version Smarty3rc4, created on 2016-11-04 13:19:25
         compiled from "/srv/www/htdocs/ts3wi/templates/new/iserverbackup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:877232192581c8add64bdf1-58566575%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca78738000eb81b0463d6633f546d12a47e8571b' => 
    array (
      0 => '/srv/www/htdocs/ts3wi/templates/new/iserverbackup.tpl',
      1 => 1467056337,
    ),
  ),
  'nocache_hash' => '877232192581c8add64bdf1-58566575',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/srv/www/htdocs/ts3wi/libs/Smarty/libs/plugins/modifier.date_format.php';
?><?php if ($_smarty_tpl->getVariable('hoststatus')->value===false&&$_smarty_tpl->getVariable('serverhost')->value===true){?>
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
<table class="border" style="width:90%" cellpadding="1" cellspacing="0">
	<tr>
		<td class="thead" colspan="4">Instanz Server Backups</td>
	</tr>
	<tr>
		<td style="font-size:12px" colspan="3"><?php echo $_smarty_tpl->getVariable('lang')->value['servbackdesc'];?>
</td>
	</tr>
	<tr>
		<td class="warning" style="font-size:12px" colspan="3"><?php echo $_smarty_tpl->getVariable('lang')->value['snapwarning'];?>
</td>
	</tr>
	<tr>
		<td class="thead" colspan="4"><?php echo $_smarty_tpl->getVariable('lang')->value['serverbackups'];?>
</td>
	</tr>
	<tr>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['created'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['server'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['options'];?>
</td>
	</tr>
	<?php if (isset($_smarty_tpl->getVariable('files')->value[0])&&!empty($_smarty_tpl->getVariable('files')->value[0])||isset($_smarty_tpl->getVariable('folder')->value[2])&&!empty($_smarty_tpl->getVariable('folder')->value[2])){?>
		<?php if (!isset($_POST['backupdate'])){?>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('folder')->value[2]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				<?php if ($_smarty_tpl->getVariable('change_col')->value%2){?> <?php $_smarty_tpl->tpl_vars['td_col'] = new Smarty_variable("green1", null, null);?> <?php }else{ ?> <?php $_smarty_tpl->tpl_vars['td_col'] = new Smarty_variable("green2", null, null);?> <?php }?>
			<tr>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</td>
				<td colspan="2" class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center">
				<form method="post" action="index.php?site=iserverbackup">
				<input type="hidden" name="backupdate" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" />
				<input type="submit" name="chose" value="Ausw&auml;hlen" />
				</form>
				</td>
			</tr>
			<?php $_smarty_tpl->tpl_vars['change_col'] = new Smarty_variable(($_smarty_tpl->getVariable('change_col')->value+1), null, null);?>
		<?php }} ?>
		<?php }else{ ?>
			<?php if (isset($_smarty_tpl->getVariable('files')->value[0])){?>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('files')->value[0]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				<?php if ($_smarty_tpl->getVariable('change_col')->value%2){?> <?php $_smarty_tpl->tpl_vars['td_col'] = new Smarty_variable("green1", null, null);?> <?php }else{ ?> <?php $_smarty_tpl->tpl_vars['td_col'] = new Smarty_variable("green2", null, null);?> <?php }?>
				<tr>
					<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['timestamp'],"%d.%m.%Y - %H:%M:%S");?>
</td>
					<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php echo $_smarty_tpl->tpl_vars['value']->value['server'];?>
</td>
					<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center">
					<form method="post" action="index.php?site=iserverbackup">
					<select name="deployon">
					<option value="">-</option>
					<?php if (!empty($_smarty_tpl->getVariable('serverlist')->value)){?>
						<?php  $_smarty_tpl->tpl_vars['value2'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('serverlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value2']->key => $_smarty_tpl->tpl_vars['value2']->value){
 $_smarty_tpl->tpl_vars['key2']->value = $_smarty_tpl->tpl_vars['value2']->key;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['value2']->value['virtualserver_port'];?>
"><?php echo $_smarty_tpl->tpl_vars['value2']->value['virtualserver_name'];?>
:<?php echo $_smarty_tpl->tpl_vars['value2']->value['virtualserver_port'];?>
</option>
						<?php }} ?>
					<?php }?>
					</select>
					<input type="hidden" name="backupid" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['timestamp'];?>
" />
					<input type="hidden" name="fileport" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['server'];?>
" />
					<input type="hidden" name="backupdate" value="<?php echo $_POST['backupdate'];?>
" />
					<input class="start" type="submit" name="deploy" value="" title="<?php echo $_smarty_tpl->getVariable('lang')->value['deploy'];?>
" />
					</form>
					<form method="post" action="index.php?site=iserverbackup">
					<input type="hidden" name="backupid" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['timestamp'];?>
" />
					<input type="hidden" name="fileport" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['server'];?>
" />
					<input type="hidden" name="backupdate" value="<?php echo $_POST['backupdate'];?>
" />
					<input class="delete" type="submit" name="delete" value="" title="<?php echo $_smarty_tpl->getVariable('lang')->value['delete'];?>
" />
					</form>
					</td>
				</tr>
				<?php $_smarty_tpl->tpl_vars['change_col'] = new Smarty_variable(($_smarty_tpl->getVariable('change_col')->value+1), null, null);?>
			<?php }} ?>	
			<?php }else{ ?>
			<tr>
				<td colspan="3" class="green1 center">No Backups found!</td>
			</tr>
			<?php }?>
		<?php }?>
	<?php }else{ ?>
		<tr>
			<td colspan="3" class="green1 center">No Backups found!</td>
		</tr>
	<?php }?>
</table>
<br />
<table class="border" style="width:90%" cellpadding="1" cellspacing="0">
	<tr>
		<td class="thead" colspan="4"><?php echo $_smarty_tpl->getVariable('lang')->value['host'];?>
 <?php echo $_smarty_tpl->getVariable('lang')->value['serverbackups'];?>
</td>
	</tr>
	<tr>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['created'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['server'];?>
</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['options'];?>
</td>
	</tr>
<?php if (isset($_smarty_tpl->getVariable('files')->value[1])&&!empty($_smarty_tpl->getVariable('files')->value[1])||isset($_smarty_tpl->getVariable('folder')->value[1])&&!empty($_smarty_tpl->getVariable('folder')->value[1])){?>
	<?php if (!isset($_POST['backupdate'])){?>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('folder')->value[1]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<?php if ($_smarty_tpl->getVariable('change_col')->value%2){?> <?php $_smarty_tpl->tpl_vars['td_col'] = new Smarty_variable("green1", null, null);?> <?php }else{ ?> <?php $_smarty_tpl->tpl_vars['td_col'] = new Smarty_variable("green2", null, null);?> <?php }?>
		<tr>
			<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</td>
			<td colspan="2" class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center">
			<form method="post" action="index.php?site=iserverbackup">
			<input type="hidden" name="backupdate" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" />
			<input type="submit" name="chose" value="Ausw&auml;hlen" />
			</form>
			</td>
		</tr>
		<?php $_smarty_tpl->tpl_vars['change_col'] = new Smarty_variable(($_smarty_tpl->getVariable('change_col')->value+1), null, null);?>
	<?php }} ?>
	<?php }else{ ?>
		<?php if (isset($_smarty_tpl->getVariable('files')->value[1])){?>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('files')->value[1]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				<?php if ($_smarty_tpl->getVariable('change_col')->value%2){?> <?php $_smarty_tpl->tpl_vars['td_col'] = new Smarty_variable("green1", null, null);?> <?php }else{ ?> <?php $_smarty_tpl->tpl_vars['td_col'] = new Smarty_variable("green2", null, null);?> <?php }?>
				<tr>
					<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['timestamp'],"%d.%m.%Y - %H:%M:%S");?>
</td>
					<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php echo $_smarty_tpl->tpl_vars['value']->value['server'];?>
</td>
					<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center">
					<form method="post" action="index.php?site=iserverbackup">
					<select name="deployon">
					<option value="">-</option>
					<?php if (!empty($_smarty_tpl->getVariable('serverlist')->value)){?>
						<?php  $_smarty_tpl->tpl_vars['value2'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('serverlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value2']->key => $_smarty_tpl->tpl_vars['value2']->value){
 $_smarty_tpl->tpl_vars['key2']->value = $_smarty_tpl->tpl_vars['value2']->key;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['value2']->value['virtualserver_port'];?>
"><?php echo $_smarty_tpl->tpl_vars['value2']->value['virtualserver_name'];?>
:<?php echo $_smarty_tpl->tpl_vars['value2']->value['virtualserver_port'];?>
</option>
						<?php }} ?>
					<?php }?>
					</select>
					<input type="hidden" name="hostbackup" value="1" />
					<input type="hidden" name="backupdate" value="<?php echo $_POST['backupdate'];?>
" />
					<input type="hidden" name="backupid" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['timestamp'];?>
" />
					<input type="hidden" name="fileport" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['server'];?>
" />
					<input class="start" type="submit" name="deploy" value="" title="<?php echo $_smarty_tpl->getVariable('lang')->value['deploy'];?>
" />
					</form>
					<form method="post" action="index.php?site=iserverbackup">
					<input type="hidden" name="hostbackup" value="1" />
					<input type="hidden" name="backupdate" value="<?php echo $_POST['backupdate'];?>
" />
					<input type="hidden" name="backupid" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['timestamp'];?>
" />
					<input type="hidden" name="fileport" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['server'];?>
" />
					<input class="delete" type="submit" name="delete" value="" title="<?php echo $_smarty_tpl->getVariable('lang')->value['delete'];?>
" />
					</form>
					</td>
				</tr>
				<?php $_smarty_tpl->tpl_vars['change_col'] = new Smarty_variable(($_smarty_tpl->getVariable('change_col')->value+1), null, null);?>
			<?php }} ?>
		<?php }else{ ?>
			<tr>
				<td colspan="3" class="green1 center">No Backups found!</td>
			</tr>
		<?php }?>
	<?php }?>
<?php }else{ ?>
	<tr>
		<td colspan="3" class="green1 center">No Backups found!</td>
	</tr>
<?php }?>
</table>
<br />
<table class="border" cellpadding="1" cellspacing="0">
<tr>
	<td class="thead" colspan="3"><?php echo $_smarty_tpl->getVariable('lang')->value['createserverbackup'];?>
</td>
</tr>
<tr>
	<td class="green1 center">
	<form method="post" action="index.php?site=iserverbackup">
	<input class="button" type="submit" name="create" value="<?php echo $_smarty_tpl->getVariable('lang')->value['create'];?>
" />
	</form>
	</td>
	<td class="green1 center">
	<form method="post" action="index.php?site=iserverbackup">
	<input type="hidden" name="hostbackup" value="1" />
	<input class="button" type="submit" name="create" value="<?php echo $_smarty_tpl->getVariable('lang')->value['host'];?>
 <?php echo $_smarty_tpl->getVariable('lang')->value['create'];?>
" />
	</td>
</tr>
</table>
<?php }?>