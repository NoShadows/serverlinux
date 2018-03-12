<?php /* Smarty version Smarty3rc4, created on 2016-11-04 13:19:41
         compiled from "/srv/www/htdocs/ts3wi/templates/new/logview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164407421581c8aedc23b87-03368854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e03bda40c4a144184231b03b805fdd7c19f22467' => 
    array (
      0 => '/srv/www/htdocs/ts3wi/templates/new/logview.tpl',
      1 => 1467056337,
    ),
  ),
  'nocache_hash' => '164407421581c8aedc23b87-03368854',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_log_view'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_log_view'])){?>
	<table class="border" style="width:50%;" cellpadding="1" cellspacing="0">
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
<br />
<table class="border" style="width:90%" cellspacing="0" cellpadding="0">
	<tr>
		<td>
			<form method="post" action="index.php?site=logview&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
">
			<input type="hidden" name="begin_pos" value="<?php echo $_smarty_tpl->getVariable('begin_pos')->value;?>
"/>
			<input type="submit" name="showmore" value="<?php echo $_smarty_tpl->getVariable('lang')->value['showmoreentrys'];?>
" />
			</form>
		</td>
	</tr>
	<tr>
		<td style="width:20%" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['date'];?>
</td>
		<td style="width:5%" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['level'];?>
</td>
		<td style="width:10%" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['type'];?>
</td>
		<td style="width:10%" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['serverid'];?>
</td>
		<td style="width:55%" class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['message'];?>
</td>
	</tr>

<?php if (!empty($_smarty_tpl->getVariable('serverlog')->value)){?>
	<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('serverlog')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<?php if (empty($_POST['type']['error'])&&empty($_POST['type']['warning'])&&empty($_POST['type']['debug'])&&empty($_POST['type']['info'])||$_POST['type']['error']==$_smarty_tpl->tpl_vars['value']->value['level']||$_POST['type']['warning']==$_smarty_tpl->tpl_vars['value']->value['level']||$_POST['type']['debug']==$_smarty_tpl->tpl_vars['value']->value['level']||$_POST['type']['info']==$_smarty_tpl->tpl_vars['value']->value['level']){?>
			<?php if ($_smarty_tpl->getVariable('change_col')->value%2){?> <?php $_smarty_tpl->tpl_vars['td_col'] = new Smarty_variable("green1", null, null);?> <?php }else{ ?> <?php $_smarty_tpl->tpl_vars['td_col'] = new Smarty_variable("green2", null, null);?> <?php }?>
			<tr>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value[0];?>
</td>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value[1];?>
</td>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value[2];?>
</td>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value[3];?>
</td>
				<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value[4];?>
</td>
			</tr>
		
			<?php $_smarty_tpl->tpl_vars['change_col'] = new Smarty_variable(($_smarty_tpl->getVariable('change_col')->value+1), null, null);?>
		<?php }?>
	<?php }} ?>
<?php }?>
	<tr>
		<td>
			<form method="post" action="index.php?site=logview&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
">
			<input type="hidden" name="begin_pos" value="<?php echo $_smarty_tpl->getVariable('begin_pos')->value;?>
"/>
			<input type="submit" name="showmore" value="<?php echo $_smarty_tpl->getVariable('lang')->value['showmoreentrys'];?>
" />
			</form>
		</td>
	</tr>
</table>
<?php }?>