<?php /* Smarty version Smarty3rc4, created on 2016-11-02 02:38:56
         compiled from "/srv/www/htdocs/ts3wi/templates/new/showupdate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1201954934581951c050be46-12549127%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1dd191d2099a346ae132fe0820b1f1428cf63249' => 
    array (
      0 => '/srv/www/htdocs/ts3wi/templates/new/showupdate.tpl',
      1 => 1467056337,
    ),
  ),
  'nocache_hash' => '1201954934581951c050be46-12549127',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (isset($_smarty_tpl->getVariable('newwiversion')->value)){?>
<tr>
	<td class="green1 warning center" colspan="2">
	<?php echo $_smarty_tpl->getVariable('newwiversion')->value;?>

	</td>
<tr>
<?php }?>