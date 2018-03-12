<?php /* Smarty version Smarty3rc4, created on 2016-11-10 12:52:17
         compiled from "/var/www/html/ts3wi/templates/new/showupdate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99861368158245f710bb7f2-72174061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb839cc9349f41fbfb3923fb4b73517e17bdbf28' => 
    array (
      0 => '/var/www/html/ts3wi/templates/new/showupdate.tpl',
      1 => 1467056337,
    ),
  ),
  'nocache_hash' => '99861368158245f710bb7f2-72174061',
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