{include file="head.tpl"}
{include file="nav.tpl"}
<table>
    <form>
        <button type="button" id="btn-Filter">Filtrar por Zona Corporal</button>
        <select name="Filter" id="filter">
            <option value="0">Todos</option>
            {foreach from=$listaZon item=$zon key=$key}
                <option value="{$zon->zona_id}">{$zon->nombre}</option>
            {/foreach}
        </select>
    </form>

    <h1 class="center row">Ejercicios</h1>
    <h3><a href="viewAllZonas" class="link">Ver Zonas Corporales Cargadas</a></h3>
    <h3>(Todos los ejercicios que tienen requerimientos, pueden realizarse en casa siempre y cuando se cuente con la disponibilidad de los mismos.)</h3>
    <thead>
        <tr>
            <th>Ejercicio</th>
            <th>Zona</th>
            <th>Requerimientos</th>
            <th>Lugar</th>
            {if $admin}
                <th>Edit</th>
                <th>Delete</th>
            {/if}
        </tr>
    </thead>
    <tbody id="tableBody">
        {foreach from=$zonas item=zona}
            <tr>
                <td>{$zona->nombre}</td>
                <td>{$zona->nombre_zona}</td>
                <td>{$zona->requerimientos}</td>
                <td>{$zona->lugar}</td>
                {if $admin}
                    <td><a href="ViewDetail/{$zona->ejercicio_id}" class="link">Edit</a></td>
                    <td><a href="delEjercicio/{$zona->ejercicio_id}" class="link">Delete</a></td>
                {/if}
                <td><a href="ViewDetail/{$zona->ejercicio_id}" class="link">Ver</a></td>
            </tr>
        {/foreach}
        {if $admin}
            <tr>
                <form method="POST" action="addEjercicio">
                    <td><input type="text" name="nom" placeholder="Nombre"></td>
                    <td><input type="text" name="zona" placeholder="Zona"></td>
                    <td><input type="text" name="req" placeholder="Requerimiento"></td>
                    <td><input type="text" name="lug" placeholder="Lugar"></td>
                    <td><select name="cat">
                            {foreach from=$listaZon item=$zon key=$key}
                                <option value="{$zon->zona_id}">{$zon->nombre}</option>
                            {/foreach}
                        </select></td>
                    <td><input type="submit" value="Add"></td>
                </form>
            </tr>
        {/if}
    </tbody>

    <script src="./js/filter.js"></script>
{include file="footer.tpl"}