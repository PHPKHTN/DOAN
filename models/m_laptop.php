<?php 
	require_once("database.php");
	/**
	* 
	*/
	class M_laptop extends database
	{
		
		public function Doc_ds_laptop()
		{
			$sql="SELECT * FROM san_pham";
			$this->setQuery($sql);
			$asd=$this->loadAllRows();
			print_r(count($asd));	
		}
	}
?>