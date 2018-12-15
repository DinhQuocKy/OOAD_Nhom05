<?php
	include_once "dbconnect.php";
	$id=$_POST['id'];
	$result=new Connection();
	$db=$result->query("SELECT * FROM xulivipham where NgayKT>now() and ID_DocGia='$id'");
	$check="1";
	foreach ($db as $arr) {
		$check="0";
		break;
	}
	echo $check;
?>