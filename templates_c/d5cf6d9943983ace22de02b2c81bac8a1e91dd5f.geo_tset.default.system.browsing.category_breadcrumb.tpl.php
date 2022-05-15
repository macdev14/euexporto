<?php /* Smarty version Smarty-3.1.19, created on 2022-05-14 23:44:51
         compiled from "geo_tset:default:system:browsing:common/category_breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67632343362803ef3b34394-43497070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5cf6d9943983ace22de02b2c81bac8a1e91dd5f' => 
    array (
      0 => 'geo_tset:default:system:browsing:common/category_breadcrumb.tpl',
      1 => 1635622234,
      2 => 'geo_tset',
    ),
  ),
  'nocache_hash' => '67632343362803ef3b34394-43497070',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'string_tree' => 0,
    'array_tree' => 0,
    'category_tree_pre' => 0,
    'category_tree_post' => 0,
    'text' => 0,
    'link_top' => 0,
    'link' => 0,
    'cat' => 0,
    'streamlined' => 0,
    'in_terminal_category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_62803ef3b45f13_64955976',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62803ef3b45f13_64955976')) {function content_62803ef3b45f13_64955976($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['string_tree']->value||$_smarty_tpl->tpl_vars['array_tree']->value||$_smarty_tpl->tpl_vars['category_tree_pre']->value||$_smarty_tpl->tpl_vars['category_tree_post']->value) {?>
	<nav class="breadcrumb">
		<?php if ($_smarty_tpl->tpl_vars['category_tree_pre']->value) {?>
			
			<?php echo $_smarty_tpl->tpl_vars['category_tree_pre']->value;?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['array_tree']->value) {?>
			<div class="highlight"><?php echo $_smarty_tpl->tpl_vars['text']->value['tree_label'];?>
</div>
			<a href="<?php echo $_smarty_tpl->tpl_vars['link_top']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value['main_category'];?>
</a>
			<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['array_tree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['cat']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['cat']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
 $_smarty_tpl->tpl_vars['cat']->iteration++;
 $_smarty_tpl->tpl_vars['cat']->last = $_smarty_tpl->tpl_vars['cat']->iteration === $_smarty_tpl->tpl_vars['cat']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tree']['last'] = $_smarty_tpl->tpl_vars['cat']->last;
?>
				<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['tree']['last']) {?><div class="active"><?php } else { ?><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['cat']->value['category_id'];?>
"><?php }?>
					<?php echo $_smarty_tpl->tpl_vars['cat']->value['category_name'];?>

				<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['tree']['last']) {?></a><?php } else { ?></div><?php }?>
			<?php } ?>
			<?php if ($_smarty_tpl->tpl_vars['streamlined']->value&&!$_smarty_tpl->tpl_vars['in_terminal_category']->value) {?>
				<div class="subcategory-nav-open" style="cursor: pointer;"><span class="glyphicon glyphicon-plus"></span></div>
			<?php }?>
		<?php } elseif ($_smarty_tpl->tpl_vars['string_tree']->value) {?>
			<div><?php echo $_smarty_tpl->tpl_vars['string_tree']->value;?>
</div>
			
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['category_tree_post']->value) {?>
			
			<?php echo $_smarty_tpl->tpl_vars['category_tree_post']->value;?>

		<?php }?>
	</nav>
<?php }?><?php }} ?>
