<?php
                     include_once "dbconnect.php";
                     // $id=
                     // include_once "pageBar.php";
                     // if(isset($_GET['id'])){

                     // }
                     // else{

                     // }
                     // $page=$_POST['page'] - 1;
                     // $cn=$_POST['cn'];
                     // $index=$page * 12;
                     // $result=new Connection();
                     // $db=$result->query("select s.ID_Sach,s.TenSach,s.Gia,s.hinhAnh,sl.ID_ChiNhanh from sl_sach sl join sach s on sl.ID_Sach=s.ID_Sach where sl.ID_ChiNhanh='$cn' and sl.SL_Ton>0 ORDER by ID_Sach DESC limit $index, 12");
                     // $html="";
                     // $cnt=0;
                     function showContent($db){
                      $cnt=0;
                      $html="";
                      foreach ($db as $arr) {
                        if ($cnt==0) $html.="<div class='col-md-12'>";
                        $html.="<div class='col-md-3 col-sm-6'>
                                   <div class='owl-item active' style='width: 212px; margin-right: 20px;'>
                                       <div class='single-product'>
                                        <div class='product-f-image'>
                                           <img src='$arr[3]' alt=''>
                                            <div class='product-hover'>
                                               <a style='cursor:pointer' class='add-to-cart-link' onclick='addCart(\"$arr[0]\",\"$arr[1]\",true,\"$arr[4]\",\"$arr[3]\")'><i class='fa fa-shopping-cart'></i> Thêm vào giỏ</a>
                                               <a href='single-product.php?id=$arr[0]&cn=$arr[4]' class='view-details-link' ><i class='fa fa-link'></i> Xem chi tiết</a>
                                            </div>
                                         </div>
                                         <h2><p onclick='fnLaunch(\"$arr[0]\")'; style='cursor: pointer;'>$arr[1]</p></h2>
                                       <div class='product-carousel-price'>
                                             <ins>$arr[2]<u>đ</u></ins> 
                                       </div>
                                       <div class='product-wid-rating'>
                                          <i class='fa fa-star'></i>
                                          <i class='fa fa-star'></i>
                                          <i class='fa fa-star'></i>
                                          <i class='fa fa-star'></i>
                                          <i class='fa fa-star'></i>
                                       </div>
                                    </div>
                                 </div>
                              </div>";
                            $cnt++;
                              if ($cnt==4) {$html.= "</div>";$cnt=0;}
                      }
                     
                     echo $html;
                     }
                      
                  ?>