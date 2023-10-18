<?php
/* Smarty version 3.1.39, created on 2023-10-17 01:55:38
  from 'C:\xampp\htdocs\TPEFINAL\templates\usersTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_652dcd7a2d99f5_28468158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2847ca9cf12de1f1fc7949366aefd26fd6f49ad2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEFINAL\\templates\\usersTable.tpl',
      1 => 1647832836,
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
function content_652dcd7a2d99f5_28468158 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ($_smarty_tpl->tpl_vars['admin']->value) {?>
    <h1>Editar usuarios</h1>
    <p>Un admin puede dar permisos de administrador a otro usuario, o borrar a otro usuario.</p>
    <table>
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Is Admin</th>
                <th>Borrar</th>
                <th>Actualizar Permisos</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->mail;?>
</td>
                    <td><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['user']->value->is_admin) {?>checked<?php }?>></td>
                    <td>
                        <button><a class="link" href="delUser/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
">Borrar</a></button>
                    </td>
                    <td>
                        <button><a class="link" href="toggleAdmin/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
">
                            <?php if ($_smarty_tpl->tpl_vars['user']->value->is_admin) {?> Quitar permisos de Administrador
                            <?php } else { ?>Otorgar permisos de Administrador <?php }?>
                        </a></button>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
<?php }
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
