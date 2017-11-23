<?php 
class C_dien_thoai
{
	public function Hien_thi_ds_dien_thoai()
	{
		include("models/m_dien_thoai.php");
		$m_dien_thoai = new M_dien_thoai();
		$ds_dien_thoai = $m_dien_thoai->Doc_dien_thoai();
		$ds_hang_san_xuat = $m_dien_thoai->Doc_danh_sach_nha_san_xuat();
        include("Pager.php");
        $p = new pager();
        $limit = 9;
        $count = count($ds_dien_thoai);
        $pages = $p->findPages($count, $limit);
        $vt = $p->findStart($limit);
        $curpage = $_GET['page'];
        $ds_phan_trang = $p->pageList($curpage, $pages);
        $ds_dien_thoai =$m_dien_thoai->Doc_dien_thoai($vt, $limit);

		//views
		include("controllers/Smarty_shop_mobile.php");
		$smarty = new Smarty_shop_mobile();
		$smarty->assign("title","Điện thoại");
		$view="views/dien_thoai/v_dien_thoai.tpl";
		$smarty->assign("view",$view);
		$smarty->assign("ds_dien_thoai", $ds_dien_thoai);
		$smarty->assign("ds_hang_san_xuat", $ds_hang_san_xuat);
		$smarty->assign("ds_phan_trang", $ds_phan_trang);
		$smarty->display("dien_thoai/layout.tpl");
	}
	public function Hien_thi_ds_dien_thoai_theo_ma_hang()
	{
		$ma_hang=$_GET["ma_hang"];
		include("models/m_dien_thoai.php");
		$m_dien_thoai = new M_dien_thoai();
		$ds_dien_thoai = $m_dien_thoai->Doc_dien_thoai_theo_hang(0,0,$ma_hang);
		$ds_hang_san_xuat = $m_dien_thoai->Doc_danh_sach_nha_san_xuat();
        include "Pager.php";
        $p = new pager();
        $limit = 9;
        $count = count($ds_dien_thoai);
        $pages = $p->findPages($count, $limit);
        $vt = $p->findStart($limit);
        $curpage = $_GET['page'];
        $ds_phan_trang = $p->pageList($curpage, $pages);
        $ds_dien_thoai =$m_dien_thoai->Doc_dien_thoai_theo_hang($vt, $limit, $ma_hang);

		//views
		include("controllers/Smarty_shop_mobile.php");
		$smarty = new Smarty_shop_mobile();
		$smarty->assign("title","Điện thoại");
		$view="views/dien_thoai/v_dien_thoai.tpl";
		$smarty->assign("view",$view);
		$smarty->assign("ds_dien_thoai", $ds_dien_thoai);
		$smarty->assign("ds_hang_san_xuat", $ds_hang_san_xuat);
		$smarty->assign("ds_phan_trang", $ds_phan_trang);
		$smarty->display("dien_thoai/layout.tpl");
	}

	public function Hien_thi_chi_tiet_dien_thoai()
	{
		$ma_sp=$_GET["ma_sp"];
		include("models/m_dien_thoai.php");
		$m_dien_thoai = new M_dien_thoai();
		$dien_thoai = $m_dien_thoai->Doc_dien_thoai_theo_ma_san_pham($ma_sp);

		//views
		include("controllers/Smarty_shop_mobile.php");
		$smarty = new Smarty_shop_mobile();
		$smarty->assign("title","Điện thoại");
		$view="views/dien_thoai/v_chi_tiet_dien_thoai.tpl";
		$smarty->assign("view",$view);
		$smarty->assign("dien_thoai",$dien_thoai);
		$smarty->display("dien_thoai/layout.tpl");
	}
}
?>