<?php
/* Smarty version 4.3.1, created on 2023-06-21 01:04:59
  from 'C:\xampp\htdocs\brai\C-xampp-htdocs-TPE_WEB2_TUDAI_UNICEN\Templates\prendas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6492309b6c50a1_74098811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15d747807b7ab54106ea5831b77caa5b335f3676' => 
    array (
      0 => 'C:\\xampp\\htdocs\\brai\\C-xampp-htdocs-TPE_WEB2_TUDAI_UNICEN\\Templates\\prendas.tpl',
      1 => 1687302221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6492309b6c50a1_74098811 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
        <tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>
<?php }
}
