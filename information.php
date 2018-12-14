<!DOCTYPE html>
<?php session_start(); ?>
<!--
    ustora by freshdesignweb.com
    Twitter: https://twitter.com/freshdesignweb
    URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Imformation Page - Ustora Demo</title>
    <link rel="shortcut icon" href="img/logo.ico">
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/search.css">
    <script type="text/javascript" src="js/search.js"></script>
    <script type="text/javascript" src="js/Test.js"></script>


    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
                            
                            <li><a href="cart.html"><i class="fa fa-user"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Giỏ hàng của tôi</font></font></a></li>
                            
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
    </div> <!-- End header area -->
    
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
                        <a href="cart.php">Giỏ Hàng<span  class="cart-amunt" id="TongTien"></span> <i class="fa fa-shopping-cart"></i> <span  class="product-count" id="soLuong">1</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
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
                        <li class="active"><a href="checkout.php">THÔNG TIN</a></li>
                        <li><a href="contact.php">LIÊN HỆ</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Thông tin người dùng</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--Body-->    
    <div class="container bootstrap snippet">
    <div class="row">
        <div class="col-sm-10"><h1>Tài khoản của tôi</h1></div>
        <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100"></a></div>
    </div>
    <div class="row">
        <div class="col-sm-3"><!--left col-->

          <?php
            include_once'dbconnect.php';
            $result = new Connection();
            $arrUser =NULL;
            $id=$_SESSION["ID"];
            $db=$result->query('SELECT * FROM nguoidung WHERE ID = "'.$id.'"');
            $columncount = $db->columnCount();
            foreach ($db as $arr) {
              for($i=0; $i<$columncount; ++$i){
                $meta = $db->getColumnMeta($i);
                $metaName = $meta["name"];
               if(isset($_POST["$metaName"])){
                  $value = $_POST["$metaName"];
                }
                else $value =$arr[$i];
                $arrUser[]=$value;
              }
            }
           
           ?>

      <div class="text-center">
        <img src="imgUser/<?php echo $arrUser[8]; ?>" class="avatar img-circle img-thumbnail" alt="avatar">
          <form method="POST" enctype="multipart/form-data">
            <input type="file" name="file-upload">
            <input type="submit" name="upload-file" value="Thay đổi">
          </form>
      </div></hr><br>

          <?php
            //xu ly upload file
            if(isset($_POST['upload-file'])){
              $fileUpload = $_FILES['file-upload'];
              if($fileUpload['name']!= null){
                $filename =$fileUpload['tmp_name'];
                $destination = 'imgUser/'. $fileUpload['name'];
                move_uploaded_file($filename, $destination);

                //lưu lên db
                $hinhanh = $fileUpload['name'];
                include_once 'dbconnect.php';
                $result = new Connection();
                $query="update nguoidung set HinhAnh='"."$hinhanh' WHERE ID='".$_SESSION['ID']."'";
                $result->query($query);

              }
            }
            
          ?>
           
          
          <ul class="list-group">
            <li class="list-group-item text-muted">Thông tin <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>ID</strong></span> <?php echo $arrUser[0]; ?></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Name</strong></span> <?php echo $arrUser[1]; ?></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Birthday</strong></span> <?php echo $arrUser[2]; ?></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Phone</strong></span> <?php echo $arrUser[4]; ?></li>
          </ul> 
               
          <div class="panel panel-default">
            <div class="panel-heading">Social Media</div>
            <div class="panel-body">
                <i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
            </div>
          </div>
          
        </div><!--/col-3-->
        <div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Thông tin</a></li>
                <li><a data-toggle="tab" href="#messages">Chi tiết phiếu mượn</a></li>
                <li><a data-toggle="tab" href="#settings">Kiểm tra vi phạm</a></li>
              </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" method="post" id="registrationForm">
                      <?php 
                        include_once 'content_information.php';
                        echo $content->executeCondition('nguoidung',"ID = \"$id\""); 
                       ?>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" type="submit" value=""  name="update"><i class="glyphicon glyphicon-ok-sign"></i>Update</button>
                            </div>
                      </div>

                </form>
                <?php
                  include_once "update.php";
                  $update = new Update("nguoidung","$id"); 
                  $update->execute();
                ?>
              
              <hr>
              
             </div><!--/tab-pane-->
             <div class="tab-pane" id="messages">
               
               <h2></h2>
               
               <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                     
                      <?php 
                        include_once 'content_information.php';
                        $arr = array('Mã phiếu mượn','Ngày mượn','Ngày hạn chót','Tên chi nhánh','Mã sách','Tên sách','Số lượng mượn','Tình trạng');
                        echo $content->execute4Table('chitietphieumuon',
                          'phieumuon',
                          'sach',
                          'chinhanh',
                          ' B.ID_PhieuMuon,B.NgayMuon,B.NgayHanChot,D.TenCN,A.ID_Sach,C.TenSach,A.soluong,B.TinhTrang',
                          'A.ID_PhieuMuon = B.ID_PhieuMuon and A.ID_Sach =C.ID_Sach and D.ID_ChiNhanh=B.ID_ChiNhanh and   B.ID_DocGia='.'"'.$id.'"',
                          $arr);
                       ?>
                      
                </form>
               
             </div><!--/tab-pane-->
             <div class="tab-pane" id="settings">
                    
                
                  <hr>
                  <form class="form" action="#" method="post" id="registrationForm">
                     
                      <?php 
                        include_once 'content_information.php';
                        $arr = array('Mã quản thư','Tên quản thư','Chi nhánh','Điện thoại','Ngày cấm','Ngày kết thúc');
                        echo $content->execute4Table('xulivipham',
                          'quanthu',
                          'nguoidung',
                          'chinhanh',
                          ' A.ID_QuanThu,C.HoTen,D.TenCN,C.DienThoai,A.NgayCam,A.NgayKT', 
                          'A.ID_QuanThu=B.ID_QuanThu and B.ID_QuanThu =C.ID and B.ID_ChiNhanh =D.ID_ChiNhanh and A.ID_DocGia='.'"'.$id.'"',
                          $arr);

                        // $id chính là $_SESSION['id'] đăng nhập
                       ?>

                     
                </form>
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
                                                      
   

<!--Footer-->
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
    </div> <!-- End footer top area -->
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2015 uCommerce. All Rights Reserved. <a href="http://www.freshdesignweb.com" target="_blank">freshDesignweb.com</a></p>
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
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
    <script type="text/javascript">
      function loadPage(){
         
          location.reload();
        }
    </script>

  </body>
</html>

<script type="text/javascript">
         function fnLaunch(ma)
         { 
            var urls="single-product.html?id="+ma;
            var win=window.open(urls, "_self");
            window.focus();
          }
        
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