<?php
    ini_set("display errors", 1);
    include("controllers/c_tin_tuc.php");
    $c_tin_tuc = new C_tin_tuc();
    $c_tin_tuc->Hien_thi_chi_tiet_tin_tuc();
?>