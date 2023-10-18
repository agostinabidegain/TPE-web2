{include file="head.tpl"}
{include file="nav.tpl"}
<h1>Detalles</h1>
<table>
    <thead>
        <tr>
            <th>Ejercicio</th>
            <th>Zona</th>
            <th>Requerimiento</th>
            <th>Lugar</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{$ejercicio[0]->nombre}</td>
            <td>{$ejercicio[0]->zona}</td>
            <td>{$ejercicio[0]->requerimientos}</td>
            <td>{$ejercicio[0]->lugar}</td>
        </tr>
        {if $admin}
            <tr>
                <form method="POST" action="editEjercicio/{$ejercicio[0]->ejercicio_id}">
                    <td><input type="text" name="nom" placeholder="Ejercicio"></td>
                    <td><input type="text" name="zona" placeholder="Zona"></td>
                    <td><input type="text" name="req" placeholder="Requerimiento"></td>
                    <td><input type="text" name="lug" placeholder="Lugar"></td>
                    <td><select name="zona">
                            {foreach from=$listaZon item=$zon}
                                <option value="{$zon->zona_id}">{$zon->nombre}</option>
                            {/foreach}
                        </select></td>
                    <td><input type="submit" value="Edit"></td>
                </form>
            </tr>
        {/if}
    </tbody>
</table>

{if $user}
<form method="POST">
    <input id="userMail" value="{$user}">
    <input id="isAdmin" value="{$admin}">
</form>
{/if}
{include file="footer.tpl"}