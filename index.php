<?php
	include_once('controllers/Smarty_shop_mobile.php');
	$smarty = new Smarty_shop_mobile();
	$title = "Shop Mobile HTT";
	$smarty->assign('title', $title);
	$smarty->display("layout.tpl");
	//Da xem
?>