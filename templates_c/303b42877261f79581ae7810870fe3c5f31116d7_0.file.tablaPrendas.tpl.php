<?php
/* Smarty version 4.3.1, created on 2023-06-25 03:04:57
  from 'C:\xampp\htdocs\TPE_WEB_2_TUDAI_UNICEN\templates\tablaPrendas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_649792b92aefd1_25781792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '303b42877261f79581ae7810870fe3c5f31116d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB_2_TUDAI_UNICEN\\templates\\tablaPrendas.tpl',
      1 => 1687654936,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_649792b92aefd1_25781792 (Smarty_Internal_Template $_smarty_tpl) {
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
            <td><h3><?php echo $_smarty_tpl->tpl_vars['prenda']->value->img;?>
</h3></td>
            <td><h3><?php echo $_smarty_tpl->tpl_vars['prenda']->value->descripcion;?>
</h3></td>
            <td><h3>Precio: $  <?php echo $_smarty_tpl->tpl_vars['prenda']->value->precio;?>
</h3></td>
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
prendas/<?php echo $_smarty_tpl->tpl_vars['prenda']->value->id;?>
'>Prendas</a></td>
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
