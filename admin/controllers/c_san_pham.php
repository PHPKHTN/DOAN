<?php
class C_san_pham
{
	public function Hien_thi_san_pham()
	{
		include("models/m_san_pham.php");
		$m_san_pham = new M_san_pham();
		$ds_san_pham = $m_san_pham->Doc_san_pham();

		//views
		include("controllers/Smarty_quan_tri.php");
		$smarty = new Smarty_quan_tri();
		$smarty->assign("title","Quản lý sản phẩm");
		$view="views/v_san_pham.tpl";
		$smarty->assign("view",$view);
		$smarty->assign("ds_san_pham",$ds_san_pham);
		$smarty->display("Smarty/templates/layout.tpl");
	}
}
?>