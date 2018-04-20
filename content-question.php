
<form method="post" action="#">

<?php $ip = $_SERVER['REMOTE_ADDR']; if (!empty($_SERVER['HTTP_CLIENT_IP'])) { $ip = $_SERVER['HTTP_CLIENT_IP']; } else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; } ?>
 <input type="hidden" name="post_ip" value="<?php echo $ip; ?>">
 
<!-- question 01 -->
    <div class="form-group" style="border-left:4px solid #8dc73f; padding-left:15px;margin-bottom:25px;">
        <label>1. Vui lòng cho biết họ và tên của bạn <span style="color:#F00">*</span></label>
        <input type="text" class="form-control" name="quest_01" id="quest_01" required >
    </div>
<!-- end question 01 --> 

<!-- question 02 -->
    <div class="form-group" style="border-left:4px solid #8dc73f; padding-left:15px;margin-bottom:25px;">
        <label>2. Bạn có mong muốn tham gia làm việc ở GKD như mô tả trong bảng thông tin không? <span style="color:#F00">*</span></label>
        <div class="checkbox" style="margin-top:5px;">
            <label class="radio-inline"><input type="radio" value="yes" name="quest_02" class="quest_02">Có</label>
            <label class="radio-inline"><input type="radio" value="no" name="quest_02" class="quest_02">Không</label>
		</div>
    </div>
<!-- end question 02 --> 


<div class="collapse" id="yes_quest_02">
<hr>
<!-- question 03 -->
    <div class="form-group" style="border-left:4px solid #8dc73f; padding-left:15px;margin-bottom:25px;">
        <label>3. Vui lòng cho biết hình thức bạn muốn đi và lý do <span style="color:#F00">*</span></label>
        
         <div class="checkbox" style="margin-top:5px; margin-bottom:15px;">
            <label class="radio-inline"><input type="radio" value="thuctap" name="quest_03a" class="quest_03a" checked>Thực tập sinh kỹ năng</label>
            <label class="radio-inline"><input type="radio" value="kysu" name="quest_03a" class="quest_03a">Lao động kỹ sư - Nhân viên chính thức</label>
		</div>
        
        
       

    
        <textarea class="form-control" rows="5" id="quest_03b" placeholder="Lý do"  name="quest_03b" required></textarea><br>
Lưu ý: "<strong>Lao động kỹ sư - Nhân viên chính thức</strong>" chỉ dành cho người TNĐH trở lên.<span style="color:#F00">*</span>
    </div>
<!-- end question 03 --> 

<!-- question 04 -->
    <div class="form-group" style="border-left:4px solid #8dc73f; padding-left:15px;margin-bottom:25px;">
        <label>4. Vui lòng cho biết gia đình bạn có cho phép bạn đi không? <span style="color:#F00">*</span></label>
         <div class="checkbox" style="margin-top:5px;">
            <label class="radio-inline"><input type="radio" value="yes" checked  name="quest_04" class="quest_04">Có</label>
            <label class="radio-inline"><input type="radio" value="no" name="quest_04" class="quest_04">Không</label>
		</div>
    </div>
<!-- end question 04 --> 

<!-- question 05 -->
    <div class="form-group" style="border-left:4px solid #8dc73f; padding-left:15px;margin-bottom:25px;">
        <label>5. Vui lòng cho biết giới tính của bạn. <span style="color:#F00">*</span></label>
        <div class="checkbox" style="margin-top:5px;">
            <label class="radio-inline"><input type="radio" value="male" checked  name="quest_05" class="quest_05">Nam</label>
            <label class="radio-inline"><input type="radio" value="fema"  name="quest_05" class="quest_05">Nữ</label>
            <label class="radio-inline"><input type="radio" value="other"  name="quest_05" class="quest_05">Khác</label>
		</div>
    </div>
<!-- end question 05 --> 


<!-- question 06 -->
    <div class="form-group" style="border-left:4px solid #8dc73f; padding-left:15px;margin-bottom:25px;">
        <label>6. Vui lòng cho biết ngày tháng năm sinh của bạn. <span style="color:#F00">*</span></label>
        <input type="text" class="form-control" name="quest_06" id="quest_06" required data-mask='00/00/0000' placeholder="__/__/____">
    </div>
<!-- end question 06 --> 

