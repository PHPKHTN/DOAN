<?php 
	require_once("database.php");
	/**
	* 
	*/
	class M_phu_kien extends database
	{
		
		public function Doc_ds_phu_kien()
		{
			$sql="SELECT * FROM san_pham";
			$this->setQuery($sql);
			$asd=$this->loadAllRows();
			print_r(count($asd));	
		}
	}
?>