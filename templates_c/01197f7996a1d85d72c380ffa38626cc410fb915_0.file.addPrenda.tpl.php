<?php
/* Smarty version 4.3.1, created on 2023-06-28 02:00:49
  from 'C:\xampp\htdocs\TPE_WEB_2_TUDAI_UNICEN\Templates\addPrenda.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_649b78311277c6_12593281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01197f7996a1d85d72c380ffa38626cc410fb915' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB_2_TUDAI_UNICEN\\Templates\\addPrenda.tpl',
      1 => 1687909220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_649b78311277c6_12593281 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action='insertar'  method='post'>
    <label for='nombre'>Nombre: </label>
    <input type='text' name='nombre' />
    <label for='descripcion'>Descripción: </label>
    <input type='text' name='descripcion' />
    <label for='precio'>Precio: </label>
    <input type='number' name='precio' />
    <label for='estacion'>Estación: </label>
    <input type='text' name='estacion' />
    <label for='imagen'>Imagen: </label>
    <input type='text' name='imagen' />

    <input type='submit' value="SUBMIT">
</form><?php }
}
