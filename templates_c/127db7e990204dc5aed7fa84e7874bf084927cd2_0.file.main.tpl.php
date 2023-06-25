<?php
/* Smarty version 4.3.1, created on 2023-06-25 22:08:37
  from 'C:\xampp\htdocs\TPE_WEB_2_TUDAI_UNICEN\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64989ec5d431f5_61759106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '127db7e990204dc5aed7fa84e7874bf084927cd2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB_2_TUDAI_UNICEN\\templates\\main.tpl',
      1 => 1687723714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64989ec5d431f5_61759106 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/Bootstrap.min.css">
        <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
    </head>
<body>
    <nav class='menu'>
        <ul>
            <li><a href='<?php echo BASE_URL;?>
login'>Login</a></li>
            <li><a href='<?php echo BASE_URL;?>
prendas'>prendas</a></li>
        </ul>
    </nav>
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
</body><?php }
}
