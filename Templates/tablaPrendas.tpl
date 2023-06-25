{include file='main.tpl'}
<table border="1px">
    <tbody>
    {foreach from=$prendas item=$prenda}
        <tr>
            <td><h1>{$prenda->nombre}</h1></td>
        </tr>
        <tr>
            <td><p>{$prenda->img}</p></td>
            <td><p>{$prenda->descripcion}</p></td>
            <td><p>Precio: ${$prenda->precio}</p></td>
            <td><p>{$prenda->estaciones}</p></td>
            <td><a href='{BASE_URL}modificar/{$prenda->id}'>Actualizar prenda</a></td>
            <td><a href='{BASE_URL}obtener/{$prenda->id}'>Obtener prenda</a></td>
            <td><a href='{BASE_URL}insertar/{$prenda->id}'>Añadir prenda</a></td>
            <td><a href='{BASE_URL}eliminar/{$prenda->id}'>Eliminar prenda</a></td>
        <tr>
    {/foreach}
    </tbody>
</table>
