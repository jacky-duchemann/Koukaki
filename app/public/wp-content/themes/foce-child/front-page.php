<?php

get_header();
?>
    
    <main id="primary" class="site-main">

        <section class="banner fade__in__section"> 
            <div class="banner__video">
                <video autoplay loop muted>

                    <source src="<?php echo get_template_directory_uri() . './assets/videos/video-header-koukaki.mp4'; ?>" type="video/mp4">
                </video>
            </div>
            <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants"> <!-- trouver la solution pour mettre le logo sur la video --> 
        </section>
        <section id="#story" class="story fade__in__section">
            <h2><span class="slide-in fade__in__section__element">L'histoire</span></h2>
            <article id="" class="story__article">
                <p class="fade__in__section__element"><?php echo get_theme_mod('story'); ?></p>
            </article>
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
            <article id="characters">
                <div class="main-character fade__in__section__element">
                    <h3 class="slide-in">Les personnages</h3>
                    <?php
                    $main_character = $characters_query->posts[0];
                    echo '<figure>';
                    echo get_the_post_thumbnail( $main_character->ID, 'full' );
                    echo '<figcaption>'. $main_character->post_title . '</figcaption>';
                    echo '</figure>';
                    $characters_query->next_post();
                    ?>
                </div>
                <div class="other-characters fade__in__section__element">
                    <?php
                    while ( $characters_query->have_posts() ) {
                        $characters_query->the_post();
                        echo '<figure>';
                        echo get_the_post_thumbnail( get_the_ID(), 'full' );
                        echo '<figcaption>';
                        the_title();
                        echo'</figcaption>';
                        echo '</figure>';
                    }
                    ?>
                </div>
            </article>
            <article id="place" class="fade__in__section">
                <div class="fade__in__section__element">
                    <h3><span class="slide-in">Le Lieu</span></h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>

            </article>
        </section>


        <section id="studio" class="fade__in__section">
            <h2 class="fade__in__section__element"><span class="slide-in before">Studio</span> <span class="slide-in after">Koukaki</span></h2>
            <div clas="fade__in__section__element">
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>
        
        <!-- ajouter la section pour les oscars ici !! -->
         <?php get_template_part('template-parts/section-oscar'); ?>
    </main><!-- #main -->

<?php
get_footer();
