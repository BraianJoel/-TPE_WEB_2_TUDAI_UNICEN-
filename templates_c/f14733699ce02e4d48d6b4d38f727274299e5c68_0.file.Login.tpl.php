<?php
/* Smarty version 4.3.1, created on 2023-06-21 01:03:08
  from 'C:\xampp\htdocs\brai\C-xampp-htdocs-TPE_WEB2_TUDAI_UNICEN\Templates\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6492302c141a33_39713144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f14733699ce02e4d48d6b4d38f727274299e5c68' => 
    array (
      0 => 'C:\\xampp\\htdocs\\brai\\C-xampp-htdocs-TPE_WEB2_TUDAI_UNICEN\\Templates\\Login.tpl',
      1 => 1687302137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_6492302c141a33_39713144 (Smarty_Internal_Template $_smarty_tpl) {
?><!--aca ira la autenticacion para que el usuario que  se logee a la feria-->
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form class="formulario" action="<?php echo BASE_URL;?>
verificar" method="POST" autocomplete="off">
    <table>
        <tr>
            <td>user: <input type="text" name="user" value="" placeholder="ingrese usuario" /></td>
            <td>password: <input type="password" name="pass" placeholder="ingrese contraseña"/></td>
        </tr>
        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</td>
        </tr>
        <?php }?>
    </table>

    <button type="submit">Ingresar</button>
</form><?php }
}
