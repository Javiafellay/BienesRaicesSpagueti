<?php
    require 'includes/funciones.php';
   
    incluirTemplate('header');
 ?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guia para la decoracion de tu hogar</h1>

        <picture>
            <source srcset="build/img/anuncio1.webp" type="image/webp">
            <source src="build/img/anuncio1.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio">
        </picture>

        <p class="informacion-meta">Escrito el: <span>29/09/21</span>por <span>Admin</span></p>

        <div class= "resumen-propiedad">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae quaerat a ipsum vel corporis explicabo velit
            alias nobis consectetur eaque! Nemo laudantium accusantium 
            Unde tempore earum iusto, incidunt distinctio, nisi esse aspernatur sapiente dicta quia nemo, 
            accusantium voluptas aliquid suscipit mollitia dignissimos tenetur laudantium laboriosam nihil iure magni. 
            Laboriosam, fugiat dolorum! Libero, id!</p>
        </div>

    </main>

<?php
    incluirTemplate('footer');
?>
