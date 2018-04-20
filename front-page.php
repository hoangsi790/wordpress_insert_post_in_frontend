<?php /* Template Name: Home */ ?>
<?php get_header();?>

<section>
    <div class="container">
        <div class="row">
            
            <div class="col-md-6">
                <div class="row">
                    <?php  get_template_part( 'content', 'question' ); ?>
                </div>
                <div class="row">
                <div class="alert alert-danger">
                Nếu làm khảo sát, rất mong mọi người nhập dữ liệu 1 cách nghiêm túc.<br>
Các trường hợp cố tình nhập dữ liệu sai, quậy phá sẽ bị xóa ngay lập tức.<br>
Rất mong mọi người hợp tác. Xin chân thành cảm ơn !<br><br>

<small>(Khảo sát hoạt động ổn định nhất trên trình duyệt <strong>Mozilla FireFox</strong> hoặc <strong>Google Chrome</strong>)</small>
                </div>
                <!--<div class="alert alert-info">
                <strong>Khảo sát đã kết thúc</strong>, xem kết quả thống kê <a href="http://192.168.100.7:8080/khaosat/gkd/analytics/">ở đây</a>
                </div>-->
                </div>
                
            </div>
            
            <div class="col-md-6">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>
<!-- popup -->
<div id="popup_load" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center"><strong><img src="<?php echo get_template_directory_uri(); ?>/assets/images/hot.gif"> CÔNG TY TNHH GIFU KOGYO THÔNG BÁO <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hot.gif"></strong></h4>
      </div>
      <div class="modal-body">
        <p>Nhằm tạo ra nhiều cơ hội phát triển cho mọi người, công ty quyết định tham khảo ý kiến, mong muốn của từng nhân viên về nguyện vọng làm việc bên Nhật, cụ thể là làm việc tại Công ty<strong> GIFU KOGYO DENSHI (GKD)</strong>.<br><br>
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/popup.jpg"><br><br>


Sẽ có 1 bản khảo sát nho nhỏ để tiếp nhận ý kiến. Rất mong mọi người bỏ chút thời gian để hoàn thành.<br><br>

Xin chân thành cảm ơn!

</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
      </div>
    </div>

  </div>
</div>

<!-- end popup -->
<?php get_footer(); ?>
