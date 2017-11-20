<?php 
class C_tin_tuc
{
	public function Hien_thi_ds_tin_tuc()
	{
		include("models/m_tin_tuc.php");
		$m_tin_tuc = new M_tin_tuc();
		$ds_tin_tuc = $m_tin_tuc->Doc_ds_tin_tuc();

		//views
		include("controllers/Smarty_shop_mobile.php");
		$smarty = new Smarty_shop_mobile();
		$smarty->assign("title","Tin tức");
		$view="views/tin_tuc/v_tin_tuc.tpl";
		$smarty->assign("view",$view);
		$smarty->display("tin_tuc/layout.tpl");
	}
}
?>