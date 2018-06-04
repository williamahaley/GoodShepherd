<?php
/*
Template Name: Full Width
*/
get_header(); ?>

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>

<!-- 
<?php
 	$parents = get_ancestors(get_the_ID(), 'page' );
	$parents = array_reverse( $parents ); 
?>

-->
    <section class="title-header">
        <header>
	   <?php if ( count($parents) > 0 ): ?>
		<nav aria-label="Breadcrumb Menu" role="navigation" class="is-hidden">
			<ul class="breadcrumbs">
				<?php foreach ( $parents as $parent ): ?>
					<li><a href="<?php echo get_page_link($parent); ?>"><?php echo get_the_title($parent); ?></a></li>
				<?php endforeach; ?>
			</ul>
		</nav>
	   <?php endif; ?>
            <h1 class="entry-title"><?php the_title(); ?></h1>
        </header>
    </section>

<div id="page-full-width">
    <section class="container">
        <div role="main">
          <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
              <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
              <div class="entry-content">
                  <?php the_content(); ?>
              </div>
              <footer>
                  <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
                  <p><?php the_tags(); ?></p>
              </footer>
              <?php do_action( 'foundationpress_page_before_comments' ); ?>
              <?php comments_template(); ?>
              <?php do_action( 'foundationpress_page_after_comments' ); ?>
          </article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>
</div>

<?php get_footer();
