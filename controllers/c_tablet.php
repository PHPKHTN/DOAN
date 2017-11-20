<?php 
class C_tablet
{
	public function Hien_thi_ds_tablet()
	{
		include("models/m_tablet.php");
		$m_tablet = new M_tablet();
		$ds_tablet = $m_tablet->Doc_ds_tablet();

		//views
		include("controllers/Smarty_shop_mobile.php");
		$smarty = new Smarty_shop_mobile();
		$smarty->assign("title","Tablet");
		$view="views/tablet/v_tablet.tpl";
		$smarty->assign("view",$view);
		$smarty->display("tablet/layout.tpl");
	}
}
?>