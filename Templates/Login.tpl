<!--aca ira la autenticacion para que el usuario  se logee-->
{include file="main.tpl"}
<form class="formulario" action="{BASE_URL}verificar" method="POST" autocomplete="off">
    <table>
        <tr>
            <td>user: <input type="text" name="user" value="" placeholder="ingrese usuario" /></td>
            <td>password: <input type="password" name="pass" placeholder="ingrese contraseña"/></td>
        </tr>
    </table>
    <tr>
        <td><button type="submit">Ingresar</button></td>
    </tr>
</form>