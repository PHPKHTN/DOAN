<?php
	ini_set("display_errors",1);
	include_once('controllers/c_gio_hang.php');
	$c_gio_hang = new C_gio_hang();
	$c_gio_hang->xem_gio_hang();
?>