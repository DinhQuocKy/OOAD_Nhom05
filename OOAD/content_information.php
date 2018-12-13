<?php
include_once 'dbconnect.php';

class ContentSelectAll extends Connection{
	public function execute($tableName){
		return $this->query("SELECT * FROM $tableName");
	}
	public function executeCondition($tableName,$condition){
		return $this->query("SELECT * FROM $tableName WHERE $condition");
	}
	public function execute4Table($tableName1,$tableName2,$tableName3,$tableName4,$giatri,$condition,$arr){
		return $this->query("SELECT $giatri FROM $tableName1 as A join $tableName2 as B join $tableName3 as C join $tableName4 as D ON $condition");
	}

	
}

class ContentList extends ContentSelectAll
{
	public $result;
	
	function executeCondition($tableName,$condition){
		$html  = "";
		
		$this->result= parent::executeCondition($tableName,$condition);
		$columncount = $this->result->columnCount();
		foreach ($this->result as $array) {	
			for ($i=0; $i <$columncount ; $i++) { 
				$meta = $this->result->getColumnMeta($i);
				$html .= '<div class="form-group">';
				$html .= '<div class="col-xs-6">';
				$html .= '<label for="email"><h4>'.$meta['name'].'</h4></label>';
				
				$metaName = $meta["name"];
				if(isset($_POST["$metaName"])){
					$value = $_POST["$metaName"];
				}
				else $value =$array[$i];


				$html .= '<input type="text" class="form-control" id="'.$meta['name'].'" placeholder="not NULL" title="change to update" name="'.$meta['name'].'" value="'.$value.'">';
				$html .='</div></div>';
					
			}
			break;
		}
		return $html;
	}

	// join 2 table;

	function createFooter()
	{
		$html = "";
			$html .= "</tbody>";
		$html .= "</table>";
		return $html;
	}
	function createHeader($arr)
	{
		$html = "";
		$html .= "<table class=\"table table-advance\" id=\"table1\">";
            $html .= "<thead>";
				$html .= "<tr>";		
				if ($this->result != ""){
					$columncount = $this->result->columnCount();
					for ($i = 0; $i < $columncount; $i++){
						//$meta = $this->result->getColumnMeta($i);
						$html .= "<th>".$arr[$i]."</th>";
					}
				}
				$html .= "</tr>";
			$html .= "</thead>";
		$html .= "<tbody>";
		return $html;
	}

	function execute4Table($tableName1,$tableName2,$tableName3,$tableName4,$giatri,$condition,$arr){
		$html = "";
		$this->result = parent::execute4Table($tableName1,$tableName2,$tableName3,$tableName4,$giatri,$condition,$arr);

		$columncount = $this->result->columnCount();
		
		$html .= $this->createHeader($arr);
		foreach($this->result as $array)
		{	
			$html .= "<tr>";
			for ($i=0 ; $i<$columncount ; $i++){
				$html .= "<td>".$array[$i]."</td>";
			}
			$html .= "</tr>";
		}
		$html .= $this->createFooter();
		return $html;
	}
}

$content = new ContentList();


?>