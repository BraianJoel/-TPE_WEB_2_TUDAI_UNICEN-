<?php
/* Smarty version 4.3.1, created on 2023-06-21 01:15:37
  from 'C:\xampp\htdocs\brai\C-xampp-htdocs-TPE_WEB2_TUDAI_UNICEN\Templates\addPrenda.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64923319185876_79662813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4abfb1a6bf39ef99a92b254d264d33447a8817ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\brai\\C-xampp-htdocs-TPE_WEB2_TUDAI_UNICEN\\Templates\\addPrenda.tpl',
      1 => 1687302934,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_64923319185876_79662813 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action='addPrenda'  method='post'>
    <input type='text' name='nombre' placeholder="nombre"/>
    <input type='text' name='descripcion' placeholder="descripcion"/>

    <input type='submit' value="SUBMIT">
</form>
<?php }
}
