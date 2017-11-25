<?php
class C_index
{
	public function Hien_thi_trang_chu()
	{
		include("models/m_index.php");
		$m_index= new M_index();
		$ds_loai=$m_index->Doc_loai_san_pham();

		include("controllers/Smarty_shop_mobile.php");
		$smarty = new Smarty_shop_mobile();
		$smarty->assign("title","Cửa hàng điện thoại HT");
		$v_nav = "views/v_nav.tpl";
		$smarty->assign("ds_loai",$ds_loai);
		$smarty->assign("v_nav",$v_nav);

		$smarty->display("layout.tpl");
	}
	public function Hien_thi_ds_san_pham_theo_ma_loai()
	{
		$ma_loai=$_GET["ma_loai"];
		include("models/m_index.php");
		include("models/m_dien_thoai.php");
		$m_index = new M_index();
		$m_dien_thoai = new M_dien_thoai();
		$ds_loai=$m_index->Doc_loai_san_pham();
		$ds_san_pham = $m_index->Doc_san_pham_theo_ma_loai(0,0,$ma_loai);
		$ds_hang_san_xuat = $m_dien_thoai->Doc_danh_sach_nha_san_xuat($ma_loai);
		$loai = $m_index->Doc_ten_loai($ma_loai);
        include "Pager.php";
        $p = new pager();
        $limit = 9;
        $count = count($ds_san_pham);
        $pages = $p->findPages($count, $limit);
        $vt = $p->findStart($limit);
        $curpage = $_GET['page'];
        $ds_phan_trang = $p->pageList($curpage, $pages);
        $ds_san_pham =$m_index->Doc_san_pham_theo_ma_loai($vt, $limit, $ma_loai);

		//views
		include("controllers/Smarty_shop_mobile.php");
		$smarty = new Smarty_shop_mobile();
		$smarty->assign("title",$loai->ten_loai);
		$v_nav = "views/v_nav.tpl";
		$view="views/dien_thoai/v_dien_thoai.tpl";
		$smarty->assign("ds_loai",$ds_loai);
		$smarty->assign("v_nav",$v_nav);
		$smarty->assign("view",$view);
		$smarty->assign("ds_san_pham", $ds_san_pham);
		$smarty->assign("ds_hang_san_xuat", $ds_hang_san_xuat);
		$smarty->assign("ds_phan_trang", $ds_phan_trang);
		$smarty->display("dien_thoai/layout.tpl");
	}

	public function Hien_thi_chi_tiet_san_pham()
	{
		$ma_sp =$_GET["ma_sp"];
		include("models/m_index.php");
		include("models/m_dien_thoai.php");
		$m_index = new M_index();
		$m_dien_thoai = new M_dien_thoai();
		$ds_loai=$m_index->Doc_loai_san_pham();
		$san_pham=$m_dien_thoai->Doc_dien_thoai_theo_ma_san_pham($ma_sp);


		include("controllers/Smarty_shop_mobile.php");
		$smarty = new Smarty_shop_mobile();
		$smarty->assign("title",$san_pham->ten_san_pham);
		$smarty->assign("san_pham",$san_pham);
		$v_nav = "views/v_nav.tpl";
		$view="views/dien_thoai/v_chi_tiet_dien_thoai.tpl";
		$smarty->assign("ds_loai",$ds_loai);
		$smarty->assign("v_nav",$v_nav);
		$smarty->assign("view",$view);
		$smarty->display("dien_thoai/layout.tpl");
	}
}
?>