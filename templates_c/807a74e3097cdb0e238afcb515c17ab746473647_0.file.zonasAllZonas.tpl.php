<?php
/* Smarty version 3.1.39, created on 2023-10-17 01:20:42
  from 'C:\xampp\htdocs\TPEFINAL\templates\zonasAllZonas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_652dc54a7d2537_08285594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '807a74e3097cdb0e238afcb515c17ab746473647' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEFINAL\\templates\\zonasAllZonas.tpl',
      1 => 1697498439,
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
function content_652dc54a7d2537_08285594 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['zonas']->value, 'zona', false, 'key');
$_smarty_tpl->tpl_vars['zona']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['zona']->value) {
$_smarty_tpl->tpl_vars['zona']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['zona']->value->zona_id;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['zona']->value->nombre;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['zona']->value->ubicacion;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['zona']->value->descripcion;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['zona']->value->huesosInvolucrados;?>
</td>
                <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
                    <td><a href="delZona/<?php echo $_smarty_tpl->tpl_vars['zona']->value->zona_id;?>
" class="link">Delete</a></td>
                <?php }?>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
            <tr>
                <form method="POST" action="addZona">
                    <td><input type="text" name="zona" placeholder="Zona"></td>
                    <td><input type="text" name="ubicacion" placeholder="Ubicación"></td>
                    <td><input type="text" name="descripcion" placeholder="Descripción"></td>
                    <td><input type="text" name="huesos" placeholder="Huesos Involucrados"></td>
                    <td><input type="submit" value="Add Zona Corporal"></td>
                </form>
            </tr>
        <?php }?>
    </tbody>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
