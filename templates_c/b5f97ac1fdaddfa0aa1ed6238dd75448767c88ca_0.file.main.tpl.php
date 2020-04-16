<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-16 15:18:18
  from 'D:\Studia\4sem\Stronki\htdocs\php_06ab\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e985b1a3f84b3_33278710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5f97ac1fdaddfa0aa1ed6238dd75448767c88ca' => 
    array (
      0 => 'D:\\Studia\\4sem\\Stronki\\htdocs\\php_06ab\\app\\views\\templates\\main.tpl',
      1 => 1587041714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e985b1a3f84b3_33278710 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
	Introspect by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang ="pl">
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
                <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css"
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8958515885e985b1a3f6ff9_73498337', 'header');
?>
</a>
					<nav id="nav">
                                            <a href="index.html">Home</a>
                                            <a href="elements.html">Elements</a>
					</nav>
				</div>
			</header>
			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

		<!-- Main -->
			<section id="main">
				<div class="inner">
                                    
					<!-- Form -->
							<h3>Oblicz zawartość nikotyny w wynikowym liquidzie</h3>
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13014460625e985b1a3f7877_58027966', 'main');
?>

				</div>
                                
			</section>

		<!-- Footer -->
			<section id="footer">
				<div class="inner">								
					<div class="copyright">
						&copy; Introspect | Design: <a href="https://templated.co/">TEMPLATED</a>.
                         <p><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3598644915e985b1a3f7ed9_05025494', 'footer');
?>
</p>
					</div>
				</div>
			</section>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/skel.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'header'} */
class Block_8958515885e985b1a3f6ff9_73498337 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_8958515885e985b1a3f6ff9_73498337',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Domyslny header <?php
}
}
/* {/block 'header'} */
/* {block 'main'} */
class Block_13014460625e985b1a3f7877_58027966 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_13014460625e985b1a3f7877_58027966',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna wartość <?php
}
}
/* {/block 'main'} */
/* {block 'footer'} */
class Block_3598644915e985b1a3f7ed9_05025494 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_3598644915e985b1a3f7ed9_05025494',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Domyślne imie<?php
}
}
/* {/block 'footer'} */
}
