<?php /* Smarty version Smarty-3.1.19, created on 2022-05-14 23:44:54
         compiled from "geo_tset:default:module:newest_ads_link_1:index" */ ?>
<?php /*%%SmartyHeaderCode:19376849362803ef6c3bee0-40166994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4e10987a45bc8f0b4e3c33c5e7485c623ad07a8' => 
    array (
      0 => 'geo_tset:default:module:newest_ads_link_1:index',
      1 => 1635622234,
      2 => 'geo_tset',
    ),
  ),
  'nocache_hash' => '19376849362803ef6c3bee0-40166994',
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
  'unifunc' => 'content_62803ef6c420b2_29072941',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62803ef6c420b2_29072941')) {function content_62803ef6c420b2_29072941($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['buttonStyle']->value) {?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="button">
<?php } else { ?>
	<div class="row_odd"><strong><a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
">
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['label']->value;?>

<?php if (!$_smarty_tpl->tpl_vars['buttonStyle']->value) {?>
	</a></strong></div>
<?php } else { ?>
	</a>
<?php }?><?php }} ?>
