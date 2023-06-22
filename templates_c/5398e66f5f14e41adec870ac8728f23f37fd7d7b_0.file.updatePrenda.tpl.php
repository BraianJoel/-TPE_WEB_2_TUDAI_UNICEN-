<?php
/* Smarty version 4.3.1, created on 2023-06-21 05:01:33
  from 'C:\xampp\htdocs\TPE_WEB2_TUDAI_UNICEN\Templates\updatePrenda.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6492680d694611_53692083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5398e66f5f14e41adec870ac8728f23f37fd7d7b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2_TUDAI_UNICEN\\Templates\\updatePrenda.tpl',
      1 => 1687316370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_6492680d694611_53692083 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action='updatePrenda'  method='post'>
    <input type='text' name='modificar' placeholder="modificar"/>
    <input type='submit' value="SUBMIT">
</form><?php }
}
