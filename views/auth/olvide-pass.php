<div class="contenedor olvide-pass">
    <?php include_once __DIR__ . '/../templates/nombre-sitio.php' ?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Rucupera el Acceso a tu Cuenta</p>

        <form action="/olvide-password" method="POST" class="formulario">
            
        <div class="campo">
                <label for="email">Email</label>
                <input 
                    type="email"
                    id="email"
                    placeholder="Tu Email"
                    name="email"
                />
            </div>

            <input type="submit" class="boton" value="Enviar Intrucciones">
        </form>

        <div class="acciones">
            <a href="/">¿Ya tienes una Cuenta? Iniciar Sesión</a>
            <a href="/crear-cuenta">¿Aún no tienes una Cuenta? Obtener una</a>
        </div>

    </div><!-- .contenedor-sm -->
</div>