<?php
	include_once "dbconnect.php";
	$data=$_POST['data'];
	$data=json_decode($data,true);
	foreach ($data as $value) {
		$id_sach=$value['id'];
		$id_cn=$value['cn'];
		$soluong=$value['soluong'];
		$result=new Connection();
		$db=$result->query("update sl_sach set SL_Ton=SL_Ton-$soluong where ID_ChiNhanh='$id_cn' and ID_Sach='$id_sach'");
	}
	if ($db){
		echo "1";
	}
	else echo "0";
?>