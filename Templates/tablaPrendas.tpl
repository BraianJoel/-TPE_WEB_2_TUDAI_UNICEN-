{include file='main.tpl'}
<table border="1px">
    <tbody>
    {foreach from=$prendas item=$prenda}
        <tr>
            <td><h1>{$prenda->nombre}</h1></td>
        </tr>
        <tr>
            <td><h3>{$prenda->img}</h3></td>
            <td><h3>{$prenda->descripcion}</h3></td>
            <td><h3>Precio: $  {$prenda->precio}</h3></td>
        <tr>
    {/foreach}
    </tbody>
</table>
