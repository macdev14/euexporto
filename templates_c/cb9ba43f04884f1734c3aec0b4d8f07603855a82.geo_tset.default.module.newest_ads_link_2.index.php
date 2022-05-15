<?php /* Smarty version Smarty-3.1.19, created on 2022-05-14 23:44:55
         compiled from "geo_tset:default:module:newest_ads_link_2:index" */ ?>
<?php /*%%SmartyHeaderCode:171568865362803ef7652464-82427599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb9ba43f04884f1734c3aec0b4d8f07603855a82' => 
    array (
      0 => 'geo_tset:default:module:newest_ads_link_2:index',
      1 => 1635622234,
      2 => 'geo_tset',
    ),
  ),
  'nocache_hash' => '171568865362803ef7652464-82427599',
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
  'unifunc' => 'content_62803ef7657645_11196165',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62803ef7657645_11196165')) {function content_62803ef7657645_11196165($_smarty_tpl) {?>
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
