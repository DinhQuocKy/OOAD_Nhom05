<?php
	include_once "dbconnect.php";
	$res=new Connection();
	$db=$res->query("select ID_ChiNhanh,TenCN from chinhanh");
	$html="";
	$column_count=$db->columnCount();
	if ($column_count>0){
		foreach ($db as $arr){
			$html.="<option value='$arr[0]'>$arr[1]</option>";
		}
	}
	echo $html;
?>