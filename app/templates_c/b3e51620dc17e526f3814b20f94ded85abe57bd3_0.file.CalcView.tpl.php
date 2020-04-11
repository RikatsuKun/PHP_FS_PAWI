<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-11 20:04:18
  from 'D:\Studia\4sem\Stronki\htdocs\php_06\app\calc\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9206a2a68570_07547198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3e51620dc17e526f3814b20f94ded85abe57bd3' => 
    array (
      0 => 'D:\\Studia\\4sem\\Stronki\\htdocs\\php_06\\app\\calc\\CalcView.tpl',
      1 => 1586628251,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e9206a2a68570_07547198 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13587714695e9206a2a5a778_98789451', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12030467875e9206a2a5c902_85701223', 'main');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3111517075e9206a2a67fd4_84242363', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.tpl"));
}
/* {block 'header'} */
class Block_13587714695e9206a2a5a778_98789451 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_13587714695e9206a2a5a778_98789451',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['page_header']->value;
}
}
/* {/block 'header'} */
/* {block 'main'} */
class Block_12030467875e9206a2a5c902_85701223 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_12030467875e9206a2a5c902_85701223',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class ="main">
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcProcess">
		<fieldset>
			<label for="Baza">Ilość bazy 0mg/ml</label>
			<input id="Baza" type="text" placeholder="ml" name="Baza" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->Baza;?>
">
			<label for="IloscShota">Ilość Shota Nikotynowego</label>
			<input id="IloscShota" type="text" placeholder="ml" name="IloscShota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->IloscShota;?>
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
	<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
            <h4>Wystąpiły błędy: </h4>
            <ol class="fit">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'fit');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fit']->value) {
?>
                    <li><?php echo $_smarty_tpl->tpl_vars['fit']->value;?>
</li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ol>
		
	<?php }?>
        
	<?php if (isset($_smarty_tpl->tpl_vars['wynik']->value->wynik)) {?>
		<h4>Wynik: </hr>
		<p><?php echo $_smarty_tpl->tpl_vars['wynik']->value->IloscLiquidu;?>
 ml ...<?php echo $_smarty_tpl->tpl_vars['wynik']->value->wynik;?>
 mg/ml</p>
	<?php }?>
        	
       
        </div>
<?php
}
}
/* {/block 'main'} */
/* {block 'footer'} */
class Block_3111517075e9206a2a67fd4_84242363 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_3111517075e9206a2a67fd4_84242363',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Filip Stasiak<?php
}
}
/* {/block 'footer'} */
}
