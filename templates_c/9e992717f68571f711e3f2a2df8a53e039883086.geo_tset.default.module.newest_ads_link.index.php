<?php /* Smarty version Smarty-3.1.19, created on 2022-05-14 23:44:54
         compiled from "geo_tset:default:module:newest_ads_link:index" */ ?>
<?php /*%%SmartyHeaderCode:15001412162803ef6265e64-17372805%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e992717f68571f711e3f2a2df8a53e039883086' => 
    array (
      0 => 'geo_tset:default:module:newest_ads_link:index',
      1 => 1635622234,
      2 => 'geo_tset',
    ),
  ),
  'nocache_hash' => '15001412162803ef6265e64-17372805',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'buttonStyle' => 0,
    'href' => 0,
    'label' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_62803ef6271bb0_49128828',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62803ef6271bb0_49128828')) {function content_62803ef6271bb0_49128828($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['buttonStyle']->value) {?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="button">
<?php } else { ?>
	<div class="row_even"><strong><a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
">
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['label']->value;?>

<?php if (!$_smarty_tpl->tpl_vars['buttonStyle']->value) {?>
	</a></strong></div>
<?php } else { ?>
	</a>
<?php }?><?php }} ?>
