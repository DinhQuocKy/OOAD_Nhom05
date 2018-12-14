<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
   <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact page- Ustora Demo</title>
    <link rel="shortcut icon" href="img/logo.ico">
    <!-- Google Fonts -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
     -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="style.css"> 
      <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
      <script type="text/javascript" src="js/Test.js"></script>
   </head>
   <body onload="Cart()">
      <div class="header-area">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <div class="user-menu">
                     <ul>
                        <?php include_once 'checkAccount.php'; ?>
                        
                        <li><a href="cart.php"><i class="fa fa-user"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Giỏ hàng của tôi</font></font></a></li>
                       
                        <?php include_once 'includes/login_logout.php'; ?>
                     </ul>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="header-right">
                     <ul class="list-unstyled list-inline">
                        <li class="dropdown dropdown-small">
                           <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tiền Tệ: </font></font></span><span class="value"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">VND</font></font></span><b class="caret"></b></a>
                           <ul class="dropdown-menu">
                              <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">VND</font></font></a></li>
                              <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">USD</font></font></a></li>
                           </ul>
                        </li>
                        <li class="dropdown dropdown-small">
                           <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ngôn Ngữ: </font></font></span><span class="value"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tiếng Việt</font></font></span><b class="caret"></b></a>
                           <ul class="dropdown-menu">
                              <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tiếng Việt</font></font></a></li>
                              <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tiếng Anh</font></font></a></li>
                           </ul>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- End header area -->
      <div class="site-branding-area">
         <div class="container">
            <div class="row">
               <div class="col-sm-6">
                  <div class="logo">
                     <h1><a href="#"><img src="img/logo.png" height="150px" width="150px"></a></h1>
                  </div>
               </div>
               <div class="col-sm-6">
                   <div class="shopping-item">
                        <a href="cart.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Giỏ Hàng</font></font><span class="cart-amunt"><font style="vertical-align: inherit;"><font id='TongTien' style="vertical-align: inherit;"></font></font></span> <i class="fa fa-shopping-cart"></i> <span class="product-count"><font style="vertical-align: inherit;"><font id="soLuong" style="vertical-align: inherit;">1</font></font></span></a>
                    </div>
                </div>
            </div>
         </div>
      </div>
      <!-- End site branding area -->
      <div id="undefined-sticky-wrapper" class="sticky-wrapper" style="height: 60px;">
         <div class="mainmenu-area">
            <div class="container">
               <div class="row">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     </button>
                  </div>
                  <div class="navbar-collapse collapse">
                     <ul class="nav navbar-nav">
                        <li><a href="index.php">TRANG CHỦ</a></li>
                        <li><a href="shop.php">SẢN PHẨM</a></li>
                        <li><a href="search_page.php">TÌM KIẾM SẢN PHẨN</a></li>
                        <li><a href="cart.php">GIỎ HÀNG</a></li>
                        <li><a href="information.php">THÔNG TIN</a></li>

                        <li class="active"><a href="contact.php">LIÊN HỆ</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- End mainmenu area -->
      <div class="product-big-title-area">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="product-bit-title text-center">
                     <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Liên hệ</font></font></h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- End Page title area -->
      
      <div class="container">
            <br>
           <div class="row">
             <div class="col-sm-8">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.6511791676458!2d106.68001421488492!3d10.761343692331767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f1b888ab357%3A0xc469f6e800231314!2zMjgwIEFuIETGsMahbmcgVsawxqFuZywgUGjGsOG7nW5nIDQsIFF14bqtbiA1LCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1543210409106" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
             </div>

             <div class="col-sm-4" id="contact2">
                 <h3 style="font-weight: bold;">Thông tin liên hệ</h3>
                 <hr align="left" width="50%">
                 <h4 class="pt-2" >Địa chỉ</h4>
                 <i class="fas fa-globe" style="color:#000"></i> 280 An Dương Vương, Phường 4, Quận 5, Hồ Chí Minh, Việt Nam<br><br>
                 <h4 class="pt-2">Số điện thoại</h4>
                 <i class="fas fa-phone" style="color:#000"></i> <a href="tel:+"> 123456 </a><br>
                 <i class="fab fa-whatsapp" style="color:#000"></i><a href="tel:+"> 123456 </a><br><br>
                 <h4 class="pt-2">Email</h4>
                 <i class="fa fa-envelope" style="color:#000"></i> <a href="">test@test.com</a><br>
                 
               </div>
           </div>
         </div>
      </div>
      <br><br>

      
      <div class="footer-top-area">
         <div class="zigzag-bottom"></div>
         <div class="container">
            <div class="row">
               <div class="col-md-3 col-sm-6">
                  <div class="footer-about-us">
                     <h2><span>THẦN ĐỒNG BOOKSTORE</span></h2>
                     <p>Mua hàng trực tuyến (mua hàng online) mang lại sự tiện lợi, lựa chọn đa dạng hơn và các dịch vụ tốt hơn cho người tiêu dùng, tại THẦN ĐỒNG BOOKSTORE bạn có thể mua đồ giá rẻ với rất nhiều các chương trình khuyến mãi hàng tháng. Bây giờ bạn có thể trải nghiệm mua hàng online thỏa thích mà THẦN ĐỒNG BOOKSTORE mang lại chỉ với 1 click chuột.</p>
                     <div class="footer-social">
                        <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="footer-menu">
                     <h2 class="footer-wid-title">Khách hàng </h2>
                     <ul>
                        <li><a href="#">Tài khoản</a></li>
                        <li><a href="#">Lịch sử mua hàng</a></li>
                        <li><a href="#">Danh sách mong muốn</a></li>
                        <li><a href="#">Liên hệ</a></li>
                        <li><a href="#">Trang đầu</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="footer-menu">
                     <h2 class="footer-wid-title">Danh mục</h2>
                     <ul>
                        <li><a href="#">Loại sách</a></li>
                        <li><a href="#">Nhà xuất bản</a></li>
                        <li><a href="#">Tác giả</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="footer-newsletter">
                     <h2 class="footer-wid-title">Tin thông báo</h2>
                     <p>Đăng ký nhận tin của chúng tôi và nhận các ưu đãi độc quyền mà bạn sẽ không tìm thấy ở bất kỳ nơi nào khác. Hãy đăng ký ngay!</p>
                     <div class="newsletter-form">
                        <form action="#">
                           <input type="email" placeholder="Nhập email của bạn">
                           <input type="submit" value="Đăng ký">
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- End footer top area -->
      <div class="footer-bottom-area">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <div class="copyright">
                     <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">© 2015 uCommerce. </font><font style="vertical-align: inherit;">Đã đăng ký Bản quyền. </font></font><a href="http://www.freshdesignweb.com" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">freshDesignweb.com</font></font></a></p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="footer-card-icon">
                     <i class="fa fa-cc-discover"></i>
                     <i class="fa fa-cc-mastercard"></i>
                     <i class="fa fa-cc-paypal"></i>
                     <i class="fa fa-cc-visa"></i>
                  </div>
               </div>
            </div>
         </div>
      </div>
 </html>

<script type="text/javascript">
    $(document).ready(function(){
        $('#log_out').click(function(){
            $.ajax({
               url: 'logout.php',
               success:function(result){

               }
            });
         });
    });
</script>