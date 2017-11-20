<?php 
	require_once("database.php");
	/**
	* 
	*/
	class M_tin_tuc extends database
	{
		
		public function Doc_ds_tin_tuc()
		{
			$sql="SELECT * FROM san_pham";
			$this->setQuery($sql);
			$asd=$this->loadAllRows();
			print_r(count($asd));	
		}
	}
?>