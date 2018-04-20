<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="company">
          <a style="max-width:179px;display:block;" href="<?php bloginfo( 'home' ); ?>" title="<?php bloginfo( 'name' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer_logo.png" alt="<?php bloginfo( 'name' ); ?>"></a>
        </div>
<p>Công ty TNHH <a href="javascript:void(0);">GIFU KOGYO VIỆT NAM (GKV)</a> được thành lập vào tháng 02/2007 với 100% vốn đầu tư Nhật Bản. <br>
Mang phong cách làm việc của người Nhật áp dụng vào quy trình sản xuất, nhờ vậy sản phẩm luôn đảm bảo được chất lượng tốt nhất.
</p>
      </div>
      <div class="col-sm-4">
        <h3>Khảo sát gần đây</h3>
        <div class="footer_widget">
          <ul class="list-group nav-post">
         
            <li class="list-group-item">
              <i class="fa fa-caret-right" aria-hidden="true" style="position:relative;top:2px;"></i>&nbsp;
              <a href="#">  Khảo sát tham gia công việc ở Gifu Kogyo Denshi (GKD) </a>
              </li>
              
             <li class="list-group-item">
              <i class="fa fa-caret-right" aria-hidden="true" style="position:relative;top:2px;"></i>&nbsp;
              <a href="#">  Khảo sát trò chơi yêu thích trong văn phòng </a>
            </li>
            
            <li class="list-group-item">
              <i class="fa fa-caret-right" aria-hidden="true" style="position:relative;top:2px;"></i>&nbsp;
              <a href="#">  Khảo sát tên thương hiệu cho từ điển </a>
            </li>
           
          </ul>
        </div>
      </div>
      <div class="col-sm-2">
        <h3>Chuyên mục</h3>
        <div class="footer_widget">
          <ul class="list-group nav-footer">
           
            <li class="list-group-item">
              <i class="fa fa-caret-right" aria-hidden="true" style="position:relative;top:2px;"></i>&nbsp;
              <a href="#">Khảo sát công việc</a>
            </li>
          
          </ul>
        </div>
      </div>
      <div class="col-sm-3">
        <h3>Thông tin liên hệ</h3>
        <div class="footer_widget">
          <p>Nhà 6A, Đường số 3, CVPM Quang Trung, <br>
            P.Tân Chánh Hiệp, Quận 12, TP.HCM, Việt Nam.<br>
            <br>
            Phone: <a href="tel:02837157973">+(84)-28-3715-7973</a> <br>
            Fax: <a href="tel:02837157973">+(84)-28-3715-7973</a> <br>
            <br>
            E-mail:
            <a href="mailto:development@gkv.vn">development@gkv.vn</a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <hr style="border-color: #4f4f4f;margin:10px 0;">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 copyright">
        <p>© Copyright
          <?php the_time('Y') ; ?>
          <a href="javascript:void(0);">
          Gifu Kogyo
          </a>
          . All Rights Reserved.</p>
      </div>
      <div class="col-sm-6 text-right"> <p>Xây dựng bởi <a href="http://www.hoangsi.com/" target="_blank">Hoang Si</a></p>  </div>
    </div>
  </div>
</footer>
<aside id="core-brain">
    <ul class="modules">
        <li class="chat"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/chat.png" alt="Chat với chúng tôi"></li>
        <li class="backtop"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/backtop.png" alt="Về đầu trang"></li>
    </ul>
</aside>
<aside id="core-chat" class="core">
    <div class="chat-head"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/chat.png" alt="Chat với chúng tôi"> Chat với chúng tôi <span class="pull-right close-aside"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/close-aside.png" alt="Đóng cửa sổ"></span>
        <hr>
    </div>
    <div class="chatfacebook"> &nbsp;&nbsp; &nbsp; Chức năng này đang cập nhật... </div>
</aside>


