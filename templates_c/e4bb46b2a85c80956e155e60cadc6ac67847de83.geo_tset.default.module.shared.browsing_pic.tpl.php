<?php /* Smarty version Smarty-3.1.19, created on 2022-05-14 23:44:57
         compiled from "geo_tset:default:module:shared:browsing_pic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155259688262803ef94650f5-29395052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4bb46b2a85c80956e155e60cadc6ac67847de83' => 
    array (
      0 => 'geo_tset:default:module:shared:browsing_pic.tpl',
      1 => 1635622234,
      2 => 'geo_tset',
    ),
  ),
  'nocache_hash' => '155259688262803ef94650f5-29395052',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_ajax' => 0,
    'browse_tpl' => 0,
    'module_pagination' => 0,
    'module' => 0,
    'header_title' => 0,
    'params_json' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_62803ef9470dd2_56985366',
),false); /*/%%SmartyHeaderCode%%*/?><?php $_smarty_tpl->used_tags = array (
  'include' => 
  array (
    '$_smarty_tpl->tpl_vars[\'browse_tpl\']->value:system:browsing' => 
    array (
      'file' => '$_smarty_tpl->tpl_vars[\'browse_tpl\']->value',
      'g_type' => 'system',
      'g_resource' => 'browsing',
    ),
  ),
  'addon' => 
  array (
  ),
  'module' => 
  array (
  ),
); ?>
<?php if ($_valid && !is_callable('content_62803ef9470dd2_56985366')) {function content_62803ef9470dd2_56985366($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['is_ajax']->value) {?>
	
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['browse_tpl']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('g_type'=>'system','g_resource'=>'browsing'), 0);?>

	<?php if ($_smarty_tpl->tpl_vars['module_pagination']->value) {?><div><?php echo $_smarty_tpl->tpl_vars['module_pagination']->value;?>
</div><?php }?>
<?php } else { ?>
	
	<?php if ($_smarty_tpl->tpl_vars['module']->value['module_display_header_row']) {?>
		<div class="content_box">
			<h3 class="title"><?php echo $_smarty_tpl->tpl_vars['header_title']->value;?>
</h3>
		</div>
	<?php }?>
	<div class="featured_items" id="module_content_<?php echo $_smarty_tpl->tpl_vars['module']->value['module_replace_tag'];?>
">
		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['browse_tpl']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('g_type'=>'system','g_resource'=>'browsing'), 0);?>

		<?php if ($_smarty_tpl->tpl_vars['module_pagination']->value) {?><div><?php echo $_smarty_tpl->tpl_vars['module_pagination']->value;?>
</div><?php }?>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['module_pagination']->value) {?>
		<script>
			LoadModulePage_<?php echo $_smarty_tpl->tpl_vars['module']->value['module_replace_tag'];?>
 = function(page) {
				jQuery.post('AJAX.php?controller=ModuleControls&action=GetPage',
					{
						tag: '<?php echo $_smarty_tpl->tpl_vars['module']->value['module_replace_tag'];?>
',
						results_page: page,
						params: <?php echo $_smarty_tpl->tpl_vars['params_json']->value;?>
  
					},
					function(returned) {
						jQuery('#module_content_<?php echo $_smarty_tpl->tpl_vars['module']->value['module_replace_tag'];?>
').html(returned);
						//add lightbox observers to new images (which wouldn't have been there when the page was initially created)
						gjUtil.lightbox.initClick();
					},
					'html'
				);
			};
		</script>
	<?php }?>
<?php }?><?php }} ?>