<!-- question 07 -->
    <div class="form-group" style="border-left:4px solid #8dc73f; padding-left:15px;margin-bottom:25px;">
        <label>7. Vui lòng cho biết nơi sinh của bạn. <span style="color:#F00">*</span></label>
         <textarea class="form-control" rows="5" name="quest_07" id="quest_07" required></textarea>
    </div>
<!-- end question 07 --> 

<!-- question 08 -->
    <div class="form-group" style="border-left:4px solid #8dc73f; padding-left:15px;margin-bottom:25px;">
        <label>8. Vui lòng cho biết hộ khẩu thường trú của bạn. <span style="color:#F00">*</span></label>
         <textarea class="form-control" rows="5" name="quest_08" id="quest_08" required></textarea>
    </div>
<!-- end question 08 --> 

<!-- question 09 -->
    <div class="form-group" style="border-left:4px solid #8dc73f; padding-left:15px;margin-bottom:25px;">
        <label>9. Vui lòng cho biết nơi ở của bạn hiện tại. <span style="color:#F00">*</span></label>
         <textarea class="form-control" rows="5" name="quest_09" id="quest_09" required></textarea>
    </div>
<!-- end question 09 --> 

<!-- question 10 -->
    <div class="form-group" style="border-left:4px solid #8dc73f; padding-left:15px;margin-bottom:25px;">
        <label>10. Vui lòng cho biết Công ty bạn đang làm việc. <span style="color:#F00">*</span></label>
         <input type="text" class="form-control"  name="quest_10" id="quest_10" required>
    </div>
<!-- end question 10 --> 

<!-- question 11 -->
    <div class="form-group" style="border-left:4px solid #8dc73f; padding-left:15px;margin-bottom:25px;">
        <label>11. Vui lòng cho biết công việc hiện tại của bạn. <span style="color:#F00">*</span></label>
         <input type="text" class="form-control"  name="quest_11" id="quest_11" required>
    </div>
<!-- end question 11 --> 

<!-- question 12 -->
    <div class="form-group" style="border-left:4px solid #8dc73f; padding-left:15px;margin-bottom:25px;">
        <label>12. Vui lòng cho biết bạn đã kết hôn chưa? <span style="color:#F00">*</span></label>
        <div class="checkbox" style="margin-top:5px;">
            <label class="radio-inline"><input type="radio" value="yes" checked   name="quest_12" class="quest_12">Đã kết hôn</label>
            <label class="radio-inline"><input type="radio" value="no"  name="quest_12" class="quest_12">Chưa kết hôn</label>
            <label class="radio-inline"><input type="radio" value="other"  name="quest_12" class="quest_12">Đã ly hôn</label>
		</div>
    </div>
<!-- end question 12 --> 

<!-- question 13 -->
    <div class="form-group" style="border-left:4px solid #8dc73f; padding-left:15px;margin-bottom:25px;">
        <label>13. Vui lòng cho biết trường bạn đã tốt nghiệp. <span style="color:#F00">*</span></label>
         <input type="text" class="form-control"  name="quest_13" id="quest_13" required>
    </div>
<!-- end question 13 --> 

<!-- question 14 -->
    <div class="form-group" style="border-left:4px solid #8dc73f; padding-left:15px;margin-bottom:25px;">
        <label>14. Vui lòng cho biết ngành bạn đã tốt nghiệp. <span style="color:#F00">*</span></label>
         <input type="text" class="form-control"  name="quest_14" id="quest_14" required>
    </div>
<!-- end question 14 --> 

<!-- question 15 -->
    <div class="form-group" style="border-left:4px solid #8dc73f; padding-left:15px;margin-bottom:25px;">
        <label>15. Vui lòng cho biết hệ tốt nghiệp. <span style="color:#F00">*</span></label>
        <div class="checkbox" style="margin-top:5px;">
            <label class="radio-inline"><input type="radio" value="dh" checked   name="quest_15" class="quest_15">Đại học</label>
            <label class="radio-inline"><input type="radio" value="cd" name="quest_15" class="quest_15">Cao đẳng</label>
            <label class="radio-inline"><input type="radio" value="tc" name="quest_15" class="quest_15">Trung cấp</label>
             <label class="radio-inline"><input type="radio" value="thpt" name="quest_15" class="quest_15">THPT</label>
		</div>
    </div>
<!-- end question 15 --> 

