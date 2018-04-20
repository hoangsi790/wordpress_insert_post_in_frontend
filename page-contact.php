<?php /* Template Name: Contact */ ?>
<?php get_header();?>

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <?php if ( have_posts() ) :  ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <h2>
          <?php the_title(); ?>
        </h2>
        <?php the_content();  ?>
        <?php endwhile; ?>
        <?php  wp_reset_query(); ?>
        <?php  endif; ?>
        <div class="contact_form">
          <form id="contact-form" action="<?php echo get_template_directory_uri(); ?>/mail/sendmail.php" method="post">
            <input type="hidden" name="hs_token" value="123456">
<input type="hidden" name="hs_admin_mail" value="it.hoangsi@gmail.com">
<input type="hidden" name="hs_title_mail" value="<?php bloginfo( 'name' ); ?>">
<input type="hidden" name="hs_redirect_success" value="<?php echo get_template_directory_uri(); ?>/mail/thanks.php">
<input type="hidden" name="hs_redirect_fail" value="<?php echo get_template_directory_uri(); ?>/mail/contact.php">
    
             
                <div class="form-group">
                  <label for="name"> Họ và tên
                    <span style="color:#F00">*</span>
                  </label>
                  <input id="hs_name" name="hs_name" class="form-control" type="text" required >
                </div>
              
           
              
             
              <div class="form-group">
                <label for="subject"> Chủ đề
                  <span style="color:#F00">*</span>
                </label>
                <input id="hs_subject" name="hs_subject" class="form-control"  type="text" required >
              </div>
             
           
            <div class="form-group">
            <label for="comment"> Nội dung liên hệ
              <span style="color:#F00">*</span>
            </label>
            <textarea id="hs_message" rows="5" class="form-control"  name="hs_message" required  ></textarea>
            </div>
            
            
              <div class="form-group">
            <button type="button" class="btn btn-default"  id="submit-contact" data-toggle="modal" data-target="#disable_contact">
            <i class="fa fa-paper-plane"></i> Gửi liên hệ </button>
            </div>
            
            
            
            <!-- disable_contact -->
<div id="disable_contact" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      
      <div class="modal-body">
        <p>Chức năng này đang được xây dựng, xin vui lòng quay lại sau. </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
      </div>
    </div>

  </div>
</div>
           <!-- disable_contact -->  
            
            
            
            
            
            
          </form>
        </div>
      </div>
      
       <div class="col-md-6">
                <?php get_sidebar(); ?>
            </div>
     
    </div>
  </div>
</section>
<?php get_footer(); ?>
