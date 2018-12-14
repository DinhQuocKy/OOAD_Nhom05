<?php
	include "dbconnect.php";
	$data=$_POST['data'];
	$id_PhieuMuon=$_POST['id_phieu'];
	// echo "<script>alert($data)</script>";
	$data=json_decode($data,true);
	foreach ($data as $value) {
		$id_sach=$value['id'];
		$soluong=$value['soluong'];
		$result=new Connection();
		$db=$result->query("Insert into chitietphieumuon values($id_PhieuMuon, '$id_sach',$soluong)");
	}
	if ($db){
		echo "success";
	}
	else echo "fail";
?>