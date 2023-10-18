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
                    <td><input type="text" name="zon" placeholder="Zona"></td>
                    <td><input type="text" name="req" placeholder="Requerimientos"></td>
                    <td><input type="text" name="lug" placeholder="Lugar"></td>
                    <td><input type="submit" value="Add"></td>
                </form>
            </tr>
        {/if}
</tbody>