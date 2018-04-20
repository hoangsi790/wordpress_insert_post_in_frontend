<?php /* Template Name: Kết quả thống kê */ ?>
<?php get_header();?>

<section>
    <div class="container">
        <div class="row">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home"><strong>THỐNG KÊ</strong></a></li>
                <li><a data-toggle="tab" href="#home_sub"><strong>TẤT CẢ</strong> người tham gia khảo sát</a></li>
                <li><a data-toggle="tab" href="#menu1"><strong>MUỐN</strong> tham gia làm việc tại GKD</a></li>
                <li><a data-toggle="tab" href="#menu2"><strong>KHÔNG</strong> muốn tham gia làm việc tại GKD</a></li>
                 <li><a data-toggle="tab" href="#menu3">Người <strong>GIỚI THIỆU</strong> bạn bè, người thân</a></li>
            </ul>
            <div class="tab-content">
            
            
<?php 
$tongnhanvien = 79;
$khaosat=0; $thamgia=0; $khongthamgia=0; $thuctapsinh=0; $nhanvienchinhthuc=0; $gioithieuban = 0;
$args=array('post_type' => 'post', 'orderby' => 'ID', 'order'   => 'DESC', 'posts_per_page'=>-1); $query = new WP_Query( $args); ?>
<?php if ( $query->have_posts() ) : ?>
<?php 
	while ( $query->have_posts() ) : $query->the_post();?>
			<?php if(get_field('quest_02')=='Có') {  
					$thamgia++; 
					if(get_field('quest_03a')=='Thực tập sinh kỹ năng') { 
						$thuctapsinh++; 
					} else {
						 $nhanvienchinhthuc++; 
					}
				} else {  
					$khongthamgia++; 
				}?>
                
                <?php if(get_field('quest_19')=='Có') {  
                	$gioithieuban++; 
                }?>
			<?php $khaosat++; ?>
	<?php endwhile; ?>
<?php  wp_reset_query(); ?>
<?php  endif; ?>
            
            
            
                <div id="home" class="tab-pane fade in active">
                    <hr>
                    
                    <!-- analytics -->
                    <div class="form-group" style="border-left:4px solid #8dc73f; padding-left:15px;margin-bottom:25px;">
                        <p>Có <strong><?php echo $khaosat.'/'.$tongnhanvien; ?></strong> nhân viên đã <strong>hoàn thành</strong> bản khảo sát</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $khaosat; ?>" aria-valuemin="0" aria-valuemax="<?php echo $tongnhanvien; ?>" style="width: <?php echo substr((($khaosat/$tongnhanvien)*100),0,4); ?>%;"> <?php echo substr((($khaosat/$tongnhanvien)*100),0,4); ?>% </div>
                        </div>
                    </div>
                    <!-- end analytics -->
                    
                    
                    
                    <hr>
                    <!-- analytics -->
                 
                    
                    <div class="form-group" style="border-left:4px solid #8dc73f; padding-left:15px;margin-bottom:25px;">
                        <div class="col-md-6" style="padding-left:0;">
                            <p>Có <strong><?php echo $thamgia.'/'.$khaosat; ?></strong> nhân viên tham gia khảo sát <strong>mong muốn</strong> tham gia làm việc ở GKD</p>
                            <div class="progress">
                                <div class="progress-bar  progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $thamgia; ?>" aria-valuemin="0" aria-valuemax="<?php echo $khaosat; ?>" style="width: <?php echo substr((($thamgia/$khaosat)*100),0,4); ?>%;"> <?php echo substr((($thamgia/$khaosat)*100),0,4); ?>% </div>
                            </div>
                        </div>
                        <div class="col-md-6" style="padding-right:0;">
                            <p>Có <strong><?php echo $khongthamgia.'/'.$khaosat; ?></strong> nhân viên  tham gia khảo sát <strong>KHÔNG</strong> muốn làm việc ở GKD</p>
                            <div class="progress">
                                <div class="progress-bar  progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $khongthamgia; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo substr((($khongthamgia/$khaosat)*100),0,4); ?>%;"> <?php echo substr((($khongthamgia/$khaosat)*100),0,4); ?>% </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    
                    <!-- end analytics -->
                    
                    <hr>
                    
                    <!-- analytics -->
                    
                    <div class="form-group" style="border-left:4px solid #8dc73f; padding-left:15px;margin-bottom:25px;">
                        <div class="col-md-6" style="padding-left:0;">
                            <p>Có <strong><?php echo $thuctapsinh.'/'.$thamgia; ?></strong> nhân viên tham gia khảo sát chọn hình thức <strong>Thực tập sinh kỹ năng</strong></p>
                            <div class="progress">
                                <div class="progress-bar  progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $thuctapsinh; ?>" aria-valuemin="0" aria-valuemax="<?php echo $thamgia; ?>" style="width: <?php echo substr((($thuctapsinh/$thamgia)*100),0,4); ?>%;"> <?php echo substr((($thuctapsinh/$thamgia)*100),0,4); ?>% </div>
                            </div>
                        </div>
                        <div class="col-md-6"  style="padding-right:0;">
                            <p>Có <strong><?php echo $nhanvienchinhthuc.'/'.$thamgia; ?></strong> nhân viên  tham gia khảo sát  chọn hình thức <strong>Lao động kỹ sư - Nhân viên chính thức</strong></p>
                            <div class="progress">
                                <div class="progress-bar  progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $nhanvienchinhthuc; ?>" aria-valuemin="0" aria-valuemax="<?php echo $thamgia; ?>" style="width: <?php echo substr((($nhanvienchinhthuc/$thamgia)*100),0,4); ?>%;"> <?php echo substr((($nhanvienchinhthuc/$thamgia)*100),0,4); ?>% </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    
                    <!-- end analytics --> 
                    
                       <hr>
                    
                    <!-- analytics -->
                    <div class="form-group" style="border-left:4px solid #8dc73f; padding-left:15px;margin-bottom:25px;">
                        <p>Có <strong><?php echo $gioithieuban.'/'.$khaosat; ?></strong> nhân viên tham gia khảo sát đã <strong>giới thiệu người thân, bạn bè</strong> tham gia làm việc tại GKD</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $gioithieuban; ?>" aria-valuemin="0" aria-valuemax="<?php echo $khaosat; ?>" style="width: <?php echo substr((($gioithieuban/$khaosat)*100),0,4); ?>%;"> <?php echo substr((($gioithieuban/$khaosat)*100),0,4); ?>% </div>
                        </div>
                    </div>
                    <!-- end analytics -->
                    
                </div>
                
                
                <div id="home_sub" class="tab-pane fade">
                    <hr>
                    
                    <?php 
