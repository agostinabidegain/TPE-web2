<nav>
    {if !$user}
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
    {/if}
    <div class="row">
        {if $user}
            <h1>Bienvenido, {$user}!</h1>
        </div>
        <div class="row">
            <h4 class="row"><a href="logout" class="link">Logout</a></h4>
        {/if}
        <h4><a href="home" class="link">Back</a></h4>
    </div>
    <h1>{$nombre}</h1>
</nav>