<?php
	ini_set("display_errors",1);
	include_once('controllers/c_index.php');
	$c_index = new C_index();
	$c_index->Hien_thi_trang_chu();
?>