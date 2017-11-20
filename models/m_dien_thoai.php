<?php 
	require_once("database.php");
	/**
	* 
	*/
	class M_dien_thoai extends database
	{
		
		public function Doc_ds_dien_thoai()
		{
			$sql="SELECT * FROM san_pham";
			$this->setQuery($sql);
			$asd=$this->loadAllRows();
			print_r(count($asd));	
		}
	}
?>