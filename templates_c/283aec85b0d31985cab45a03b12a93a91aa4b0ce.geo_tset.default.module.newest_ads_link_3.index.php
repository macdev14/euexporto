<?php /* Smarty version Smarty-3.1.19, created on 2022-05-14 23:44:56
         compiled from "geo_tset:default:module:newest_ads_link_3:index" */ ?>
<?php /*%%SmartyHeaderCode:11545716762803ef80b4760-97577615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '283aec85b0d31985cab45a03b12a93a91aa4b0ce' => 
    array (
      0 => 'geo_tset:default:module:newest_ads_link_3:index',
      1 => 1635622234,
      2 => 'geo_tset',
    ),
  ),
  'nocache_hash' => '11545716762803ef80b4760-97577615',
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
  'unifunc' => 'content_62803ef80c15a9_75000608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62803ef80c15a9_75000608')) {function content_62803ef80c15a9_75000608($_smarty_tpl) {?>
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
