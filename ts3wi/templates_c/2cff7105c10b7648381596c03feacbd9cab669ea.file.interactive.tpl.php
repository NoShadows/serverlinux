<?php /* Smarty version Smarty3rc4, created on 2016-11-04 13:18:59
         compiled from "../templates/new/interactive.tpl" */ ?>
<?php /*%%SmartyHeaderCode:346402406581c8ac36b7596-72191120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cff7105c10b7648381596c03feacbd9cab669ea' => 
    array (
      0 => '../templates/new/interactive.tpl',
      1 => 1467056337,
    ),
  ),
  'nocache_hash' => '346402406581c8ac36b7596-72191120',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
*Copyright (C) 2012-2013  Psychokiller
*
*This program is free software; you can redistribute it and/or modify it under the terms of 
*the GNU General Public License as published by the Free Software Foundation; either 
*version 3 of the License, or any later version.
*
*This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; 
*without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
*See the GNU General Public License for more details.
*
*You should have received a copy of the GNU General Public License along with this program; if not, see http://www.gnu.org/licenses/. 
-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="de">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../templates/<?php echo $_smarty_tpl->getVariable('tmpl')->value;?>
/gfx/style.css" type="text/css" media="screen" />
<title>Webinterface - Interactive</title>
</head>
<body>
<?php if (!isset($_GET['clid'])){?>
	<form method="post" name="f2" action="interactive.php?sid=<?php echo $_GET['sid'];?>
">
		<table class="border" cellpadding="1" cellspacing="0">
			<tr>
				<td class="maincat" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['massaction'];?>
</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['select'];?>
:</td>
				<td class="green1">
				<select name="action" onchange="this.form.submit()">
					<option value=""><?php echo $_smarty_tpl->getVariable('lang')->value['select'];?>
</option>
					<option value="kick"><?php echo $_smarty_tpl->getVariable('lang')->value['kick'];?>
</option>
					<option value="ban"><?php echo $_smarty_tpl->getVariable('lang')->value['ban'];?>
</option>
					<option value="move"><?php echo $_smarty_tpl->getVariable('lang')->value['move'];?>
</option>
				</select>
				</td>
			</tr>
		</table>
	</form>
	<br />
	<?php if ($_POST['action']=='move'){?>
	<script type="text/javascript">
	//<![CDATA[
	window.resizeTo(350,550);
	//]]>
	</script>
	<form method="post" name="f1" target="opener" action="../index.php?site=serverview&amp;sid=<?php echo $_GET['sid'];?>
">
		<table class="border" cellpadding="1" cellspacing="0">
			<tr>
				<td class="maincat" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['massmover'];?>
</td>
			</tr>
			<tr>
				<td colspan="2" class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['moveallclients'];?>
: <input type="checkbox" name="moveall" value="1" /></td>
			</tr>
			<tr>
				<td colspan="2" class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['moveclientsbysgroup'];?>
:</td>
			</tr>
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('servergrouplist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['value']->value['type']!=0){?>
				<tr><td class="green2"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td><td class="green2"><input type="checkbox" name="movebysgroup[]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['sgid'];?>
" /></td></tr>
				<?php }?>
				<?php }} ?>
			<tr>
				<td colspan="2" class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['moveclientsbycgroup'];?>
:</td>
			</tr>
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('channelgrouplist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['value']->value['type']!=0){?>
				<tr><td class="green1"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td><td class="green1"><input type="checkbox" name="movebycgroup[]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['cgid'];?>
" /></td></tr>
				<?php }?>
				<?php }} ?>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['movefrom'];?>
:</td>
				<td class="green2">
				<select name="movebycid[]" size="3" multiple="multiple">
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('channellist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['channel_name'];?>
</option>
				<?php }} ?>
				</select>
				</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['moveto'];?>
:</td>
				<td class="green1">
				<select name="cid">
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('channellist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['channel_name'];?>
</option>
				<?php }} ?>
				</select>
				</td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['option'];?>
:</td>
				<td class="green2">
				<input class="button" type="submit" name="sendmassmove" value="<?php echo $_smarty_tpl->getVariable('lang')->value['move'];?>
" onclick="self.close()" />
				</td>
			</tr>
		</table>
	</form>
	<br />
	<?php }?>
	<?php if ($_POST['action']=='kick'){?>
	<script type="text/javascript">
	//<![CDATA[
	window.resizeTo(350,550);
	//]]>
	</script>
	<form method="post" name="f1" target="opener" action="../index.php?site=serverview&amp;sid=<?php echo $_GET['sid'];?>
">
		<table class="border" cellpadding="1" cellspacing="0">
			<table class="border" cellpadding="1" cellspacing="0">
			<tr>
				<td class="maincat" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['masskicker'];?>
</td>
			</tr>
			<tr>
				<td colspan="2"  class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['kickallclients'];?>
: <input type="checkbox" name="kickall" value="1" /></td>
			</tr>
			<tr>
				<td colspan="2" class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['kickclientsbysgroup'];?>
:</td>
			</tr>
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('servergrouplist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['value']->value['type']!=0){?>
				<tr><td class="green2"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td><td class="green2"><input type="checkbox" name="kickbysgroup[]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['sgid'];?>
" /></td></tr>
				<?php }?>
				<?php }} ?>
			<tr>
				<td colspan="2" class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['kickclientsbycgroup'];?>
:</td>
			</tr>
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('channelgrouplist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['value']->value['type']!=0){?>
				<tr><td class="green1"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td><td class="green1"><input type="checkbox" name="kickbycgroup[]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['cgid'];?>
" /></td></tr>
				<?php }?>
				<?php }} ?>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['kickfrom'];?>
:</td>
				<td class="green2">
				<select name="kickbycid[]" size="3" multiple="multiple">
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('channellist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['channel_name'];?>
</option>
				<?php }} ?>
				</select>
				</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['kickmsg'];?>
:</td>
				<td class="green1"><input type="text" name="kickmsg" value="" /></td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['option'];?>
:</td>
				<td class="green2">
				<input class="button" type="submit" name="sendmasskick" value="<?php echo $_smarty_tpl->getVariable('lang')->value['kick'];?>
" onclick="self.close()" />
				</td>
			</tr>
		</table>
	</form>
	<br />
	<?php }?>
	<?php if ($_POST['action']=='ban'){?>
	<script type="text/javascript">
	//<![CDATA[
	window.resizeTo(350,550);
	//]]>
	</script>
	<form method="post" name="f1" target="opener" action="../index.php?site=serverview&amp;sid=<?php echo $_GET['sid'];?>
">
		<table class="border" cellpadding="1" cellspacing="0">
			<tr>
				<td class="maincat" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['massban'];?>
</td>
			</tr>
			<tr>
				<td colspan="2" class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['banallclients'];?>
: <input type="checkbox" name="banall" value="1" /></td>
			</tr>
			<tr>
				<td colspan="2" class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['banclientsbysgroup'];?>
:</td>
			</tr>
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('servergrouplist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['value']->value['type']!=0){?>
				<tr><td class="green2"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td><td class="green2"><input type="checkbox" name="banbysgroup[]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['sgid'];?>
" /></td></tr>
				<?php }?>
				<?php }} ?>
			<tr>
				<td colspan="2" class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['banclientsbycgroup'];?>
:</td>
			</tr>
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('channelgrouplist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['value']->value['type']!=0){?>
				<tr><td class="green1"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td><td class="green1"><input type="checkbox" name="banbycgroup[]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['cgid'];?>
" /></td></tr>
				<?php }?>
				<?php }} ?>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['banfrom'];?>
:</td>
				<td class="green2">
				<select name="banbycid[]" size="3" multiple="multiple">
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('channellist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['channel_name'];?>
</option>
				<?php }} ?>
				</select>
				</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['banmsg'];?>
:</td>
				<td class="green1"><input type="text" name="banmsg" value=""></td>
			</tr>
			<tr>
				<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['bantime'];?>
:</td>
				<td class="green2"><input type="text" name="bantime" value=""><?php echo $_smarty_tpl->getVariable('lang')->value['seconds'];?>
</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['option'];?>
:</td>
				<td class="green1">
				<input class="button" type="submit" name="sendmassban" value="<?php echo $_smarty_tpl->getVariable('lang')->value['ban'];?>
" onclick="self.close()" />
			</td>
		</tr>
		</table>
	</form>
	<br />
	<?php }?>
<?php }else{ ?>
	<form method="post" name="f2" action="interactive.php?sid=<?php echo $_GET['sid'];?>
&amp;clid=<?php echo $_GET['clid'];?>
&amp;nick=<?php echo $_GET['nick'];?>
">
		<table class="border" cellpadding="1" cellspacing="0">
			<tr>
				<td class="maincat" colspan="2"><?php echo $_GET['nick'];?>
</td>
			</tr>
			<tr>
				<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['select'];?>
:</td>
				<td class="green1">
				<select name="action" onchange="this.form.submit()">
					<option value=""><?php echo $_smarty_tpl->getVariable('lang')->value['select'];?>
</option>
					<option value="kick"><?php echo $_smarty_tpl->getVariable('lang')->value['kick'];?>
</option>
					<option value="ban"><?php echo $_smarty_tpl->getVariable('lang')->value['ban'];?>
</option>
					<option value="poke"><?php echo $_smarty_tpl->getVariable('lang')->value['poke'];?>
</option>
					<option value="move"><?php echo $_smarty_tpl->getVariable('lang')->value['move'];?>
</option>
				</select>
				</td>
			</tr>
		</table>
		</form>
		<br />
	<?php if ($_POST['action']=='kick'){?>
	<form method="post" name="f1" target="opener" action="../index.php?site=serverview&amp;sid=<?php echo $_GET['sid'];?>
" onsubmit="window.close()">
	<table class="border" cellpadding="1" cellspacing="0">
		<tr>
			<td class="maincat" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['kick'];?>
 <?php echo $_GET['nick'];?>
</td>
		</tr>
		<tr>
			<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['kickmsg'];?>
:</td>
			<td class="green1"><input type="text" name="kickmsg" value="" /></td>
		</tr>
		<tr>
			<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['option'];?>
:</td>
			<td class="green2">
			<input type="hidden" name="clid" value="<?php echo $_GET['clid'];?>
" />
			<input class="button" type="submit" name="sendkick" value="<?php echo $_smarty_tpl->getVariable('lang')->value['kick'];?>
" onclick="self.close()">
			</td>
		</tr>
	</table>
	</form>
	<?php }?>

	<?php if ($_POST['action']=='ban'){?>
	<form method="post" name="f1" target="opener" action="../index.php?site=serverview&amp;sid=<?php echo $_GET['sid'];?>
">
	<table class="border" cellpadding="1" cellspacing="0">
		<tr>
			<td class="maincat" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['ban'];?>
 <?php echo $_GET['nick'];?>
</td>
		</tr>
		<tr>
			<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['banmsg'];?>
:</td>
			<td class="green1">
			<input type="text" name="banmsg" value=""></td>
		</tr>
		<tr>
			<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['bantime'];?>
:</td>
			<td class="green2">
			<input type="text" name="bantime" value=""><?php echo $_smarty_tpl->getVariable('lang')->value['seconds'];?>
</td>
		</tr>
		<tr>
			<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['option'];?>
:</td>
			<td class="green1">
			<input type="hidden" name="clid" value="<?php echo $_GET['clid'];?>
" />
			<input class="button" type="submit" name="sendban" value="<?php echo $_smarty_tpl->getVariable('lang')->value['ban'];?>
" onclick="self.close()">
			</td>
		</tr>
	</table>
	</form>
	<?php }?>

	<?php if ($_POST['action']=='poke'){?>
	<form method="post" name="f1" target="opener" action="../index.php?site=serverview&amp;sid=<?php echo $_GET['sid'];?>
">
	<table class="border" cellpadding="1" cellspacing="0">
		<tr>
			<td class="maincat" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['poke'];?>
 <?php echo $_GET['nick'];?>
</td>
		</tr>
		<tr>
			<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['pokemsg'];?>
:</td>
			<td class="green1">
			<input type="text" name="pokemsg" value=""></td>
		<tr>
			<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['option'];?>
:</td>
			<td class="green2">
			<input type="hidden" name="clid" value="<?php echo $_GET['clid'];?>
" />
			<input class="button" type="submit" name="sendpoke" value="<?php echo $_smarty_tpl->getVariable('lang')->value['poke'];?>
" onclick="self.close()">
			</td>
		</tr>
	</table>
	</form>
	<?php }?>
	<?php if ($_POST['action']=='move'){?>
	<form method="post" name="f1" target="opener" action="../index.php?site=serverview&amp;sid=<?php echo $_GET['sid'];?>
">
	<table class="border" cellpadding="1" cellspacing="0">
		<tr>
			<td class="maincat" colspan="2"><?php echo $_smarty_tpl->getVariable('lang')->value['move'];?>
 <?php echo $_smarty_tpl->getVariable('_GET')->value['nick'];?>
</td>
		</tr>
		<tr>
			<td class="green1"><?php echo $_smarty_tpl->getVariable('lang')->value['move'];?>
:</td>
			<td class="green1">
			<select name="cid">
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('channellist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['channel_name'];?>
</option>";
			<?php }} ?>
			</select>
			</td>
		<tr>
			<td class="green2"><?php echo $_smarty_tpl->getVariable('lang')->value['option'];?>
:</td>
			<td class="green2">
			<input type="hidden" name="clid" value="<?php echo $_GET['clid'];?>
" />
			<input class="button" type="submit" name="sendmove" value="<?php echo $_smarty_tpl->getVariable('lang')->value['move'];?>
" onclick="self.close()">
			</td>
		</tr>
	</table>
	</form>
	<?php }?>
<?php }?>
</body>
</html>