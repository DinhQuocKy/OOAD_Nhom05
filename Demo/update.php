<?php
include_once "dbconnect.php";

class Update extends Connection{
    private $itemID="";
    private $tableName="";
    private $columnTitle;

    function __construct($name,$itemid){
        parent::__construct();
        $this->tableName = $name;
        $this->itemID = $itemid;

       $query = "select * from ".$this->tableName." limit 0";
        $result = $this->query($query);
        
        $columncount = $result->columnCount();
        for ($i = 1; $i < $columncount ; $i++){
            $meta=$result->getColumnMeta($i);
            $this->columnTitle[$i]=$meta['name'];
        }             
    }

    public function execute(){
        if (isset($_POST['update'])){
            $datastorage;
            foreach($this->columnTitle as $title){
                $datastorage[$title] = $_POST[$title];
            }
            $setvalues = "";
            foreach ($datastorage as $keys => $values){
               $setvalues .= $keys."='".$values."',";
            }
            $setvalues = rtrim($setvalues,","); 
                            
            $query = "update ".$this->tableName." set ".$setvalues." where ID=\"".$this->itemID.'"';
            // echo $query;
            $this->query($query);
        }
       
    }
    
}
?>