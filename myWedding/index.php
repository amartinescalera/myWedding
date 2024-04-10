<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package newlyweds
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            En este rincón virtual, te damos la bienvenida a nuestra página nupcial, un espacio donde cada clic revela un
            fragmento de nuestra historia de amor. Aquí, compartimos con alegría los momentos especiales, las risas compartidas
            y los sueños tejidos juntos. Que este pequeño rincón digital sea un reflejo de la grandeza de nuestro compromiso
            mutuo, un testimonio vivo de nuestra unión eterna. Gracias por ser parte de nuestro viaje, donde el amor es el camino
            y el destino. Bienvenidos, queridos amigos y familiares, a este mundo de amor y felicidad que hemos creado juntos.
            Para más preguntas o dudas no dudeis en contactar con nosotros:
            <ul>
                <li>Antonio: 616 845 513</li>
                <li>Carmina: 616 067 928</li>
            </ul>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
