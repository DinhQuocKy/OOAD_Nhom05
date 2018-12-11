<!DOCTYPE html>
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
    <title>Checkout Page - Ustora Demo</title>
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
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body onload="Cart()">
   
   <div class="header-area">
     
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="#"><i class="fa fa-user"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Tài khoản của tôi</font></font></a></li>
                            <li><a href="#"><i class="fa fa-heart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Danh sách yêu thích</font></font></a></li>
                            <li><a href="cart.html"><i class="fa fa-user"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Giỏ hàng của tôi</font></font></a></li>
                            <li><a href="checkout.html"><i class="fa fa-user"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Kiểm tra</font></font></a></li>
                            <li><a href="#"><i class="fa fa-user"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Đăng nhập</font></font></a></li>
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
                        <a href="cart.php">Giỏ Hàng - <span  class="cart-amunt" id="TongTien"> VND</span> <i class="fa fa-shopping-cart"></i> <span  class="product-count" id="soLuong">1</span></a>
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
                        <li><a href="shop.php?page=1">SẢN PHẨM</a></li>
                        <li><a href="cart.php">GIỎ HÀNG</a></li>
                        <li class="active"><a href="checkout.php">THANH TOÁN</a></li>
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
                        <h2>Shopping Cart</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                   <!--  <div class="single-sidebar"> -->
                        <!-- <h2 class="sidebar-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">tìm kiếm sản phẩm</font></font></h2>
                        <form action="#">
                            <input type="text" placeholder="Tìm kiếm sách...">
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="submit" value="Tìm kiếm"></font></font>
                        </form> -->
                        <h2 class="sidebar-title" style="margin-bottom: 15px;" onclick="hideResult()">Tìm Kiếm</h2>
                        <div class="dropdownSearch" >
                         <div id="myDropdownSearch" class="dropdown-contentSearch"  >
                             <input type="text" placeholder="Tìm kiếm..." id="myInputSearch" onkeyup="filterFunction()" >
                                    <div id="resultSearch" style="display:none">
                                         <?php
                                            include "dbconnect.php";
                                            $result=mysqli_query($conn,"Select id, name from book order by id desc");
                                            if (mysqli_num_rows($result)){
                                                while($row=mysqli_fetch_row($result)){
                                                    $name=mb_strtoupper($row[1]);
                                                    $id=$row[0];
                                                    echo "<a href='single-product.html?id=$id'>$name</a>";
                                                }
                                            }
                                        ?>
                                    </div>
                             </div> 
                        </div>
                    <!-- </div> -->
                    <br>
                    <br>
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
                            <li><a href="single-product.html?id=005"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tôi Thấy Hoa Vàng Trên Cỏ Xanh</font></font></a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <div class="woocommerce-info"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Phản hồi khách hàng? </font></font><a class="showlogin" data-toggle="collapse" href="#login-form-wrap" aria-expanded="false" aria-controls="login-form-wrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nhấn vào đây để đăng nhập</font></font></a>
                            </div>

                            <form id="login-form-wrap" class="login collapse in" method="post" style="">


                                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nếu bạn đã mua sắm với chúng tôi trước đây, vui lòng nhập chi tiết của bạn vào các ô bên dưới. </font><font style="vertical-align: inherit;">Nếu bạn là khách hàng mới, vui lòng chuyển sang phần Lập hóa đơn &amp; Giao hàng.</font></font></p>

                                <p class="form-row form-row-first">
                                    <label for="username"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên người dùng hoặc email </font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span>
                                    </label>
                                    <input type="text" id="username" name="username" class="input-text">
                                </p>
                                <p class="form-row form-row-last">
                                    <label for="password"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mật khẩu </font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span>
                                    </label>
                                    <input type="password" id="password" name="password" class="input-text">
                                </p>
                                <div class="clear"></div>


                                <p class="form-row">
                                    <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="submit" value="Đăng nhập" name="login" class="button"></font></font>
                                    <label class="inline" for="rememberme"><input type="checkbox" value="forever" id="rememberme" name="rememberme"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Nhớ tôi </font></font></label>
                                </p>
                                <p class="lost_password">
                                    <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quên mật khẩu?</font></font></a>
                                </p>

                                <div class="clear"></div>
                            </form>

                            <div class="woocommerce-info"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Có phiếu giảm giá? </font></font><a class="showcoupon" data-toggle="collapse" href="#coupon-collapse-wrap" aria-expanded="false" aria-controls="coupon-collapse-wrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nhấp vào đây để nhập mã của bạn</font></font></a>
                            </div>

                            <form id="coupon-collapse-wrap" method="post" class="checkout_coupon collapse">

                                <p class="form-row form-row-first">
                                    <input type="text" value="" id="coupon_code" placeholder="Mã giảm giá" class="input-text" name="coupon_code">
                                </p>

                                <p class="form-row form-row-last">
                                    <input type="submit" value="Áp mã" name="apply_coupon" class="button">
                                </p>

                                <div class="clear"></div>
                            </form>

                            <form enctype="multipart/form-data" action="#" class="checkout" method="post" name="checkout">

                                <div id="customer_details" class="col2-set">
                                    <div class="col-1">
                                        <div class="woocommerce-billing-fields">
                                            <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chi tiết thanh toán</font></font></h3>
                                            <p id="billing_country_field" class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated">
                                                <label class="" for="billing_country"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quốc gia </font></font><abbr title="cần thiết" class="required"><font style="vertical-align: inherit;"></font></abbr>
                                                </label>
                                                <select class="country_to_state country_select" id="billing_country" name="billing_country">
                                                    <option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chọn một quốc gia…</font></font></option>
                                                    <option value="AX"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quần đảo Aland</font></font></option>
                                                    <option value="AF"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Afghanistan</font></font></option>
                                                    <option value="AL"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Albania</font></font></option>
                                                    <option value="DZ"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Algeria</font></font></option>
                                                    <option value="AD"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Andorra</font></font></option>
                                                    <option value="AO"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Angola</font></font></option>
                                                    <option value="AI"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Anguilla</font></font></option>
                                                    <option value="AQ"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nam Cực</font></font></option>
                                                    <option value="AG"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Antigua và Barbuda</font></font></option>
                                                    <option value="AR"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Argentina</font></font></option>
                                                    <option value="AM"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Armenia</font></font></option>
                                                    <option value="AW"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Aruba</font></font></option>
                                                    <option value="AU"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Châu Úc</font></font></option>
                                                    <option value="AT"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Áo</font></font></option>
                                                    <option value="AZ"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Azerbaijan</font></font></option>
                                                    <option value="BS"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bahamas</font></font></option>
                                                    <option value="BH"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bahrain</font></font></option>
                                                    <option value="BD"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bangladesh</font></font></option>
                                                    <option value="BB"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Barbados</font></font></option>
                                                    <option value="BY"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Belarus</font></font></option>
                                                    <option value="PW"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Belau</font></font></option>
                                                    <option value="BE"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nước Bỉ</font></font></option>
                                                    <option value="BZ"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Belize</font></font></option>
                                                    <option value="BJ"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Benin</font></font></option>
                                                    <option value="BM"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bermuda</font></font></option>
                                                    <option value="BT"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bhutan</font></font></option>
                                                    <option value="BO"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bolivia</font></font></option>
                                                    <option value="BQ"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bonaire, Saint Eustatius và Saba</font></font></option>
                                                    <option value="BA"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bosnia và Herzegovina</font></font></option>
                                                    <option value="BW"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Botswana</font></font></option>
                                                    <option value="BV"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đảo Bouvet</font></font></option>
                                                    <option value="BR"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Braxin</font></font></option>
                                                    <option value="IO"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lãnh thổ Ấn Độ Dương thuộc Anh</font></font></option>
                                                    <option value="VG"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quần đảo British Virgin</font></font></option>
                                                    <option value="BN"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Brunei</font></font></option>
                                                    <option value="BG"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bungari</font></font></option>
                                                    <option value="BF">Burkina Faso</option>
                                                    <option value="BI">Burundi</option>
                                                    <option value="KH">Cambodia</option>
                                                    <option value="CM">Cameroon</option>
                                                    <option value="CA">Canada</option>
                                                    <option value="CV">Cape Verde</option>
                                                    <option value="KY">Cayman Islands</option>
                                                    <option value="CF">Central African Republic</option>
                                                    <option value="TD">Chad</option>
                                                    <option value="CL">Chile</option>
                                                    <option value="CN">China</option>
                                                    <option value="CX">Christmas Island</option>
                                                    <option value="CC">Cocos (Keeling) Islands</option>
                                                    <option value="CO">Colombia</option>
                                                    <option value="KM">Comoros</option>
                                                    <option value="CG">Congo (Brazzaville)</option>
                                                    <option value="CD">Congo (Kinshasa)</option>
                                                    <option value="CK">Cook Islands</option>
                                                    <option value="CR">Costa Rica</option>
                                                    <option value="HR">Croatia</option>
                                                    <option value="CU">Cuba</option>
                                                    <option value="CW">CuraÇao</option>
                                                    <option value="CY">Cyprus</option>
                                                    <option value="CZ">Czech Republic</option>
                                                    <option value="DK">Denmark</option>
                                                    <option value="DJ">Djibouti</option>
                                                    <option value="DM">Dominica</option>
                                                    <option value="DO">Dominican Republic</option>
                                                    <option value="EC">Ecuador</option>
                                                    <option value="EG">Egypt</option>
                                                    <option value="SV">El Salvador</option>
                                                    <option value="GQ">Equatorial Guinea</option>
                                                    <option value="ER">Eritrea</option>
                                                    <option value="EE">Estonia</option>
                                                    <option value="ET">Ethiopia</option>
                                                    <option value="FK">Falkland Islands</option>
                                                    <option value="FO">Faroe Islands</option>
                                                    <option value="FJ">Fiji</option>
                                                    <option value="FI">Finland</option>
                                                    <option value="FR">France</option>
                                                    <option value="GF">French Guiana</option>
                                                    <option value="PF">French Polynesia</option>
                                                    <option value="TF">French Southern Territories</option>
                                                    <option value="GA">Gabon</option>
                                                    <option value="GM">Gambia</option>
                                                    <option value="GE">Georgia</option>
                                                    <option value="DE">Germany</option>
                                                    <option value="GH">Ghana</option>
                                                    <option value="GI">Gibraltar</option>
                                                    <option value="GR">Greece</option>
                                                    <option value="GL">Greenland</option>
                                                    <option value="GD">Grenada</option>
                                                    <option value="GP">Guadeloupe</option>
                                                    <option value="GT">Guatemala</option>
                                                    <option value="GG">Guernsey</option>
                                                    <option value="GN">Guinea</option>
                                                    <option value="GW">Guinea-Bissau</option>
                                                    <option value="GY">Guyana</option>
                                                    <option value="HT">Haiti</option>
                                                    <option value="HM">Heard Island and McDonald Islands</option>
                                                    <option value="HN">Honduras</option>
                                                    <option value="HK">Hong Kong</option>
                                                    <option value="HU">Hungary</option>
                                                    <option value="IS">Iceland</option>
                                                    <option value="IN">India</option>
                                                    <option value="ID">Indonesia</option>
                                                    <option value="IR">Iran</option>
                                                    <option value="IQ">Iraq</option>
                                                    <option value="IM">Isle of Man</option>
                                                    <option value="IL">Israel</option>
                                                    <option value="IT">Italy</option>
                                                    <option value="CI">Ivory Coast</option>
                                                    <option value="JM">Jamaica</option>
                                                    <option value="JP">Japan</option>
                                                    <option value="JE">Jersey</option>
                                                    <option value="JO">Jordan</option>
                                                    <option value="KZ">Kazakhstan</option>
                                                    <option value="KE">Kenya</option>
                                                    <option value="KI">Kiribati</option>
                                                    <option value="KW">Kuwait</option>
                                                    <option value="KG">Kyrgyzstan</option>
                                                    <option value="LA">Laos</option>
                                                    <option value="LV">Latvia</option>
                                                    <option value="LB">Lebanon</option>
                                                    <option value="LS">Lesotho</option>
                                                    <option value="LR">Liberia</option>
                                                    <option value="LY">Libya</option>
                                                    <option value="LI">Liechtenstein</option>
                                                    <option value="LT">Lithuania</option>
                                                    <option value="LU">Luxembourg</option>
                                                    <option value="MO">Macao S.A.R., China</option>
                                                    <option value="MK">Macedonia</option>
                                                    <option value="MG">Madagascar</option>
                                                    <option value="MW">Malawi</option>
                                                    <option value="MY">Malaysia</option>
                                                    <option value="MV">Maldives</option>
                                                    <option value="ML">Mali</option>
                                                    <option value="MT">Malta</option>
                                                    <option value="MH">Marshall Islands</option>
                                                    <option value="MQ">Martinique</option>
                                                    <option value="MR">Mauritania</option>
                                                    <option value="MU">Mauritius</option>
                                                    <option value="YT">Mayotte</option>
                                                    <option value="MX">Mexico</option>
                                                    <option value="FM">Micronesia</option>
                                                    <option value="MD">Moldova</option>
                                                    <option value="MC">Monaco</option>
                                                    <option value="MN">Mongolia</option>
                                                    <option value="ME">Montenegro</option>
                                                    <option value="MS">Montserrat</option>
                                                    <option value="MA">Morocco</option>
                                                    <option value="MZ">Mozambique</option>
                                                    <option value="MM">Myanmar</option>
                                                    <option value="NA">Namibia</option>
                                                    <option value="NR">Nauru</option>
                                                    <option value="NP">Nepal</option>
                                                    <option value="NL">Netherlands</option>
                                                    <option value="AN">Netherlands Antilles</option>
                                                    <option value="NC">New Caledonia</option>
                                                    <option value="NZ">New Zealand</option>
                                                    <option value="NI">Nicaragua</option>
                                                    <option value="NE">Niger</option>
                                                    <option value="NG">Nigeria</option>
                                                    <option value="NU">Niue</option>
                                                    <option value="NF">Norfolk Island</option>
                                                    <option value="KP">North Korea</option>
                                                    <option value="NO">Norway</option>
                                                    <option value="OM">Oman</option>
                                                    <option value="PK">Pakistan</option>
                                                    <option value="PS">Palestinian Territory</option>
                                                    <option value="PA">Panama</option>
                                                    <option value="PG">Papua New Guinea</option>
                                                    <option value="PY">Paraguay</option>
                                                    <option value="PE">Peru</option>
                                                    <option value="PH">Philippines</option>
                                                    <option value="PN">Pitcairn</option>
                                                    <option value="PL">Poland</option>
                                                    <option value="PT">Portugal</option>
                                                    <option value="QA">Qatar</option>
                                                    <option value="IE">Republic of Ireland</option>
                                                    <option value="RE">Reunion</option>
                                                    <option value="RO">Romania</option>
                                                    <option value="RU">Russia</option>
                                                    <option value="RW">Rwanda</option>
                                                    <option value="ST">São Tomé and Príncipe</option>
                                                    <option value="BL">Saint Barthélemy</option>
                                                    <option value="SH">Saint Helena</option>
                                                    <option value="KN">Saint Kitts and Nevis</option>
                                                    <option value="LC">Saint Lucia</option>
                                                    <option value="SX">Saint Martin (Dutch part)</option>
                                                    <option value="MF">Saint Martin (French part)</option>
                                                    <option value="PM">Saint Pierre and Miquelon</option>
                                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                                    <option value="SM">San Marino</option>
                                                    <option value="SA">Saudi Arabia</option>
                                                    <option value="SN">Senegal</option>
                                                    <option value="RS">Serbia</option>
                                                    <option value="SC">Seychelles</option>
                                                    <option value="SL">Sierra Leone</option>
                                                    <option value="SG">Singapore</option>
                                                    <option value="SK">Slovakia</option>
                                                    <option value="SI">Slovenia</option>
                                                    <option value="SB">Solomon Islands</option>
                                                    <option value="SO">Somalia</option>
                                                    <option value="ZA">South Africa</option>
                                                    <option value="GS">South Georgia/Sandwich Islands</option>
                                                    <option value="KR">South Korea</option>
                                                    <option value="SS">South Sudan</option>
                                                    <option value="ES">Spain</option>
                                                    <option value="LK">Sri Lanka</option>
                                                    <option value="SD">Sudan</option>
                                                    <option value="SR">Suriname</option>
                                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                                    <option value="SZ"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Swaziland</font></font></option>
                                                    <option value="SE"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thụy Điển</font></font></option>
                                                    <option value="CH"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thụy sĩ</font></font></option>
                                                    <option value="SY"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Syria</font></font></option>
                                                    <option value="TW"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đài Loan</font></font></option>
                                                    <option value="TJ"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tajikistan</font></font></option>
                                                    <option value="TZ"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tanzania</font></font></option>
                                                    <option value="TH"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nước Thái Lan</font></font></option>
                                                    <option value="TL"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đông Timor</font></font></option>
                                                    <option value="TG"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đi</font></font></option>
                                                    <option value="TK"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tokelau</font></font></option>
                                                    <option value="TO"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tonga</font></font></option>
                                                    <option value="TT"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trinidad và Tobago</font></font></option>
                                                    <option value="TN"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tunisia</font></font></option>
                                                    <option value="TR"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">gà tây</font></font></option>
                                                    <option value="TM"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Turkmenistan</font></font></option>
                                                    <option value="TC"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quần đảo Turks và Caicos</font></font></option>
                                                    <option value="TV"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tuvalu</font></font></option>
                                                    <option value="UG"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Uganda</font></font></option>
                                                    <option value="UA"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ukraine</font></font></option>
                                                    <option value="AE"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">các Tiểu Vương Quốc Ả Rập Thống Nhất</font></font></option>
                                                    <option selected="selected" value="GB"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Việt Nam</font></font></option>
                                                    <option value="US"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hoa Kỳ (Hoa Kỳ)</font></font></option>
                                                    <option value="UY"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Uruguay</font></font></option>
                                                    <option value="UZ"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Uzbekistan</font></font></option>
                                                    <option value="VU"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Vanuatu</font></font></option>
                                                    <option value="VA"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Vatican</font></font></option>
                                                    <option value="VE"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Venezuela</font></font></option>
                                                    <option value="VN"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Vương quốc Anh (Vương quốc Anh)</font></font></option>
                                                    <option value="WF"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wallis và Futuna</font></font></option>
                                                    <option value="EH"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Phía tây Sahara</font></font></option>
                                                    <option value="WS"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tây Samoa</font></font></option>
                                                    <option value="YE"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Yemen</font></font></option>
                                                    <option value="ZM"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Zambia</font></font></option>
                                                    <option value="ZW"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Zimbabwe</font></font></option>
                                                </select>
                                            </p>

                                            <p id="billing_first_name_field" class="form-row form-row-first validate-required">
                                                <label class="" for="billing_first_name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên </font></font><abbr title="cần thiết" class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></abbr>
                                                </label>
                                                <input type="text" value="" placeholder="" id="billing_first_name" name="billing_first_name" class="input-text ">
                                            </p>

                                            <p id="billing_last_name_field" class="form-row form-row-last validate-required">
                                                <label class="" for="billing_last_name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Họ </font></font><abbr title="cần thiết" class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></abbr>
                                                </label>
                                                <input type="text" value="" placeholder="" id="billing_last_name" name="billing_last_name" class="input-text ">
                                            </p>
                                            <div class="clear"></div>

                                            <p id="billing_company_field" class="form-row form-row-wide">
                                                <label class="" for="billing_company"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên công ty</font></font></label>
                                                <input type="text" value="" placeholder="" id="billing_company" name="billing_company" class="input-text ">
                                            </p>

                                            <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                                <label class="" for="billing_address_1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Địa chỉ </font></font><abbr title="cần thiết" class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></abbr>
                                                </label>
                                                <input type="text" value="" placeholder="Địa chỉ" id="billing_address_1" name="billing_address_1" class="input-text ">
                                            </p>

                                            <p id="billing_address_2_field" class="form-row form-row-wide address-field">
                                                <input type="text" value="" placeholder="Căn hộ, số phòng, vv." id="billing_address_2" name="billing_address_2" class="input-text ">
                                            </p>

                                            <p id="billing_city_field" class="form-row form-row-wide address-field validate-required" data-o_class="form-row form-row-wide address-field validate-required">
                                                <label class="" for="billing_city"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thị trấn / Thành phố </font></font><abbr title="cần thiết" class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></abbr>
                                                </label>
                                                <input type="text" value="" placeholder="Thị trấn / Thành phố" id="billing_city" name="billing_city" class="input-text ">
                                            </p>

                                            <p id="billing_state_field" class="form-row form-row-first address-field validate-state" data-o_class="form-row form-row-first address-field validate-state">
                                                <label class="" for="billing_state"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quận</font></font></label>
                                                <input type="text" id="billing_state" name="billing_state" placeholder="Quận / Phường" value="" class="input-text ">
                                            </p>
                                            <p id="billing_postcode_field" class="form-row form-row-last address-field validate-required validate-postcode" data-o_class="form-row form-row-last address-field validate-required validate-postcode">
                                                <label class="" for="billing_postcode"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mã bưu điện </font></font><abbr title="cần thiết" class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></abbr>
                                                </label>
                                                <input type="text" value="" placeholder="Mã bưu điện" id="billing_postcode" name="billing_postcode" class="input-text ">
                                            </p>

                                            <div class="clear"></div>

                                            <p id="billing_email_field" class="form-row form-row-first validate-required validate-email">
                                                <label class="" for="billing_email"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Địa chỉ Email </font></font><abbr title="cần thiết" class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></abbr>
                                                </label>
                                                <input type="text" value="" placeholder="" id="billing_email" name="billing_email" class="input-text ">
                                            </p>

                                            <p id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
                                                <label class="" for="billing_phone"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Điện thoại </font></font><abbr title="cần thiết" class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></abbr>
                                                </label>
                                                <input type="text" value="" placeholder="" id="billing_phone" name="billing_phone" class="input-text ">
                                            </p>
                                            <div class="clear"></div>


                                            <div class="create-account">
                                                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tạo một tài khoản bằng cách nhập thông tin bên dưới. </font><font style="vertical-align: inherit;">Nếu bạn là khách hàng cũ, vui lòng đăng nhập ở đầu trang.</font></font></p>
                                                <p id="account_password_field" class="form-row validate-required">
                                                    <label class="" for="account_password"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mật khẩu tài khoản </font></font><abbr title="cần thiết" class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></abbr>
                                                    </label>
                                                    <input type="password" value="" placeholder="Mật khẩu" id="account_password" name="account_password" class="input-text">
                                                </p>
                                                <div class="clear"></div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-2">
                                        <div class="woocommerce-shipping-fields">
                                            <h3 id="ship-to-different-address">
                        <label class="checkbox" for="ship-to-different-address-checkbox"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gửi đến địa chỉ khác?</font></font></label>
                        <input type="checkbox" value="1" name="ship_to_different_address" checked="checked" class="input-checkbox" id="ship-to-different-address-checkbox">
                        </h3>
                                            <div class="shipping_address" style="display: block;">
                                                <p id="shipping_country_field" class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated">
                                                    <label class="" for="shipping_country"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quốc gia </font></font><abbr title="cần thiết" class="required"><font style="vertical-align: inherit;"></font></abbr>
                                                    </label>
                                                    <select class="country_to_state country_select" id="shipping_country" name="shipping_country">
                                                        <option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chọn một quốc gia…</font></font></option>
                                                        <option value="AX"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quần đảo Aland</font></font></option>
                                                        <option value="AF"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Afghanistan</font></font></option>
                                                        <option value="AL">Albania</option>
                                                        <option value="DZ">Algeria</option>
                                                        <option value="AD">Andorra</option>
                                                        <option value="AO">Angola</option>
                                                        <option value="AI">Anguilla</option>
                                                        <option value="AQ">Antarctica</option>
                                                        <option value="AG">Antigua and Barbuda</option>
                                                        <option value="AR">Argentina</option>
                                                        <option value="AM">Armenia</option>
                                                        <option value="AW">Aruba</option>
                                                        <option value="AU">Australia</option>
                                                        <option value="AT">Austria</option>
                                                        <option value="AZ">Azerbaijan</option>
                                                        <option value="BS">Bahamas</option>
                                                        <option value="BH">Bahrain</option>
                                                        <option value="BD">Bangladesh</option>
                                                        <option value="BB">Barbados</option>
                                                        <option value="BY">Belarus</option>
                                                        <option value="PW">Belau</option>
                                                        <option value="BE">Belgium</option>
                                                        <option value="BZ">Belize</option>
                                                        <option value="BJ">Benin</option>
                                                        <option value="BM">Bermuda</option>
                                                        <option value="BT">Bhutan</option>
                                                        <option value="BO">Bolivia</option>
                                                        <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                                                        <option value="BA">Bosnia and Herzegovina</option>
                                                        <option value="BW">Botswana</option>
                                                        <option value="BV">Bouvet Island</option>
                                                        <option value="BR">Brazil</option>
                                                        <option value="IO">British Indian Ocean Territory</option>
                                                        <option value="VG">British Virgin Islands</option>
                                                        <option value="BN">Brunei</option>
                                                        <option value="BG">Bulgaria</option>
                                                        <option value="BF">Burkina Faso</option>
                                                        <option value="BI">Burundi</option>
                                                        <option value="KH">Cambodia</option>
                                                        <option value="CM">Cameroon</option>
                                                        <option value="CA">Canada</option>
                                                        <option value="CV">Cape Verde</option>
                                                        <option value="KY">Cayman Islands</option>
                                                        <option value="CF">Central African Republic</option>
                                                        <option value="TD">Chad</option>
                                                        <option value="CL">Chile</option>
                                                        <option value="CN">China</option>
                                                        <option value="CX">Christmas Island</option>
                                                        <option value="CC">Cocos (Keeling) Islands</option>
                                                        <option value="CO">Colombia</option>
                                                        <option value="KM">Comoros</option>
                                                        <option value="CG">Congo (Brazzaville)</option>
                                                        <option value="CD">Congo (Kinshasa)</option>
                                                        <option value="CK">Cook Islands</option>
                                                        <option value="CR">Costa Rica</option>
                                                        <option value="HR">Croatia</option>
                                                        <option value="CU">Cuba</option>
                                                        <option value="CW">CuraÇao</option>
                                                        <option value="CY">Cyprus</option>
                                                        <option value="CZ">Czech Republic</option>
                                                        <option value="DK">Denmark</option>
                                                        <option value="DJ">Djibouti</option>
                                                        <option value="DM">Dominica</option>
                                                        <option value="DO">Dominican Republic</option>
                                                        <option value="EC">Ecuador</option>
                                                        <option value="EG">Egypt</option>
                                                        <option value="SV">El Salvador</option>
                                                        <option value="GQ">Equatorial Guinea</option>
                                                        <option value="ER">Eritrea</option>
                                                        <option value="EE">Estonia</option>
                                                        <option value="ET">Ethiopia</option>
                                                        <option value="FK">Falkland Islands</option>
                                                        <option value="FO">Faroe Islands</option>
                                                        <option value="FJ">Fiji</option>
                                                        <option value="FI">Finland</option>
                                                        <option value="FR">France</option>
                                                        <option value="GF">French Guiana</option>
                                                        <option value="PF">French Polynesia</option>
                                                        <option value="TF">French Southern Territories</option>
                                                        <option value="GA">Gabon</option>
                                                        <option value="GM">Gambia</option>
                                                        <option value="GE">Georgia</option>
                                                        <option value="DE">Germany</option>
                                                        <option value="GH">Ghana</option>
                                                        <option value="GI">Gibraltar</option>
                                                        <option value="GR">Greece</option>
                                                        <option value="GL">Greenland</option>
                                                        <option value="GD">Grenada</option>
                                                        <option value="GP">Guadeloupe</option>
                                                        <option value="GT">Guatemala</option>
                                                        <option value="GG">Guernsey</option>
                                                        <option value="GN">Guinea</option>
                                                        <option value="GW">Guinea-Bissau</option>
                                                        <option value="GY">Guyana</option>
                                                        <option value="HT">Haiti</option>
                                                        <option value="HM">Heard Island and McDonald Islands</option>
                                                        <option value="HN">Honduras</option>
                                                        <option value="HK">Hong Kong</option>
                                                        <option value="HU">Hungary</option>
                                                        <option value="IS">Iceland</option>
                                                        <option value="IN">India</option>
                                                        <option value="ID">Indonesia</option>
                                                        <option value="IR">Iran</option>
                                                        <option value="IQ">Iraq</option>
                                                        <option value="IM">Isle of Man</option>
                                                        <option value="IL">Israel</option>
                                                        <option value="IT">Italy</option>
                                                        <option value="CI">Ivory Coast</option>
                                                        <option value="JM">Jamaica</option>
                                                        <option value="JP">Japan</option>
                                                        <option value="JE">Jersey</option>
                                                        <option value="JO">Jordan</option>
                                                        <option value="KZ">Kazakhstan</option>
                                                        <option value="KE">Kenya</option>
                                                        <option value="KI">Kiribati</option>
                                                        <option value="KW">Kuwait</option>
                                                        <option value="KG">Kyrgyzstan</option>
                                                        <option value="LA">Laos</option>
                                                        <option value="LV">Latvia</option>
                                                        <option value="LB">Lebanon</option>
                                                        <option value="LS">Lesotho</option>
                                                        <option value="LR">Liberia</option>
                                                        <option value="LY">Libya</option>
                                                        <option value="LI">Liechtenstein</option>
                                                        <option value="LT">Lithuania</option>
                                                        <option value="LU">Luxembourg</option>
                                                        <option value="MO">Macao S.A.R., China</option>
                                                        <option value="MK">Macedonia</option>
                                                        <option value="MG">Madagascar</option>
                                                        <option value="MW">Malawi</option>
                                                        <option value="MY">Malaysia</option>
                                                        <option value="MV">Maldives</option>
                                                        <option value="ML">Mali</option>
                                                        <option value="MT">Malta</option>
                                                        <option value="MH">Marshall Islands</option>
                                                        <option value="MQ">Martinique</option>
                                                        <option value="MR">Mauritania</option>
                                                        <option value="MU">Mauritius</option>
                                                        <option value="YT">Mayotte</option>
                                                        <option value="MX">Mexico</option>
                                                        <option value="FM">Micronesia</option>
                                                        <option value="MD">Moldova</option>
                                                        <option value="MC">Monaco</option>
                                                        <option value="MN">Mongolia</option>
                                                        <option value="ME">Montenegro</option>
                                                        <option value="MS">Montserrat</option>
                                                        <option value="MA">Morocco</option>
                                                        <option value="MZ">Mozambique</option>
                                                        <option value="MM">Myanmar</option>
                                                        <option value="NA">Namibia</option>
                                                        <option value="NR">Nauru</option>
                                                        <option value="NP">Nepal</option>
                                                        <option value="NL">Netherlands</option>
                                                        <option value="AN">Netherlands Antilles</option>
                                                        <option value="NC">New Caledonia</option>
                                                        <option value="NZ">New Zealand</option>
                                                        <option value="NI">Nicaragua</option>
                                                        <option value="NE">Niger</option>
                                                        <option value="NG">Nigeria</option>
                                                        <option value="NU">Niue</option>
                                                        <option value="NF">Norfolk Island</option>
                                                        <option value="KP">North Korea</option>
                                                        <option value="NO">Norway</option>
                                                        <option value="OM">Oman</option>
                                                        <option value="PK">Pakistan</option>
                                                        <option value="PS">Palestinian Territory</option>
                                                        <option value="PA">Panama</option>
                                                        <option value="PG">Papua New Guinea</option>
                                                        <option value="PY">Paraguay</option>
                                                        <option value="PE">Peru</option>
                                                        <option value="PH">Philippines</option>
                                                        <option value="PN">Pitcairn</option>
                                                        <option value="PL">Poland</option>
                                                        <option value="PT">Portugal</option>
                                                        <option value="QA">Qatar</option>
                                                        <option value="IE">Republic of Ireland</option>
                                                        <option value="RE">Reunion</option>
                                                        <option value="RO">Romania</option>
                                                        <option value="RU">Russia</option>
                                                        <option value="RW">Rwanda</option>
                                                        <option value="ST">São Tomé and Príncipe</option>
                                                        <option value="BL">Saint Barthélemy</option>
                                                        <option value="SH">Saint Helena</option>
                                                        <option value="KN">Saint Kitts and Nevis</option>
                                                        <option value="LC"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Saint Lucia</font></font></option>
                                                        <option value="SX"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Saint Martin (phần tiếng Hà Lan)</font></font></option>
                                                        <option value="MF"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Saint Martin (phần tiếng Pháp)</font></font></option>
                                                        <option value="PM"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Saint Pierre và Miquelon</font></font></option>
                                                        <option value="VC"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Saint Vincent và Grenadines</font></font></option>
                                                        <option value="SM"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">San Marino</font></font></option>
                                                        <option value="SA"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ả Rập Xê Út</font></font></option>
                                                        <option value="SN"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Senegal</font></font></option>
                                                        <option value="RS"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Serbia</font></font></option>
                                                        <option value="SC"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Seychelles</font></font></option>
                                                        <option value="SL"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sierra Leone</font></font></option>
                                                        <option value="SG"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Singapore</font></font></option>
                                                        <option value="SK"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Slovakia</font></font></option>
                                                        <option value="SI"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Slovenia</font></font></option>
                                                        <option value="SB"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quần đảo Solomon</font></font></option>
                                                        <option value="SO"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Somalia</font></font></option>
                                                        <option value="ZA"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nam Phi</font></font></option>
                                                        <option value="GS"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quần đảo Nam Georgia / Sandwich</font></font></option>
                                                        <option value="KR"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nam Triều Tiên</font></font></option>
                                                        <option value="SS"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">phía nam Sudan</font></font></option>
                                                        <option value="ES"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tây Ban Nha</font></font></option>
                                                        <option value="LK"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sri Lanka</font></font></option>
                                                        <option value="SD"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sudan</font></font></option>
                                                        <option value="SR"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Suriname</font></font></option>
                                                        <option value="SJ"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Svalbard và Jan Mayen</font></font></option>
                                                        <option value="SZ"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Swaziland</font></font></option>
                                                        <option value="SE"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thụy Điển</font></font></option>
                                                        <option value="CH"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thụy sĩ</font></font></option>
                                                        <option value="SY"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Syria</font></font></option>
                                                        <option value="TW"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đài Loan</font></font></option>
                                                        <option value="TJ"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tajikistan</font></font></option>
                                                        <option value="TZ"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tanzania</font></font></option>
                                                        <option value="TH"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nước Thái Lan</font></font></option>
                                                        <option value="TL"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đông Timor</font></font></option>
                                                        <option value="TG"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đi</font></font></option>
                                                        <option value="TK"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tokelau</font></font></option>
                                                        <option value="TO"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tonga</font></font></option>
                                                        <option value="TT"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trinidad và Tobago</font></font></option>
                                                        <option value="TN"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tunisia</font></font></option>
                                                        <option value="TR"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">gà tây</font></font></option>
                                                        <option value="TM"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Turkmenistan</font></font></option>
                                                        <option value="TC"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quần đảo Turks và Caicos</font></font></option>
                                                        <option value="TV"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tuvalu</font></font></option>
                                                        <option value="UG"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Uganda</font></font></option>
                                                        <option value="UA"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ukraine</font></font></option>
                                                        <option value="AE"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">các Tiểu Vương Quốc Ả Rập Thống Nhất</font></font></option>
                                                        <option selected="selected" value="GB"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Việt Nam</font></font></option>
                                                        <option value="US"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hoa Kỳ (Hoa Kỳ)</font></font></option>
                                                        <option value="UY"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Uruguay</font></font></option>
                                                        <option value="UZ"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Uzbekistan</font></font></option>
                                                        <option value="VU"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Vanuatu</font></font></option>
                                                        <option value="VA"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Vatican</font></font></option>
                                                        <option value="VE"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Venezuela</font></font></option>
                                                        <option value="VN"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Vương quốc Anh (Vương quốc Anh)</font></font></option>
                                                        <option value="WF"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Wallis và Futuna</font></font></option>
                                                        <option value="EH"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Phía tây Sahara</font></font></option>
                                                        <option value="WS"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tây Samoa</font></font></option>
                                                        <option value="YE"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Yemen</font></font></option>
                                                        <option value="ZM"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Zambia</font></font></option>
                                                        <option value="ZW"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Zimbabwe</font></font></option>
                                                    </select>
                                                </p>

                                                <p id="shipping_first_name_field" class="form-row form-row-first validate-required">
                                                    <label class="" for="shipping_first_name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên </font></font><abbr title="cần thiết" class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></abbr>
                                                    </label>
                                                    <input type="text" value="" placeholder="" id="shipping_first_name" name="shipping_first_name" class="input-text ">
                                                </p>

                                                <p id="shipping_last_name_field" class="form-row form-row-last validate-required">
                                                    <label class="" for="shipping_last_name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Họ </font></font><abbr title="cần thiết" class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></abbr>
                                                    </label>
                                                    <input type="text" value="" placeholder="" id="shipping_last_name" name="shipping_last_name" class="input-text ">
                                                </p>
                                                <div class="clear"></div>

                                                <p id="shipping_company_field" class="form-row form-row-wide">
                                                    <label class="" for="shipping_company"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên công ty</font></font></label>
                                                    <input type="text" value="" placeholder="" id="shipping_company" name="shipping_company" class="input-text ">
                                                </p>

                                                <p id="shipping_address_1_field" class="form-row form-row-wide address-field validate-required">
                                                    <label class="" for="shipping_address_1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Địa chỉ </font></font><abbr title="cần thiết" class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></abbr>
                                                    </label>
                                                    <input type="text" value="" placeholder="Địa chỉ" id="shipping_address_1" name="shipping_address_1" class="input-text ">
                                                </p>

                                                <p id="shipping_address_2_field" class="form-row form-row-wide address-field">
                                                    <input type="text" value="" placeholder="Căn hộ, số phòng, vv. (optional)" id="shipping_address_2" name="shipping_address_2" class="input-text ">
                                                </p>

                                                <p id="shipping_city_field" class="form-row form-row-wide address-field validate-required" data-o_class="form-row form-row-wide address-field validate-required">
                                                    <label class="" for="shipping_city"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thị trấn / Thành phố </font></font><abbr title="cần thiết" class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></abbr>
                                                    </label>
                                                    <input type="text" value="" placeholder="Thị trấn / Thành phố" id="shipping_city" name="shipping_city" class="input-text ">
                                                </p>

                                                <p id="shipping_state_field" class="form-row form-row-first address-field validate-state" data-o_class="form-row form-row-first address-field validate-state">
                                                    <label class="" for="shipping_state"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quận</font></font></label>
                                                    <input type="text" id="shipping_state" name="shipping_state" placeholder="Quận / Phường" value="" class="input-text ">
                                                </p>
                                                <p id="shipping_postcode_field" class="form-row form-row-last address-field validate-required validate-postcode" data-o_class="form-row form-row-last address-field validate-required validate-postcode">
                                                    <label class="" for="shipping_postcode"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mã bưu điện </font></font><abbr title="cần thiết" class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></abbr>
                                                    </label>
                                                    <input type="text" value="" placeholder="Mã bưu điện" id="shipping_postcode" name="shipping_postcode" class="input-text ">
                                                </p>

                                                <div class="clear"></div>


                                            </div>





                                            <p id="order_comments_field" class="form-row notes">
                                                <label class="" for="order_comments"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ghi chú đơn đặt hàng</font></font></label>
                                                <textarea cols="5" rows="2" placeholder="Lưu ý về đơn đặt hàng của bạn, ví dụ: ghi chú đặc biệt để giao hàng." id="order_comments" class="input-text " name="order_comments"></textarea>
                                            </p>


                                        </div>

                                    </div>

                                </div>

                                <h3 id="order_review_heading"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đơn hàng của bạn</font></font></h3>

                                <div id="order_review" style="position: relative;">
                                    <table class="shop_table">
                                        <thead>
                                            <tr>
                                                <th class="product-name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sản phẩm</font></font></th>
                                                <th class="product-total"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Toàn bộ</font></font></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="cart_item">
                                                <td class="product-name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                    Tàu ý tưởng của bạn </font></font><strong class="product-quantity"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">× 1</font></font></strong> </td>
                                                <td class="product-total">
                                                    <span class="amount"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">38.000 VND</font></font></span> </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>

                                            <tr class="cart-subtotal">
                                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tổng số giỏ hàng</font></font></th>
                                                <td><span class="amount"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">38.000 VND</font></font></span>
                                                </td>
                                            </tr>

                                            <tr class="shipping">
                                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Vận chuyển và xử lý</font></font></th>
                                                <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">

                                                    Miễn phí vận chuyển
                                                    </font></font><input type="hidden" class="shipping_method" value="free_shipping" id="shipping_method_0" data-index="0" name="shipping_method[0]">
                                                </td>
                                            </tr>


                                            <tr class="order-total">
                                                <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tổng số đơn đặt hàng</font></font></th>
                                                <td><strong><span class="amount"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">38.000 VND</font></font></span></strong> </td>
                                            </tr>

                                        </tfoot>
                                    </table>


                                    <div id="payment">
                                        <ul class="payment_methods methods">
                                            <li class="payment_method_bacs">
                                                <input type="radio" data-order_button_text="" checked="checked" value="bacs" name="payment_method" class="input-radio" id="payment_method_bacs">
                                                <label for="payment_method_bacs"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chuyển tiền trực tiếp qua ngân hàng </font></font></label>
                                                <div class="payment_box payment_method_bacs">
                                                    <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thực hiện thanh toán trực tiếp vào tài khoản ngân hàng của chúng tôi. </font><font style="vertical-align: inherit;">Vui lòng sử dụng ID đặt hàng của bạn làm tài liệu tham khảo thanh toán. </font><font style="vertical-align: inherit;">Đơn đặt hàng của bạn sẽ không được gửi cho đến khi tiền đã được xóa trong tài khoản của chúng tôi.</font></font></p>
                                                </div>
                                            </li>
                                            <li class="payment_method_cheque">
                                                <input type="radio" data-order_button_text="" value="cheque" name="payment_method" class="input-radio" id="payment_method_cheque">
                                                <label for="payment_method_cheque"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thanh toán séc </font></font></label>
                                                <div style="display:none;" class="payment_box payment_method_cheque">
                                                    <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                </div>
                                            </li>
                                            <li class="payment_method_paypal">
                                                <input type="radio" data-order_button_text="Proceed to PayPal" value="paypal" name="payment_method" class="input-radio" id="payment_method_paypal">
                                                <label for="payment_method_paypal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PayPal </font></font><img alt="Dấu chấp nhận PayPal" src="https://www.paypalobjects.com/webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png"><a title="PayPal là gì?" onclick="javascript:window.open('https://www.paypal.com/gb/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;" class="about_paypal" href="https://www.paypal.com/gb/webapps/mpp/paypal-popup"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">là gì?</font></font></a>
                                                </label>
                                                <div style="display:none;" class="payment_box payment_method_paypal">
                                                    <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                                </div>
                                            </li>
                                        </ul>

                                        <div class="form-row place-order">

                                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="submit" data-value="Place order" value="Đặt hàng" id="place_order" name="woocommerce_checkout_place_order" class="button alt"></font></font>


                                        </div>

                                        <div class="clear"></div>

                                    </div>
                                </div>
                            </form>

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
         function fnLaunch(ma)
         { 
            var urls="single-product.html?id="+ma;
            var win=window.open(urls, "_self");
            window.focus();

       }
   </script>
  </body>
</html>