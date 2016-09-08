<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

     get_header();

    echo do_shortcode("[metaslider id=14]");

    $posts = get_posts(array( 'category' => get_cat_ID("recent-news"), 'numberposts' => 3 ));
?>
    <section class="container">

     <section aria-label="Recent News" class="articles recent-news">
        <div class="row">
            <div class="column small-12">
                <h2>Recent News</h2>
            </div>
        </div>
         <div class="row">
             <?php foreach( $posts as $post ) : ?>
                <?php setup_postdata($post); ?>
                     <div class="column small-12 medium-4">
                        <div class="article-header text-center"><?php the_title(); ?></div>
                        <?php get_template_part('template-parts/featured-image'); ?>
                         <div class="article-date"><?php the_date(); ?></div>
                     </div>
                <?php endforeach; ?>
         </div>
     </section>

 <?php get_footer();
