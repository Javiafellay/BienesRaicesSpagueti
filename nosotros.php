<?php
    require 'includes/funciones.php';
   
    incluirTemplate('header');
 ?>
    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 Años de Experiencia
                </blockquote>

                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto, consequuntur vitae temporibus 
                    dolore maxime deserunt dolorem nesciunt expedita aliquam atque, qui, perspiciatis labore ab
                    porro ad perferendis quam? Architecto, id?
                    dolore maxime deserunt dolorem nesciunt expedita aliquam atque, qui, perspiciatis labore ab
                    Corrupti eveniet, dolor consequuntur deserunt fugit repellat quis veniam maiores quisquam nobis aut nulla
                    quo iure doloribus est beatae similique nam culpa? Rerum eveniet nemo dolorum vero cum eligendi placeat.</p>

                    <p>Dolore maxime deserunt dolorem nesciunt expedita aliquam atque, qui, perspiciatis labore ab
                        Corrupti eveniet, dolor consequuntur deserunt fugit repellat quis veniam maiores quisquam nobis aut nulla
                        quo iure doloribus est beatae similique nam culpa? Rerum eveniet nemo dolorum vero cum eligendi placeat.</p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>
        <div class="icono-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p> Autem perferendis labore impedit illo cum.
                     Minima commodi impedit molestiae, corporis repudiandae ipsa.
                     Libero asperiores enim adipisci voluptatibus quibusdam, esse deserunt distinctio.</p>
            </div>

            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono PRECIO" loading="lazy">
                <h3>Precio</h3>
                <p> Autem perferendis labore impedit illo cum.
                     Minima commodi impedit molestiae, corporis repudiandae ipsa.
                     Libero asperiores enim adipisci voluptatibus quibusdam, esse deserunt distinctio.</p>
            </div>

            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p> Autem perferendis labore impedit illo cum.
                     Minima commodi impedit molestiae, corporis repudiandae ipsa.
                     Libero asperiores enim adipisci voluptatibus quibusdam, esse deserunt distinctio.</p>
            </div>
        </div>
    </section>

<?php
    incluirTemplate('footer');
?>
