<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>Giao Diện Admin</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <!-- 
    Visual Admin Template
    http://www.templatemo.com/preview/templatemo_455_visual_admin
    -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="../assets/admin/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/admin/css/templatemo-style.css" rel="stylesheet">
    <!-- Load trinh soan thao ckeditor -->
    <script type="text/javascript" src="../assets/admin/ckeditor/ckeditor.js"></script>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>  
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
          <h1>Visual Admin</h1>
        </header>
        <div class="profile-photo-container">
          <img src="../assets/admin/images/profile-photo.jpg" alt="Profile Photo" class="img-responsive">  
          <div class="profile-photo-overlay"></div>
        </div>      
        <!-- Search box -->
        <form class="templatemo-search-form" role="search">
          <div class="input-group">
              <button type="submit" class="fa fa-search"></button>
              <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">           
          </div>
        </form>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav">          
          <ul>
            <li><a href="index.php?controller=categories"><i class="fa fa-home fa-fw"></i>Danh mục sản phẩm</a></li>
            <li><a href="index.php?controller=products"><i class="fa fa-bar-chart fa-fw"></i>Danh sách sản phẩm</a></li>
            <li><a href="index.php?controller=news"><i class="fa fa-database fa-fw"></i>Tin tức</a></li>
            <li><a href="index.php?controller=orders"><i class="fa fa-map-marker fa-fw"></i>Đơn hàng</a></li>
            <li><a href="index.php?controller=users"><i class="fa fa-users fa-fw"></i>Quản lý tài khoản</a></li>
            <li><a href="#"><i class="fa fa-sliders fa-fw"></i>Khuyến Mại</a></li>
            <li><a href="index.php?controller=login&action=logout"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
          </ul>  
        </nav>
      </div>
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li><a href="" class="active">Admin panel</a></li>
                <li><a href="">Dashboard</a></li>
                <li><a href="">Overview</a></li>
                <li><a href="login.html">Sign in form</a></li>
              </ul>  
            </nav> 
          </div>
        </div>
        <div class="templatemo-content " style="margin:20px">
        	<?php View::renderBody(); ?>
        </div>
      </div>
    </div>
    <footer class="text-right">
      <p>Copyright &copy; 2022 Company Name | Designed by <a href="#" target="_parent">KHONG QUANG HA</a></p>
    </footer>
    <!-- JS -->
    <script src="../assets/admin/js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script src="../assets/admin/js/jquery-migrate-1.2.1.min.js"></script> <!--  jQuery Migrate Plugin -->
    <script src="https://www.google.com/jsapi"></script> <!-- Google Chart -->
    <script type="text/javascript" src="../assets/admin/js/templatemo-script.js"></script>      <!-- Templatemo Script -->

  </body>
</html>