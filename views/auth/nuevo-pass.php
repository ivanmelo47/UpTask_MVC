<div class="contenedor nuevo-pass">
    <?php include_once __DIR__ . '/../templates/nombre-sitio.php' ?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Establece un Nuevo Password para tu Cuenta</p>

        <form action="/nuevo-password" method="POST" class="formulario">
            
            <div class="campo">
                <label for="password">Password</label>
                <input 
                    type="password"
                    id="password"
                    placeholder="Tu Password"
                    name="password"
                />
            </div>
            <div class="campo">
                <label for="password2">Repetir Password</label>
                <input 
                    type="password"
                    id="password2"
                    placeholder="Repite tu Password"
                    name="password2"
                />
            </div>

            <input type="submit" class="boton" value="Establecer Nuevo Password">
        </form>

        <!-- <div class="acciones">
            <a href="/">¿Ya tienes una Cuenta? Iniciar Sesión</a>
            <a href="/olvide-password">¿Olvidaste tu Password?</a>
        </div> -->

    </div><!-- .contenedor-sm -->
</div>