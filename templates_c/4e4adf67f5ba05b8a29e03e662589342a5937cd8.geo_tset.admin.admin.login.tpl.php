<?php /* Smarty version Smarty-3.1.19, created on 2022-05-14 23:46:04
         compiled from "geo_tset:admin:admin:login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1980981162803f3cb91980-66513995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e4adf67f5ba05b8a29e03e662589342a5937cd8' => 
    array (
      0 => 'geo_tset:admin:admin:login.tpl',
      1 => 1644253618,
      2 => 'geo_tset',
    ),
  ),
  'nocache_hash' => '1980981162803f3cb91980-66513995',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'cookie_error' => 0,
    'version' => 0,
    'username_label' => 0,
    'username_field' => 0,
    'password_label' => 0,
    'password_field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_62803f3cb9d963_79479277',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62803f3cb9d963_79479277')) {function content_62803f3cb9d963_79479277($_smarty_tpl) {?><?php if (!is_callable('smarty_function_external')) include '/Users/lauropimentel/Projects/eucompro/classes/geo_smarty_plugins/function.external.php';
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="robots" content="NONE" />
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Admin Login
	</title>

	
	<!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="css/font-awesome.css" rel="stylesheet">


    <script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type='text/javascript' src='../js/prototype.js'></script>
	<script type="text/javascript" src="../<?php echo smarty_function_external(array('file'=>'js/main.js','forceDefault'=>1),$_smarty_tpl);?>
"></script>
	<script type="text/javascript" src="../<?php echo smarty_function_external(array('file'=>'js/gjmain.js','forceDefault'=>1),$_smarty_tpl);?>
"></script>
	<script type="text/javascript" src="../<?php echo smarty_function_external(array('file'=>'js/plugins/simpleCarousel.js','forceDefault'=>1),$_smarty_tpl);?>
"></script>
	<script type="text/javascript" src="../<?php echo smarty_function_external(array('file'=>'js/plugins/lightbox.js','forceDefault'=>1),$_smarty_tpl);?>
"></script>
	<script type="text/javascript" src="../<?php echo smarty_function_external(array('file'=>'js/plugins/utility.js','forceDefault'=>1),$_smarty_tpl);?>
"></script>



    <!-- This file has final overrides and most of the styles specific to the "new" admin design. Load it very last -->
	<link href="css/admin_theme.css" rel="stylesheet">
	<link rel="stylesheet" href="css/login.css" type="text/css" />

	

	<script type="text/javascript">
		//<![CDATA[

		var initLogin = function () {
			/* check for a cookie */
			if (document.cookie == "") {
				/* if a cookie is not found - alert user -
				 change cookieexists field value to false */
				alert("COOKIES need to be enabled!");

				/* If the user has Cookies disabled an alert will let him know
				  that cookies need to be enabled to log on.*/

				$('cookieexists').value = "false"
			} else {
				/* this sets the value to true and nothing else will happen,
				   the user will be able to log on*/
				$('cookieexists').value = "true"
			}
			//if the admin user field exists, focus on it.
			focusAdminUser('admin_username');
			//or focus on license field if that exists
			focusAdminUser('license_key_field');

		}

		/* Set a cookie to be sure that one exists.
		   Note that this is outside the function*/
		document.cookie = 'killme' + escape('nothing')

		var focusAdminUser = function (id_name) {
			if ($(id_name)) {
				$(id_name).focus();
			}
		}
		//run initLogin() when page loads.
		Event.observe(window, 'load', initLogin);
		
		//]]>
	</script>
</head>
<body>

    <div class="login_wrapper">
      <div class="animate form login_form">
	 <section class="login_content">
		<form action="index.php" method="post" id="login_form">
			<?php if ($_smarty_tpl->tpl_vars['error']->value) {?><div class="login_error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['cookie_error']->value) {?><div class="login_error"><?php echo $_smarty_tpl->tpl_vars['cookie_error']->value;?>
</div><?php }?>
			<div id="login_box">
				<div id="login_sub">
					<div id="login_right">
						<h1 id="login_product_name">Admin Panel Login <span style="font-size: 0.6em;">&nbsp;<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
</span></h1>
						<h2 id="login_software_type">Authorized Access Only!</h2>
						<div id="login_form_fields">
                            <div id="login_username_block"><?php echo $_smarty_tpl->tpl_vars['username_label']->value;?>
<?php echo $_smarty_tpl->tpl_vars['username_field']->value;?>
</div>
                            <div id="login_password_block"><?php echo $_smarty_tpl->tpl_vars['password_label']->value;?>
<?php echo $_smarty_tpl->tpl_vars['password_field']->value;?>
</div>
                            <?php if ($_GET['page']) {?><input type="hidden" name="page" value="<?php echo $_GET['page'];?>
" /><?php }?>
						</div>
						<div id="submit_button">
							<input type="hidden" id="cookieexists" name="cookieexists" value="false" />
							<input type="submit" value="Login" class="btn btn-default submit" />
						</div>
						<div id="login_copyright">Copyright 2022. All Rights Reserved.</div>
					</div>
					<div id="login_bottom"></div>
				</div>
			</div>
		</form>
	</section>
      </div>
    </div>


</body>
</html>
<?php }} ?>
