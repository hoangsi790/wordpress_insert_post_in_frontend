


<?php get_header();?>

<section>
  <div class="container">
    <div class="row">
      <div class="col-sm-9">
        <?php if ( have_posts() ) :  ?>
        <?php while ( have_posts() ) : the_post(); ?>
       <article class="article-item" id="<?php the_ID(); ?>" style="margin-bottom:40px;">
  <div class="article-info">
    <div class="article-datetime">
      <span>
      <?php the_time('d') ; ?>
      </span>
      <p>
        <?php the_time('m/Y') ; ?>
      </p>
      <div class="post_cat"><?php the_category( ' ' ); ?></div>
    </div>
    <h1><?php the_title(); ?></h1>
    <div class="article-terms">
      <i class="fa fa-tags" aria-hidden="true"></i>
      <?php the_tags( ' ' ); ?> &nbsp; &nbsp;
      <i class="fa fa-user" aria-hidden="true"></i>
      <a href="javascript:void(0);">
      <?php the_author(); ?>
      </a>
      <hr>
      <div class="alert alert-success" role="alert">
  <ul class="list-group mucluc">
  <li class="list-group-item"><a href="#"><strong>1, Laravel debugbar là gì?</strong></a></li>
  <li  class="list-group-item"><a href="#"><strong>2, Tích hợp Laravel debugbar vào project.</strong></a></li>
  <li  class="list-group-item"><a href="#">3, Sử dụng laravel debugbar.</a></li>
 <li  class="list-group-item"><a href="#">3, Lời kết.</a></li>
</ul>
</div>
      <div class="content-blog">
   <?php the_content(); ?>
  </div>
  </div>

</article>

<div class="related_post">
<h2>Bài viết liên quan</h2>
<ul class="list-group sidebar-blog" style="padding-left:15px;">
    <?php 
	$args=array(
	'post_type' => 'post', 
	'orderby' => 'rand', 
	'order'   => 'DESC', 
	'posts_per_page'=>9);
	$query = new WP_Query( $args); 
?>
    <?php if ( $query->have_posts() ) : ?>
    <?php while ( $query->have_posts() ) : $query->the_post();?>
    <li class="list-group-item"># <a href="<?php the_permalink(); ?>"><?php the_title(); ?>
      </a>
    </li>
    <?php endwhile; ?>
    <?php  wp_reset_query(); ?>
    <?php  endif; ?>
  </ul>

</div>
        <?php endwhile; ?>
        <?php  wp_reset_query(); ?>
        <?php  endif; ?>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>
