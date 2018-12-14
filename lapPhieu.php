<?php
	include_once "dbconnect.php";
	$result=new Connection();
	$id=$_POST['id'];
	$cn=$_POST['cn'];
	$chucVu=$_POST['chucVu'];
	$ngay=0;//Số ngày được mượn
	if ($chucVu=='SV'||$chucVu=='DGK') $ngay=7;
	if ($chucVu=='GV') $ngay=365;
	$db=$result->query("Insert into phieumuon value('$id',null,'$cn','QT002','Chưa mượn',now(),'',DATE_ADD(now(), INTERVAL $ngay DAY),'')");
	echo $result->conn->lastInsertId();
?>