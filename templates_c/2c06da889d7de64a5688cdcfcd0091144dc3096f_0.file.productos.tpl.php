<?php
/* Smarty version 4.3.1, created on 2023-06-18 01:27:28
  from 'C:\xampp\htdocs\TPE_WEB2_TUDAI_UNICEN\Templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_648e41600d42d2_24685503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c06da889d7de64a5688cdcfcd0091144dc3096f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2_TUDAI_UNICEN\\Templates\\productos.tpl',
      1 => 1687040035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648e41600d42d2_24685503 (Smarty_Internal_Template $_smarty_tpl) {
?><h1><?php echo $_smarty_tpl->tpl_vars['registros']->value;?>
</h1> <!--aca ira el nav-->

<!--<table>
	foreach from=$categorias item=nombre_categoria}
	<tbody>
		<tr>
			<td>$nombre_categoria->prenda}</td> <-- años60',70', 80',90'-->
			<!--<td><a href="$BASE_URL}producto/detalle/<$nombre_categoria->prenda->ID} ">Ver mas/a></td>--> <!--lista por categoria-->              <!--Es una cosntante que tiene la Urle base, que siempre me redirige al home que es la principal en este-->
																			                                                    <!--ejemplo puede barra ver mas en la url-->

        <!--</tr>-->
	<!--</tbody>-->
    <!--/foreach-->
<!--</table>-->



<form class="formulario">
	<label><?php echo $_smarty_tpl->tpl_vars['productos']->value;?>
 <input type= "text" id="producto" name="producto"> </label>
	<select>
		<option value="<?php echo $_smarty_tpl->tpl_vars['nombre_categoria']->value->prenda;?>
">años 60'</option>
		<option value="<?php echo $_smarty_tpl->tpl_vars['nombre_categoria']->value->prenda;?>
">años 70'</option>
		<option value="<?php echo $_smarty_tpl->tpl_vars['nombre_categoria']->value->prenda;?>
">años 80'</option>
		<option value="<?php echo $_smarty_tpl->tpl_vars['nombre_categoria']->value->prenda;?>
">años 90'</option>
		<option value="<?php echo $_smarty_tpl->tpl_vars['nombre_categoria']->value->prenda;?>
">años 2000</option>
	</select>
</form>
<?php }
}
