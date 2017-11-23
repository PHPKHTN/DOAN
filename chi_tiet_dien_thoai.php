<?php
ini_set("display_errors",1);
include("controllers/c_dien_thoai.php");
$c_dien_thoai=new C_dien_thoai();
$c_dien_thoai->Hien_thi_chi_tiet_dien_thoai();
?>
