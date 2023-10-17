<?php
/* Smarty version 3.1.39, created on 2023-10-17 18:05:17
  from 'C:\xampp\htdocs\TPEFINAL\templates\zonaTableBody.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_652eb0bd3e7829_02958157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c32d3962dd6dc0dc4b20ff8db369d4a69c079601' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEFINAL\\templates\\zonaTableBody.tpl',
      1 => 1697558712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652eb0bd3e7829_02958157 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <td><input type="text" name="id" placeholder="Nombre"></td>
                    <td><input type="text" name="nom" placeholder="Zona"></td>
                    <td><input type="text" name="zon" placeholder="Requerimientos"></td>
                    <td><input type="text" name="req" placeholder="Lugar"></td>
                    <td><input type="submit" value="Add"></td>
                </form>
            </tr>
        <?php }?>
</tbody><?php }
}
