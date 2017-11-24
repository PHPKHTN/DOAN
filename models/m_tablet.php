<?php 
	require_once("database.php");
	/**
	* 
	*/
	class M_tablet extends database
	{
		public function lay_tablet_cho_gio_hang($chuoi)
		{
			$sql = "SELECT s.*, h.* FROM san_pham s, hinh_san_pham h, loai_san_pham l WHERE s.ma_san_pham = h.ma_san_pham AND s.ma_the_loai = l.ma_the_loai AND l.ma_the_loai = 2 and h.thumbnail = 1 and ma_san_pham in ($chuoi)";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
		
		public function Doc_tablet($vt=-1, $limit=-1)
		{
			$sql="SELECT s.*, h.* FROM san_pham s, hinh_san_pham h, loai_san_pham l WHERE s.ma_san_pham = h.ma_san_pham AND s.ma_the_loai = l.ma_the_loai AND l.ma_the_loai = 2";
			if($vt>=0 && $limit>0)
            {
                $sql .= " limit $vt, $limit";
            }
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
	}
?>