<?php
/* Smarty version 4.3.1, created on 2023-06-19 20:09:49
  from 'C:\xampp\htdocs\TPE_WEB2_TUDAI_UNICEN\Templates\outh.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_649099edb84c93_03695702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8dbcd0f7987ca602c9ada2d4fa5279f9f6a8c1b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2_TUDAI_UNICEN\\Templates\\outh.tpl',
      1 => 1687198187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:prendas.tpl' => 1,
  ),
),false)) {
function content_649099edb84c93_03695702 (Smarty_Internal_Template $_smarty_tpl) {
?><!--aca ira la autenticacion para que el usuario que  se logee a la feria-->
<?php $_smarty_tpl->_subTemplateRender("file:prendas.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
<h1>
<form method="POST">
    <label>User: </label>
    <imput type="text" name="user" value=""/>
    <label>Password: </label>
    <imput type="password" name="pass"/>
</form><?php }
}
