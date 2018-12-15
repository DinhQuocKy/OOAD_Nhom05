<?php 
	include_once "dbconnect.php";
	include_once "content_product.php";
	//$page=$_POST['idPage'] - 1;
	$tenSach = mb_strtoupper($_POST['tenSach']);
	$cn=$_POST['cn'];
	$result=new Connection();
	$db=$result->query("select s.ID_Sach,s.TenSach,s.Gia,s.hinhAnh,sl.ID_ChiNhanh from sl_sach sl join sach s on sl.ID_Sach=s.ID_Sach where sl.ID_ChiNhanh='$cn' and sl.SL_Ton>0 and upper(s.TenSach) like N'%$tenSach%'");
	$html="";
	$html.=showContent($db);
	echo $html;
 ?>