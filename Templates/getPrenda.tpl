{include file='main.tpl'}
<div>
    <h1>{$prenda->nombre}</h1>
    <p>{$prenda->descripcion}</p>
    <img src='{$prenda->img}'>
    <p>precio: $ {$prenda->precio}</p>
    <p>{$prenda->estaciones}</p>
</div>