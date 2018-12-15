<?php
	include_once "dbconnect.php";
	$id_DocGia=$_POST['id_DocGia'];
	$result=new Connection();
	$db=$result->query("select * from phieumuon pm join chitietphieumuon ct on pm.ID_PhieuMuon=ct.ID_PhieuMuon where pm.TinhTrang<>'Đã trả' and pm.ID_DocGia='$id_DocGia'");
	$count=0;
	foreach ($db as $arr) {
		//echo $arr[11];
		$count+=$arr[11];
	}
	echo $count;
?>
