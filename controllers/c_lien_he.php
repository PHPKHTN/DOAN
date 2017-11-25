<?php 
class C_lien_he
{
	public function Hien_thi_lien_he()
	{
		include("models/m_index.php");
		include("models/m_lien_he.php");
		$m_index = new M_index();
		$ds_loai=$m_index->Doc_loai_san_pham();
		$m_lien_he = new M_lien_he();
		$lien_he = $m_lien_he->Doc_lien_he();

		//views
		include("controllers/Smarty_shop_mobile.php");
		$smarty = new Smarty_shop_mobile();
		$smarty->assign("title","Liên hệ");
		$v_nav = "views/v_nav.tpl";
		$view="views/lien_he/v_lien_he.tpl";
		$smarty->assign("ds_loai",$ds_loai);
		$smarty->assign("v_nav",$v_nav);
		$smarty->assign("view",$view);
		$smarty->display("lien_he/layout.tpl");
	}
}
?>