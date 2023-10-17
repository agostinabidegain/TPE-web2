<?php
/* Smarty version 3.1.39, created on 2023-10-17 02:27:39
  from 'C:\xampp\htdocs\TPEFINAL\templates\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_652dd4fbd125f7_67519334',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c1d4e8058433d0819d4242438519c3858b56cd9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEFINAL\\templates\\nav.tpl',
      1 => 1697502458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652dd4fbd125f7_67519334 (Smarty_Internal_Template $_smarty_tpl) {
?><nav>
    <?php if (!$_smarty_tpl->tpl_vars['user']->value) {?>
        <form method="POST" action="auth" id="form">
            <div>
                <label>Usuario</label>
                <input type="text" name="userID" placeholder="Mail">
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="passID" placeholder="Pass">
            </div>
            <input type="submit" name="login" value="Login">
            <input type="submit" name="register" value="Register">
        </form>
    <?php }?>
    <div class="row">
        <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
            <h1>Bienvenido, <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
!</h1>
        </div>
        <div class="row">
            <h4 class="row"><a href="logout" class="link">Logout</a></h4>
        <?php }?>
        <h4><a href="home" class="link">Back</a></h4>
    </div>
    <h1><?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
</h1>
</nav><?php }
}
