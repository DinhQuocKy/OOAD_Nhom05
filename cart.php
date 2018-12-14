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
    <title>Cart Page - Ustora Demo</title>
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
    <!-- <style type="text/css">

    </style> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
   <body onload="showCart();Cart()">
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
                        <a href="cart.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Giỏ Sách </font></font><span class="cart-amunt"><font style="vertical-align: inherit;"><font id="TongTien" style="vertical-align: inherit;"></font></font></span> <i class="fa fa-shopping-cart"></i> <span class="product-count"><font style="vertical-align: inherit;"><font id="soLuong" style="vertical-align: inherit;">0</font></font></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div id="undefined-sticky-wrapper" class="sticky-wrapper" style="height: 60px;"><div class="mainmenu-area">
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
                        <li class="active"><a href="cart.php">GIỎ HÀNG</a></li>
                        <li><a href="information.php">THÔNG TIN</a></li>

                        <li><a href="contact.php">LIÊN HỆ</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div></div> <!-- End mainmenu area -->
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Giỏ hàng</font></font></h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Các sản phẩm</font></font></h2>
                        <div class="thubmnail-recent">
                            <img src="images/CongPhaToan2.jpg" class="recent-thumb" alt="">
                            <h2><p onclick="fnLaunch('007');" style="cursor: pointer;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Công Phá Toán 2</font></font></p></h2>
                            <div class="product-sidebar-price">
                                <ins><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">139.000 VND</font></font></ins> <del><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">179.000 VND</font></font></del>
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="images/CongPhaToan3.jpg" class="recent-thumb" alt="">
                            <h2><p onclick="fnLaunch('004');" style="cursor: pointer;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Công Phá Toán 3</font></font></p></h2>
                            <div class="product-sidebar-price">
                                <ins><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">149.000 VND</font></font></ins> <del><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">189.000 VND</font></font></del>
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="images/DacNhanTam.jpg" class="recent-thumb" alt="">
                            <h2><p onclick="fnLaunch('001');" style="cursor: pointer;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đắc Nhân Tâm</font></font></p></h2>
                            <div class="product-sidebar-price">
                                <ins><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">38.000 VND</font></font></ins> <del><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">76.000 VND</font></font></del>
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="images/luyen-sieu-tri-nho.jpg" class="recent-thumb" alt="">
                            <h2><p onclick="fnLaunch('006');" style="cursor: pointer;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Luyện Siêu Trí Từ Vựng Tiếng Anh</font></font></p></h2>
                            <div class="product-sidebar-price">
                                <ins><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">94.000 VND</font></font></ins> <del><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">188.000 VND</font></font></del>
                            </div>                             
                        </div>
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bài đăng gần đây</font></font></h2>
                        <ul>
                            <li><a href="single-product.html?id=009"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mình Là Cá, Việc Của Mình Là Bơi</font></font></a></li>
                            <li><a href="single-product.html?id=010"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tony Buổi Sáng - Trên Đường Băng</font></font></a></li>
                            <li><a href="single-product.html?id=001"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đắc Nhân Tâm</font></font></a></li>
                            <li><a href="single-product.html?id=006"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Luyện Siêu Trí Nhớ</font></font></a></li>
                            <li><a href="single-product.html?id=005"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tôi Thấy Hoa Vàng Trên Cỏ Non</font></font></a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <form method="post" action="" id="formLapPhieu">
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail">Ảnh minh họa</th>
                                            <th class="product-name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sản phẩm</font></font></th>
                                            <th class="product-quantity"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Số lượng</font></font></th>
                                            <th class="product-subtotal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chi nhánh</font></font></th>
                                        </tr>
                                    </thead>
                                    <tbody id="cartList">
                                    </tbody>
                                </table>
                            </form>

                            <div class="cart-collaterals">


                            <div class="cross-sells">
                                <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bạn có thể quan tâm đến ...</font></font></h2>
                                <ul class="products">
                                    <li class="product">
                                        <a href="single-product.html?id=003">
                                            <img width="325" height="325" alt="T_4_front" class="attachment-shop_catalog wp-post-image" src="images/5cm.jpg">
                                            <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5 Centimet Trên Giây</font></font></h3>
                                            <span class="price"><span class="amount"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">35.000 VND</font></font></span></span>
                                        </a>

                                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="22" rel="nofollow" href="single-product.html?id=003"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Chọn tùy chọn</font></font></a>
                                    </li>

                                    <li class="product">
                                        <a href="single-product.html?id=011">
                                            <img width="325" height="325" alt="T_4_front" class="attachment-shop_catalog wp-post-image" src="images/Mat-biec.jpg">
                                            <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mắt Biếc</font></font></h3>
                                            <span class="price"><span class="amount"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">45.820 VND</font></font></span></span>
                                        </a>

                                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="22" rel="nofollow" href="single-product.html?id=011"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Chọn tùy chọn</font></font></a>
                                    </li>
                                </ul>
                            </div>


                            <div class="cart_totals ">
                                <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tổng số giỏ hàng</font></font></h2>

                                <table cellspacing="0">
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tạm tính</font></font></th>
                                            <td><span class="amount"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" id="tamTinh">38.000 VND</font></font></span></td>
                                        </tr>

                                        <tr class="shipping">
                                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Vận chuyển và xử lý</font></font></th>
                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Miễn phí vận chuyển</font></font></td>
                                        </tr>

                                        <tr class="order-total">
                                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" >Tổng hóa đơn</font></font></th>
                                            <td><strong><span class="amount"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" id="tongHoaDon">38.000 VND</font></font></span></strong> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>                        
                    </div>                    
                </div>
            </div>
        </div>
    </div>

    
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
    </div> <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <script async="" src="https://www.google-analytics.com/analytics.js"></script><script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
    
