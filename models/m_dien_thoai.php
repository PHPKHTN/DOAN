<?php 
	require_once("database.php");
	/**
	* 
	*/
	class M_dien_thoai extends database
	{
		
		public function Doc_dien_thoai($vt=-1, $limit=-1)
		{
			$sql="SELECT s.*, h.* FROM san_pham s, hinh_san_pham h, loai_san_pham l WHERE s.ma_san_pham = h.ma_san_pham AND s.ma_the_loai = l.ma_the_loai AND l.ma_the_loai = 1 and h.thumbnail = 1";
			if($vt>=0 && $limit>0)
            {
                $sql .= " limit $vt, $limit";
            }
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
		public function Doc_dien_thoai_theo_hang($vt=-1, $limit=-1, $ma_hang_san_xuat)
		{
			$sql="SELECT s.*, h.* FROM san_pham s, hinh_san_pham h, loai_san_pham l WHERE s.ma_san_pham = h.ma_san_pham AND s.ma_the_loai = l.ma_the_loai AND l.ma_the_loai = 1 and h.thumbnail = 1 and s.ma_hang_san_xuat =?";
			if($vt>=0 && $limit>0)
            {
                $sql .= " limit $vt, $limit";
            }
			$this->setQuery($sql);
			return $this->loadAllRows(array($ma_hang_san_xuat));
		}
		public function Doc_danh_sach_nha_san_xuat()
		{
			$sql="select * from hang_san_xuat";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}

		public function Doc_dien_thoai_theo_ma_san_pham($ma_san_pham)
		{
			$sql="SELECT s.*, h.* FROM san_pham s, hinh_san_pham h WHERE s.ma_san_pham = h.ma_san_pham and h.thumbnail = 1 and s.ma_san_pham =?";
			$this->setQuery($sql);
			return $this->loadRow(array($ma_san_pham));
		}
	}
?>