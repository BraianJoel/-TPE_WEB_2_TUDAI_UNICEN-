{include file='main.tpl'}
<form action='insertar'  method='post'>
    <label for='nombre'>Nombre: </label>
    <input type='text' name='nombre' />
    <label for='descripcion'>Descripción: </label>
    <input type='text' name='descripcion' />
    <label for='precio'>Precio: </label>
    <input type='number' name='precio' />
    <label for='estacion'>Estación: </label>
    <input type='text' name='estacion' />
    <label for='imagen'>Imagen: </label>
    <input type='text' name='imagen' />

    <input type='submit' value="SUBMIT">
</form>