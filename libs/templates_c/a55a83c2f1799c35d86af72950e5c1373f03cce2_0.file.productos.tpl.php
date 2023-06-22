<?php
/* Smarty version 4.3.1, created on 2023-06-05 23:36:30
  from 'C:\xampp\htdocs\TP 4- MVC\Templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647e555ecf5255_98613516',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a55a83c2f1799c35d86af72950e5c1373f03cce2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP 4- MVC\\Templates\\productos.tpl',
      1 => 1686000978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647e555ecf5255_98613516 (Smarty_Internal_Template $_smarty_tpl) {
?><h1><?php echo $_smarty_tpl->tpl_vars['registros']->value;?>
</h1>

<table>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
	<tbody>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['producto']->value->producto;?>
</td>
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
producto/detalle/<?php echo $_smarty_tpl->tpl_vars['producto']->value->ID;?>
">Ver mas</a></td><!--Es una cosntante que tiene la Urle base, que siempre me redirige al home que es la principal en este
																			ejemplo puede barra ver mas en la url-->
			
        </tr>
	</tbody>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<?php }
}
