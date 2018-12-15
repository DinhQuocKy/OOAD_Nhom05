 <?php 

   $html="";
    $_SESSION['URL']=$_SERVER['REQUEST_URI'];

   if(!isset($_SESSION['ID'])){
      $html.='<li>
         <a  href="Login/login.php">
            <i class="fa fa-user"></i>
            <span style="vertical-align: inherit;"><!-- <font style="vertical-align: inherit;"> --> Đăng nhập</span><!-- </font> -->
         </a>
      </li>';
   }
   if (isset($_SESSION['ID'])){
      $html.='<li>
         <a id="log_out" href="">
            <i class="fa fa-user"></i>
            <span style="vertical-align: inherit;"><!-- <font style="vertical-align: inherit;"> --> Đăng xuất</span><!-- </font> -->
         </a>
      </li>';
   }

   echo $html;

?>