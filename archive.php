<?php get_header();?>

<section>
  <div class="container">
    <div class="row">
      <div class="col-sm-9">
        <h2><?php echo single_cat_title( '', false  ); ?></h2>
        <?php if ( have_posts() ) :  ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', 'post' ); ?>
        <?php endwhile; ?>
        <div class="wrap-pagenavi">
          <?php wp_pagenavi(); ?>
        </div>
        <?php  wp_reset_query(); ?>
        <?php  endif; ?>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>
