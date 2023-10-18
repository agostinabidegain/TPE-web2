<?php
/* Smarty version 3.1.39, created on 2023-10-18 03:05:11
  from 'C:\xampp\htdocs\TPE2\templates\ejercicioDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_652f2f4738eea3_26084833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af3de390d963bdfc288f62220adb538c2e907226' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE2\\templates\\ejercicioDetail.tpl',
      1 => 1697591109,
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
function content_652f2f4738eea3_26084833 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
            <td><?php echo $_smarty_tpl->tpl_vars['ejercicio']->value[0]->nombre;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['ejercicio']->value[0]->zona;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['ejercicio']->value[0]->requerimientos;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['ejercicio']->value[0]->lugar;?>
</td>
        </tr>
        <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
            <tr>
                <form method="POST" action="editEjercicio/<?php echo $_smarty_tpl->tpl_vars['ejercicio']->value[0]->ejercicio_id;?>
">
                    <td><input type="text" name="nom" placeholder="Ejercicio"></td>
                    <td><input type="text" name="zona" placeholder="Zona"></td>
                    <td><input type="text" name="req" placeholder="Requerimiento"></td>
                    <td><input type="text" name="lug" placeholder="Lugar"></td>
                    <td><select name="zona">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listaZon']->value, 'zon');
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
                    <td><input type="submit" value="Edit"></td>
                </form>
            </tr>
        <?php }?>
    </tbody>
</table>

<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
<form method="POST">
    <input id="userMail" value="<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
">
    <input id="isAdmin" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
">
</form>
<?php }
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
