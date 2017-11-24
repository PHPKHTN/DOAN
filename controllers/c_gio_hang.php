<?php
    session_start();
    class C_gio_hang
    {
        protected $smarty;

        function lay_gio_hang()
        {
            if(isset($_SESSION['giohang']))
            {
                return $_SESSION['giohang'];
            }
            else
            {
                return false;
            }
        }

        function lay_thong_tin_san_pham($san_pham)
        {
            $ma_san_pham = array();
            foreach($san_pham as $key=>$value)
            {
                $ma_san_pham[] = $key;
            }
            $ma_san_pham = implode(",",$ma_san_pham);
            include_once('models/m_dien_thoai.php');
            $m_dien_thoai = new M_dien_thoai();
            $ds_dien_thoai = $m_dien_thoai->lay_san_pham_cho_gio_hang($ma_san_pham);
            $ds_san_pham_gio_hang = array();
            foreach($ds_dien_thoai as $ds)
            {
                $ds->so_luong = $san_pham[$ds->ma_san_pham];
                $ds_san_pham_gio_hang[] = $ds;
            }
            return $ds_dien_thoai_gio_hang;
        }

        function them_gio_hang($ma_san_pham, $so_luong, $don_gia)
        {
            if($so_luong > 0)
            {
                if(isset($_SESSION['giohang'][$ma_san_pham]))
                {
                    $_SESSION['thanh_tien'] -= $_SESSION['giohang']['$ma_san_pham'] * $don_gia;
                    $_SESSION['so_luong'] -= $_SESSION['giohang']['$ma_san_pham'];
                }
                $_SESSION['giohang']['$ma_san_pham'] = $so_luong;
                if(isset($_SESSION['thanh_tien']))
                {
                    $_SESSION['thanh_tien'] = $_SESSION['thanh_tien'] + ($so_luong * $don_gia);
                    $_SESSION['so_luong'] = $_SESSION['so_luong'] + $so_luong;
                }
                else
                {
                    $_SESSION['thanh_tien'] = $so_luong * $don_gia;
                    $_SESSION['so_luong'] = $so_luong;
                }
            }
            else
            {
                if($so_luong == 0)
                {
                    Xoa_gio_hang($ma_san_pham, $don_gia);   
                }
            }
        }

        function Xoa_mat_hang($ma_san_pham, $don_gia)
        {
            $gio_hang = $thi->lay_gio_hang();
            $gio_hang_moi = array();
            foreach($gio_hang as $key=>$value)
            {
                if($key != $ma_san_pham)
                {
                    $gio_hang_moi[$key] = $value;
                }
                else
                {
                    $_SESSION['thanh_tien'] -= $gio_hang[$ma_san_pham] * $don_gia;
                    $_SESSION['so_luong'] -= $gio_hang[$ma_san_pham];
                }
            }
            if(!empty($gio_hang_moi))
            {
                $_SESSION['giohang'] = $gio_hang_moi;
            }
            else
            {
                $this->Xoa_gio_hang();
            }
        }

        function Xoa_gio_hang() {
            unset($_SESSION['gioHang']);
            unset($_SESSION['thanh_tien']);
            unset($_SESSION['so_luong']);
        }

        function thanh_tien() {
            if(isset($_SESSION['thanh_tien']))
                return $_SESSION['thanh_tien'];
            else
                return 0;
        }

        function so_luong() {
            if(isset($_SESSION['so_luong']))
                return $_SESSION['so_luong'];
            else
                return 0;
        }
        function tongSoMatHang() {
            if(isset($_SESSION['so_luong']))
                return $_SESSION['so_luong'];
            else
                return 0;
        }
		
		function cap_nhat_gio_hang($ma_san_pham, $so_luong, $don_gia)
		{
			if(!is_numeric($so_luong))
			{
				return false;
			}
			$so_luong = (int)$so_luong;
			if($so_luong > 0)
			{
				$_SESSION['thanh_tien'] -= $_SESSION['giohang'][$ma_san_pham] * $don_gia;
				$_SESSION['thanh_tien'] += $so_luong * $don_gia;
				$_SESSION['so_luong'] -= $_SESSION['giohang'][$ma_san_pham];
				$_SESSION['so_luong'] += $so_luong;
				$_SESSION['giohang'][$ma_san_pham] = $so_luong;
				return false;
			}
			if($so_luong == 0)
			{
				$this->Xoa_mat_hang($ma_san_pham, $don_gia);
				return false;
			}
		}

        function xem_gio_hang()
        {
            include_once('controllers/Smarty_shop_mobile.php');
            $smarty = new Smarty_shop_mobile();
            $smarty->assign('title', "Giỏ hàng");
            $gio_hang = $this->lay_gio_hang();
            if($gio_hang)
            {
                $gio_hang_san_pham = array();
                $_SESSION['gio_hang_san_pham'] = $gio_hang_san_pham;
                $smarty->assign('ds_san_pham', $this->lay_san_pham_cho_gio_hang($gio_hang_san_pham));   
            }
			$view = "views/gio_hang/v_gio_hang.tpl";
			$smarty->assign("view", $view);
			$smarty->display("dien_thoai/layout.tpl");
        }
    }
?>