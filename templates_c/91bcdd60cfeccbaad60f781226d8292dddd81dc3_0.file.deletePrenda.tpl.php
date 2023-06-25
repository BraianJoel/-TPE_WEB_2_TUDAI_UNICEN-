<?php
/* Smarty version 4.3.1, created on 2023-06-25 20:01:32
  from 'C:\xampp\htdocs\TPE_WEB_2_TUDAI_UNICEN\Templates\deletePrenda.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_649880fc0c2454_04089977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91bcdd60cfeccbaad60f781226d8292dddd81dc3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB_2_TUDAI_UNICEN\\Templates\\deletePrenda.tpl',
      1 => 1687713569,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_649880fc0c2454_04089977 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div>
    <h1><?php echo $_smarty_tpl->tpl_vars['prenda']->value->nombre;?>
</h1>
    <p><?php echo $_smarty_tpl->tpl_vars['prenda']->value->descripcion;?>
</p>
    <img src='<?php echo $_smarty_tpl->tpl_vars['prenda']->value->img;?>
'/>
    <p>precio: $ <?php echo $_smarty_tpl->tpl_vars['prenda']->value->precio;?>
</p>
    <p><?php echo $_smarty_tpl->tpl_vars['prenda']->value->estaciones;?>
</p>

</div><?php }
}