<!-- question 16 -->
    <div class="form-group" style="border-left:4px solid #8dc73f; padding-left:15px;margin-bottom:25px;">
        <label>16. Vui lòng cho biết năm bạn đã tốt nghiệp. <span style="color:#F00">*</span></label>
         <input type="text" class="form-control"  name="quest_16" id="quest_16" required data-mask='0000' placeholder="____">
    </div>
<!-- end question 16 --> 

<!-- question 17 -->
    <div class="form-group" style="border-left:4px solid #8dc73f; padding-left:15px;margin-bottom:25px;">
        <label>17. Vui lòng cho biết số năm làm việc của bạn ở công ty hiện tại. <span style="color:#F00">*</span></label>
         <input type="text" class="form-control"  name="quest_17" id="quest_17" required data-mask='00'>
    </div>
<!-- end question 17 --> 

<!-- question 18 -->
    <div class="form-group" style="border-left:4px solid #8dc73f; padding-left:15px;margin-bottom:25px;">
        <label>18. Có mong muốn dẫn vợ/chồng sang bên đó không? <span style="color:#F00">*</span></label>
         <div class="checkbox" style="margin-top:5px;">
            <label class="radio-inline"><input type="radio" value="yes" checked name="quest_18" class="quest_18">Có</label>
            <label class="radio-inline"><input type="radio" value="no" name="quest_18" class="quest_18">Không</label>
		</div>
    </div>
<!-- end question 18 --> 
<hr>
</div>



<!-- question 19 -->
    <div class="form-group" style="border-left:4px solid #8dc73f; padding-left:15px;margin-bottom:25px;">
        <label>19. Bạn có người quen để giới thiệu cho công việc này hay không? <span style="color:#F00">*</span></label>
         <div class="checkbox" style="margin-top:5px;">
            <label class="radio-inline"><input type="radio" value="yes" name="quest_19" class="quest_19">Có</label>
            <label class="radio-inline"><input type="radio" value="no" name="quest_19" class="quest_19">Không</label>
		</div>
    </div>
<!-- end question 19 --> 

<div class="collapse" id="yes_quest_19" style="padding-left:25px;border-left:4px solid #8dc73f; ">
<hr>
<div class="text-center">
<div class="alert alert-info">Xin vui lòng mô tả chi tiết về người bạn muốn giới thiệu.<br></div>
<br>

</div>

<!-- question 20 -->
    <div class="form-group" style="margin-bottom:25px;">
        <label>Họ và Tên. <span style="color:#F00">*</span></label>
         <input type="text" class="form-control"  name="quest_20" id="quest_20" required>
    </div>
<!-- end question 20 -->

<!-- question 21 -->
    <div class="form-group" style="margin-bottom:25px;">
        <label>Mối quan hệ với bạn. <span style="color:#F00">*</span></label>
         <input type="text" class="form-control"  name="quest_21" id="quest_21" required>
    </div>
<!-- end question 21 --> 

<!-- question 22 -->
    <div class="form-group" style="margin-bottom:25px;">
        <label>Giới tính. <span style="color:#F00">*</span></label>
        <div class="checkbox" style="margin-top:5px;">
            <label class="radio-inline"><input type="radio" value="male" checked  name="quest_22" class="quest_22">Nam</label>
            <label class="radio-inline"><input type="radio" value="fema"  name="quest_22" class="quest_22">Nữ</label>
            <label class="radio-inline"><input type="radio" value="other"  name="quest_22" class="quest_22">Khác</label>
		</div>
    </div>
<!-- end question 22 --> 


<!-- question 23 -->
    <div class="form-group" style="margin-bottom:25px;">
        <label>Ngày tháng năm sinh <span style="color:#F00">*</span> <a href="#" data-toggle="modal" data-target="#help_age"><i class="fa fa-question-circle" aria-hidden="true" ></i></a></label>
        <!-- help_age -->
        <div id="help_age" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       
      </div>
      <div class="modal-body">
        <p>Vui lòng chỉ nhập 1 trong 2 ô <strong>ngày tháng năm sinh</strong> hoặc <strong>số tuổi</strong>, nếu muốn thay đổi, vui lòng xóa giá trị ô hiện tại. Xin cảm ơn</p>
      </div>
      
    </div>

  </div>
</div>
             <!-- end help_age -->   
        
        
        
        <div class="row">
        <div class="col-sm-6">
 <input type="text" class="form-control" name="quest_23a" id="quest_23a" required data-mask='00/00/0000' placeholder="__/__/____">
        </div>
         <div class="col-sm-6">
 <input type="text" class="form-control" name="quest_23b" id="quest_23b" required data-mask='000' placeholder="Hoặc số tuổi">
        </div>
       </div>
    </div>
