<?php
ini_set("display_errors",1);
include("controllers/c_phu_kien.php");
$c_phu_kien=new C_phu_kien();
$c_phu_kien->Hien_thi_ds_phu_kien()
?>