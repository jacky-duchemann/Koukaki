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
            <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
        </section>
        <section id="#story" class="story  fade__in__section">
            <h2><span class="slide-on-scroll">L'histoire</span></h2>
            <article id="" class="story__article">
                <p  class="fade__in__section"><?php echo get_theme_mod('story'); ?></p>
            </article>
            <?php get_template_part('template-parts/character_slider'); ?>
            
            <!--</article>-->
            <article id="place" class="story__place">
                <div class="fade__in__section">
                    <h3><span class="slide-on-scroll">Le Lieu</span></h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
                <!--<div class="story__place__bigCloud" id="clouds"></div>
                <div class="story__place__littleCloud" id="clouds"></div>-->
                
            </article>
            <img class="story__bigCloud" id="big-cloud" src=<?php echo get_template_directory_uri() . '/assets/images/big_cloud.png'; ?> " alt="Gros nuage qui défile">
            <img class="story__littleCloud" id="little-cloud" src="<?php echo get_template_directory_uri() . '/assets/images/little_cloud.png'; ?> " alt="Gros nuage qui défile">
        </section>


        <section id="studio" class="studio fade__in__section">
            <h2><span class="slide-on-scroll">Studio</span> <span class="slide-on-scroll slide-on-scroll-delay">Koukaki</span></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>
        
        <!-- ajouter la section pour les oscars ici !! -->
         <?php get_template_part('template-parts/section-oscar'); ?>
    </main><!-- #main -->

<?php
get_footer();
