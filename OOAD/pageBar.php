<?php
                              include "dbconnect.php";
                              $html="";
                              $html.= "<li>
                                       <a href='shop.php?page=1' aria-label='Previous'>
                                          <span aria-hidden='true'>«</span>
                                       </a>
                                    </li>";
                              $total_item;
                              $result=new Connection();
                              $db=$result->query("select count(*) from sach");
                              $column_count=$db->columnCount();
                              
                              if ($column_count>0){
                                 foreach ($db as $arr){
                                    $total_item=$arr[0];
                                    break;
                                 }
                              }
                              $n=(int)($total_item/12);
                                 if ($total_item%12!=0) $n+=1;
                                 for ($i=1;$i<=$n;++$i){
                                    $html.= "<li><a href='shop.php?page=$i'>$i</a></li>";
                                 }
                                 $html.= "<li>
                                          <a href='shop.php?page=$n' aria-label='Next'>
                                          <span aria-hidden='true'>»</span>
                                          </a>
                                       </li>";
                                 echo $html;
                              ?> 
                              