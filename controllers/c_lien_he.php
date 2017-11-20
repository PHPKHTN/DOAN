<?php 
class C_lien_he
{
	public function Hien_thi_lien_he()
	{
		include("models/m_lien_he.php");
		$m_lien_he = new M_lien_he();
		$lien_he = $m_lien_he->Doc_lien_he();

		//views
		include("controllers/Smarty_shop_mobile.php");
		$smarty = new Smarty_shop_mobile();
		$smarty->assign("title","Liên hệ");
		$view="views/lien_he/v_lien_he.tpl";
		$smarty->assign("view",$view);
		$smarty->display("lien_he/layout.tpl");
	}
}
?>