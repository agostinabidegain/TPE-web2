<?php
/* Smarty version 3.1.39, created on 2023-10-18 01:23:58
  from 'C:\xampp\htdocs\TPE2\templates\zonaTableBody.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_652f178e6ee423_49909316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7217fe8856b798c9b42054a6ccca6e869a575827' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE2\\templates\\zonaTableBody.tpl',
      1 => 1697584888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652f178e6ee423_49909316 (Smarty_Internal_Template $_smarty_tpl) {
?><tbody id="tableBody">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['zonas']->value, 'zona');
$_smarty_tpl->tpl_vars['zona']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['zona']->value) {
$_smarty_tpl->tpl_vars['zona']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['zona']->value->nombre;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['zona']->value->nombre_zona;?>
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
                    <td><input type="text" name="zon" placeholder="Zona"></td>
                    <td><input type="text" name="req" placeholder="Requerimientos"></td>
                    <td><input type="text" name="lug" placeholder="Lugar"></td>
                    <td><input type="submit" value="Add"></td>
                </form>
            </tr>
        <?php }?>
</tbody><?php }
}
