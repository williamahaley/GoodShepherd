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
    echo do_shortcode("[metaslider id=18]");

    $posts = get_posts(array( 'category' => get_cat_ID("recent-news"), 'numberposts' => 2 ));
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
<?php 
             $link_1	= get_theme_mod('custom_fp_link_1', '/calendar');
             $text_1	= get_theme_mod('custom_fp_text_1', 'Upcoming Events');
             $icon_1	= get_theme_mod('custom_fp_icon_1', 'fa-calendar');

             $link_2	= get_theme_mod('custom_fp_link_2', '#');
             $text_2	= get_theme_mod('custom_fp_text_2', 'LECTIONARY READINGS');
             $icon_2	= get_theme_mod('custom_fp_icon_2', 'fa-book');

             $link_3	= get_theme_mod('custom_fp_link_3', '#');
             $text_3	= get_theme_mod('custom_fp_text_3', 'Online Donations');
             $icon_3	= get_theme_mod('custom_fp_icon_3', 'fa-heart');

             $link_4	= get_theme_mod('custom_fp_link_4', '#');
             $text_4	= get_theme_mod('custom_fp_text_4', 'Annual Report 2015');
             $icon_4	= get_theme_mod('custom_fp_icon_4', 'fa-file-text-o');
?>

             <div class="column small-12 medium-4 secondary-fp-menu">
                 <div class="row">
                     <div class="columns small-12">
                         <h3>
                            <i class="fa <?php echo $icon_1 ?>"></i>
                             <a href="<?php echo $link_1; ?>"><?php echo $text_1 ?></a>
                         </h3>
                     </div>
                 </div>
                 <div class="row">
                     <div class="columns small-12">
                         <hr />
                     </div>
                 </div>
                 <div class="row">
                     <div class="columns small-12">
                         <h3>
                             <i class="fa <?php echo $icon_2 ?>"></i>
                             <a href="<?php echo $link_2; ?>"><?php echo $text_2 ?></a>
                         </h3>
                     </div>
                 </div>
                 <div class="row">
                     <div class="columns small-12">
                         <hr />
                     </div>
                 </div>
                 <div class="row">
                     <div class="columns small-12">
                         <h3>
                             <i class="fa <?php echo $icon_3 ?>"></i>
                             <a href="<?php echo $link_3; ?>"><?php echo $text_3 ?></a>
                         </h3>
                     </div>
                 </div>
                 <div class="row">
                     <div class="columns small-12">
                         <hr />
                     </div>
                 </div>
                 <div class="row">
                     <div class="columns small-12">
                         <h3>
                             <i class="fa <?php echo $icon_4 ?>"></i>
                             <a href="<?php echo $link_4; ?>"><?php echo $text_4 ?></a>
                         </h3>
                     </div>
                 </div>
             </div>
         </div>
     </section>

 <?php get_footer();
