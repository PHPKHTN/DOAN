<?php 
	require_once("database.php");
	/**
	* 
	*/
	class M_san_pham extends database
	{
		
		public function Doc_san_pham()
		{
			$sql="SELECT * FROM san_pham";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
	}
?>