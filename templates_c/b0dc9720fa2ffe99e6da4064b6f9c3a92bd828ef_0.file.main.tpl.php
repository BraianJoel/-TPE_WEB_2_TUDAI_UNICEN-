<?php
/* Smarty version 4.3.1, created on 2023-06-29 00:28:08
  from 'C:\xampp\htdocs\TPE_WEB_2_TUDAI_UNICEN\Templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_649cb3f8b55d92_91940065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0dc9720fa2ffe99e6da4064b6f9c3a92bd828ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB_2_TUDAI_UNICEN\\Templates\\main.tpl',
      1 => 1687723714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_649cb3f8b55d92_91940065 (Smarty_Internal_Template $_smarty_tpl) {
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
