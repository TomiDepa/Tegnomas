
@include("headerL")

<main class="backgroundDegrade">
    <section class="encabezadoImg">
        <img src="img/laptop.png" alt="Laptop" class="img-fluid">
        <div class="textEncabezado">
            <h2>Iniciar Sesion</h2>
        </div>
    </section>
    <section class="formularios crearUsuario">
        <form action="iniciars.php" method="post">
            <!-- formulario iniciar sesion -->
            <div>
                <input type="email" name="email_login" placeholder="Email" required class="ingresoDato"/>
            </div>
            <div>
                <input type="password" name="contraseña_login" placeholder="Contraseña" required class="ingresoDato"/>
            </div>
            <div>
                <input type="submit" class="boton" />
            </div>
        </form>
    </section>
    <section class="botonIniSes">
        <a href="registrar.php" class="boton">No tengo cuenta</a>
    </section>
</main>






@include("footer")
