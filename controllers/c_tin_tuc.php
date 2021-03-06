<?php 
class C_tin_tuc
{
	public function Hien_thi_ds_tin_tuc()
	{
		include("models/m_tin_tuc.php");
		include("models/m_index.php");
		$m_index = new M_index();
		$ds_loai=$m_index->Doc_loai_san_pham();
		$m_tin_tuc = new M_tin_tuc();
		$ds_tin_tuc = $m_tin_tuc->Doc_tin_tuc();

        include("Pager.php");
        $p = new pager();
        $limit = 9;
        $count = count($ds_tin_tuc);
        $pages = $p->findPages($count, $limit);
        $vt = $p->findStart($limit);
        $curpage = $_GET['page'];
        $ds_phan_trang = $p->pageList($curpage, $pages);
        $ds_tin_tuc =$m_tin_tuc->Doc_tin_tuc($vt, $limit);

		//views
		include("controllers/Smarty_shop_mobile.php");
		$smarty = new Smarty_shop_mobile();
		$smarty->assign("title","Tin tức");
		$v_nav = "views/v_nav.tpl";
		$view="views/tin_tuc/v_tin_tuc.tpl";
		$smarty->assign("ds_loai",$ds_loai);
		$smarty->assign("v_nav",$v_nav);
		$smarty->assign("view",$view);
		$smarty->assign("ds_tin_tuc", $ds_tin_tuc);
		$smarty->assign("ds_phan_trang", $ds_phan_trang);
		$smarty->display("tin_tuc/layout.tpl");
	}

	public function Hien_thi_chi_tiet_tin_tuc()
	{
		$ma_tin = $_GET['ma_tin'];
		include("models/m_index.php");
		$m_index = new M_index();
		$ds_loai=$m_index->Doc_loai_san_pham();
		include("models/m_tin_tuc.php");
		$m_tin_tuc = new M_tin_tuc();
		$tin_tuc = $m_tin_tuc->Doc_tin_tuc_theo_ma_tin_tuc($ma_tin);
		$ds_san_pham = $m_tin_tuc->Doc_san_pham();

		include("controllers/Smarty_shop_mobile.php");
		$smarty = new Smarty_shop_mobile();
		$smarty->assign("title",$tin_tuc->tieu_de_tin);
		$v_nav = "views/v_nav.tpl";
		$view = "views/tin_tuc/v_chi_tiet_tin_tuc.tpl";
		$smarty->assign("ds_loai",$ds_loai);
		$smarty->assign("v_nav",$v_nav);
		$smarty->assign("view", $view);
		$smarty->assign("tin_tuc", $tin_tuc);
		$smarty->assign("ds_san_pham", $ds_san_pham);
		$smarty->display("tin_tuc/layout.tpl");
	}
}
?>