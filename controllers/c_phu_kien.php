<?php 
class C_phu_kien
{
	public function Hien_thi_ds_phu_kien()
	{
		include("models/m_phu_kien.php");
		$m_phu_kien = new M_phu_kien();
		$ds_phu_kien = $m_phu_kien->Doc_phu_kien();

        include "Pager.php";
        $p = new pager();
        $limit = 9;
        $count = count($ds_phu_kien);
        $pages = $p->findPages($count, $limit);
        $vt = $p->findStart($limit);
        $curpage = $_GET['page'];
        $ds_phan_trang = $p->pageList($curpage, $pages);
        $ds_phu_kien =$m_phu_kien->Doc_phu_kien($vt, $limit);

		//views
		include("controllers/Smarty_shop_mobile.php");
		$smarty = new Smarty_shop_mobile();
		$smarty->assign("title","Phụ kiện");
		$view="views/phu_kien/v_phu_kien.tpl";
		$smarty->assign("view",$view);
		$smarty->assign("ds_phu_kien", $ds_phu_kien);
		$smarty->assign("ds_phan_trang", $ds_phan_trang);
		$smarty->display("phu_kien/layout.tpl");
	}
}
?>