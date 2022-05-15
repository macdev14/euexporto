<?php /* Smarty version Smarty-3.1.19, created on 2022-05-14 23:44:58
         compiled from "geo_tset:default:system:browsing:common/list_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18801317362803efa9b17c2-75208491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11d7e986a4aca5eb207bcc1cc35db991b224afc3' => 
    array (
      0 => 'geo_tset:default:system:browsing:common/list_view.tpl',
      1 => 1635622234,
      2 => 'geo_tset',
    ),
  ),
  'nocache_hash' => '18801317362803efa9b17c2-75208491',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'no_listings' => 0,
    'listings' => 0,
    'main_page_list_sub_template' => 0,
    'listing' => 0,
    'cfg' => 0,
    'id' => 0,
    'headers' => 0,
    'icon' => 0,
    'field' => 0,
    'col' => 0,
    'levels' => 0,
    'levelHeader' => 0,
    'lev_id' => 0,
    'level' => 0,
    'addonRows' => 0,
    'addon' => 0,
    'aKey' => 0,
    'addonHeaders' => 0,
    'addonText' => 0,
    'classifieds_file_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_62803efaa373c2_79352659',
),false); /*/%%SmartyHeaderCode%%*/?><?php $_smarty_tpl->used_tags = array (
  'include' => 
  array (
    '$_smarty_tpl->tpl_vars[\'main_page_list_sub_template\']->value:main_page:' => 
    array (
      'file' => '$_smarty_tpl->tpl_vars[\'main_page_list_sub_template\']->value',
      'g_type' => 'main_page',
      'g_resource' => '',
    ),
    'common/popup_link.tpl' => 
    array (
      'file' => 'common/popup_link.tpl',
    ),
  ),
  'addon' => 
  array (
  ),
  'module' => 
  array (
  ),
); ?>
<?php if ($_valid && !is_callable('content_62803efaa373c2_79352659')) {function content_62803efaa373c2_79352659($_smarty_tpl) {?><?php if (!is_callable('smarty_function_listing')) include '/Users/lauropimentel/Projects/eucompro/classes/geo_smarty_plugins/function.listing.php';
if (!is_callable('smarty_function_external')) include '/Users/lauropimentel/Projects/eucompro/classes/geo_smarty_plugins/function.external.php';
?>

<?php if ($_smarty_tpl->tpl_vars['no_listings']->value) {?>
	<div class="no_results_box">
		<?php echo $_smarty_tpl->tpl_vars['no_listings']->value;?>

	</div>
<?php } else { ?>
	<div class="listing_set list">
		<?php  $_smarty_tpl->tpl_vars['listing'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['listing']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['listings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['listing']->key => $_smarty_tpl->tpl_vars['listing']->value) {
$_smarty_tpl->tpl_vars['listing']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['listing']->key;
?>
			<?php if ($_smarty_tpl->tpl_vars['main_page_list_sub_template']->value) {?>
				<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['main_page_list_sub_template']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('g_type'=>'main_page','g_resource'=>''), 0);?>

			<?php } else { ?>
				<article class="listing <?php echo $_smarty_tpl->tpl_vars['listing']->value['css'];?>
">
					<?php if ($_smarty_tpl->tpl_vars['cfg']->value['cols']['image']) {?>
						<div class="image attention-getter-wrapper">
							<?php if ($_smarty_tpl->tpl_vars['listing']->value['full_image_tag']) {?>
								<span style="position: relative;"><?php echo $_smarty_tpl->tpl_vars['listing']->value['image'];?>
</span>
							<?php } else { ?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['listing_url'];?>
<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"<?php echo $_smarty_tpl->getSubTemplate ('common/popup_link.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 style="position: relative;">
									<img src="<?php echo $_smarty_tpl->tpl_vars['listing']->value['image'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" />
								</a>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['listing']->value['icons']['attention_getter']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['listing_url'];?>
<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><div class="attention-getter-position"><img src="<?php echo $_smarty_tpl->tpl_vars['listing']->value['attention_getter_url'];?>
" class="attention_getter_icon" alt="" /></div></a><?php }?>
						</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['cfg']->value['cols']['type']&&$_smarty_tpl->tpl_vars['listing']->value['type']) {?>
						<p class="type">
							<?php if ($_smarty_tpl->tpl_vars['headers']->value['type']['label']) {?><em><?php echo $_smarty_tpl->tpl_vars['headers']->value['type']['label'];?>
</em><?php }?>
							<?php echo $_smarty_tpl->tpl_vars['listing']->value['type'];?>

						</p>
					<?php }?>
					
					<?php if ($_smarty_tpl->tpl_vars['cfg']->value['cols']['title']) {?>
						<div class="title">
							<?php if ($_smarty_tpl->tpl_vars['headers']->value['title']['label']) {?><em><?php echo $_smarty_tpl->tpl_vars['headers']->value['title']['label'];?>
</em><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['listing']->value['icons']['sold']&&$_smarty_tpl->tpl_vars['cfg']->value['icons']['sold']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['icons']['sold'];?>
" alt="" /><?php }?>
							<h3><a href="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['listing_url'];?>
<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"<?php echo $_smarty_tpl->getSubTemplate ('common/popup_link.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
><?php echo $_smarty_tpl->tpl_vars['listing']->value['title'];?>
</a></h3>
							<?php if ($_smarty_tpl->tpl_vars['listing']->value['icons']['verified']&&$_smarty_tpl->tpl_vars['cfg']->value['icons']['verified']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['icons']['verified'];?>
" class="verified_icon" alt="" /><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['listing']->value['icons']['buy_now']&&$_smarty_tpl->tpl_vars['cfg']->value['icons']['buy_now']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['icons']['buy_now'];?>
" class="buy_now_icon" alt="" /><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['listing']->value['icons']['reserve_met']&&$_smarty_tpl->tpl_vars['cfg']->value['icons']['reserve_met']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['icons']['reserve_met'];?>
" class="reserve_met_icon" alt="" /><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['listing']->value['icons']['reserve_not_met']&&$_smarty_tpl->tpl_vars['cfg']->value['icons']['reserve_not_met']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['icons']['reserve_not_met'];?>
" class="reserve_not_met_icon" alt="" /><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['listing']->value['icons']['no_reserve']&&$_smarty_tpl->tpl_vars['cfg']->value['icons']['no_reserve']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['icons']['no_reserve'];?>
" class="no_reserve_icon" alt="" /><?php }?>
							
							<?php if ($_smarty_tpl->tpl_vars['listing']->value['icons']['attention_getter']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['listing']->value['attention_getter_url'];?>
" class="attention_getter_icon attention-getter-inline" alt="" /><?php }?>
							
							<?php if ($_smarty_tpl->tpl_vars['listing']->value['icons']['addon_icons']) {?>
								<?php  $_smarty_tpl->tpl_vars['icon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['icon']->_loop = false;
 $_smarty_tpl->tpl_vars['addon'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['listing']->value['icons']['addon_icons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['icon']->key => $_smarty_tpl->tpl_vars['icon']->value) {
$_smarty_tpl->tpl_vars['icon']->_loop = true;
 $_smarty_tpl->tpl_vars['addon']->value = $_smarty_tpl->tpl_vars['icon']->key;
?>
									<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>

								<?php } ?>
							<?php }?>
						</div>
					<?php } elseif ($_smarty_tpl->tpl_vars['cfg']->value['cols']['icons']&&$_smarty_tpl->tpl_vars['listing']->value['icons']) {?>
						<?php if ($_smarty_tpl->tpl_vars['listing']->value['icons']['sold']&&$_smarty_tpl->tpl_vars['cfg']->value['icons']['sold']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['icons']['sold'];?>
" alt="" /><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['listing']->value['icons']['verified']&&$_smarty_tpl->tpl_vars['cfg']->value['icons']['verified']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['icons']['verified'];?>
" class="verified_icon" alt="" /><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['listing']->value['icons']['buy_now']&&$_smarty_tpl->tpl_vars['cfg']->value['icons']['buy_now']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['icons']['buy_now'];?>
" class="buy_now_icon" alt="" /><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['listing']->value['icons']['reserve_met']&&$_smarty_tpl->tpl_vars['cfg']->value['icons']['reserve_met']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['icons']['reserve_met'];?>
" class="reserve_met_icon" alt="" /><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['listing']->value['icons']['reserve_not_met']&&$_smarty_tpl->tpl_vars['cfg']->value['icons']['reserve_not_met']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['icons']['reserve_not_met'];?>
" class="reserve_not_met_icon" alt="" /><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['listing']->value['icons']['no_reserve']&&$_smarty_tpl->tpl_vars['cfg']->value['icons']['no_reserve']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['icons']['no_reserve'];?>
" class="no_reserve_icon" alt="" /><?php }?>
						
						<?php if ($_smarty_tpl->tpl_vars['listing']->value['icons']['attention_getter']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['listing']->value['attention_getter_url'];?>
" class="attention_getter_icon attention-getter-inline" alt="" /><?php }?>
						
						<?php if ($_smarty_tpl->tpl_vars['listing']->value['icons']['addon_icons']) {?>
							<?php  $_smarty_tpl->tpl_vars['icon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['icon']->_loop = false;
 $_smarty_tpl->tpl_vars['addon'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['listing']->value['icons']['addon_icons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['icon']->key => $_smarty_tpl->tpl_vars['icon']->value) {
$_smarty_tpl->tpl_vars['icon']->_loop = true;
 $_smarty_tpl->tpl_vars['addon']->value = $_smarty_tpl->tpl_vars['icon']->key;
?>
								<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>

							<?php } ?>
						<?php }?>
					<?php }?>
					
					<?php if ($_smarty_tpl->tpl_vars['cfg']->value['cols']['business_type']&&$_smarty_tpl->tpl_vars['listing']->value['business_type']) {?>
						<p class="business_type">
							<?php if ($_smarty_tpl->tpl_vars['headers']->value['business_type']['label']) {?><em><?php echo $_smarty_tpl->tpl_vars['headers']->value['business_type']['label'];?>
</em><?php }?>
							<?php echo $_smarty_tpl->tpl_vars['listing']->value['business_type'];?>

						</p>
					<?php }?>
					
					<?php if ($_smarty_tpl->tpl_vars['cfg']->value['cols']['description']||$_smarty_tpl->tpl_vars['cfg']->value['description_under_title']) {?>
					 	<p class="description">
							<?php if ($_smarty_tpl->tpl_vars['headers']->value['description']['label']) {?><em><?php echo $_smarty_tpl->tpl_vars['headers']->value['description']['label'];?>
</em><?php }?>
							<?php echo $_smarty_tpl->tpl_vars['listing']->value['description'];?>

						</p>
					<?php }?>
					
					<?php if ($_smarty_tpl->tpl_vars['cfg']->value['cols']['tags']&&$_smarty_tpl->tpl_vars['listing']->value['tags']) {?>
						<p class="tag_list_data">
							<?php if ($_smarty_tpl->tpl_vars['headers']->value['tags']['label']) {?><em><?php echo $_smarty_tpl->tpl_vars['headers']->value['tags']['label'];?>
</em><?php }?>
							<?php echo smarty_function_listing(array('tag'=>'listing_tags_links'),$_smarty_tpl);?>

						</p>
					<?php }?>
					
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['optionals'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['name'] = 'optionals';
$_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['start'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['loop'] = is_array($_loop=21) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['optionals']['total']);
?>
						<?php $_smarty_tpl->tpl_vars['field'] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['section']['optionals']['index'], null, 0);?>
						<?php if ($_smarty_tpl->tpl_vars['cfg']->value['cols']['optionals'][$_smarty_tpl->tpl_vars['field']->value]&&$_smarty_tpl->tpl_vars['listing']->value['optionals'][$_smarty_tpl->tpl_vars['field']->value]) {?>
							<p class="optional_<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
">
								<?php if ($_smarty_tpl->tpl_vars['headers']->value['optionals'][$_smarty_tpl->tpl_vars['field']->value]['label']) {?><em><?php echo $_smarty_tpl->tpl_vars['headers']->value['optionals'][$_smarty_tpl->tpl_vars['field']->value]['label'];?>
</em><?php }?>
								<?php echo $_smarty_tpl->tpl_vars['listing']->value['optionals'][$_smarty_tpl->tpl_vars['field']->value];?>

							</p>
						<?php }?>
					<?php endfor; endif; ?>
					
					<?php if ($_smarty_tpl->tpl_vars['cfg']->value['cols']['address']&&$_smarty_tpl->tpl_vars['listing']->value['address']) {?>
						
						<p class="address">
							<?php if ($_smarty_tpl->tpl_vars['headers']->value['address']['label']) {?><em><?php echo $_smarty_tpl->tpl_vars['headers']->value['address']['label'];?>
</em><?php }?>
							<?php echo $_smarty_tpl->tpl_vars['listing']->value['address'];?>

						</p>
					<?php }?>
					
					<?php if ($_smarty_tpl->tpl_vars['cfg']->value['cols']['city']&&$_smarty_tpl->tpl_vars['listing']->value['city']) {?>
						<p class="city">
							<?php if ($_smarty_tpl->tpl_vars['headers']->value['city']['label']) {?><em><?php echo $_smarty_tpl->tpl_vars['headers']->value['city']['label'];?>
</em><?php }?>
							<?php echo $_smarty_tpl->tpl_vars['listing']->value['city'];?>

						</p>
					<?php }?>
					
					<?php $_smarty_tpl->tpl_vars['level'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['level']->step = 1;$_smarty_tpl->tpl_vars['level']->total = (int) ceil(($_smarty_tpl->tpl_vars['level']->step > 0 ? $_smarty_tpl->tpl_vars['cfg']->value['maxLocationDepth']+1 - (1) : 1-($_smarty_tpl->tpl_vars['cfg']->value['maxLocationDepth'])+1)/abs($_smarty_tpl->tpl_vars['level']->step));
if ($_smarty_tpl->tpl_vars['level']->total > 0) {
for ($_smarty_tpl->tpl_vars['level']->value = 1, $_smarty_tpl->tpl_vars['level']->iteration = 1;$_smarty_tpl->tpl_vars['level']->iteration <= $_smarty_tpl->tpl_vars['level']->total;$_smarty_tpl->tpl_vars['level']->value += $_smarty_tpl->tpl_vars['level']->step, $_smarty_tpl->tpl_vars['level']->iteration++) {
$_smarty_tpl->tpl_vars['level']->first = $_smarty_tpl->tpl_vars['level']->iteration == 1;$_smarty_tpl->tpl_vars['level']->last = $_smarty_tpl->tpl_vars['level']->iteration == $_smarty_tpl->tpl_vars['level']->total;?>
						<?php $_smarty_tpl->tpl_vars['col'] = new Smarty_variable("region_level_".((string)$_smarty_tpl->tpl_vars['level']->value), null, 0);?>
						<?php if ($_smarty_tpl->tpl_vars['cfg']->value['cols'][$_smarty_tpl->tpl_vars['col']->value]&&$_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['col']->value]) {?>
							<p class="<?php echo $_smarty_tpl->tpl_vars['col']->value;?>
">
								<?php if ($_smarty_tpl->tpl_vars['headers']->value[$_smarty_tpl->tpl_vars['col']->value]['label']) {?><em><?php echo $_smarty_tpl->tpl_vars['headers']->value[$_smarty_tpl->tpl_vars['col']->value]['label'];?>
</em><?php }?>
								<?php echo $_smarty_tpl->tpl_vars['listing']->value[$_smarty_tpl->tpl_vars['col']->value];?>

							</p>
						<?php }?>
					<?php }} ?>
					
					<?php if ($_smarty_tpl->tpl_vars['cfg']->value['cols']['zip']&&$_smarty_tpl->tpl_vars['listing']->value['zip']) {?>
						<p class="zip">
							<?php if ($_smarty_tpl->tpl_vars['headers']->value['zip']['label']) {?><em><?php echo $_smarty_tpl->tpl_vars['headers']->value['zip']['label'];?>
</em><?php }?>
							<?php echo $_smarty_tpl->tpl_vars['listing']->value['zip'];?>

						</p>
					<?php }?>
					
					<?php if ($_smarty_tpl->tpl_vars['cfg']->value['cols']['location_breadcrumb']&&$_smarty_tpl->tpl_vars['listing']->value['location_breadcrumb']) {?>
						<p class="region_breadcrumb">
							<?php if ($_smarty_tpl->tpl_vars['headers']->value['location_breadcrumb']['label']) {?><em><?php echo $_smarty_tpl->tpl_vars['headers']->value['location_breadcrumb']['label'];?>
</em><?php }?>
							<?php echo $_smarty_tpl->tpl_vars['listing']->value['location_breadcrumb'];?>

						</p>
					<?php }?>
					
					<?php if ($_smarty_tpl->tpl_vars['cfg']->value['cols']['num_bids']&&$_smarty_tpl->tpl_vars['listing']->value['num_bids']) {?>
						<p class="number_bids">
							<?php if ($_smarty_tpl->tpl_vars['headers']->value['num_bids']['label']) {?><em><?php echo $_smarty_tpl->tpl_vars['headers']->value['num_bids']['label'];?>
</em><?php }?>
							<?php echo $_smarty_tpl->tpl_vars['listing']->value['num_bids'];?>

						</p>
					<?php }?>
					
					<?php if ($_smarty_tpl->tpl_vars['cfg']->value['cols']['price']&&$_smarty_tpl->tpl_vars['listing']->value['price']) {?>
						<p class="price">
							<?php if ($_smarty_tpl->tpl_vars['headers']->value['price']['label']) {?><em><?php echo $_smarty_tpl->tpl_vars['headers']->value['price']['label'];?>
</em><?php }?>
							<?php echo $_smarty_tpl->tpl_vars['listing']->value['price'];?>

						</p>
					<?php }?>
					
					<?php if ($_smarty_tpl->tpl_vars['cfg']->value['cols']['entry_date']&&$_smarty_tpl->tpl_vars['listing']->value['entry_date']) {?>
						<p class="entry_date">
							<?php if ($_smarty_tpl->tpl_vars['headers']->value['entry_date']['label']) {?><em><?php echo $_smarty_tpl->tpl_vars['headers']->value['entry_date']['label'];?>
</em><?php }?>
							<?php echo $_smarty_tpl->tpl_vars['listing']->value['entry_date'];?>

						</p>
					<?php }?>
					
					<?php if ($_smarty_tpl->tpl_vars['cfg']->value['cols']['time_left']&&$_smarty_tpl->tpl_vars['listing']->value['time_left']) {?>
						<p class="time_left">
							<?php if ($_smarty_tpl->tpl_vars['headers']->value['time_left']['label']) {?><em><?php echo $_smarty_tpl->tpl_vars['headers']->value['time_left']['label'];?>
</em><?php }?>
							<?php echo $_smarty_tpl->tpl_vars['listing']->value['time_left'];?>

						</p>
					<?php }?>
					
					<?php  $_smarty_tpl->tpl_vars['levels'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['levels']->_loop = false;
 $_smarty_tpl->tpl_vars['lev_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['headers']->value['leveled']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['levels']->key => $_smarty_tpl->tpl_vars['levels']->value) {
$_smarty_tpl->tpl_vars['levels']->_loop = true;
 $_smarty_tpl->tpl_vars['lev_id']->value = $_smarty_tpl->tpl_vars['levels']->key;
?>
						<?php  $_smarty_tpl->tpl_vars['levelHeader'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['levelHeader']->_loop = false;
 $_smarty_tpl->tpl_vars['level'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['levels']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['levelHeader']->key => $_smarty_tpl->tpl_vars['levelHeader']->value) {
$_smarty_tpl->tpl_vars['levelHeader']->_loop = true;
 $_smarty_tpl->tpl_vars['level']->value = $_smarty_tpl->tpl_vars['levelHeader']->key;
?>
							<p class="<?php echo $_smarty_tpl->tpl_vars['levelHeader']->value['css'];?>
">
								<?php if ($_smarty_tpl->tpl_vars['levelHeader']->value['label']) {?><em><?php echo $_smarty_tpl->tpl_vars['levelHeader']->value['label'];?>
:</em><?php }?>
								<?php echo $_smarty_tpl->tpl_vars['listing']->value['leveled'][$_smarty_tpl->tpl_vars['lev_id']->value][$_smarty_tpl->tpl_vars['level']->value]['name'];?>

							</p>
						<?php } ?>
					<?php } ?>
					
					<?php if ($_smarty_tpl->tpl_vars['listing']->value['addonData']) {?>
						
						<?php  $_smarty_tpl->tpl_vars['addonRows'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['addonRows']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listing']->value['addonData']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['addonRows']->key => $_smarty_tpl->tpl_vars['addonRows']->value) {
$_smarty_tpl->tpl_vars['addonRows']->_loop = true;
?>
							<?php  $_smarty_tpl->tpl_vars['addonText'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['addonText']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['addonRows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['addonText']->key => $_smarty_tpl->tpl_vars['addonText']->value) {
$_smarty_tpl->tpl_vars['addonText']->_loop = true;
?>
								<p class="addon_data <?php echo $_smarty_tpl->tpl_vars['addonHeaders']->value[$_smarty_tpl->tpl_vars['addon']->value][$_smarty_tpl->tpl_vars['aKey']->value]['css'];?>
">
									<?php if ($_smarty_tpl->tpl_vars['addonHeaders']->value[$_smarty_tpl->tpl_vars['addon']->value][$_smarty_tpl->tpl_vars['aKey']->value]['label']) {?><em><?php echo $_smarty_tpl->tpl_vars['addonHeaders']->value[$_smarty_tpl->tpl_vars['addon']->value][$_smarty_tpl->tpl_vars['aKey']->value]['label'];?>
:</em><?php }?>
									<?php echo $_smarty_tpl->tpl_vars['addonText']->value;?>

								</p>
							<?php } ?>
						<?php } ?>
					<?php }?>
					
					<?php if ($_smarty_tpl->tpl_vars['cfg']->value['cols']['edit']) {?>
						<p class="edit">
							<a href="<?php echo $_smarty_tpl->tpl_vars['classifieds_file_name']->value;?>
?a=cart&amp;action=new&amp;main_type=listing_edit&amp;listing_id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><img src="<?php echo smarty_function_external(array('file'=>'images/buttons/listing_edit.gif'),$_smarty_tpl);?>
" alt="" /></a>
						</p>
					<?php }?>
					
					<?php if ($_smarty_tpl->tpl_vars['cfg']->value['cols']['delete']) {?>
						<p class="delete">
							<a onclick="if (!confirm('Are you sure you want to delete this?')) return false;" href="<?php echo $_smarty_tpl->tpl_vars['classifieds_file_name']->value;?>
?a=99&amp;b=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><img src="<?php echo smarty_function_external(array('file'=>'images/buttons/listing_delete.gif'),$_smarty_tpl);?>
" alt="" /></a>
						</p>
					<?php }?>
					<div class="clear"></div>
				</article>
			<?php }?>
		<?php } ?>
	</div>
<?php }?>

<?php }} ?>
