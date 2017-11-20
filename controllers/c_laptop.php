<?php 
class C_laptop
{
	public function Hien_thi_ds_laptop()
	{
		include("models/m_laptop.php");
		$m_laptop = new M_laptop();
		$ds_laptop = $m_laptop->Doc_ds_laptop();

		//views
		include("controllers/Smarty_shop_mobile.php");
		$smarty = new Smarty_shop_mobile();
		$smarty->assign("title","Laptop");
		$view="views/laptop/v_laptop.tpl";
		$smarty->assign("view",$view);
		$smarty->display("laptop/layout.tpl");
	}
}
?>