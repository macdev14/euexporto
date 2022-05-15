<?php /* Smarty version Smarty-3.1.19, created on 2022-05-14 23:44:51
         compiled from "geo_tset:default:main_page:header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57318683162803ef3b8cd67-91342587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '309da43765be6e695057dc2111f2cc6ed4b5351e' => 
    array (
      0 => 'geo_tset:default:main_page:header.tpl',
      1 => 1635611022,
      2 => 'geo_tset',
    ),
  ),
  'nocache_hash' => '57318683162803ef3b8cd67-91342587',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged_in' => 0,
    'enabledAddons' => 0,
    'common_text' => 0,
    'geographic_navigation_region' => 0,
    'classifieds_url' => 0,
    'site_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_62803ef3ba7211_62053346',
),false); /*/%%SmartyHeaderCode%%*/?><?php $_smarty_tpl->used_tags = array (
  'include' => 
  array (
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
    'social_connect:facebook_session_profile_picture' => 
    array (
      'addon' => 'social_connect',
      'tag' => 'facebook_session_profile_picture',
    ),
    'social_connect:facebook_login_button' => 
    array (
      'addon' => 'social_connect',
      'tag' => 'facebook_login_button',
    ),
    'storefront:list_stores_link' => 
    array (
      'addon' => 'storefront',
      'tag' => 'list_stores_link',
    ),
  ),
  'module' => 
  array (
    'my_account_links' => 'my_account_links',
    'display_username' => 'display_username',
  ),
); ?>
<?php if ($_valid && !is_callable('content_62803ef3ba7211_62053346')) {function content_62803ef3ba7211_62053346($_smarty_tpl) {?><?php if (!is_callable('smarty_function_module')) include '/Users/lauropimentel/Projects/eucompro/classes/geo_smarty_plugins/function.module.php';
if (!is_callable('smarty_function_addon')) include '/Users/lauropimentel/Projects/eucompro/classes/geo_smarty_plugins/function.addon.php';
if (!is_callable('smarty_function_external')) include '/Users/lauropimentel/Projects/eucompro/classes/geo_smarty_plugins/function.external.php';
if (!is_callable('smarty_function_language_select')) include '/Users/lauropimentel/Projects/eucompro/classes/geo_smarty_plugins/function.language_select.php';
?>



<header class="page clearfix">

	<!-- START SUBMENU -->
	<?php if (($_GET['a']==4&&$_smarty_tpl->tpl_vars['logged_in']->value)||$_GET['a']=='cart') {?>
		
		<div class="content_box clearfix regions my-account">
			<?php echo smarty_function_module(array('tag'=>'my_account_links','mini_cart_only'=>1),$_smarty_tpl);?>

		</div>
		<div class="submenu-spacer">&nbsp;</div>
	<?php } elseif ($_smarty_tpl->tpl_vars['enabledAddons']->value['geographic_navigation']&&$_GET['addon']!='storefront') {?>
		
		<div class="content_box clearfix regions">
			<h2 class="title section-collapser">
				<span class="glyphicon glyphicon-map-marker"></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['common_text']->value[502402];?>
<!-- Location -->&nbsp;<span style="font-size: .8em; font-weight: normal;"><span style="font-size: .8em;" class="glyphicon glyphicon-chevron-right"></span> <?php echo smarty_function_addon(array('author'=>'geo_addons','addon'=>'geographic_navigation','tag'=>'current_region'),$_smarty_tpl);?>
&nbsp;
				<?php if ($_smarty_tpl->tpl_vars['geographic_navigation_region']->value) {?>&nbsp;[&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['classifieds_url']->value;?>
?region=0"><?php echo $_smarty_tpl->tpl_vars['common_text']->value[502401];?>
<!-- clear --></a>&nbsp;]<?php }?></span>
			</h2>
			<?php echo smarty_function_addon(array('author'=>'geo_addons','addon'=>'geographic_navigation','tag'=>'navigation'),$_smarty_tpl);?>
 
		</div>
		<div class="submenu-spacer">&nbsp;</div>
	<?php }?>
	<!-- END SUBMENU -->
	
	<!-- START LOGO / BANNER TOP -->
	<div class="logo-box<?php if ($_GET['a']) {?> rwd-hide<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
">
		<a href="index.php" class="logo" title="<?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
">
			<!-- Logo image OR Logo text goes here!  To use text, remove the
				image tag below and replace it with text -->
			<img src="<?php echo smarty_function_external(array('file'=>'images/logo.jpg'),$_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
" />
		</a>
		<a href="index.php" class="slogan" title="<?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
">
			<!-- Slogan text goes here, if you want to add a slogan that shows
				under the logo text or logo image. -->
		</a>
	</div>

	<!-- START NAVIGATION -->
	<nav class="fixed-nav">

		<a href="#page-bar" class="fixed-link menu"></a>
		
		<div class="header-links-rwd"> 
			<a href="index.php" class="search"><span class="glyphicon glyphicon-home"> </span></a> 
			<a href="index.php?a=19" class="search"><span class="glyphicon glyphicon-search"> </span></a> 
			<a href="index.php?a=1" class="list"><span class="glyphicon glyphicon-tag"> </span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['common_text']->value[502391];?>
<!-- Sell --></a>
		</div>

		<a href="#user-bar" class="fixed-link user"><?php echo smarty_function_addon(array('addon'=>'social_connect','tag'=>'facebook_session_profile_picture'),$_smarty_tpl);?>
</a>
		
			<!-- START USER BAR -->

			<div class="fixed-menu clearfix user-bar">
			
				<div class="language-links">
					
					
					<div class="language-select">
						<?php echo smarty_function_language_select(array(),$_smarty_tpl);?>

					</div>

					
					
					
		
					
					
					

				</div>
				
				
				<?php if ($_smarty_tpl->tpl_vars['enabledAddons']->value['social_connect']) {?><div class="fb-profile-pic"><?php echo smarty_function_addon(array('addon'=>'social_connect','tag'=>'facebook_session_profile_picture'),$_smarty_tpl);?>
</div><?php }?>
				<div class="user-welcome"><?php echo $_smarty_tpl->tpl_vars['common_text']->value[502397];?>
<!-- Welcome -->, <?php echo smarty_function_module(array('tag'=>'display_username'),$_smarty_tpl);?>
</div>
				<span class="user-links">
					<?php if (!$_smarty_tpl->tpl_vars['logged_in']->value) {?>
						
						<a href="register.php" class="menu-link"><?php echo $_smarty_tpl->tpl_vars['common_text']->value[502398];?>
<!-- Register --><span class="glyphicon glyphicon-pencil pc-hide" style="padding-left:10px;"> </span></a>
						<a href="index.php?a=10" class="menu-link"><?php echo $_smarty_tpl->tpl_vars['common_text']->value[502399];?>
<!-- Login --><span class="glyphicon glyphicon-log-in pc-hide" style="padding-left:10px;"> </span></a>
					<?php } else { ?>
						
						<?php echo smarty_function_module(array('tag'=>'my_account_links','mobile_header'=>1),$_smarty_tpl);?>

					    <a href="index.php?a=17" class="menu-link"><?php echo $_smarty_tpl->tpl_vars['common_text']->value[502400];?>
<!-- Logout --><span class="glyphicon glyphicon-log-out pc-hide" style="padding-left:10px;"> </span></a>
					<?php }?>
				</span>
				<?php echo smarty_function_addon(array('author'=>'geo_addons','addon'=>'social_connect','tag'=>'facebook_login_button'),$_smarty_tpl);?>

			</div>
		
			<div class="abs-space"></div>	
		
			<!-- END USER BAR -->
			
		<nav class="page-bar fixed-menu">
			<div class="nav-wrapper">
				<a href="index.php" class="menu-link"><span class="glyphicon glyphicon-home pc-hide"> </span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['common_text']->value[502390];?>
<!-- Home -->&nbsp;&nbsp;</a>
				<a href="index.php?a=1" class="menu-link sell"><span class="glyphicon glyphicon-tag pc-hide"> </span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['common_text']->value[502391];?>
<!-- Sell -->&nbsp;&nbsp;</a>
				<a href="index.php?a=19" class="menu-link"><span class="glyphicon glyphicon-search pc-hide"> </span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['common_text']->value[502392];?>
<!-- Search -->&nbsp;&nbsp;</a>
				<?php echo smarty_function_addon(array('addon'=>'storefront','tag'=>'list_stores_link','no_li'=>1),$_smarty_tpl);?>

				<a href="index.php?a=28&amp;b=143" class="menu-link"><span class="glyphicon glyphicon-bookmark pc-hide"> </span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['common_text']->value[502393];?>
<!-- Pricing -->&nbsp;&nbsp;</a>
				<a href="index.php?a=28&amp;b=141" class="menu-link"><span class="glyphicon glyphicon-question-sign pc-hide"> </span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['common_text']->value[502394];?>
<!-- Help -->&nbsp;&nbsp;</a>
				<a href="index.php?a=28&amp;b=142" class="menu-link extra"><span class="glyphicon glyphicon-info-sign pc-hide"> </span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['common_text']->value[502395];?>
<!-- About Us -->&nbsp;&nbsp;</a>
				<a href="index.php?a=28&amp;b=136" class="menu-link extra"><span class="glyphicon glyphicon-phone pc-hide"> </span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['common_text']->value[502396];?>
<!-- Contact Us -->&nbsp;&nbsp;</a>
			</div>
		</nav>
		
	</nav>
	
	<!-- END NAVIGATION -->
	
</header>

<?php }} ?>
