<?php
    session_start();
    include('controllers/c_gio_hang.php');
    $c_gio_hang = new C_gio_hang();
    $key = $_POST['id'];
    $so_luong = ((int)$_POST['soluong']);
    $don_gia = ((double)$_POST['dongia']);
    if($so_luong>=0 && $don_gia>0)
    {
        $c_gio_hang->them_gio_hang($key, $so_luong, $don_gia);
    }
    $arrgiohang = array('sl'=>$c_gio_hang->so_luong(),'st'=>number_format($c_gio_hang->thanh_tien()));
    echo json_encode($arrgiohang);
?>