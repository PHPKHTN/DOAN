<?php
include_once('database.php');
class M_san_pham extends database
{
	public function lay_san_pham_cho_gio_hang($chuoi)
	{
		$sql = "select s.*, h.* from san_pham s, hinh_san_pham h where s.ma_san_pham = h.ma_san_pham";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function tim_san_pham($gttim)
	{
		$sql = "select s.*, h.* from san_pham s, hinh_san_pham h where s.ma_san_pham = h.ma_san_pham and s.ten_san_pham like '%$gttim%'";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function Doc_san_pham($vt=-1, $limit=-1)
	{
		$sql = "select s.*, h.* from san_pham s, hinh_san_pham h where s.ma_san_pham = h.ma_san_pham";
		if($vt>=0 && $limit>0)
		{
			$sql .=" limit $vt, $limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	public function Doc_san_pham_theo_ma_san_pham($ma_san_pham)
	{
		$sql = "select s.*, h.* from san_pham s, hinh_san_pham h where s.ma_san_pham = h.ma_san_pham and s.ma_san_pham=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_san_pham));
	}
	
	public function Doc_san_pham_cung_loai($ma_the_loai, $ma_san_pham, $vt=-1, $limit=-1)
	{
		$sql = "select s.*, h.* from san_pham s, hinh_san_pham h where s.ma_san_pham = h.ma_san_pham and s.ma_the_loai=? and s.ma_san_pham!=?";
		if($vt>=0 && $limit>0)
		{
			$sql .= " limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows(array($ma_the_loai, $ma_san_pham));
	}
	
	public function Doc_san_pham_cung_hang_san_xuat($ma_hang_san_xuat, $vt=-1, $limit=-1)
	{
		$sql = "select sp.* from san_pham sp, hang_san_xuat h where sp.ma_hang_san_pham = h.ma_hang_san_xuat and h.ma_hang_san_xuat = ?";
		if($vt>=0 && $limit>0)
		{
			$sql .= " limit $vt, $limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows(array($ma_hang_san_xuat));
	}
	
	public function Doc_san_pham_cung_the_loai($ma_the_loai, $vt=-1, $limit=-1)
	{
		$sql = "select sp.* from san_pham sp, loai_san_pham l where sp.ma_the_loai = l.ma_the_loai and l.ma_the_loai = ?";
		if($vt>=0 && $limit>0)
		{
			$sql .= " limit $vt, $limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows(array($ma_the_loai))
	}
}
?>