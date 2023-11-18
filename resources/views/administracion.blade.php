
@include("headerAdm");

<main class="backgroundSolido">
    <section class="admImg">
        <img src="img/database.png" alt="Database" class="img-fluid">
    </section>
    <section class="admText">
        <p>
            Bienvenido al administrador del sitio TECGNOMAS. Desde acá podrás administrar la base de datos de tus productos y usuarios. Podrás agregar, modificar, borrar, o asignar roles desde aquí.
        </p>
        <div class="admBotones">
            <a href="admPost.php" class="boton">POST</a>
            <a href="admUsuario.php" class="boton">USUARIOS</a>
        </div>
    </section>
</main>
@include("footer");
