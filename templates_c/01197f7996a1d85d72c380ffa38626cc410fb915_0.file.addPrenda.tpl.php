<?php
/* Smarty version 4.3.1, created on 2023-06-25 23:38:32
  from 'C:\xampp\htdocs\TPE_WEB_2_TUDAI_UNICEN\Templates\addPrenda.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6498b3d8556855_07734204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01197f7996a1d85d72c380ffa38626cc410fb915' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB_2_TUDAI_UNICEN\\Templates\\addPrenda.tpl',
      1 => 1687716505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_6498b3d8556855_07734204 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action='updatePrenda/<?php echo $_smarty_tpl->tpl_vars['prenda']->value->id;?>
'  method='post'>
    <label for='nombre'>Nombre: </label>
    <input type='text' name='nombre' value='<?php echo $_smarty_tpl->tpl_vars['prenda']->value->nombre;?>
'/>
    <label for='descripcion'>Descripción: </label>
    <input type='text' name='descripcion' value='<?php echo $_smarty_tpl->tpl_vars['prenda']->value->descripcion;?>
'/>
    <label for='precio'>Precio: </label>
    <input type='number' name='precio' value='<?php echo $_smarty_tpl->tpl_vars['prenda']->value->precio;?>
'/>
    <label for='estacion'>Estación: </label>
    <input type='text' name='estacion' value='<?php echo $_smarty_tpl->tpl_vars['prenda']->value->estaciones_id;?>
'/>
    <label for='imagen'>Imagen: </label>
    <input type='text' name='imagen' value='<?php echo $_smarty_tpl->tpl_vars['prenda']->value->img;?>
'/>

    <input type='submit' value="SUBMIT">
</form><?php }
}
