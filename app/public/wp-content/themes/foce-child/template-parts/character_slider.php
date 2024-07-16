<?php
$args = array(
    'post_type'      => 'characters',
    'posts_per_page' => -1,
    'meta_key'       => '_main_char_field',
    'orderby'        => 'meta_value_num',
);
$characters_query = new WP_Query($args);
?>
<article id="characters" class="fade__in__section swiper-container">
    <h3 class="fade__in__section__element"><span class="slide-in">Les personnages</span></h3>
    <div class="swiper-wrapper">
        <?php while ($characters_query->have_posts()) : $characters_query->the_post(); ?>
            <div class="swiper-slide">
                <figure>
                    <?php the_post_thumbnail('full'); ?>
                    <figcaption><?php the_title(); ?></figcaption>
                </figure>
            </div>
        <?php endwhile; ?>
    </div>
</article>
<?php wp_reset_postdata(); ?>
