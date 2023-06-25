<?php
/* Smarty version 4.3.1, created on 2023-06-22 03:45:27
  from 'C:\xampp\htdocs\TPE_WEB_2_TUDAI_UNICEN\Templates\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6493a7b703ed88_80931215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dddb89353c4335ad6ffefef0dd1176e9f7c766ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB_2_TUDAI_UNICEN\\Templates\\Login.tpl',
      1 => 1687321570,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_6493a7b703ed88_80931215 (Smarty_Internal_Template $_smarty_tpl) {
?><!--aca ira la autenticacion para que el usuario  se logee-->
<?php $_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form class="formulario" action="<?php echo BASE_URL;?>
verificar" method="POST" autocomplete="off">
    <table>
        <tr>
            <td>user: <input type="text" name="user" value="" placeholder="ingrese usuario" /></td>
            <td>password: <input type="password" name="pass" placeholder="ingrese contraseña"/></td>
        </tr>
    </table>
    <tr>
        <td><button type="submit">Ingresar</button></td>
    </tr>
</form><?php }
}
