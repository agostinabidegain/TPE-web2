{include file="head.tpl"}
{include file="nav.tpl"}
<table>
    <h1 class="center row">Zonas</h1>
    <a href="viewAllZonas">Ver Zonas Cargadas</a>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Ubicación</th>
            <th>Descripción</th>
            <th>Huesos Involucrados</th>
        </tr>
    </thead>
    <tbody id="tableBody">
        {foreach from=$zonas item=$zona key=$key}
            <tr>
                <td>{$zona->zona_id}</td>
                <td>{$zona->nombre}</td>
                <td>{$zona->ubicacion}</td>
                <td>{$zona->descripcion}</td>
                <td>{$zona->huesosInvolucrados}</td>
                {if $admin}
                    <td><a href="delZona/{$zona->zona_id}" class="link">Delete</a></td>
                {/if}
            </tr>
        {/foreach}
        {if $admin}
            <tr>
                <form method="POST" action="addZona">
                    <td><input type="text" name="zona" placeholder="Zona"></td>
                    <td><input type="text" name="ubicacion" placeholder="Ubicación"></td>
                    <td><input type="text" name="descripcion" placeholder="Descripción"></td>
                    <td><input type="text" name="huesos" placeholder="Huesos Involucrados"></td>
                    <td><input type="submit" value="Add Zona Corporal"></td>
                </form>
            </tr>
        {/if}
    </tbody>
{include file="footer.tpl"}