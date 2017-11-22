<?php 
class C_tablet
{
	public function Hien_thi_ds_tablet()
	{
		include("models/m_tablet.php");
		$m_tablet = new M_tablet();
		$ds_tablet = $m_tablet->Doc_tablet();

        include "Pager.php";
        $p = new pager();
        $limit = 9;
        $count = count($ds_tablet);
        $pages = $p->findPages($count, $limit);
        $vt = $p->findStart($limit);
        $curpage = $_GET['page'];
        $ds_phan_trang = $p->pageList($curpage, $pages);
        $ds_tablet =$m_tablet->Doc_tablet($vt, $limit);

		//views
		include("controllers/Smarty_shop_mobile.php");
		$smarty = new Smarty_shop_mobile();
		$smarty->assign("title","Điện thoại");
		$view="views/tablet/v_tablet.tpl";
		$smarty->assign("view",$view);
		$smarty->assign("ds_tablet", $ds_tablet);
		$smarty->assign("ds_phan_trang", $ds_phan_trang);
		$smarty->display("tablet/layout.tpl");
	}
}
?>