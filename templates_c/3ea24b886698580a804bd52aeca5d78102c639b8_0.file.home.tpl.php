<?php
/* Smarty version 3.1.39, created on 2023-10-17 02:51:34
  from 'C:\xampp\htdocs\TPEFINAL\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_652dda96be3166_60615856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ea24b886698580a804bd52aeca5d78102c639b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEFINAL\\templates\\home.tpl',
      1 => 1697503894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652dda96be3166_60615856 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<table>
    <form>
        <button type="button" id="btn-Filter">Filtrar por Zona Corporal</button>
        <select name="Filter" id="filter">
            <option value="0">Todos</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listaZon']->value, 'zon', false, 'key');
$_smarty_tpl->tpl_vars['zon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['zon']->value) {
$_smarty_tpl->tpl_vars['zon']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['zon']->value->zona_id;?>
"><?php echo $_smarty_tpl->tpl_vars['zon']->value->nombre;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
            <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
                <th>Edit</th>
                <th>Delete</th>
            <?php }?>
        </tr>
    </thead>
    <tbody id="tableBody">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['zonas']->value, 'zona');
$_smarty_tpl->tpl_vars['zona']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['zona']->value) {
$_smarty_tpl->tpl_vars['zona']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['zona']->value->nombre;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['zona']->value->zona_id;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['zona']->value->requerimientos;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['zona']->value->lugar;?>
</td>
                <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
                    <td><a href="ViewDetail/<?php echo $_smarty_tpl->tpl_vars['zona']->value->ejercicio_id;?>
" class="link">Edit</a></td>
                    <td><a href="delEjercicio/<?php echo $_smarty_tpl->tpl_vars['zona']->value->ejercicio_id;?>
" class="link">Delete</a></td>
                <?php }?>
                <td><a href="ViewDetail/<?php echo $_smarty_tpl->tpl_vars['zona']->value->ejercicio_id;?>
" class="link">Ver</a></td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
            <tr>
                <form method="POST" action="addEjercicio">
                    <td><input type="text" name="nom" placeholder="Nombre"></td>
                    <td><input type="text" name="zona" placeholder="Zona"></td>
                    <td><input type="text" name="req" placeholder="Requerimiento"></td>
                    <td><input type="text" name="lug" placeholder="Lugar"></td>
                    <td><select name="cat">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listaZona']->value, 'zon');
$_smarty_tpl->tpl_vars['zon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['zon']->value) {
$_smarty_tpl->tpl_vars['zon']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['zon']->value->zona_id;?>
"><?php echo $_smarty_tpl->tpl_vars['zon']->value->nombre;?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select></td>
                    <td><input type="submit" value="Add"></td>
                </form>
            </tr>
        <?php }?>
    </tbody>

    <?php echo '<script'; ?>
 src="./js/filter.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
