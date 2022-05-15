<?php /* Smarty version Smarty-3.1.19, created on 2022-05-14 23:44:58
         compiled from "geo_tset:default:module:shared:browsing.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13115297262803efa99fc40-68018503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d550507b29bd08e66461a443fe36a1fd66cf650' => 
    array (
      0 => 'geo_tset:default:module:shared:browsing.tpl',
      1 => 1635622234,
      2 => 'geo_tset',
    ),
  ),
  'nocache_hash' => '13115297262803efa99fc40-68018503',
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
  'unifunc' => 'content_62803efa9adbb6_31560089',
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
<?php if ($_valid && !is_callable('content_62803efa9adbb6_31560089')) {function content_62803efa9adbb6_31560089($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['is_ajax']->value) {?>
	
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['browse_tpl']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('g_type'=>'system','g_resource'=>'browsing'), 0);?>

	<?php if ($_smarty_tpl->tpl_vars['module_pagination']->value) {?><div><?php echo $_smarty_tpl->tpl_vars['module_pagination']->value;?>
</div><?php }?>
<?php } else { ?>
	
	<?php if ($_smarty_tpl->tpl_vars['module']->value['module_display_header_row']&&$_smarty_tpl->tpl_vars['header_title']->value) {?>
		<h3 class="title"><?php echo $_smarty_tpl->tpl_vars['header_title']->value;?>
</h3>
	<?php }?>
	<div id="module_content_<?php echo $_smarty_tpl->tpl_vars['module']->value['module_replace_tag'];?>
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
