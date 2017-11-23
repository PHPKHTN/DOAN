<?php 
class C_tin_tuc
{
	public function Hien_thi_ds_tin_tuc()
	{
		include("models/m_tin_tuc.php");
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
		$view="views/tin_tuc/v_tin_tuc.tpl";
		$smarty->assign("view",$view);
		$smarty->assign("ds_tin_tuc", $ds_tin_tuc);
		$smarty->assign("ds_phan_trang", $ds_phan_trang);
		$smarty->display("tin_tuc/layout.tpl");
	}

	public function Hien_thi_chi_tiet_tin_tuc()
	{
		$ma_tin = $_GET['ma_tin'];
		include("models/m_tin_tuc.php");
		$m_tin_tuc = new M_tin_tuc();
		$tin_tuc = $m_tin_tuc->Doc_tin_tuc_theo_ma_tin_tuc($ma_tin);

		include("controllers/Smarty_shop_mobile.php");
		$smarty = new Smarty_shop_mobile();
		$smarty->assign("title",$tin_tuc->tieu_de_tin);
		$view = "views/tin_tuc/v_chi_tiet_tin_tuc.tpl";
		$smarty->assign("view", $view);
		$smarty->assign("tin_tuc", $tin_tuc);
		$smarty->display("tin_tuc/layout.tpl");
	}
}
?>