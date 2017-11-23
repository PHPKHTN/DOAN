<?php 
	require_once("database.php");
	/**
	* 
	*/
	class M_tin_tuc extends database
	{
		
		public function Doc_tin_tuc($vt=-1, $limit=-1)
		{
			$sql="SELECT * FROM tin_tuc";
			if($vt>=0 && $limit>0)
            {
                $sql .= " limit $vt, $limit";
            }
			$this->setQuery($sql);
			return $this->loadAllRows();
		}

		public function Doc_tin_tuc_theo_ma_tin_tuc($ma_tin)
		{
			$sql = "select * from tin_tuc where ma_tin=?";
			$this->setQuery($sql);
			return $this->loadRow(array($ma_tin));
		}

		public function Doc_san_pham()
		{
			$sql = "SELECT s.*, h.* FROM san_pham s, hinh_san_pham h WHERE s.ma_san_pham = h.ma_san_pham and h.thumbnail = 1 ORDER BY rand() LIMIT 5";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
	}
?>