<?php if(!is_page( array('54', '93'))) { ?>

<div class="article-datetime"  ><small style="font-size:12px;position:absolute;top:-5px;right:-15px; background:#ff8400;padding:2px 5px;">ngày</small> <span id="dd"> 8 </span> <p id="hh"></p> <div class="post_cat"><a href="#" rel="category tag">
Thời gian còn lại
</a></div> </div>

<?php } ?>


<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-ui.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.mask.min.js"></script>
<script>
 $(window).on('load',function(){
       $('#popup_load').modal('show');
    });
	
	
	
$( ".quest_02" ).click(function() {
  var val = $('input[name=quest_02]:checked').val();
  if(val=='yes') {
    $('#yes_quest_02').addClass('in');
	$('#yes_quest_02 input[type="text"]').prop('disabled', false);
	$('#yes_quest_02 input[type="checkbox"]').prop('disabled', false);
	$('#yes_quest_02 input[type="radio"]').prop('disabled', false);
	$('#yes_quest_02 textarea').prop('disabled', false);
  } else {
    $('#yes_quest_02').removeClass('in');
	$('#yes_quest_02 input[type="text"]').prop('disabled', true);
	$('#yes_quest_02 input[type="checkbox"]').prop('disabled', true);
	$('#yes_quest_02 input[type="radio"]').prop('disabled', true);
	$('#yes_quest_02 textarea').prop('disabled', true);
  }
});

$('#quest_23b').on('input', function(){
	if($(this).val()!='') {
		$('#quest_23a').prop('disabled', true);
	} else {
		$('#quest_23a').prop('disabled', false);
	}	
});

$('#quest_23a').on('input', function(){
	if($(this).val()!='') {
		$('#quest_23b').prop('disabled', true);
	} else {
		$('#quest_23b').prop('disabled', false);
	}	
});


$( '.quest_19' ).click(function() {
  var val = $('input[name=quest_19]:checked').val();
  if(val=='yes') {
    $('#yes_quest_19').addClass('in');
	$('#yes_quest_19 input[type="text"]').prop('disabled', false);
	$('#yes_quest_19 input[type="checkbox"]').prop('disabled', false);
	$('#yes_quest_19 input[type="radio"]').prop('disabled', false);
	$('#yes_quest_19 textarea').prop('disabled', false);
  } else {
    $('#yes_quest_19').removeClass('in');
	$('#yes_quest_19 input[type="text"]').prop('disabled', true);
	$('#yes_quest_19 input[type="checkbox"]').prop('disabled', true);
	$('#yes_quest_19 input[type="radio"]').prop('disabled', true);
	$('#yes_quest_19 textarea').prop('disabled', true);
  }
});

$( '.quest_29' ).click(function() {
  var val = $('input[name=quest_29]:checked').val();
  if(val=='kysu') {
    $('#kysu_quest_29').addClass('in');
	$('#quest_30').prop('disabled', false);
  } else {
    $('#kysu_quest_29').removeClass('in');
	$('#quest_30').prop('disabled', true);
  }
});



$(window).scroll(function () {
	if ($(this).scrollTop() > 110) {
	 $('#note').addClass('note_fix');
	 $('section').css('min-height','800px');
	} else {
	 $('#note').removeClass('note_fix');
	 $('section').css('min-height','inherit');
	}
 });
</script>

<script>
$('.backtop').click(function() { $('body,html').animate({scrollTop: 0}, 500); return false;}); // back top
$('#core-brain .modules .chat').click(function() {$('#core-cart').hide(); $('#core-chat').toggle("slide", { direction: "right" });});
$('#core-chat span.close-aside').click(function() {$('#core-chat').toggle("slide", { direction: "right" })});
</script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.countdown.js"></script>
<script type="text/javascript">
  $("#dd").countdown("2017/11/17", function(event) {
    $(this).text(  event.strftime("%D") );
  });
   $("#hh").countdown("2017/11/17", function(event) {
    $(this).text(  event.strftime("%Hh : %M' : %Ss") );
  });
</script>

<?php wp_footer(); ?>
</body></html>
