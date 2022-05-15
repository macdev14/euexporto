<?php /* Smarty version Smarty-3.1.19, created on 2022-05-14 23:44:51
         compiled from "geo_tset:default:system:browsing:common/category_block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75764655662803ef3a6b634-03004862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcb2ec8e1674249a09a6ca3e284231317de0af94' => 
    array (
      0 => 'geo_tset:default:system:browsing:common/category_block.tpl',
      1 => 1635622234,
      2 => 'geo_tset',
    ),
  ),
  'nocache_hash' => '75764655662803ef3a6b634-03004862',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'text' => 0,
    'classifieds_file_name' => 0,
    'category' => 0,
    'streamlined' => 0,
    'categories' => 0,
    'cats' => 0,
    'link' => 0,
    'cat' => 0,
    'tree_display_mode' => 0,
    'show_no_subcats' => 0,
    'current_category_name' => 0,
    'show_subcats' => 0,
    'column_count' => 0,
    'show_descriptions' => 0,
    'sub_cat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_62803ef3b2ae96_47505234',
),false); /*/%%SmartyHeaderCode%%*/?><?php $_smarty_tpl->used_tags = array (
  'include' => 
  array (
    'common/category_breadcrumb.tpl' => 
    array (
      'file' => 'common/category_breadcrumb.tpl',
    ),
  ),
  'addon' => 
  array (
  ),
  'module' => 
  array (
  ),
); ?>
<?php if ($_valid && !is_callable('content_62803ef3b2ae96_47505234')) {function content_62803ef3b2ae96_47505234($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/Users/lauropimentel/Projects/eucompro/classes/php5_classes/smarty/plugins/function.cycle.php';
if (!is_callable('smarty_function_external')) include '/Users/lauropimentel/Projects/eucompro/classes/geo_smarty_plugins/function.external.php';
if (!is_callable('smarty_modifier_fromDB')) include '/Users/lauropimentel/Projects/eucompro/classes/geo_smarty_plugins/modifier.fromDB.php';
?>

<?php if ($_smarty_tpl->tpl_vars['text']->value['back_to_normal_link']) {?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['classifieds_file_name']->value;?>
?a=5&amp;b=<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
" class="button"><?php echo $_smarty_tpl->tpl_vars['text']->value['back_to_normal_link'];?>
</a>
	<br /><br />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['streamlined']->value) {?>
	
	<?php echo $_smarty_tpl->getSubTemplate ('common/category_breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
	<div class="category_block" style="display: none;">
		<div class="cat-block-popout">
			
			<?php  $_smarty_tpl->tpl_vars['cats'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cats']->_loop = false;
 $_smarty_tpl->tpl_vars['column'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cats']->key => $_smarty_tpl->tpl_vars['cats']->value) {
$_smarty_tpl->tpl_vars['cats']->_loop = true;
 $_smarty_tpl->tpl_vars['column']->value = $_smarty_tpl->tpl_vars['cats']->key;
?>
				<div class="category_column">
					<ul class="categories">
						<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['cat']->value['category_id'];?>
">
								<li class="element category_<?php echo $_smarty_tpl->tpl_vars['cat']->value['category_id'];?>
 <?php echo smarty_function_cycle(array('values'=>"row_even,row_odd"),$_smarty_tpl);?>
">
									<div class="main_cat_title">
										<?php if ($_smarty_tpl->tpl_vars['cat']->value['category_image']) {?><img src="<?php echo smarty_function_external(array('file'=>$_smarty_tpl->tpl_vars['cat']->value['category_image']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['cat']->value['category_image_alt'];?>
" /><?php }?>
										<span class="category_title"><?php echo $_smarty_tpl->tpl_vars['cat']->value['category_name'];?>
</span> 
										<?php if ($_smarty_tpl->tpl_vars['cat']->value['category_count']) {?><span class="listing_counts"><?php echo $_smarty_tpl->tpl_vars['cat']->value['category_count'];?>
</span><?php }?> 
										<?php if ($_smarty_tpl->tpl_vars['cat']->value['new_ad_icon']) {?><?php echo $_smarty_tpl->tpl_vars['cat']->value['new_ad_icon'];?>
<?php }?>
									</div>
								</li>
							</a>
						<?php } ?>
					</ul>
				</div>
			<?php } ?>
		</div>
	</div>
<?php } else { ?>
	
	
	
	<?php if ($_smarty_tpl->tpl_vars['tree_display_mode']->value==1||$_smarty_tpl->tpl_vars['tree_display_mode']->value==2) {?>
		<?php echo $_smarty_tpl->getSubTemplate ('common/category_breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['show_no_subcats']->value) {?>
		<div class="center sub_note">
			<?php echo $_smarty_tpl->tpl_vars['text']->value['no_subcats'];?>
 <?php echo $_smarty_tpl->tpl_vars['current_category_name']->value;?>

		</div>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['show_subcats']->value) {?>
		<div class="clearfix category_block">
			<?php  $_smarty_tpl->tpl_vars['cats'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cats']->_loop = false;
 $_smarty_tpl->tpl_vars['column'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cats']->key => $_smarty_tpl->tpl_vars['cats']->value) {
$_smarty_tpl->tpl_vars['cats']->_loop = true;
 $_smarty_tpl->tpl_vars['column']->value = $_smarty_tpl->tpl_vars['cats']->key;
?>
				<div class="category_column columns-<?php echo $_smarty_tpl->tpl_vars['column_count']->value;?>
">
					<ul class="categories">
						<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
							<li class="element category_<?php echo $_smarty_tpl->tpl_vars['cat']->value['category_id'];?>
">
								<div class="main_cat_title">
									<?php if ($_smarty_tpl->tpl_vars['cat']->value['category_image']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['cat']->value['category_id'];?>
"><img src="<?php echo smarty_function_external(array('file'=>$_smarty_tpl->tpl_vars['cat']->value['category_image']),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['cat']->value['category_image_alt'];?>
" /></a><?php }?>
									<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['cat']->value['category_id'];?>
"><span class="category_title"><?php echo $_smarty_tpl->tpl_vars['cat']->value['category_name'];?>
</span></a>
									<?php if ($_smarty_tpl->tpl_vars['cat']->value['category_count']) {?><span class="listing_counts"><?php echo $_smarty_tpl->tpl_vars['cat']->value['category_count'];?>
</span><?php }?>
									<?php if ($_smarty_tpl->tpl_vars['cat']->value['new_ad_icon']) {?><?php echo $_smarty_tpl->tpl_vars['cat']->value['new_ad_icon'];?>
<?php }?>
								</div>
								<?php if ($_smarty_tpl->tpl_vars['show_descriptions']->value) {?>
									<p class="category_description"><?php echo $_smarty_tpl->tpl_vars['cat']->value['category_description'];?>
</p>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['cat']->value['sub_categories']) {?>
									<ul class="sub_categories">
										<?php  $_smarty_tpl->tpl_vars['sub_cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub_cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat']->value['sub_categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub_cat']->key => $_smarty_tpl->tpl_vars['sub_cat']->value) {
$_smarty_tpl->tpl_vars['sub_cat']->_loop = true;
?>
											<li class="element subcategory_<?php echo $_smarty_tpl->tpl_vars['sub_cat']->value['category_id'];?>
">
												<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['sub_cat']->value['category_id'];?>
">
													<span class="category_title">
														<?php echo smarty_modifier_fromDB($_smarty_tpl->tpl_vars['sub_cat']->value['category_name']);?>

													</span>
												</a>
											</li>
										<?php } ?>
									</ul>
								<?php }?>
							</li>
						<?php } ?>
					</ul>
				</div>
			<?php } ?>
		</div>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['tree_display_mode']->value==0||$_smarty_tpl->tpl_vars['tree_display_mode']->value==2) {?>
		<?php echo $_smarty_tpl->getSubTemplate ('common/category_breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }?>


<?php }?><?php }} ?>
