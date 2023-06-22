<?php
/* Smarty version 4.3.1, created on 2023-06-06 00:12:11
  from 'C:\xampp\htdocs\TP.4.MVC\Templates\producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647e5dbbc7ca37_03962155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4eeb0fcb59226c2529bd34d80cb818ddfecd7d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP.4.MVC\\Templates\\producto.tpl',
      1 => 1686002539,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647e5dbbc7ca37_03962155 (Smarty_Internal_Template $_smarty_tpl) {
?><table border="1px">
    <tbody>
        <tr>
            <td><h1><?php echo $_smarty_tpl->tpl_vars['producto']->value->producto;?>
</h1></td>
        </tr>
        <tr>
            <td><h3><?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
</h3></td>
            <td><h3>Precio: $<?php echo $_smarty_tpl->tpl_vars['producto']->value->Precio;?>
</h3></td>
        <tr>
    </tbody>
</table>
<?php }
}
