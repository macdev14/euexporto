<?php /* Smarty version Smarty-3.1.19, created on 2022-05-14 23:44:53
         compiled from "geo_tset:default:module:display_username:index" */ ?>
<?php /*%%SmartyHeaderCode:177540172962803ef589d4c1-91705666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ed1df139c0ed6071abaf061ce2518ee720ba576' => 
    array (
      0 => 'geo_tset:default:module:display_username:index',
      1 => 1635622234,
      2 => 'geo_tset',
    ),
  ),
  'nocache_hash' => '177540172962803ef589d4c1-91705666',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'userLabel' => 0,
    'messages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_62803ef58a1985_55830312',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62803ef58a1985_55830312')) {function content_62803ef58a1985_55830312($_smarty_tpl) {?>
<span class="text_highlight">
	<?php if ($_smarty_tpl->tpl_vars['user']->value['id']) {?>
		<?php echo $_smarty_tpl->tpl_vars['userLabel']->value;?>

	<?php } else { ?>
		<?php echo $_smarty_tpl->tpl_vars['messages']->value[728];?>

	<?php }?>
</span><?php }} ?>
