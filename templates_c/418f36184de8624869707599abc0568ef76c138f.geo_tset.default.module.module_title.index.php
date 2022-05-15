<?php /* Smarty version Smarty-3.1.19, created on 2022-05-14 23:44:52
         compiled from "geo_tset:default:module:module_title:index" */ ?>
<?php /*%%SmartyHeaderCode:134566757562803ef4c6a7c4-54450140%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '418f36184de8624869707599abc0568ef76c138f' => 
    array (
      0 => 'geo_tset:default:module:module_title:index',
      1 => 1635622234,
      2 => 'geo_tset',
    ),
  ),
  'nocache_hash' => '134566757562803ef4c6a7c4-54450140',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'preview_text' => 0,
    'addonTextPre' => 0,
    'page_id' => 0,
    'titleOnly' => 0,
    'category_name' => 0,
    'language_text' => 0,
    'messages' => 0,
    'category_title' => 0,
    'body_vars' => 0,
    'listing_tag' => 0,
    'text' => 0,
    'addonText' => 0,
    'page_number' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_62803ef4c94cd6_30539935',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62803ef4c94cd6_30539935')) {function content_62803ef4c94cd6_30539935($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_fromDB')) include '/Users/lauropimentel/Projects/eucompro/classes/geo_smarty_plugins/modifier.fromDB.php';
if (!is_callable('smarty_modifier_replace')) include '/Users/lauropimentel/Projects/eucompro/classes/php5_classes/smarty/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_capitalize')) include '/Users/lauropimentel/Projects/eucompro/classes/php5_classes/smarty/plugins/modifier.capitalize.php';
?>
<?php if ($_smarty_tpl->tpl_vars['preview_text']->value) {?><?php echo $_smarty_tpl->tpl_vars['preview_text']->value;?>
 : <?php }?><?php echo $_smarty_tpl->tpl_vars['addonTextPre']->value;?>
<?php if ($_smarty_tpl->tpl_vars['page_id']->value==1) {?><?php echo smarty_modifier_fromDB($_smarty_tpl->tpl_vars['titleOnly']->value);?>
 : <?php echo strip_tags($_smarty_tpl->tpl_vars['category_name']->value);?>
<?php echo $_smarty_tpl->tpl_vars['language_text']->value;?>
<?php } elseif ($_smarty_tpl->tpl_vars['page_id']->value==2) {?><?php echo $_smarty_tpl->tpl_vars['messages']->value[2462];?>
 <?php echo $_smarty_tpl->tpl_vars['language_text']->value;?>
<?php } elseif ($_smarty_tpl->tpl_vars['page_id']->value==3) {?><?php echo strip_tags($_smarty_tpl->tpl_vars['category_title']->value);?>
<?php echo $_smarty_tpl->tpl_vars['language_text']->value;?>
<?php } elseif ($_smarty_tpl->tpl_vars['page_id']->value==84) {?><?php echo $_smarty_tpl->tpl_vars['messages']->value[500767];?>
 <?php echo strip_tags($_smarty_tpl->tpl_vars['category_name']->value);?>
 : <?php echo $_smarty_tpl->tpl_vars['body_vars']->value['title'];?>
<?php echo $_smarty_tpl->tpl_vars['language_text']->value;?>
<?php } elseif ($_smarty_tpl->tpl_vars['page_id']->value==10210) {?><?php echo $_smarty_tpl->tpl_vars['messages']->value[500874];?>
 <?php echo htmlspecialchars(smarty_modifier_capitalize(smarty_modifier_replace($_smarty_tpl->tpl_vars['listing_tag']->value,'-',' ')), ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
<?php echo $_smarty_tpl->tpl_vars['language_text']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['addonText']->value) {?><?php echo $_smarty_tpl->tpl_vars['addonText']->value;?>
<?php echo $_smarty_tpl->tpl_vars['language_text']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['page_number']->value>1) {?><?php echo $_smarty_tpl->tpl_vars['messages']->value[500573];?>
<?php echo $_smarty_tpl->tpl_vars['page_number']->value;?>
<?php }?><?php }} ?>