$args=array(
'post_type' => 'post', 
'orderby' => 'ID', 
'order'   => 'DESC', 
'posts_per_page'=>-1);
$query = new WP_Query( $args); 
?>
<?php if ( $query->have_posts() ) : ?>
<?php while ( $query->have_posts() ) : $query->the_post();?>


 <!-- analytics -->
   <?php get_template_part( 'content', 'staff-analytics-all' ); ?>
 <!-- end analytics -->


<?php endwhile; ?>
<?php  wp_reset_query(); ?>
<?php  endif; ?>
                   
                    
                    <div class="clearfix"></div>
                    <hr>
                </div>
                
                
                
                
                <div id="menu1" class="tab-pane fade">
                    <hr>
                    
                    <?php 
$args=array(
'post_type' => 'post', 
'orderby' => 'ID', 
'order'   => 'DESC', 
'posts_per_page'=>-1);
$query = new WP_Query( $args); 
?>
<?php if ( $query->have_posts() ) : ?>
<?php while ( $query->have_posts() ) : $query->the_post();?>

<?php if(get_field('quest_02')=='Có') {  ?>
 <!-- analytics -->
   <?php get_template_part( 'content', 'staff-analytics' ); ?>
 <!-- end analytics -->
<?php } ?>

<?php endwhile; ?>
<?php  wp_reset_query(); ?>
<?php  endif; ?>
                   
                    
                    <div class="clearfix"></div>
                    <hr>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <hr>
                                        <?php 
$args=array(
'post_type' => 'post', 
'orderby' => 'ID', 
'order'   => 'DESC', 
'posts_per_page'=>-1);
$query = new WP_Query( $args); 
?>
<?php if ( $query->have_posts() ) : ?>
<?php while ( $query->have_posts() ) : $query->the_post();?>

<?php if(get_field('quest_02')=='Không') {  ?>
 <!-- analytics -->
   <?php get_template_part( 'content', 'staff-analytics' ); ?>
 <!-- end analytics -->
<?php } ?>

<?php endwhile; ?>
<?php  wp_reset_query(); ?>
<?php  endif; ?>
   <div class="clearfix"></div>
                    <hr>

                </div>
                
                <div id="menu3" class="tab-pane fade">
                    <hr>
                                        <?php 
$args=array(
'post_type' => 'post', 
'orderby' => 'ID', 
'order'   => 'DESC', 
'posts_per_page'=>-1);
$query = new WP_Query( $args); 
?>
<?php if ( $query->have_posts() ) : ?>
<?php while ( $query->have_posts() ) : $query->the_post();?>

<?php if(get_field('quest_19')=='Có') {  ?>
 <!-- analytics -->
   <?php get_template_part( 'content', 'staff-analytics-friend' ); ?>
 <!-- end analytics -->
<?php } ?>

<?php endwhile; ?>
<?php  wp_reset_query(); ?>
<?php  endif; ?>
   <div class="clearfix"></div>
                    <hr>

                </div>
                
                
                
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
