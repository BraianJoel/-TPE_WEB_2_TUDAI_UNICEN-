<?php
/* Smarty version 4.3.1, created on 2023-06-26 02:05:45
  from 'C:\xampp\htdocs\TPE_WEB_2_TUDAI_UNICEN\Templates\addPrenda.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6498d659ddfa07_03687774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01197f7996a1d85d72c380ffa38626cc410fb915' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB_2_TUDAI_UNICEN\\Templates\\addPrenda.tpl',
      1 => 1687737936,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_6498d659ddfa07_03687774 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action='insertar/<?php echo $_smarty_tpl->tpl_vars['prenda']->value->id;?>
'  method='post'>
    <label for='nombre'>Nombre: </label>
    <input type='text' name='nombre' value=''/>
    <label for='descripcion'>Descripción: </label>
    <input type='text' name='descripcion' value=''/>
    <label for='precio'>Precio: </label>
    <input type='number' name='precio' value=''/>
    <label for='estacion'>Estación: </label>
    <input type='text' name='estacion' value=''/>
    <label for='imagen'>Imagen: </label>
    <input type='text' name='imagen' value=''/>

    <input type='submit' value="SUBMIT">
</form><?php }
}