</html>

<script type="text/javascript">
    var array=[];
        var chucVu="";
        var arr_json=[];
        var jsonArray="";
        var id_nguoidung= "<?php echo $_SESSION['ID']; ?>";
       function fnLaunch(ma,cn)
       { 
          var urls="single-product.php?id="+ma+"&cn="+cn;
          window.open(urls, "_self");
          // window.focus();
        }
        function SL_SachMuon(){
            //m ko tính những cuốn nó đã mượn trong database à
            //chưa tính
            //t nghĩ phải cộng vô những cuốn nó đã mượn trong database vào biến sl
            //build coi thử man
            var sl=0;
            for (var i=0;i<localStorage.length;++i){
                var key=localStorage.key(i);
                if (key.charAt(0)=='c'&&key.charAt(1)=='a'){
                    var cart=JSON.parse(localStorage.getItem(key));
                    sl+=parseInt(cart.soluong);
                }
            }
            return sl;
        }
        
        function KT_GioHang(){
            for (var i=0;i<localStorage.length;++i){
                var key=localStorage.key(i);
                if (key.charAt(0)=='c'&&key.charAt(1)=='a'){
                    return true;
                }
            }
            return false;
        }
        function KT_GioiHan_MuonSach(sl_sachMuon){
            //Chỗ này sẽ trả về chức vụ r xét số lượng sách mún mượn của nó có thỏa mản k
            $.ajax({
            url:"gioiHanMuonSach.php",
            method:"POST",
            data:{id:id_nguoidung},
            success:function(result){
                chucVu=result;
                //Cộng vào số sách người dùng muốn muojn tiếp
                sl_sachMuon+=SL_SachMuon();
                //alert(sl_sachMuon);
                 if ((result==='SV')||(result==="DGK"&&sl_sachMuon<=3)||(result==="GV"&&sl_sachMuon<=5)){
                    baoNhieuChiNhanh();
                    createDataForEachBranch();
                    createJSONArrayTotalForUpdate();
                     lapPhieu();
                     updateSL_Sach();
               }
               else alert("Bạn không được mượn quá số lượng sách");
                
          }
      });
        }
        function KT_SachDaMuon(){
            //Trả về số lượng sách đã mượn 
            $.ajax({
            url:"slSach_DaMuon.php",
            method:"POST",
            data:{id_DocGia:id_nguoidung},
            success:function(result){
                var sl_sachMuon=parseInt(result);
                //alert(sl_sachMuon);

                //chuyển qua xét nó là chức vụ gì
                KT_GioiHan_MuonSach(sl_sachMuon);
               
            }
            
            });
        }
        function createDataForEachBranch(){
            for (var i=0;i<array.length;++i){
                arr_json.push(createJSON_Array(array[i]));
            }
        }
        function createJSON_Array(chiNhanh){
            var data="[";
            for (var i=0;i<localStorage.length;++i){
                var key=localStorage.key(i);
                if (key.charAt(0)=='c'&&key.charAt(1)=='a'){
                    if (JSON.parse(localStorage.getItem(key)).cn==chiNhanh){
                        data+=localStorage.getItem(key);
                        data+=",";
                    }
                }
            }
            data=data.substring(0,data.length-1);
            data+="]";
            return data;
        }
        function baoNhieuChiNhanh(){//hàm này dùng để xem những cuốn sách trong giỏ hàng nằm trong bao nhiu chi nhánh
            var count=0;
            for (var i=0;i<localStorage.length;++i){
                var key=localStorage.key(i);
                if (key.charAt(0)=='c'&&key.charAt(1)=='a'){
                    var cart=JSON.parse(localStorage.getItem(key));
                    if (check(cart)) count++;
                }
            }
            return count;
        }
        function check(cart){
            for (var i=0;i<array.length;++i){
                if (array[i]==cart.cn){
                    return false;
                } 
            }
            array.push(cart.cn);
            return true;
        }
        function lapPhieu(){
           // for (var i=0;i<arr_json.length;++i) alert(arr_json[i]);
           var index=0;
           //ajax chạy luồng k chạy từ trên xún
            for (var i=0;i<array.length;++i){
                $.ajax({
                url:"lapPhieu.php",
                method:"POST",
                data:{id:id_nguoidung,chucVu:chucVu,cn:array[i]},
                success:function(result){
                    
                    // alert(i);
                    // alert(count);
                    taoChiTietPhieu(result,index);   
                    index++;
                }
              });
            }
        }
        function createJSONArrayTotalForUpdate(){
            jsonArray="[";
            for (var i=0;i<arr_json.length;++i){
                jsonArray+=arr_json[i].substring(1,arr_json[i].length-1);
                jsonArray+=",";
            }
            jsonArray=jsonArray.substring(0,jsonArray.length-1);
            jsonArray+="]";
        }

        function taoChiTietPhieu(idPhieu,index){
            // alert(arr_json[i]);
                $.ajax({
                url:"chiTietPhieuMuon.php",
                method:"POST",
                data:{data:arr_json[index],id_phieu:idPhieu},
                success:function(result){
                }
              });
            }
        function updateSL_Sach(){
             $.ajax({
                url:"updateSL.php",
                method:"POST",
                data:{data:jsonArray},
                success:function(result){
                    if (result=="1") localStorage.clear();
                    alert("Chúc mừng bạn đã mượn sách thành công. Mời bạn đến chi nhánh tương ứng để mượn sách");
                    location.reload(); 
                }
              });
        }
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#log_out').click(function(){
            $.ajax({
               url: 'logout.php',
               success:function(result){

               }
            });
        });



        $('#formLapPhieu').submit(function(e){
            //bắt đầu từ đây
            alert(id_nguoidung);
            if (id_nguoidung==""){
                
                alert("Bạn chưa đăng nhập, vui lòng đăng nhập để thực hiện chức năng này!!!");
            }
            else if (id_nguoidung!=""){
                if(KT_GioHang()){
                    e.preventDefault();
                    $.ajax({
                        url:"xuLyViPham.php",
                        method:"POST",
                        data:{id:id_nguoidung},
                        success:function(result){
                           if (result=='1'){
                                
                                KT_SachDaMuon();
                           }
                           else alert("Bạn đang bị vi phạm");
                        }
                    });
                }
            }
            
        });
    });
</script>
