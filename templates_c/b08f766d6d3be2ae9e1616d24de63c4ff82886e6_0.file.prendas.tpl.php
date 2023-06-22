<?php
/* Smarty version 4.3.1, created on 2023-06-19 20:23:05
  from 'C:\xampp\htdocs\TPE_WEB2_TUDAI_UNICEN\templates\prendas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64909d097aa5d8_06651791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b08f766d6d3be2ae9e1616d24de63c4ff82886e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2_TUDAI_UNICEN\\templates\\prendas.tpl',
      1 => 1687198983,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64909d097aa5d8_06651791 (Smarty_Internal_Template $_smarty_tpl) {
?><!--<h1>$prendas}</h1> aca ira el nav-->

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
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tienda de Ropa</title>
    </head>
    <body>
        
        <form>
			<label></label>
			<input type= "text" id="prendas" name="prendas">
			<select>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prendas']->value, 'nombre_categoria');
$_smarty_tpl->tpl_vars['nombre_categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['nombre_categoria']->value) {
$_smarty_tpl->tpl_vars['nombre_categoria']->do_else = false;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['prendas']->value->ID;?>
"><?php echo $_smarty_tpl->tpl_vars['nombre_categoria']->value->ID;?>
</option>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<button type="submit" >Enviar</button>
			</select>
		</form>
    </body>
</html>


<?php }
}
