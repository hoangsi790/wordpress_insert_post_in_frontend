<?php /* Template Name: Excel */ ?>
<?php // get_header();?>
<style>
table {border-collapse:collapse;}
table tr td { text-align: left; vertical-align: top; font-size:9px; font-family:Arial, Helvetica, sans-serif;}
table tr:nth-child(1) td, table tr:nth-child(2) td , table tr:nth-child(3) td {text-align:center;}
table tr td:first-child {text-align:center;}
</style>
<section>
    <table width="100%" border="1">
   		 <tr>
            <td colspan="32" style="text-align:center;"><strong>THỐNG KÊ KHẢO SÁT ĐĂNG KÝ THAM GIA LÀM VIỆC TẠI GKD</strong></td>
        </tr>
        <tr>
            <td rowspan="2">STT</td>
            <td rowspan="2">Họ và Tên</td>
            <td rowspan="2">Mong muốn tham gia làm việc ở GKD</td>
            <td rowspan="2">Hình thức muốn đi</td>
            <td rowspan="2">Lý do muốn đi</td>
            <td rowspan="2">Gia đình bạn có cho phép đi</td>
            <td rowspan="2">Giới tính</td>
            <td rowspan="2">Ngày tháng năm sinh</td>
            <td rowspan="2">Nơi sinh</td>
            <td rowspan="2">Hộ khẩu thường trú</td>
            <td rowspan="2">Nơi ở hiện tại</td>
            <td rowspan="2">Công ty đang làm việc</td>
            <td rowspan="2">Công việc hiện tại</td>
            <td rowspan="2">Tình trạng hôn nhân</td>
            <td rowspan="2">Trường đã tốt nghiệp</td>
            <td rowspan="2">Ngành đã tốt nghiệp</td>
            <td rowspan="2">Hệ tốt nghiệp</td>
            <td rowspan="2">Năm tốt nghiệp</td>
            <td rowspan="2">Số năm làm việc ở công ty hiện tại</td>
            <td rowspan="2">Mong muốn dẫn vợ/chồng sang bên Nhật</td>
            <td rowspan="2">Có người quen để giới thiệu cho công việc này</td>
            <td colspan="11">Thông tin người được giới thiệu</td>
        </tr>
        <tr>
            <td>Họ và Tên</td>
            <td>Mối quan hệ với người giới thiệu</td>
            <td>Giới tính</td>
            <td>Ngày tháng năm sinh hoặc số tuổi</td>
            <td>Nơi cư trú hiện tại</td>
            <td>Trường đã tốt nghiệp</td>
            <td>Ngành đã tốt nghiệp</td>
            <td>Hệ tốt nghiệp</td>
            <td>Năm tốt nghiệp</td>
            <td>Hình thức mong muốn làm việc</td>
            <td>Mong muốn đưa vợ/chồng cùng đi</td>
        </tr>
        
        <?php 
$args=array(
'post_type' => 'post', 
'orderby' => 'ID', 
'order'   => 'ASC', 
'posts_per_page'=>-1);
$query = new WP_Query( $args); 
?>
<?php if ( $query->have_posts() ) : ?>
<?php $i = 1; while ( $query->have_posts() ) : $query->the_post();?>
<!-- loop content -->
<tr>
    <td><?php echo $i; ?></td>
    <td><?php the_title(); ?></td>
     <td><?php the_field('quest_02'); ?></td>
    <td><?php the_field('quest_03a'); ?></td>
    <td><?php the_field('quest_03b'); ?></td>
    <td><?php the_field('quest_04'); ?></td>
    <td><?php the_field('quest_05'); ?></td>
    <td><?php the_field('quest_06'); ?></td>
    <td><?php the_field('quest_07'); ?></td>
    <td><?php the_field('quest_08'); ?></td>
    <td><?php the_field('quest_09'); ?></td>
    <td><?php the_field('quest_10'); ?></td>
     <td><?php the_field('quest_11'); ?></td>
     <td><?php the_field('quest_12'); ?></td>
     <td><?php the_field('quest_13'); ?></td>
     <td><?php the_field('quest_14'); ?></td>
     <td><?php the_field('quest_15'); ?></td>
     <td><?php the_field('quest_16'); ?></td>
    <td><?php the_field('quest_17'); ?></td>
     <td><?php the_field('quest_18'); ?></td>
     <td><?php the_field('quest_19'); ?></td>
     <td><?php the_field('quest_20'); ?></td>
    
    
  
            <td><?php the_field('quest_21'); ?></td>
            <td><?php the_field('quest_22'); ?></td>
            <td><?php the_field('quest_23'); ?></td>
            <td><?php the_field('quest_24'); ?></td>
            <td><?php the_field('quest_25'); ?></td>
            <td><?php the_field('quest_26'); ?></td>
            <td><?php the_field('quest_27'); ?></td>
            <td><?php the_field('quest_28'); ?></td>
            <td><?php the_field('quest_29'); ?></td>
            <td><?php the_field('quest_30'); ?></td>
    
</tr>
<!-- end loop content -->
        <?php $i++; endwhile; ?>
<?php  wp_reset_query(); ?>
<?php  endif; ?>
    </table>
</section>
<?php // get_footer(); ?>
