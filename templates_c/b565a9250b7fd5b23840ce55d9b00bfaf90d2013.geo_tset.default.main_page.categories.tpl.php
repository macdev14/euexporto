<?php /* Smarty version Smarty-3.1.19, created on 2022-05-14 23:45:00
         compiled from "geo_tset:default:main_page:helpers/categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39120702962803efc26fd39-68548323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b565a9250b7fd5b23840ce55d9b00bfaf90d2013' => 
    array (
      0 => 'geo_tset:default:main_page:helpers/categories.tpl',
      1 => 1635623850,
      2 => 'geo_tset',
    ),
  ),
  'nocache_hash' => '39120702962803efc26fd39-68548323',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories' => 0,
    'link' => 0,
    'category' => 0,
    'sub_cat' => 0,
    'sub_sub_cat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_62803efc284d31_38396002',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62803efc284d31_38396002')) {function content_62803efc284d31_38396002($_smarty_tpl) {?>
<div class="list-group cz-categories">
	<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
" class="list-group-item<?php if ($_smarty_tpl->tpl_vars['category']->value['current']) {?> active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['category']->value['category_name'];?>
 <span class="glyphicon glyphicon-chevron-right"></span></a>
		<?php if ($_smarty_tpl->tpl_vars['category']->value['sub_categories']) {?>
			<div class="list-subgroups">
				<?php  $_smarty_tpl->tpl_vars['sub_cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub_cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value['sub_categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub_cat']->key => $_smarty_tpl->tpl_vars['sub_cat']->value) {
$_smarty_tpl->tpl_vars['sub_cat']->_loop = true;
?>

					<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['sub_cat']->value['category_id'];?>
" class="list-subgroup-item<?php if ($_smarty_tpl->tpl_vars['sub_cat']->value['current']) {?> active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['sub_cat']->value['category_name'];?>
</a>
					<?php if ($_smarty_tpl->tpl_vars['sub_cat']->value['sub_categories']) {?>
						<?php  $_smarty_tpl->tpl_vars['sub_sub_cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub_sub_cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sub_cat']->value['sub_categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub_sub_cat']->key => $_smarty_tpl->tpl_vars['sub_sub_cat']->value) {
$_smarty_tpl->tpl_vars['sub_sub_cat']->_loop = true;
?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['sub_sub_cat']->value['category_id'];?>
" class="list-sub-subgroup-item<?php if ($_smarty_tpl->tpl_vars['sub_sub_cat']->value['selected']) {?> active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['sub_sub_cat']->value['category_name'];?>
</a>
						<?php } ?>
					<?php }?>
				<?php } ?>
			</div>
		<?php }?>
	<?php } ?>
</div><?php }} ?>
