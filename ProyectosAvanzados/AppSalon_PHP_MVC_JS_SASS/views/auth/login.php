<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Inicia sesión con tus datos</p>

<form class="formulario" method="POST" action="/">
    <div class="campo">
        <label for="email">Email</label>
        <input
            type="email"
            id="email"
            placeholder="Correo electrónico"
            name="email"
        />
    </div>

    <div class="campo">
        <label for="password">Password</label>
        <input 
        type="password"
        id="password"
        placeholder="Clave"
        name="password"
        />
    </div>

    <input type="submit" class="boton" value="Iniciar sesión"> 

</form>

<div class="acciones">
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Registrate</a>
    <a href="/olvide">Olvidaste la contraseña</a>
</div>