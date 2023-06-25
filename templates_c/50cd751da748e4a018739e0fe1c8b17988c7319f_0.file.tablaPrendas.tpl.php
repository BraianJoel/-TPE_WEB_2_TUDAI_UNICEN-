<?php
/* Smarty version 4.3.1, created on 2023-06-26 00:54:20
  from 'C:\xampp\htdocs\TPE_WEB_2_TUDAI_UNICEN\Templates\tablaPrendas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6498c59c3d6091_11525624',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50cd751da748e4a018739e0fe1c8b17988c7319f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB_2_TUDAI_UNICEN\\Templates\\tablaPrendas.tpl',
      1 => 1687733584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_6498c59c3d6091_11525624 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<table border="1px">
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prendas']->value, 'prenda');
$_smarty_tpl->tpl_vars['prenda']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['prenda']->value) {
$_smarty_tpl->tpl_vars['prenda']->do_else = false;
?>
        <tr>
            <td><h1><?php echo $_smarty_tpl->tpl_vars['prenda']->value->nombre;?>
</h1></td>
        </tr>
        <tr>
            <td><p><?php echo $_smarty_tpl->tpl_vars['prenda']->value->img;?>
</p></td>
            <td><p><?php echo $_smarty_tpl->tpl_vars['prenda']->value->descripcion;?>
</p></td>
            <td><p>Precio: $<?php echo $_smarty_tpl->tpl_vars['prenda']->value->precio;?>
</p></td>
            <td><p><?php echo $_smarty_tpl->tpl_vars['prenda']->value->estaciones;?>
</p></td>
            <td><a href='<?php echo BASE_URL;?>
modificar/<?php echo $_smarty_tpl->tpl_vars['prenda']->value->id;?>
'>Actualizar prenda</a></td>
            <td><a href='<?php echo BASE_URL;?>
obtener/<?php echo $_smarty_tpl->tpl_vars['prenda']->value->id;?>
'>Obtener prenda</a></td>
            <td><a href='<?php echo BASE_URL;?>
insertar/<?php echo $_smarty_tpl->tpl_vars['prenda']->value->id;?>
'>Añadir prenda</a></td>
            <td><a href='<?php echo BASE_URL;?>
eliminar/<?php echo $_smarty_tpl->tpl_vars['prenda']->value->id;?>
'>Eliminar prenda</a></td>
        <tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>
<?php }
}