<!-- end question 23 --> 


<!-- question 24 -->
    <div class="form-group" style="margin-bottom:25px;">
        <label>Nơi cư trú hiện tại. <span style="color:#F00">*</span></label>
         <textarea class="form-control" rows="5" name="quest_24" id="quest_24" required></textarea>
    </div>
<!-- end question 24 --> 

<!-- question 25 -->
    <div class="form-group" style="margin-bottom:25px;">
        <label>Trường tốt nghiệp. <span style="color:#F00">*</span></label>
         <input type="text" class="form-control"  name="quest_25" id="quest_25" required>
    </div>
<!-- end question 25 --> 

<!-- question 26 -->
    <div class="form-group" style="margin-bottom:25px;">
        <label>Ngành tốt nghiệp. <span style="color:#F00">*</span></label>
         <input type="text" class="form-control"  name="quest_26" id="quest_26" required>
    </div>
<!-- end question 26 --> 

<!-- question 27 -->
    <div class="form-group" style="margin-bottom:25px;">
        <label>Hệ tốt nghiệp. <span style="color:#F00">*</span></label>
        <div class="checkbox" style="margin-top:5px;">
            <label class="radio-inline"><input type="radio" value="dh" checked   name="quest_27" class="quest_27">Đại học</label>
            <label class="radio-inline"><input type="radio" value="cd" name="quest_27" class="quest_27">Cao đẳng</label>
            <label class="radio-inline"><input type="radio" value="tc" name="quest_27" class="quest_27">Trung cấp</label>
             <label class="radio-inline"><input type="radio" value="thpt" name="quest_27" class="quest_27">THPT</label>
		</div>
    </div>
<!-- end question 27 --> 

<!-- question 28 -->
    <div class="form-group" style="margin-bottom:25px;">
        <label>Năm tốt nghiệp. <span style="color:#F00">*</span></label>
         <input type="text" class="form-control"  name="quest_28" id="quest_28" required data-mask='0000' placeholder="____">
    </div>
<!-- end question 28 --> 

<!-- question 29-->
    <div class="form-group" style="margin-bottom:25px;">
        <label>Hình thức mong muốn làm việc <span style="color:#F00">*</span></label>
        <div class="checkbox" style="margin-top:5px;">
            <label class="radio-inline"><input type="radio" value="thuctap" checked   name="quest_29" class="quest_29">Thực tập sinh kỹ năng</label>
            <label class="radio-inline"><input type="radio" value="kysu"  name="quest_29" class="quest_29">Lao động kỹ sư - Nhân viên chính thức</label>
		</div>
    </div>
<!-- end question 29 --> 


<div class="collapse" id="kysu_quest_29">
<!-- question 30-->
    <div class="form-group" style="margin-bottom:25px;">
        <label>Có đưa vợ/chồng cùng đi không <span style="color:#F00">*</span></label>
        <div class="checkbox" style="margin-top:5px;">
            <label class="radio-inline"><input type="radio" value="yes" checked   name="quest_30" class="quest_30">Có</label>
            <label class="radio-inline"><input type="radio" value="no"  name="quest_30" class="quest_30">Không</label>
		</div>
    </div>
<!-- end question 30 --> 
</div>



</div>


<div class="form-group" >
<hr>
 <div class="checkbox">
<button class="btn btn-success" style="border-radius:0;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> &nbsp; Gửi khảo sát </button>
</div>
<div class="clearfix"></div>
</div>


<input type="hidden" name="add_new_survey" value="post" >
  <?php wp_nonce_field( 'post_nonce', 'post_nonce_field' ); ?>

</form>



