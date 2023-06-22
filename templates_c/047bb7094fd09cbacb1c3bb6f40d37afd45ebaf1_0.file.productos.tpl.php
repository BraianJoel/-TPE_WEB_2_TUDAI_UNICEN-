<?php
/* Smarty version 4.3.1, created on 2023-06-14 05:52:36
  from 'C:\xampp\htdocs\TP.4.MVC\ejercicio1\Templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_648939842628c2_92035688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '047bb7094fd09cbacb1c3bb6f40d37afd45ebaf1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP.4.MVC\\ejercicio1\\Templates\\productos.tpl',
      1 => 1686673523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648939842628c2_92035688 (Smarty_Internal_Template $_smarty_tpl) {
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

<!--<form class="formulario">
	<label>Producto: <input type= "text" id="producto" name="producto"> </label>
	<select>
		<option value=""></option>
		<option value=""></option>
		<option value=""></option>
		<option value=""></option>
		<option value=""></option>
	</select>
</form>-->
<?php }
}
