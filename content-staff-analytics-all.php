<div class="col-sm-3">
    <div class="form-group" style="border-left:4px solid <?php if(get_field('quest_02')=='Có') { echo '#8dc73f'; } else { echo '#e74c3c'; } ?>; padding:10px 10px 10px 15px;margin-bottom:25px;background:#f9f9f9;">
        <p><strong style="text-transform:uppercase;">
            <?php the_title(); ?>
            </strong><br>
             PC : <?php $get_ip = get_field('post_ip');  
			 $explode_ip = explode(".",$get_ip);
			 echo $explode_ip[3];
			 ?> </p>
             
             <?php if(get_field('quest_02')=='') { ?>
             <span class="label label-danger" style="position: absolute;
    right: 10px;
    top: -5px;
    padding-top:4px;
    z-index: 9;"><i class="fa fa-exclamation-circle" aria-hidden="true"></i>&nbsp; Khảo sát lỗi, vui lòng liên hệ Sĩ (Bộ phận IT)</span>
             <?php } ?>
             
             
            
             <?php if(get_field('quest_19')=='Có') { ?>
             <span class="label label-info" style="position: absolute;
    right: 10px;
    top: -5px;
    z-index: 9;">GT</span>
             <?php } ?>
            
        <a href="#" data-toggle="modal" data-target="#nv_all_<?php the_ID();?>" style="color: <?php if(get_field('quest_02')=='Có') { echo '#8dc73f'; } else { echo '#e74c3c'; } ?>">Xem thông tin chi tiết</a> 
        
        <!-- detail --> 
        
        <!-- Modal -->
        <div id="nv_all_<?php the_ID();?>" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg"> 
                
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><strong style="text-transform:uppercase;"># <?php the_title(); ?></strong></h4>
                         <?php if(get_field('quest_19')=='Có') { ?>
             <span class="label label-danger" style="    position: absolute;
    right: 50px;
    top: 19px;
    z-index: 9;">Giới thiệu người quen</span>
             <?php } ?>
                    </div>
                    <div class="modal-body while_content"> 
                        <!-- while content -->
                        
                        <p><strong>Mong muốn tham gia làm việc ở GKD</strong> : <?php the_field('quest_02'); ?></p>
                        
                        <?php if(get_field('quest_02')=='Có') { ?>
                        <p><strong>Hình thức muốn đi</strong> : <?php the_field('quest_03a'); ?></p>
                        <p><strong>Lý do muốn đi</strong> : <?php the_field('quest_03b'); ?></p>
                        
                        <p><strong>Gia đình bạn có cho phép đi</strong> : <?php the_field('quest_04'); ?></p>
                        <p><strong>Giới tính</strong> : <?php the_field('quest_05'); ?></p>
                        <p><strong>Ngày tháng năm sinh</strong> : <?php the_field('quest_06'); ?></p>
                        <p><strong>Nơi sinh</strong> : <?php the_field('quest_07'); ?></p>
                        <p><strong>Hộ khẩu thường trú</strong> : <?php the_field('quest_08'); ?></p>
                        <p><strong>Nơi ở hiện tại</strong> : <?php the_field('quest_09'); ?></p>
                        <p><strong>Công ty đang làm việc</strong> : <?php the_field('quest_10'); ?></p>
                        <p><strong>Công việc hiện tại</strong> : <?php the_field('quest_11'); ?></p>
                        <p><strong>Tình trạng hôn nhân</strong> : <?php the_field('quest_12'); ?></p>
                        <p><strong>Trường đã tốt nghiệp</strong> : <?php the_field('quest_13'); ?></p>
                        <p><strong>Ngành đã tốt nghiệp</strong> : <?php the_field('quest_14'); ?></p>
                        <p><strong>Hệ tốt nghiệp</strong> : <?php the_field('quest_15'); ?></p>
                        <p><strong>Năm tốt nghiệp</strong> : <?php the_field('quest_16'); ?></p>
                        <p><strong>Số năm làm việc ở công ty hiện tại</strong> : <?php the_field('quest_17'); ?></p>
                        <p><strong>Mong muốn dẫn vợ/chồng sang bên Nhật</strong> : <?php the_field('quest_18'); ?></p>
                        <p><strong>Có người quen để giới thiệu cho công việc này</strong> : <?php the_field('quest_19'); ?></p>
                        <?php } else {?>
                        <p><strong>Có người quen để giới thiệu cho công việc này</strong> : <?php the_field('quest_19'); ?></p>
                        <?php } ?>
                        
                        <?php if(get_field('quest_19')=='Có') { ?>
                        <div class="alert alert-info" style="margin-top:15px;">
                       <strong> <?php the_title(); ?></strong> đã giới thiệu <strong><?php the_field('quest_20'); ?></strong> tham gia làm việc tại GKD, <a href="#" data-toggle="collapse" data-target="#nguoiduocgioithieu_all_<?php the_ID();?>" style="text-decoration:underline;">Xem thông tin của <?php the_field('quest_20'); ?></a>
                        </div>
                        <div id="nguoiduocgioithieu_all_<?php the_ID();?>" class="collapse" style="border-left:4px solid #8dc73f; padding-left:15px;margin-bottom:25px;">
                        <hr>
                        
                         <p><strong>Họ và tên</strong> : <?php the_field('quest_20'); ?></p>
                          <p><strong>Mối quan hệ với người giới thiệu</strong> : <?php the_field('quest_21'); ?></p>
                        <p><strong>Giới tính</strong> : <?php the_field('quest_22'); ?></p>
                        <p><strong>Ngày tháng năm sinh hoặc số tuổi</strong> : <?php the_field('quest_23'); ?></p>
                        <p><strong>Nơi cư trú hiện tại</strong> : <?php the_field('quest_24'); ?></p>
                        <p><strong>Trường đã tốt nghiệp</strong> : <?php the_field('quest_25'); ?></p>
                        <p><strong>Ngành đã tốt nghiệp</strong> : <?php the_field('quest_26'); ?></p>
                        <p><strong>Hệ tốt nghiệp</strong> : <?php the_field('quest_27'); ?></p>
                        <p><strong>Năm tốt nghiệp</strong> : <?php the_field('quest_28'); ?></p>
                         <p><strong>Hình thức mong muốn làm việc</strong> : <?php the_field('quest_29'); ?></p>
                         <?php if(get_field('quest_19')!='Thực tập sinh kỹ năng') { ?>
                         
                        <p><strong>Mong muốn đưa vợ/chồng cùng đi</strong> : <?php the_field('quest_30'); ?></p>
                         <?php } ?>
                         </div>
                        <?php } ?>
                        
                        
                        <!-- end while content --> 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- end detail --> 
        
    </div>
</div>
