<?php /* Smarty version Smarty3rc4, created on 2016-11-02 03:16:23
         compiled from "/srv/www/htdocs/ts3wi/templates/new/clients.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166144809358195a87ed7c31-54623399%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '933c13d105df235b977707c4febc99fc347bb8e9' => 
    array (
      0 => '/srv/www/htdocs/ts3wi/templates/new/clients.tpl',
      1 => 1467056337,
    ),
  ),
  'nocache_hash' => '166144809358195a87ed7c31-54623399',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/srv/www/htdocs/ts3wi/libs/Smarty/libs/plugins/modifier.date_format.php';
?><?php if (isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_client_list'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_client_list'])||isset($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_client_dblist'])&&empty($_smarty_tpl->getVariable('permoverview')->value['b_virtualserver_client_dblist'])){?>
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
<table style="width:100%" class="border" cellpadding="1" cellspacing="0">
	<tr>
		<td class="thead" colspan="8"><?php echo $_smarty_tpl->getVariable('lang')->value['searchfor'];?>
<?php echo $_smarty_tpl->getVariable('lang')->value['client'];?>
</td>
	</tr>
	<tr>
		<td class="green1" colspan="8">
		<form method="post" action="index.php?site=clients&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
">
		<select name="searchby">
		<option value="uniqueid"><?php echo $_smarty_tpl->getVariable('lang')->value['uniqueid'];?>
</option>
		<option value="cldbid"><?php echo $_smarty_tpl->getVariable('lang')->value['cldbid'];?>
</option>
		<option value="name"><?php echo $_smarty_tpl->getVariable('lang')->value['name'];?>
</option>
		</select>
		<input type="text" name="search" value="" />
		<input type="submit" name="sendsearch" value="<?php echo $_smarty_tpl->getVariable('lang')->value['search'];?>
" />
		</form>
		</td>
	</tr>
	<tr>
		<td class="thead" colspan="8">
		<?php echo $_smarty_tpl->getVariable('lang')->value['clients'];?>
<br />
		<?php if ($_smarty_tpl->getVariable('pages')->value!=0){?>
			<?php while ($_smarty_tpl->getVariable('print_pages')->value<=$_smarty_tpl->getVariable('pages')->value) { ?>
				<?php if ($_smarty_tpl->getVariable('print_pages')->value==1){?>
					<a class="paging" href="index.php?site=clients&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
&amp;getstart=0<?php if (isset($_GET['sortby'])){?>&amp;sortby=<?php echo $_GET['sortby'];?>
<?php }?><?php if (isset($_GET['sorttype'])){?>&amp;sorttype=<?php echo $_GET['sorttype'];?>
<?php }?>"><?php echo $_smarty_tpl->getVariable('print_pages')->value;?>
</a>	
				<?php }else{ ?>
					-<a class="paging" href="index.php?site=clients&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
&amp;getstart=<?php echo $_smarty_tpl->getVariable('countstarted')->value;?>
<?php if (isset($_GET['sortby'])){?>&amp;sortby=<?php echo $_GET['sortby'];?>
<?php }?><?php if (isset($_GET['sorttype'])){?>&amp;sorttype=<?php echo $_GET['sorttype'];?>
<?php }?>"><?php echo $_smarty_tpl->getVariable('print_pages')->value;?>
</a>
				<?php }?>
				<?php $_smarty_tpl->tpl_vars['countstarted'] = new Smarty_variable(($_smarty_tpl->getVariable('countstarted')->value+$_smarty_tpl->getVariable('duration')->value), null, null);?>
				<?php $_smarty_tpl->tpl_vars['print_pages'] = new Smarty_variable(($_smarty_tpl->getVariable('print_pages')->value+1), null, null);?>
			<?php }?>
		<?php }?>
		</td>
	</tr>
	<tr>
		<td class="thead">
		<a class="headlink" href="index.php?site=clients&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
&amp;sortby=cldbid&amp;sorttype=<?php if ($_smarty_tpl->getVariable('sortby')->value=='cldbid'&&$_smarty_tpl->getVariable('sorttype')->value==@SORT_ASC){?>desc<?php }else{ ?>asc<?php }?>"><?php echo $_smarty_tpl->getVariable('lang')->value['dbid'];?>
</a>
		</td>
		<td class="thead">
		<a class="headlink" href="index.php?site=clients&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
&amp;sortby=unique&amp;sorttype=<?php if ($_smarty_tpl->getVariable('sortby')->value=='client_unique_identifier'&&@SORT_ASC){?>desc<?php }else{ ?>asc<?php }?>"><?php echo $_smarty_tpl->getVariable('lang')->value['uniqueid'];?>
</a>
		</td>
		<td class="thead">
		<a class="headlink" href="index.php?site=clients&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
&amp;sortby=name&amp;sorttype=<?php if ($_smarty_tpl->getVariable('sortby')->value=='client_nickname'&&$_smarty_tpl->getVariable('sorttype')->value==@SORT_ASC){?>desc<?php }else{ ?>asc<?php }?>"><?php echo $_smarty_tpl->getVariable('lang')->value['nickname'];?>
</a>
		</td>
		<td class="thead">
		<a class="headlink" href="index.php?site=clients&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
&amp;sortby=created&amp;sorttype=<?php if ($_smarty_tpl->getVariable('sortby')->value=='client_created'&&$_smarty_tpl->getVariable('sorttype')->value==@SORT_ASC){?>desc<?php }else{ ?>asc<?php }?>"><?php echo $_smarty_tpl->getVariable('lang')->value['created'];?>
</a>
		</td>
		<td class="thead">
		<a class="headlink" href="index.php?site=clients&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
&amp;sortby=lastcon&amp;sorttype=<?php if ($_smarty_tpl->getVariable('sortby')->value=='client_lastconnected'&&$_smarty_tpl->getVariable('sorttype')->value==@SORT_ASC){?>desc<?php }else{ ?>asc<?php }?>"><?php echo $_smarty_tpl->getVariable('lang')->value['lastonline'];?>
</a>
		</td>
		<td class="thead">
		<a class="headlink" href="index.php?site=clients&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
&amp;sortby=status&amp;sorttype=<?php if ($_smarty_tpl->getVariable('sortby')->value=='clid'&&$_smarty_tpl->getVariable('sorttype')->value==@SORT_ASC){?>desc<?php }else{ ?>asc<?php }?>"><?php echo $_smarty_tpl->getVariable('lang')->value['status'];?>
</a>
		</td>
		<td class="thead"><?php echo $_smarty_tpl->getVariable('lang')->value['option'];?>
</td>
	</tr>
	<?php while ($_smarty_tpl->getVariable('showclients')->value<=$_smarty_tpl->getVariable('duration')->value&&isset($_smarty_tpl->getVariable('clientdblist')->value[$_smarty_tpl->getVariable('getstart')->value])) { ?>
		<?php if ($_smarty_tpl->getVariable('change_col')->value%2){?> <?php $_smarty_tpl->tpl_vars['td_col'] = new Smarty_variable("green1", null, null);?> <?php }else{ ?> <?php $_smarty_tpl->tpl_vars['td_col'] = new Smarty_variable("green2", null, null);?> <?php }?>
		<tr>
			<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center">
			<?php echo $_smarty_tpl->getVariable('clientdblist')->value[$_smarty_tpl->getVariable('getstart')->value]['cldbid'];?>

			</td>
			<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php ob_start();?><?php echo $_smarty_tpl->getVariable('getstart')->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getVariable('clientdblist')->value[$_tmp1]['client_unique_identifier'];?>
</td>
			<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php ob_start();?><?php echo $_smarty_tpl->getVariable('getstart')->value;?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getVariable('clientdblist')->value[$_tmp2]['client_nickname'];?>
</td>
			<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php ob_start();?><?php echo $_smarty_tpl->getVariable('getstart')->value;?>
<?php $_tmp3=ob_get_clean();?><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('clientdblist')->value[$_tmp3]['client_created'],"%d.%m.%Y - %H:%M:%S");?>
</td>
			<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center"><?php ob_start();?><?php echo $_smarty_tpl->getVariable('getstart')->value;?>
<?php $_tmp4=ob_get_clean();?><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('clientdblist')->value[$_tmp4]['client_lastconnected'],"%d.%m.%Y - %H:%M:%S");?>
</td>
			<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center">
			<?php ob_start();?><?php echo $_smarty_tpl->getVariable('getstart')->value;?>
<?php $_tmp5=ob_get_clean();?><?php if (isset($_smarty_tpl->getVariable('clientdblist')->value[$_tmp5]['clid'])){?>
				<span class="online"><?php echo $_smarty_tpl->getVariable('lang')->value['online'];?>
</span>
			<?php }else{ ?>
				<span class="offline"><?php echo $_smarty_tpl->getVariable('lang')->value['offline'];?>
</span>
			<?php }?>
			</td>
			<td class="<?php echo $_smarty_tpl->getVariable('td_col')->value;?>
 center">
			<form method="post" action="index.php?site=cleditperm&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
&amp;cldbid=<?php ob_start();?><?php echo $_smarty_tpl->getVariable('getstart')->value;?>
<?php $_tmp6=ob_get_clean();?><?php echo $_smarty_tpl->getVariable('clientdblist')->value[$_tmp6]['cldbid'];?>
">
			<input type="submit" class="eperms" name="editperms" value="" title="<?php echo $_smarty_tpl->getVariable('lang')->value['editperms'];?>
" />
			</form>
			<?php if (!isset($_smarty_tpl->getVariable('permoverview')->value['b_client_delete_dbproperties'])||$_smarty_tpl->getVariable('permoverview')->value['b_client_delete_dbproperties']==1){?>
				<form method="post" action="index.php?site=clients&amp;sid=<?php echo $_smarty_tpl->getVariable('sid')->value;?>
">
				<input type="hidden" name="cldbid" value="<?php ob_start();?><?php echo $_smarty_tpl->getVariable('getstart')->value;?>
<?php $_tmp7=ob_get_clean();?><?php echo $_smarty_tpl->getVariable('clientdblist')->value[$_tmp7]['cldbid'];?>
" />
				<input type="submit" class="delete" name="clientdel" value="" title="<?php echo $_smarty_tpl->getVariable('lang')->value['delete'];?>
" onclick="return confirm('<?php echo $_smarty_tpl->getVariable('lang')->value['deletemsgclient'];?>
')" />
				</form>
			<?php }?>
			</td>
		</tr>
		
		<?php $_smarty_tpl->tpl_vars['change_col'] = new Smarty_variable(($_smarty_tpl->getVariable('change_col')->value+1), null, null);?>
		<?php $_smarty_tpl->tpl_vars['showclients'] = new Smarty_variable(($_smarty_tpl->getVariable('showclients')->value+1), null, null);?>
		<?php $_smarty_tpl->tpl_vars['getstart'] = new Smarty_variable(($_smarty_tpl->getVariable('getstart')->value+1), null, null);?>
	<?php }?>
</table>
<?php }?>