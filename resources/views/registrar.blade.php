<?php
require_once("headerL.php");
?>
<main class="backgroundDegrade">
    <section class="encabezadoImg">
        <img src="img/laptop.png" alt="Laptop" class="img-fluid">
        <div class="textEncabezado">
            <h2>Registrar Usuario</h2>
        </div>
    </section>
    <section class="formularios crearUsuario">
        <form action="registrar.php" method="post">
            <!-- formulario registrar usuario -->
            <div>
                <input type="text" name="nombre" placeholder="Nombre" required class="ingresoDato"/>
            </div>
            <div>
                <input type="text" name="apellido" placeholder="Apellido" required class="ingresoDato"/>
            </div>
            <div>
                <input type="email" name="email_registro" placeholder="Email" required class="ingresoDato"/>
            </div>
            <div>
                <input type="password" name="contraseña_registro" placeholder="Contraseña" required class="ingresoDato"/>
            </div>
            <div>
                <input type="submit" class="boton" value="Crear"/>
            </div>

        </form>
    </section>
</main>
<?php
require_once("footer.php");
?>