<?php 
class C_dien_thoai
{
	public function Hien_thi_ds_dien_thoai()
	{
		include("models/m_dien_thoai.php");
		$m_dien_thoai = new M_dien_thoai();
		$ds_dien_thoai = $m_dien_thoai->Doc_ds_dien_thoai();

		//views
		include("controllers/Smarty_shop_mobile.php");
		$smarty = new Smarty_shop_mobile();
		$smarty->assign("title","Điện thoại");
		$view="views/dien_thoai/v_dien_thoai.tpl";
		$smarty->assign("view",$view);
		$smarty->display("dien_thoai/layout.tpl");
	}
}
?>