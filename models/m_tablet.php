<?php 
	require_once("database.php");
	/**
	* 
	*/
	class M_tablet extends database
	{
		
		public function Doc_ds_tablet()
		{
			$sql="SELECT * FROM san_pham";
			$this->setQuery($sql);
			$asd=$this->loadAllRows();
			print_r(count($asd));	
		}
	}
?>