<?php if( $_SERVER['REQUEST_METHOD'] == 'POST' && !empty( $_POST['add_new_survey'] ) && isset( $_POST['post_nonce_field'] ) && wp_verify_nonce( $_POST['post_nonce_field'], 'post_nonce' )) {
	
if (isset($_POST['post_ip']) and $_POST['post_ip']!='') { $post_ip = $_POST['post_ip']; }
if (isset($_POST['quest_01']) and $_POST['quest_01']!='') { $quest_01 = $_POST['quest_01']; }
if (isset($_POST['quest_02']) and $_POST['quest_02']!='') { 
	$find_yn = array('yes', 'no');
	$replace_yn = array('Có', 'Không');
	$quest_02 = str_replace($find_yn,$replace_yn, $_POST['quest_02']);
}
if (isset($_POST['quest_03a']) and $_POST['quest_03a']!='') { 
	$find_mm = array('thuctap', 'kysu');
	$replace_mm = array('Thực tập sinh kỹ năng', 'Lao động kỹ sư - Nhân viên chính thức');
	$quest_03a = str_replace($find_mm,$replace_mm, $_POST['quest_03a']);
}
if (isset($_POST['quest_03b']) and $_POST['quest_03b']!='') { $quest_03b = $_POST['quest_03b']; }
if (isset($_POST['quest_04']) and $_POST['quest_04']!='') { 
	$find_yn = array('yes', 'no');
	$replace_yn = array('Có', 'Không');
	$quest_04 = str_replace($find_yn,$replace_yn, $_POST['quest_04']);
}
if (isset($_POST['quest_05']) and $_POST['quest_05']!='') { 
	$find_gt = array('male', 'fema', 'other');
	$replace_gt = array('Nam', 'Nữ', 'Khác');
	$quest_05 = str_replace($find_gt,$replace_gt, $_POST['quest_05']);
}
if (isset($_POST['quest_06']) and $_POST['quest_06']!='') { $quest_06 = $_POST['quest_06']; }
if (isset($_POST['quest_07']) and $_POST['quest_07']!='') { $quest_07 = $_POST['quest_07']; }
if (isset($_POST['quest_08']) and $_POST['quest_08']!='') { $quest_08 = $_POST['quest_08']; }
if (isset($_POST['quest_09']) and $_POST['quest_09']!='') { $quest_09 = $_POST['quest_09']; }
if (isset($_POST['quest_10']) and $_POST['quest_10']!='') { $quest_10 = $_POST['quest_10']; }

if (isset($_POST['quest_11']) and $_POST['quest_11']!='') { $quest_11 = $_POST['quest_11']; }
if (isset($_POST['quest_12']) and $_POST['quest_12']!='') { 
	$find_kh = array('yes', 'no', 'other');
	$replace_kh = array('Đã kết hôn', 'Chưa kết hôn', 'Đã ly hôn');
	$quest_12 = str_replace($find_kh,$replace_kh, $_POST['quest_12']);
}
if (isset($_POST['quest_13']) and $_POST['quest_13']!='') { $quest_13 = $_POST['quest_13']; }
if (isset($_POST['quest_14']) and $_POST['quest_14']!='') { $quest_14 = $_POST['quest_14']; }
if (isset($_POST['quest_15']) and $_POST['quest_15']!='') { 
	$find_tn = array('dh', 'cd', 'tc', 'thpt');
	$replace_tn = array('Đại học', 'Cao đẳng', 'Trung cấp', 'THPT');
	$quest_15 = str_replace($find_tn,$replace_tn, $_POST['quest_15']);
}
if (isset($_POST['quest_16']) and $_POST['quest_16']!='') { $quest_16 = $_POST['quest_16']; }
if (isset($_POST['quest_17']) and $_POST['quest_17']!='') { $quest_17 = $_POST['quest_17']; }
if (isset($_POST['quest_18']) and $_POST['quest_18']!='') { 
	$find_yn = array('yes', 'no');
	$replace_yn = array('Có', 'Không');
	$quest_18 = str_replace($find_yn,$replace_yn, $_POST['quest_18']);
}
if (isset($_POST['quest_19']) and $_POST['quest_19']!='') { 
	$find_yn = array('yes', 'no');
	$replace_yn = array('Có', 'Không');
	$quest_19 = str_replace($find_yn,$replace_yn, $_POST['quest_19']);
}
if (isset($_POST['quest_20']) and $_POST['quest_20']!='') { $quest_20 = $_POST['quest_20']; }
if (isset($_POST['quest_21']) and $_POST['quest_21']!='') { $quest_21 = $_POST['quest_21']; }
if (isset($_POST['quest_22']) and $_POST['quest_22']!='') { 
	$find_gt = array('male', 'fema', 'other');
	$replace_gt = array('Nam', 'Nữ', 'Khác');
	$quest_22 = str_replace($find_gt,$replace_gt, $_POST['quest_22']);
}
if (isset($_POST['quest_23a']) and $_POST['quest_23a']!='') { $quest_23 = $_POST['quest_23a']; } else { $quest_23 = $_POST['quest_23b'];}
if (isset($_POST['quest_24']) and $_POST['quest_24']!='') { $quest_24 = $_POST['quest_24']; }
if (isset($_POST['quest_25']) and $_POST['quest_25']!='') { $quest_25 = $_POST['quest_25']; }
if (isset($_POST['quest_26']) and $_POST['quest_26']!='') { $quest_26 = $_POST['quest_26']; }
if (isset($_POST['quest_27']) and $_POST['quest_27']!='') { 
	$find_tn = array('dh', 'cd', 'tc', 'thpt');
	$replace_tn = array('Đại học', 'Cao đẳng', 'Trung cấp', 'THPT');
	$quest_27 = str_replace($find_tn,$replace_tn, $_POST['quest_27']);
}
if (isset($_POST['quest_28']) and $_POST['quest_28']!='') { $quest_28 = $_POST['quest_28']; }
if (isset($_POST['quest_29']) and $_POST['quest_29']!='') { 
	$find_mm = array('thuctap', 'kysu');
	$replace_mm = array('Thực tập sinh kỹ năng', 'Lao động kỹ sư - Nhân viên chính thức');
	$quest_29 = str_replace($find_mm,$replace_mm, $_POST['quest_29']);
}
if (isset($_POST['quest_30']) and $_POST['quest_30']!='') { 
	$find_yn = array('yes', 'no');
	$replace_yn = array('Có', 'Không');
	$quest_30 = str_replace($find_yn,$replace_yn, $_POST['quest_30']);
}



else {
    echo 'Vui lòng điền đầy đủ nội dung !';
}

$post = array(
    'post_title'    => wp_strip_all_tags($quest_01),
	'post_status'   => 'publish',
    'post_type' => 'post',
);
$survey_post_id = wp_insert_post($post);
add_post_meta($survey_post_id, 'post_ip', $post_ip, true);
add_post_meta($survey_post_id, 'quest_02', $quest_02, true);
add_post_meta($survey_post_id, 'quest_03a', $quest_03a, true);
add_post_meta($survey_post_id, 'quest_03b', $quest_03b, true);
add_post_meta($survey_post_id, 'quest_04', $quest_04, true);
add_post_meta($survey_post_id, 'quest_05', $quest_05, true);
add_post_meta($survey_post_id, 'quest_06', $quest_06, true);
add_post_meta($survey_post_id, 'quest_07', $quest_07, true);
add_post_meta($survey_post_id, 'quest_08', $quest_08, true);
add_post_meta($survey_post_id, 'quest_09', $quest_09, true);
add_post_meta($survey_post_id, 'quest_10', $quest_10, true);

add_post_meta($survey_post_id, 'quest_11', $quest_11, true);
add_post_meta($survey_post_id, 'quest_12', $quest_12, true);
add_post_meta($survey_post_id, 'quest_13', $quest_13, true);
add_post_meta($survey_post_id, 'quest_14', $quest_14, true);
add_post_meta($survey_post_id, 'quest_15', $quest_15, true);
add_post_meta($survey_post_id, 'quest_16', $quest_16, true);
add_post_meta($survey_post_id, 'quest_17', $quest_17, true);
add_post_meta($survey_post_id, 'quest_18', $quest_18, true);
add_post_meta($survey_post_id, 'quest_19', $quest_19, true);
add_post_meta($survey_post_id, 'quest_20', $quest_20, true);

add_post_meta($survey_post_id, 'quest_21', $quest_21, true);
add_post_meta($survey_post_id, 'quest_22', $quest_22, true);
add_post_meta($survey_post_id, 'quest_23', $quest_23, true);
add_post_meta($survey_post_id, 'quest_24', $quest_24, true);
add_post_meta($survey_post_id, 'quest_25', $quest_25, true);
add_post_meta($survey_post_id, 'quest_26', $quest_26, true);
add_post_meta($survey_post_id, 'quest_27', $quest_27, true);
add_post_meta($survey_post_id, 'quest_28', $quest_28, true);
add_post_meta($survey_post_id, 'quest_29', $quest_29, true);
add_post_meta($survey_post_id, 'quest_30', $quest_30, true);
?>
<script>
if (confirm("Đã hoàn thành bản khảo sát. Xin cảm ơn !!!")) {
	document.location.href = "http://192.168.100.7:8080/khaosat/gkd/analytics/";
}
</script>
<?php } ?>
