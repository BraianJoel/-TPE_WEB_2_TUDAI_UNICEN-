{include file='main.tpl'}
<form action='modificar/{$prenda->id}'  method='post'>
    <label for='nombre'>Nombre: </label>
    <input type='text' name='nombre' value='{$prenda->nombre}'/>
    <label for='descripcion'>Descripción: </label>
    <input type='text' name='descripcion' value='{$prenda->descripcion}'/>
    <label for='precio'>Precio: </label>
    <input type='number' name='precio' value='{$prenda->precio}'/>
    <label for='estacion'>Estación: </label>
    <input type='text' name='estacion' value='{$prenda->estaciones_id}'/>
    <label for='imagen'>Imagen: </label>
    <input type='text' name='imagen' value='{$prenda->img}'/>

    <input type='submit' value="SUBMIT">
</form>