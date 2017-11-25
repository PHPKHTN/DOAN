<?php
ini_set("display_errors",1);
include("controllers/c_index.php");
$c_index=new C_index();
$c_index->Hien_thi_ds_san_pham_theo_ma_loai();
?>

