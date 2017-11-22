<?php 
	require_once("database.php");
	/**
	* 
	*/
	class M_index extends database
	{
		
		public function Doc_lien_he()
		{
			$sql="SELECT * FROM san_pham";
			$this->setQuery($sql);
			$asd=$this->loadAllRows();
			print_r(count($asd));	
		}
	}
?>