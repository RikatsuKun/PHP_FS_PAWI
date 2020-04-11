<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-11 18:58:51
  from 'D:\Studia\4sem\Stronki\htdocs\php_05\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e91f74b7ff0c4_54361463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b34d1db73fa12d7d9915498e740d7f0b9a3ce3d3' => 
    array (
      0 => 'D:\\Studia\\4sem\\Stronki\\htdocs\\php_05\\templates\\main.tpl',
      1 => 1586611688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e91f74b7ff0c4_54361463 (Smarty_Internal_Template $_smarty_tpl) {
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
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3730757185e91f74b7fdd17_16637205', 'header');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_334728775e91f74b7fe4f6_62938509', 'main');
?>

				</div>
                                
			</section>

		<!-- Footer -->
			<section id="footer">
				<div class="inner">								
					<div class="copyright">
						&copy; Introspect | Design: <a href="https://templated.co/">TEMPLATED</a>.
                         <p><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2288233575e91f74b7feb40_26606560', 'footer');
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
class Block_3730757185e91f74b7fdd17_16637205 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_3730757185e91f74b7fdd17_16637205',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Domyslny header <?php
}
}
/* {/block 'header'} */
/* {block 'main'} */
class Block_334728775e91f74b7fe4f6_62938509 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_334728775e91f74b7fe4f6_62938509',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna wartość <?php
}
}
/* {/block 'main'} */
/* {block 'footer'} */
class Block_2288233575e91f74b7feb40_26606560 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_2288233575e91f74b7feb40_26606560',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Domyślne imie<?php
}
}
/* {/block 'footer'} */
}
