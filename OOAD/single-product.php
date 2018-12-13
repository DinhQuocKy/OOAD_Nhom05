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
    <title>Product Page - Ustora Demo</title>
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
    <style type="text/css">

    .comment-wrapper .panel-body {
        max-height:650px;
        overflow:auto;
    }

    .comment-wrapper .media-list .media img {
        width:64px;
        height:64px;
        border:2px solid #e5e7e8;
    }

    .comment-wrapper .media-list .media {
        border-bottom:1px dashed #efefef;
        margin-bottom:25px;
    }
    .panel{
        border: none;
    }

</style>


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
                            <?php include_once 'checkAccount.php'; ?>
                            <li><a href="#"><i class="fa fa-heart"></i> Danh sách yêu thích</a></li>
                            <li><a href="cart.html"><i class="fa fa-user"></i> Giỏ hàng của tôi</a></li>
                            <li><a href="checkout.html"><i class="fa fa-user"></i> Kiểm tra</a></li>
                            <?php include_once 'includes/login_logout.php'; ?>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">Tiền tệ :</span><span class="value">VND </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">VND</a></li>
                                    <li><a href="#">USD</a></li>
                                </ul>
                            </li>

                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">Ngôn ngữ :</span><span class="value">Tiếng Việt </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Tiếng Việt</a></li>
                                    <li><a href="#">Tiếng Anh</a></li>
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
                        <h1><a href="./"><img src="img/logo.png" height="150px" width="150px"></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="cart.php">Giỏ Hàng - <span class="cart-amunt">VND</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">1</span></a>
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
                        <li class="active"><a href="single-product.php">CHI TIẾT SẢN PHẨM</a></li>
                        <li><a href="cart.php">GIỎ HÀNG</a></li>
                         <li><a href="information.php">THÔNG TIN</a></li>
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
                        <h2>Chi Tiết Sản Phẩm</h2>
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
                            <h2><p onclick="fnLaunch('006');" style="cursor: pointer;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Luyện Siêu Trí Từ Vựng Tiếng Anh</font></font></a></h2>
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
                        <div class="product-breadcroumb">
                            <a href="">Trang chủ</a>
                            <a href="">Tên danh mục</a>
                            <a href="" id="link"></a>
                        </div>
                        <?php
                            include_once "dbconnect.php";
                            $id=$_GET['id'];
                            $cn=$_GET['cn'];
                            $result = new Connection();
                            $db = $result->query("Select s.*,sl.SL_Ton from sach s join sl_sach sl on s.ID_Sach=sl.ID_Sach where sl.ID_ChiNhanh='$cn' and s.ID_Sach='$id'");
                            if ($db->columnCount()>0){
                                foreach ($db as $arr) {
                                    $id=$arr[0];
                                    $name=$arr[3];
                                    $price=$arr[4];
                                    $author=$arr[5];
                                    $image=$arr[7];
                                    $content=$arr[6];
                                    $slTon=$arr[9];
                                    echo "<div class='row'>
                                            <div class='col-sm-12'>
                                                <div class='product-images'>
                                                    <div class='product-main-img'>
                                                    <img src='$image' alt='' id='mage' style='float: left;width: 250px;''>
                                                    <h2 class='product-name' id='name'>$name</h2>
                                                    <div class='product-inner-price'>
                                                        <ins>$price <u id='price'>đ</u></ins>
                                                        <font>Số lượng tồn kho: $slTon</font>
                                                    </div>
                                                     <form action='' class='cart'>
                                            <div class='quantity'>
                                                <input id='amount' type='number' size='4' class='input-text qty text' title='Qty' value='1' name='quantity' min='1' step='1'>
                                            </div>
                                        </form>   
                                            <button class='add_to_cart_button' type='submit' onclick='addCart(\"$id\",\"$name\",false,\"$cn\",\"$image\")'>THÊM VÀO GIỎ</button>

                                        <div class='product-inner-category'>
                                            <p>Tác giả: <a href='' id='author'>$author</a></p>
                                        </div>
                                    </div>
                                    </div>

                            </div>
                        </div>";
                                }
                            }
                        ?>
                        <!-- <div class="row">
                            <div class="col-sm-12">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <img src="" alt="" id="image" style="float: left;width: 250px;">
                                        <h2 class="product-name" id="name"></h2>
                                        <div class="product-inner-price">
                                            <ins> <u id="priceAfter"></u></ins> <del><u id="priceBefore"></u></del>
                                        </div>    

                                        <form action="" class="cart">
                                            <div class="quantity">
                                                <input id="amount" type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                            </div>
                                        </form>   
                                            <button class="add_to_cart_button" type="submit" onclick="addCart();">THÊM VÀO GIỎ</button>

                                        <div class="product-inner-category">
                                            <p>Tác giả: <a href="" id="author"></a></p>
                                        </div>
                                    </div>
                                    
                                </div>

                            </div>
                        </div> -->

                        <div class="col-sm-12">
                            <div class="product-inner"> 

                                <div role="tabpanel">
                                    <ul class="product-tab" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Mô tả</a></li>
                                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Đánh giá</a></li>
                                        <li role="presentation"><a href="#comment" aria-controls="comment" role="tab" data-toggle="tab">Bình luận</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                                            <h2>Giới thiệu tác phẩm</h2>  
                                            <p id="content"><!-- 5cm/s không chỉ là vận tốc của những cánh anh đào rơi, mà còn là vận tốc khi chúng ta lặng lẽ bước qua đời nhau, đánh mất bao cảm xúc thiết tha nhất của tình yêu.<br>
                                                Bằng giọng văn tinh tế, truyền cảm, 5 centimet trên giây mang đến những khắc họa mới về tâm hồn và khả năng tồn tại của cảm xúc, bắt đầu từ tình yêu trong sáng, ngọt ngào của một cô bé và cậu bé. Ba giai đoạn, ba mảnh ghép, ba ngôi kể chuyện khác nhau nhưng đều xoay quanh nhân vật nam chính, người luôn bị ám ảnh bởi kí ức và những điều đã qua…<br>
                                                Khác với những câu chuyện cuốn bạn chạy một mạch, truyện này khó mà đọc nhanh. Ngón tay bạn hẳn sẽ ngừng lại cả trăm lần trên mỗi trang sách. Chỉ vì một cử động rất khẽ, một câu thoại, hay một xúc cảm bất chợt có thể sẽ đánh thức những điều tưởng chừng đã ngủ quên trong tiềm thức, như ngọn đèn vừa được bật sáng trong tâm trí bạn. Và rồi có lúc nó vượt quá giới hạn chịu đựng, bạn quyết định gấp cuốn sách lại chỉ để tận hưởng chút ánh sáng từ ngọn đèn, hay đơn giản là để vết thương trong lòng mình có thời gian tự tìm xoa dịu.<br> -->
                                                <?php
                                                echo $content;
                                                ?>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="profile">
                                            <h2>Đánh giá</h2>
                                            <div class="submit-review">
                                                <p><label for="name">Tên</label> <input name="name" type="text"></p>
                                                <p><label for="email">Email</label> <input name="email" type="email"></p>
                                                <div class="rating-chooser">
                                                    <p>Đánh giá</p>

                                                    <div class="rating-wrap-post">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <p><label for="review">Đánh giá của bạn</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                                <p><input type="submit" value="Gửi"></p>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="comment">
                                           <div class="row bootstrap snippets">
                                            <div class="">
                                                <div class="comment-wrapper">
                                                    <div class="panel panel-info">
                                                        <div class="panel-body">
                                                            <ul class="media-list">
                                                                <li class="media">
                                                                    <a href="#" class="pull-left">
                                                                        <img src="https://bootdey.com/img/Content/user_1.jpg" alt="" class="img-circle">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <span class="text-muted pull-right">
                                                                            <small class="text-muted">30 min ago</small>
                                                                        </span>
                                                                        <strong class="text-success">Thành Trọng</strong>
                                                                        <p>
                                                                             Sách đọc rất hay, vô cùng cảm súc<a href="#">#tuyệtvời </a>.
                                                                        </p>
                                                                    </div>
                                                                </li>
                                                                <li class="media">
                                                                    <a href="#" class="pull-left">
                                                                        <img src="https://bootdey.com/img/Content/user_2.jpg" alt="" class="img-circle">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <span class="text-muted pull-right">
                                                                            <small class="text-muted">1 ngày trước</small>
                                                                        </span>
                                                                        <strong class="text-success">Minh Mít Ướt</strong>
                                                                        <p>
                                                                            Đọc xong chỉ muốn khóc....huhu <a href="#">#SiêuPhẩm </a>
                                                                        </p>
                                                                    </div>
                                                                </li>
                                                                <li class="media">
                                                                    <a href="#" class="pull-left">
                                                                        <img src="https://bootdey.com/img/Content/user_3.jpg" alt="" class="img-circle">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <span class="text-muted pull-right">
                                                                            <small class="text-muted">2 tuần trước</small>
                                                                        </span>
                                                                        <strong class="text-success">Kỳ Khó Khăn</strong>
                                                                        <p>
                                                                            Sách khá hay, không đọc cũng tiếc,đọc qua cũng tiếc :D<a href="#">#hay</a>
                                                                        </p>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="related-products-wrapper">
                        <h2 class="related-products-title">SẢN PHẨM LIÊN QUAN</h2>
                        <div class="related-products-carousel">
                            <div class="single-product">
                           <div class="product-f-image">
                              <img src="./images/toi_thay_hoa_vang.jpg" alt="">
                              <div class="product-hover">
                                 <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a>
                                 <a href="single-product.html?id=005" class="view-details-link"><i class="fa fa-link"></i> Xem chi tiết</a>
                              </div>
                           </div>
                           <h2><p onclick="fnLaunch('005');" style="cursor: pointer;">Tôi Thấy Hoa Vàng Trên Cỏ Xanh</p></h2>
                           <div class="product-carousel-price">
                              <ins>60.500 <u>đ</u></ins> <del>82.000 <u>đ</u></del>
                           </div>
                           <div class="product-wid-rating">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                           </div>
                        </div>
                            <div class="single-product">
                           <div class="product-f-image">
                              <img src="./images/luyen-sieu-tri-nho.jpg" alt="">
                              <div class="product-hover">
                                 <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a>
                                 <a href="single-product.html?id=006" class="view-details-link"><i class="fa fa-link"></i> Xem chi tiết</a>
                              </div>
                           </div>
                           <h2><p onclick="fnLaunch('006');" style="cursor: pointer;">Luyện Siêu Trí Nhớ Trí Nhớ Từ Vựng Tiếng Anh</a></h2>
                           <div class="product-carousel-price">
                              <ins>94.000 <u>đ</u></ins> <del>188.000 <u>đ</u></del>
                           </div>
                           <div class="product-wid-rating">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                           </div>
                        </div>
                           <div class="single-product">
                           <div class="product-f-image">
                              <img src="./images/CongPhaToan2.jpg" alt="">
                              <div class="product-hover">
                                 <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a>
                                 <a href="single-product.html?id=007" class="view-details-link"><i class="fa fa-link"></i> Xem chi tiết</a>
                              </div>
                           </div>
                           <h2><p onclick="fnLaunch('007');" style="cursor: pointer;">Công Phá Toán 2</p></h2>
                           <div class="product-carousel-price">
                              <ins>139.000 <u>đ</u></ins> <del>179.000 <u>đ</u></del>
                           </div>
                           <div class="product-wid-rating">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                           </div>
                        </div>
                         <div class="single-product">
                           <div class="product-f-image">
                              <img src="./images/doi-ngan-dung-ngu-dai.jpg" alt="">
                              <div class="product-hover">
                                 <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a>
                                 <a href="single-product.html?id=008" class="view-details-link"><i class="fa fa-link"></i> Xem chi tiết</a>
                              </div>
                           </div>
                           <h2><p onclick="fnLaunch('008');" style="cursor: pointer;">Đời Ngắn Đừng Ngủ Dài</p></h2>
                           <div class="product-carousel-price">
                              <ins>47.400 <u>đ</u></ins> <del>60.000 <u>đ</u></del>
                           </div>
                           <div class="product-wid-rating">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                           </div>
                        </div>
                         <div class="single-product">
                           <div class="product-f-image">
                              <img src="./images/minh-la-ca-viec-cua-minh-la-boi.jpg" alt="">
                              <div class="product-hover">
                                 <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a>
                                 <a href="single-product.html?id=009" class="view-details-link"><i class="fa fa-link"></i> Xem chi tiết</a>
                              </div>
                           </div>
                           <h2><p onclick="fnLaunch('009');" style="cursor: pointer;">Mình Là Cá, Việc Của Mình Là Bơi</p></h2>
                           <div class="product-carousel-price">
                              <ins>53.400 <u>đ</u></ins> <del>89.000 <u>đ</u></del>
                           </div>
                           <div class="product-wid-rating">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                           </div>
                        </div>
                         <div class="single-product">
                           <div class="product-f-image">
                              <img src="./images/tony-buoi-sang.jpg" alt="">
                              <div class="product-hover">
                                 <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a>
                                 <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> Xem chi tiết</a>
                              </div>
                           </div>
                           <h2><a href="single-product.html">Tony Buổi Sáng - Trên Đường Băng</a></h2>
                           <div class="product-carousel-price">
                              <ins>58.900 <u>đ</u></ins> <del>80.000 <u>đ</u></del>
                           </div>
                           <div class="product-wid-rating">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                           </div>
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


<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- <script>window.jQuery || document.write('<script src="assets/jquery/jquery-2.1.1.min.js"><\/script>')</script>
 -->
 <script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/jquery-cookie/jquery.cookie.js"></script>




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
