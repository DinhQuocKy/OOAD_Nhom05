<?php
                              include "dbconnect.php";
                              $cn=$_POST['cn'];
                              // $page=$_POST['page'];
                              $html="";
                              $html.= "<li>
                                       <a style='cursor:pointer' class='page' id='1' aria-label='Previous'>
                                          <span aria-hidden='true'>«</span>
                                       </a>
                                    </li>";
                              $total_item;
                              $result=new Connection();
                              $db=$result->query("select count(*) from sl_sach sl join sach s on sl.ID_Sach=s.ID_Sach where sl.ID_ChiNhanh='$cn' and sl.SL_Ton>0");
                              foreach ($db as $arr){
                                 $total_item=$arr[0];
                                 break;
                              }
                              $n=(int)($total_item/12);
                                 if ($total_item%12!=0) $n+=1;
                                 for ($i=1;$i<=$n;++$i){
                                    // if ($page==$i) $html.="<li class='active'><a style='cursor:pointer' onclick='change($i)'>$i</a></li>";
                                     $html.= "<li><a style='cursor:pointer' class='page' id='$i'>$i</a></li>";
                                 }
                                 $html.= "<li>
                                          <a style='cursor:pointer' class='page' id='$n' aria-label='Next'>
                                          <span aria-hidden='true'>»</span>
                                          </a>
                                       </li>";
                                 echo $html;
                              ?> 
                              