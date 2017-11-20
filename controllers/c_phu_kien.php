<?php 
class C_phu_kien
{
	public function Hien_thi_ds_phu_kien()
	{
		include("models/m_phu_kien.php");
		$m_phu_kien = new M_phu_kien();
		$ds_phu_kien = $m_phu_kien->Doc_ds_phu_kien();

		//views
		include("controllers/Smarty_shop_mobile.php");
		$smarty = new Smarty_shop_mobile();
		$smarty->assign("title","Phụ kiện");
		$view="views/phu_kien/v_phu_kien.tpl";
		$smarty->assign("view",$view);
		$smarty->display("phu_kien/layout.tpl");
	}
}
?>