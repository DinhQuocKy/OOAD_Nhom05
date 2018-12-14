<?php
	include_once "dbconnect.php";
	$name=strtoupper($_POST['name']);
	$result=new Connection();

	$db=$result->query("Select ID_Sach,TenSach from sach where upper(TenSach) like '$name%' order by ID_Sach desc");
	if ($db->columnCount()>0){
		foreach ($db as $arr) {
			$name=mb_strtoupper($arr[1]);
            $id=$arr[0];
            echo "<a href='single-product.php?id=$id'>$name</a>";
		}
	}
?>