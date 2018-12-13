<?php
	include_once "dbconnect.php";
	$id=$_POST['id'];
	$result=new Connection();
	$db=$result->query("SELECT ChucVu FROM nguoidung where id='$id'");
	$chucVu="";
	foreach ($db as $arr) {
		$chucVu=$arr[0];
		break;
	}
	echo $chucVu;
?>