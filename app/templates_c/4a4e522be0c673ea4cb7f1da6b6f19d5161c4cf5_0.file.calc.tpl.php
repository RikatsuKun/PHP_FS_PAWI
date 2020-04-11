<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-11 15:29:34
  from 'D:\Studia\4sem\Stronki\htdocs\testphp_04\app\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e91c63e18c256_79451238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a4e522be0c673ea4cb7f1da6b6f19d5161c4cf5' => 
    array (
      0 => 'D:\\Studia\\4sem\\Stronki\\htdocs\\testphp_04\\app\\calc.tpl',
      1 => 1586611645,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e91c63e18c256_79451238 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1923735885e91c63e178939_40653663', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13164746595e91c63e17f010_24978467', 'main');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18936462035e91c63e18bcb7_06644968', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'header'} */
class Block_1923735885e91c63e178939_40653663 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1923735885e91c63e178939_40653663',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['page_header']->value;
}
}
/* {/block 'header'} */
/* {block 'main'} */
class Block_13164746595e91c63e17f010_24978467 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_13164746595e91c63e17f010_24978467',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class ="main">
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php">
		<fieldset>
			<label for="Baza">Ilość bazy 0mg/ml</label>
			<input id="Baza" type="text" placeholder="ml" name="Baza" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['Baza'];?>
">
			<label for="IloscShota">Ilość Shota Nikotynowego</label>
			<input id="IloscShota" type="text" placeholder="ml" name="IloscShota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['IloscShota'];?>
">
			<label for="MocShota">Moc Shota</label>
			<select id="MocShota" name="MocShota">
				<option value="0">0 mg/ml</option>
				<option value="6">6 mg/ml</option>
				<option value="12">12 mg/ml</option>
				<option value="18">18 mg/ml</option>
			</select>
			<button type="submit" class="button">Wylicz</button>
		</fieldset>
</form>
	<?php if (isset($_smarty_tpl->tpl_vars['messages']->value)) {?>
		<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?>
			<h4>Błąd</h4>
			<ul class="row">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
			<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		<?php }?>
	<?php }?>
        
	<?php if (isset($_smarty_tpl->tpl_vars['wynik']->value)) {?>
		<h4>Wynik</hr>
		<p><?php echo $_smarty_tpl->tpl_vars['wynik']->value;?>
 mg/ml</p>
	<?php }?>
        	
       
        </div>
<?php
}
}
/* {/block 'main'} */
/* {block 'footer'} */
class Block_18936462035e91c63e18bcb7_06644968 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_18936462035e91c63e18bcb7_06644968',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Filip Stasiak<?php
}
}
/* {/block 'footer'} */
}
