<?php /* Smarty version Smarty-3.1.19, created on 2022-05-14 23:44:51
         compiled from "geo_tset:default:main_page:footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11453957362803ef3bac319-54535163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f16dfab4a4f269489aa5a012e1cbae92cd85a83' => 
    array (
      0 => 'geo_tset:default:main_page:footer.tpl',
      1 => 1635611022,
      2 => 'geo_tset',
    ),
  ),
  'nocache_hash' => '11453957362803ef3bac319-54535163',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'common_text' => 0,
    'site_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_62803ef3bbfb38_30514337',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62803ef3bbfb38_30514337')) {function content_62803ef3bbfb38_30514337($_smarty_tpl) {?><?php if (!is_callable('smarty_function_external')) include '/Users/lauropimentel/Projects/eucompro/classes/geo_smarty_plugins/function.external.php';
if (!is_callable('smarty_modifier_date_format')) include '/Users/lauropimentel/Projects/eucompro/classes/php5_classes/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_footer_html')) include '/Users/lauropimentel/Projects/eucompro/classes/geo_smarty_plugins/function.footer_html.php';
?>

<!-- START FOOTER -->
<footer class="page">
	<nav class="footer clearfix">
		<a href="index.php"><?php echo $_smarty_tpl->tpl_vars['common_text']->value[502390];?>
<!-- Home --></a>
		<a href="index.php?a=1"><?php echo $_smarty_tpl->tpl_vars['common_text']->value[502391];?>
<!-- Sell --></a>
		<a href="index.php?a=19"><?php echo $_smarty_tpl->tpl_vars['common_text']->value[502392];?>
<!-- Search --></a>
				
		<a href="index.php?a=28&amp;b=135"><?php echo $_smarty_tpl->tpl_vars['common_text']->value[502403];?>
<!-- Features --></a>
		<a href="index.php?a=28&amp;b=143"><?php echo $_smarty_tpl->tpl_vars['common_text']->value[502393];?>
<!-- Pricing --></a>
		<a href="index.php?a=28&amp;b=141"><?php echo $_smarty_tpl->tpl_vars['common_text']->value[502394];?>
<!-- Help --></a>
				
		<a href="index.php?a=28&amp;b=137"><?php echo $_smarty_tpl->tpl_vars['common_text']->value[502404];?>
<!-- How it Works --></a>
		<a href="index.php?a=28&amp;b=144"><?php echo $_smarty_tpl->tpl_vars['common_text']->value[502405];?>
<!-- Advertise --></a>
		
		<a href="index.php?a=28&amp;b=136"><?php echo $_smarty_tpl->tpl_vars['common_text']->value[502396];?>
<!-- Contact Us --></a>
		<a href="index.php?a=28&amp;b=142"><?php echo $_smarty_tpl->tpl_vars['common_text']->value[502395];?>
<!-- About Us --></a>
	</nav>
	<div class="blurb">
		<h3><?php echo $_smarty_tpl->tpl_vars['common_text']->value[502396];?>
<!-- Contact Us --></h3>
		<?php echo $_smarty_tpl->tpl_vars['common_text']->value[502406];?>
<!-- Contact Us Footer Blurb -->
	</div>
	<div class="social-wrapper">
		<nav class="social-contacts">
			<a href="#" title="Facebook"><img src="<?php echo smarty_function_external(array('file'=>'images/icons/social/facebook.png'),$_smarty_tpl);?>
" alt="Facebook" /></a>
			<a href="#" title="Twitter"><img src="<?php echo smarty_function_external(array('file'=>'images/icons/social/twitter.png'),$_smarty_tpl);?>
" alt="Twitter" /></a>
			<a href="#" title="Google+"><img src="<?php echo smarty_function_external(array('file'=>'images/icons/social/google+.png'),$_smarty_tpl);?>
" alt="Google+" /></a>
			<a href="rss_listings.php" title="RSS Feed"><img src="<?php echo smarty_function_external(array('file'=>'images/icons/social/rss.png'),$_smarty_tpl);?>
" alt="RSS Feed" /></a>
		</nav>
	</div>
	<div class="disclaimer">
		<h4><?php echo $_smarty_tpl->tpl_vars['common_text']->value[502407];?>
<!-- Copyright --> &copy;  <?php echo smarty_modifier_date_format(time(),"%Y");?>
 <?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
.  <?php echo $_smarty_tpl->tpl_vars['common_text']->value[502408];?>
<!-- All Rights Reserved --></h4>
		<?php echo $_smarty_tpl->tpl_vars['common_text']->value[502409];?>
<!-- User Agreement Footer Blurb -->
	</div>
</footer>
<!-- END FOOTER -->

<?php echo smarty_function_footer_html(array(),$_smarty_tpl);?>










<?php }} ?>
