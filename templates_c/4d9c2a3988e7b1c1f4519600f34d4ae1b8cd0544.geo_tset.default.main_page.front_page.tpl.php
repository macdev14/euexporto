<?php /* Smarty version Smarty-3.1.19, created on 2022-05-14 23:44:51
         compiled from "geo_tset:default:main_page:front_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108346914462803ef3b5a189-50835726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d9c2a3988e7b1c1f4519600f34d4ae1b8cd0544' => 
    array (
      0 => 'geo_tset:default:main_page:front_page.tpl',
      1 => 1635611022,
      2 => 'geo_tset',
    ),
  ),
  'nocache_hash' => '108346914462803ef3b5a189-50835726',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'common_text' => 0,
    'enabledAddons' => 0,
    'geographic_navigation_region' => 0,
    'classifieds_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_62803ef3b82d39_84409934',
),false); /*/%%SmartyHeaderCode%%*/?><?php $_smarty_tpl->used_tags = array (
  'include' => 
  array (
    'head_common.tpl' => 
    array (
      'file' => 'head_common.tpl',
    ),
    'header.tpl' => 
    array (
      'file' => 'header.tpl',
    ),
    'footer.tpl' => 
    array (
      'file' => 'footer.tpl',
    ),
  ),
  'addon' => 
  array (
    'geographic_navigation:current_region' => 
    array (
      'addon' => 'geographic_navigation',
      'tag' => 'current_region',
    ),
    'geographic_navigation:navigation' => 
    array (
      'addon' => 'geographic_navigation',
      'tag' => 'navigation',
    ),
  ),
  'module' => 
  array (
    'module_title' => 'module_title',
    'newest_ads_link' => 'newest_ads_link',
    'newest_ads_link_1' => 'newest_ads_link_1',
    'newest_ads_link_2' => 'newest_ads_link_2',
    'newest_ads_link_3' => 'newest_ads_link_3',
    'module_featured_pic_1' => 'module_featured_pic_1',
    'module_hottest_ads' => 'module_hottest_ads',
    'newest_ads_1' => 'newest_ads_1',
  ),
); ?>
<?php if ($_valid && !is_callable('content_62803ef3b82d39_84409934')) {function content_62803ef3b82d39_84409934($_smarty_tpl) {?><?php if (!is_callable('smarty_function_module')) include '/Users/lauropimentel/Projects/eucompro/classes/geo_smarty_plugins/function.module.php';
if (!is_callable('smarty_function_head_html')) include '/Users/lauropimentel/Projects/eucompro/classes/geo_smarty_plugins/function.head_html.php';
if (!is_callable('smarty_function_external')) include '/Users/lauropimentel/Projects/eucompro/classes/geo_smarty_plugins/function.external.php';
if (!is_callable('smarty_function_body_html')) include '/Users/lauropimentel/Projects/eucompro/classes/geo_smarty_plugins/function.body_html.php';
if (!is_callable('smarty_function_category_list')) include '/Users/lauropimentel/Projects/eucompro/classes/geo_smarty_plugins/function.category_list.php';
if (!is_callable('smarty_function_addon')) include '/Users/lauropimentel/Projects/eucompro/classes/geo_smarty_plugins/function.addon.php';
?><!DOCTYPE html>

<html class="no-js design2016">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php echo smarty_function_module(array('tag'=>'module_title'),$_smarty_tpl);?>
</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

		<?php echo smarty_function_head_html(array(),$_smarty_tpl);?>

		
		<!--  This loads the RSS feed  -->
		<link rel="alternate" type="application/rss+xml" title="Newest Listing Feed" href="rss_listings.php" />
		
		<?php echo $_smarty_tpl->getSubTemplate ('head_common.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<script src="js/modernizr-2.6.2.min.js"></script>
		<script>Modernizr.load({ test: Modernizr.mq('only all'),nope:'<?php echo smarty_function_external(array('file'=>"css/old_ie.css"),$_smarty_tpl);?>
'});</script>
	</head>
	<body>
		<div class="wrapper two-column">
			<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<!--[if lt IE 9]>
				<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
			<![endif]-->
			<div class="main">
				<!-- MAIN CONTENTS OF PAGE -->

				<!-- FIND FORM BEGIN -->
				<div class="content_box showcase search">
					<div class="inner">
						<div class="search_fade_box">
							<div class="gj_image_fade">
								<div style="display: none;"><img src="<?php echo smarty_function_external(array('file'=>'images/showcase_slideshow/house.png'),$_smarty_tpl);?>
" alt="" /></div>
								<div style="display: none;"><img src="<?php echo smarty_function_external(array('file'=>'images/showcase_slideshow/jersey.png'),$_smarty_tpl);?>
" alt="" /></div>
								<div style="display: none;"><img src="<?php echo smarty_function_external(array('file'=>'images/showcase_slideshow/puppies.png'),$_smarty_tpl);?>
" alt="" /></div>
								<div style="display: none;"><img src="<?php echo smarty_function_external(array('file'=>'images/showcase_slideshow/car4.png'),$_smarty_tpl);?>
" alt="" /></div>
								<div style="display: none;"><img src="<?php echo smarty_function_external(array('file'=>'images/showcase_slideshow/horse.png'),$_smarty_tpl);?>
" alt="" /></div>
								<div style="display: none;"><img src="<?php echo smarty_function_external(array('file'=>'images/showcase_slideshow/ipad2.png'),$_smarty_tpl);?>
" alt="" /></div>
								<div style="display: none;"><img src="<?php echo smarty_function_external(array('file'=>'images/showcase_slideshow/guitar.png'),$_smarty_tpl);?>
" alt="" /></div>
								<div style="display: none;"><img src="<?php echo smarty_function_external(array('file'=>'images/showcase_slideshow/car6.png'),$_smarty_tpl);?>
" alt="" /></div>
							</div>
							<ul class="sell-button">
								<li id="active"><a href="index.php?a=1" id="current"><?php echo $_smarty_tpl->tpl_vars['common_text']->value[502410];?>
<!-- Sell --> </a></li>
							</ul>
						</div>
						<h1 class="search_title"><?php echo $_smarty_tpl->tpl_vars['common_text']->value[502411];?>
<!-- What are you Looking For --></h1> 

						<!-- form input field begin -->
						
						<div class="search-box-container">
							<form>
								<div class="form-wrapper cf">
									<input type="hidden" name="a" value="19" />
									<input type="hidden" name="b[subcategories_also]" value="1" />
									<input class="keyword" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['common_text']->value[502412];?>
" name="b[search_text]" /><!-- Search Keywords -->
									<button type="submit"><span class="glyphicon glyphicon-search"></span></button>
								</div>
								
							<?php if ($_smarty_tpl->tpl_vars['enabledAddons']->value['zipsearch']) {?>
								<div class="cntr" style="font-size:.8em; margin: 10px 0;">
									<div class="zipbox">
										<?php echo $_smarty_tpl->tpl_vars['common_text']->value[502433];?>
<!-- Within -->:
										<select class="field" name="b[by_zip_code_distance]">
											<option value="1">1 <?php echo $_smarty_tpl->tpl_vars['common_text']->value[502413];?>
<!-- mile --><!-- Use .502415 for kilometer --></option>
											<option value="5">5 <?php echo $_smarty_tpl->tpl_vars['common_text']->value[502414];?>
<!-- miles --><!-- Use .502416 for kilometers --></option>
											<option value="10">10 <?php echo $_smarty_tpl->tpl_vars['common_text']->value[502414];?>
<!-- miles --></option>
											<option value="15">15 <?php echo $_smarty_tpl->tpl_vars['common_text']->value[502414];?>
<!-- miles --></option>
											<option value="20">20 <?php echo $_smarty_tpl->tpl_vars['common_text']->value[502414];?>
<!-- miles --></option>
											<option value="25">25 <?php echo $_smarty_tpl->tpl_vars['common_text']->value[502414];?>
<!-- miles --></option>
											<option value="30">30 <?php echo $_smarty_tpl->tpl_vars['common_text']->value[502414];?>
<!-- miles --></option>
											<option value="40">40 <?php echo $_smarty_tpl->tpl_vars['common_text']->value[502414];?>
<!-- miles --></option>
											<option value="50">50 <?php echo $_smarty_tpl->tpl_vars['common_text']->value[502414];?>
<!-- miles --></option>
											<option value="75">75 <?php echo $_smarty_tpl->tpl_vars['common_text']->value[502414];?>
<!-- miles --></option>
											<option value="100">100 <?php echo $_smarty_tpl->tpl_vars['common_text']->value[502414];?>
<!-- miles --></option>
											<option value="200">200 <?php echo $_smarty_tpl->tpl_vars['common_text']->value[502414];?>
<!-- miles --></option>
											<option value="300">300 <?php echo $_smarty_tpl->tpl_vars['common_text']->value[502414];?>
<!-- miles --></option>
											<option value="400">400 <?php echo $_smarty_tpl->tpl_vars['common_text']->value[502414];?>
<!-- miles --></option>
											<option value="500">500 <?php echo $_smarty_tpl->tpl_vars['common_text']->value[502414];?>
<!-- miles --></option>
										</select>
										<?php echo $_smarty_tpl->tpl_vars['common_text']->value[502434];?>
<!-- of -->
										<input id="by_zip_code" class="field" type="text" size="10" name="b[by_zip_code]" value=""  placeholder="<?php echo $_smarty_tpl->tpl_vars['common_text']->value[502417];?>
" /><!-- Postal Code -->
									</div>
								</div>
							<?php } else { ?>
								<div class="spacer">&nbsp;</div>
							<?php }?>
								
							</form>
														
							<div class="recentButtons">
								<div class="recent-listing-links">
									<strong><span class="glyphicon glyphicon-calendar"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['common_text']->value[502418];?>
<!-- Recent --></strong>
									<div style="white-space:nowrap; display:inline;">
										<?php echo smarty_function_module(array('tag'=>'newest_ads_link','buttonStyle'=>1),$_smarty_tpl);?>

										<?php echo smarty_function_module(array('tag'=>'newest_ads_link_1','buttonStyle'=>1),$_smarty_tpl);?>

										<?php echo smarty_function_module(array('tag'=>'newest_ads_link_2','buttonStyle'=>1),$_smarty_tpl);?>

										<?php echo smarty_function_module(array('tag'=>'newest_ads_link_3','buttonStyle'=>1),$_smarty_tpl);?>

									</div>
								</div>
							</div>
							
						</div>
						
						<!-- form input field end -->
						
					</div>
				</div>
				<!-- FIND FORM END -->	
				<!-- BROWSE BOX BEGIN -->						
				<div class="content_box mainbody-home">
					<div style="margin: 20px 0 0 0;">
						<?php echo smarty_function_body_html(array(),$_smarty_tpl);?>

					</div>
				</div>
				<!-- BROWSE BOX END -->
				<!-- FEATURED CAROUSEL BEGIN -->
				<div class="content_box gj_simple_carousel rwd-hide">
					<h3 class="title section-collapser"><span class="glyphicon glyphicon-star"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['common_text']->value[502420];?>
<!-- More Featured Listings --></h3>
					
					<?php echo smarty_function_module(array('tag'=>'module_featured_pic_1','gallery_columns'=>4,'dynamic_image_dims'=>1),$_smarty_tpl);?>

				</div>
				<!-- FEATURED CAROUSEL END -->
				
				<!-- Hottest and Recent Half Columns Begin -->
				<div class="half_column_left normal-whitespace rwd-hide">
					<h2 class="title section-collapser"><span class="glyphicon glyphicon-fire"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['common_text']->value[502421];?>
<!-- Hottest Listings --></h2>
					<div>
						<?php echo smarty_function_module(array('tag'=>'module_hottest_ads','browse_view'=>'list','use_pagination'=>1),$_smarty_tpl);?>

					</div>
				</div>
				<div class="half_column_right rwd-hide">
					<h3 class="title section-collapser"><span class="glyphicon glyphicon-calendar"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['common_text']->value[502422];?>
<!-- Recent Listings --></h3>
					<div>
						<?php echo smarty_function_module(array('tag'=>'newest_ads_1','browse_view'=>'list','use_pagination'=>1),$_smarty_tpl);?>

					</div>
				</div>
				<!-- Hottest and Recent Half Columns END -->
			</div>
			<div class="sidebar">
				<!-- LEFT SIDEBAR CONTENTS BEGIN -->

				<div id="category_column cz-categories">
					<div id="left_categories">
						<?php echo smarty_function_category_list(array(),$_smarty_tpl);?>

					</div>									
				</div>
				
				<!-- START REGIONS -->
				<div class="rwd-hide">
				<?php if ($_smarty_tpl->tpl_vars['enabledAddons']->value['geographic_navigation']) {?>
					
					<div class="content_box clearfix">
						<h2 class="title">
							<span class="glyphicon glyphicon-map-marker"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['common_text']->value[502402];?>
<!-- Location -->:&nbsp;<span style="font-size: .8em; font-weight: normal;"><?php echo smarty_function_addon(array('author'=>'geo_addons','addon'=>'geographic_navigation','tag'=>'current_region'),$_smarty_tpl);?>
&nbsp;
							<?php if ($_smarty_tpl->tpl_vars['geographic_navigation_region']->value) {?>&nbsp;[&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['classifieds_url']->value;?>
?region=0"><?php echo $_smarty_tpl->tpl_vars['common_text']->value[502401];?>
<!-- clear --></a>&nbsp;]<?php }?></span>
						</h2>
						<?php echo smarty_function_addon(array('author'=>'geo_addons','addon'=>'geographic_navigation','tag'=>'navigation'),$_smarty_tpl);?>
 
					</div>
				<?php }?>
				</div>
				<!-- END REGIONS -->				
				
				<!-- START FEATURED CAROUSEL -->					
					<div class="content_box clearfix">
						<h3 class="title" style="text-align:center;">
							<span class="glyphicon glyphicon-star" style="font-size: .8em;"></span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['common_text']->value[502419];?>
<!-- Featured Listings -->&nbsp;&nbsp;<span class="glyphicon glyphicon-star" style="font-size: .8em;"></span>
						</h3>
						<div class="gj_simple_carousel" style="width: 100%; margin: 2px auto;">
							
							<?php echo smarty_function_module(array('tag'=>'module_featured_pic_1','gallery_columns'=>3,'module_thumb_width'=>93,'module_thumb_height'=>75,'module_number_of_ads_to_display'=>9,'dynamic_image_dims'=>1),$_smarty_tpl);?>

						</div>
					</div>
				<!-- END FEATURED CAROUSEL -->
						
				<!-- BANNER BEGIN -->
				
				<div class="content_box cntr banner">	         
					<a href="http://www.kqzyfj.com/click-7066924-11191670" target="_blank"><img src="<?php echo smarty_function_external(array('file'=>'images/banners/1and1_300x100.jpg'),$_smarty_tpl);?>
" alt="1and1 Hosting" title="1and1 Hosting" /></a>
					<a href="http://www.hostmonster.com/track/geodesic/resources" target="_blank"><img src="<?php echo smarty_function_external(array('file'=>'images/banners/hostmonster_300x100.jpg'),$_smarty_tpl);?>
" alt="HostMonster Hosting" title="HostMonster Hosting" /></a>
					<a href="http://lunarpages.com/id/geodesic/goto/basic" target="_blank"><img src="<?php echo smarty_function_external(array('file'=>'images/banners/lunarpages_300x100.jpg'),$_smarty_tpl);?>
" alt="Lunarpages.com Hosting" title="Lunarpages.com Hosting" /></a>
				</div>
				<!-- BANNER END -->
			</div>
			
			<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	</body>
</html><?php }} ?>
