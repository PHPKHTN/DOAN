<?php
session_start();
include ("Smarty_quan_tri.php");
include ("models/m_user.php");
class C_user
{
	function Hien_thi_dang_nhap()
	{
		
		if(isset($_POST["login"]))
		{
			$ten_dang_nhap=$_POST["ten_dang_nhap"];
			$mat_khau=$_POST["mat_khau"];
			$this->luu_dang_nhap($ten_dang_nhap,$mat_khau);

		}
		if(isset($_SESSION["fullname"]) )
		{
			$smarty=new Smarty_quan_tri();
			$smarty->assign("title","Quản lý Cửa Hàng điện thoại");
			$smarty->display("layout.tpl");	
		}
		else
		{
			$_SESSION['error']="Thông tin đăng nhập không hợp lệ";
			header("location:index.php");	
		}
	}
	function thoat_dang_nhap()
	{
		session_destroy();
		header("location:index.php");	
	}
	function luu_dang_nhap($ten_dang_nhap,$mat_khau)
	{
		$m_user=new M_user();
		$user=$m_user->Doc_user_theo_tenDn_pass($ten_dang_nhap,$mat_khau);
		$_SESSION['fullname']=$user->ho_ten;
	}
		
}
?>