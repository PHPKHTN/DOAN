<?php 
	require_once("database.php");
	/**
	* 
	*/
	class M_index extends database
	{
		
		public function Doc_loai_san_pham()
		{
			$sql="SELECT * FROM loai_san_pham";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
		public function Doc_san_pham_theo_ma_loai($vt=-1, $limit=-1,$ma_loai)
		{
			if ($ma_loai==1) {
				$sql="SELECT s.*, h.* FROM san_pham s, hinh_san_pham h, loai_san_pham l WHERE s.ma_san_pham = h.ma_san_pham AND s.ma_the_loai = l.ma_the_loai AND l.ma_the_loai = ? and h.thumbnail = 1";
			}
			else
			{
				$sql="SELECT s.*, h.* FROM san_pham s, hinh_san_pham h, loai_san_pham l WHERE s.ma_san_pham = h.ma_san_pham AND s.ma_the_loai = l.ma_the_loai AND l.ma_the_loai = ?";
			}
			if($vt>=0 && $limit>0)
            {
                $sql .= " limit $vt, $limit";
            }
			$this->setQuery($sql);
			return $this->loadAllRows(array($ma_loai));
		}
		public function Doc_ten_loai($ma_loai)
		{
			$sql="select * from loai_san_pham where ma_the_loai =?";
			$this->setQuery($sql);
			return $this->loadRow(array($ma_loai));
		}
	}
?>