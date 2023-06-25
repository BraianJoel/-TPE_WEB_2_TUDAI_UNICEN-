<?php
/* Smarty version 4.3.1, created on 2023-06-22 04:24:59
  from 'C:\xampp\htdocs\TPE_WEB_2_TUDAI_UNICEN\Templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6493b0fbf02ab9_52446454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0dc9720fa2ffe99e6da4064b6f9c3a92bd828ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB_2_TUDAI_UNICEN\\Templates\\main.tpl',
      1 => 1687321261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6493b0fbf02ab9_52446454 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
    </head>
<body>
    <div>
	<a href='<?php echo BASE_URL;?>
login'>Login</a>
    </div>
    <div>
	<nav><a href='<?php echo BASE_URL;?>
prendas'>Prendas</a>
	<a href='<?php echo BASE_URL;?>
insertar'>Añadir prenda</a>
    <a href='<?php echo BASE_URL;?>
obtener'>Obtener prenda</a>
    <a href='<?php echo BASE_URL;?>
modificar'>Actualizar prenda</a>
    <a href='<?php echo BASE_URL;?>
eliminar'>Eliminar prenda</a></nav>
    </div>
	<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1><?php }
}
