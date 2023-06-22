<?php
/* Smarty version 4.3.1, created on 2023-06-21 05:01:32
  from 'C:\xampp\htdocs\TPE_WEB2_TUDAI_UNICEN\Templates\getPrenda.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6492680cbf0f91_98012191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7ffbbbcdf7adf5badf6affc0584aea7aac050f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2_TUDAI_UNICEN\\Templates\\getPrenda.tpl',
      1 => 1687316357,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_6492680cbf0f91_98012191 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action='getPrenda'  method='post'>
    <input type='text' name='obtener' placeholder="obtener"/>
    <input type='submit' value="SUBMIT">
</form><?php }
}
