<?php
/* Smarty version 4.3.1, created on 2023-06-21 05:01:34
  from 'C:\xampp\htdocs\TPE_WEB2_TUDAI_UNICEN\Templates\deletePrenda.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6492680e2693f6_47550075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7eb731922424ddb612c0e5e32756f355199d9529' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2_TUDAI_UNICEN\\Templates\\deletePrenda.tpl',
      1 => 1687316353,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_6492680e2693f6_47550075 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action='deletePrenda'  method='post'>
    <input type='text' name='eliminar' placeholder="eliminar"/>
    <input type='submit' value="SUBMIT">
</form><?php }
}
