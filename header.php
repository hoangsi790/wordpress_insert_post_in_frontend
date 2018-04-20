<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/master.css">
<link href="https://fonts.googleapis.com/css?family=Quicksand:400,700" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" type="image/x-icon" />
<?php wp_head(); ?>
<title><?php if(is_front_page()) { bloginfo('name'); } else{ wp_title(''); } ?></title>
</head>

<body <?php body_class(); ?>>
<header>
  <div class="  top-line">
    <div class="container">
      <div class="row">
        <div class="top-left pull-left">
          <i class="fa fa-envelope-o" aria-hidden="true"></i> &nbsp;<a href="mailto:development@gkv.vn">development@gkv.vn</a>
          <i class="fa fa-phone" aria-hidden="true"></i> &nbsp;<a href="tel:02837157973">+(84)-28-3715-7973</a>
        </div>
        <div class="top-right pull-right">
          <a href="<?php bloginfo( 'home' ); ?>/contact"># Gửi phản hồi</a>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-2">
        <div class="row">
          <a style="margin-top:15px;display:block;" href="<?php bloginfo( 'home' ); ?>" title="<?php bloginfo( 'name' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo( 'name' ); ?>"></a>
        </div>
      </div>
      <div class="col-sm-10">
        <div class="row">
          <nav id="primary-menu" class="navigation ">
            <ul id="nav" class="nav">
              <li class="<?php if(is_front_page()) : echo 'active'; endif; ?>">
                <a href="<?php bloginfo( 'home' ); ?>">Khảo sát
                <span>Survey Info</span>
                </a>
              </li>
              
                 <li class="<?php if(is_page('analytics')) : echo 'active'; endif; ?>">
                <a href="<?php bloginfo( 'home' ); ?>/analytics">Kết quả thống kê
                <span>Analytics Info</span>
                </a>
              </li>
           
              <li class="<?php if(is_page('contact')) : echo 'active'; endif; ?>">
                <a href="<?php bloginfo( 'home' ); ?>/contact">Liên hệ
                <span>Contact info</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="clearfix"></div>
      
    </div>
  </div>
  <div class="container-fluid">
  <div class="row">
  <hr style="margin:0;">
  </div>
  </div>
  
</header>
