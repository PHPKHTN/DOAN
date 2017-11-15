<?php
	include_once("database.php");
	class M_hang_san_xuat extends database
	{
		public function Doc_hang_san_xuat()
		{
			$sql = "select * from hang_san_xuat";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
		
		public function Doc_hang_san_xuat_theo_ma_hang($ma_hang)
		{
			$sql = "select * from hang_san_xuat where ma_hang_san_xuat = ?";
			$this->setQuery($sql);
			return $this->loadRow(array($ma_hang));
		}
		
	}
?>