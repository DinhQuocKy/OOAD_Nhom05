<?php
class Connection{
	public $conn;
	public function __construct(){
		$user="root";
		$pass="";
		$database="qlthuvien";
		$hostname="localhost";
		try{
			$this->conn=new PDO("mysql:host=$hostname;dbname=$database;charset=utf8",$user,$pass);
		}catch(PDOException $e){
			print "Error: ".$e->getMessage()."<br>";
			die();
		}
	}
	public function query($sql){
		return $this->conn->query($sql);
	}
}
?>