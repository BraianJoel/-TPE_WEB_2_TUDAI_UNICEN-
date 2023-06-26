{include file='main.tpl'}
<form action='insertar/{$prenda->id}'  method='post'>
    <label for='nombre'>Nombre: </label>
    <input type='text' name='nombre' value=''/>
    <label for='descripcion'>Descripción: </label>
    <input type='text' name='descripcion' value=''/>
    <label for='precio'>Precio: </label>
    <input type='number' name='precio' value=''/>
    <label for='estacion'>Estación: </label>
    <input type='text' name='estacion' value=''/>
    <label for='imagen'>Imagen: </label>
    <input type='text' name='imagen' value=''/>

    <input type='submit' value="SUBMIT">
</form>