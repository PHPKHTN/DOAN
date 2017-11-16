<?php
	class C_san_pham
	{
		public function Hien_thi_san_pham()
		{
			include_once('models/m_san_pham.php');
			$m_san_pham = new M_san_pham();
			$ds_san_pham = $m_san_pham->Doc_san_pham();
			
			include_once('controllers/Pager.php');
			$p = new Pager();
			$limit = 16;
			$count = count($ds_san_pham);
			$pages = $p->findPages($count, $limit);
			$vt = $p->findStart($limit);
			$curpage = $_GET['page'];
			$ds_phan_trang = $p->pageList($curpage, $pages);
			$ds_san_pham = $m_san_pham->Doc_san_pham($vt, $limit);
			
			include_once('controllers/Smarty_shop_mobile.php');
			$smarty = new Smarty_shop_mobile();
			$smarty->assign("title", "Shop Mobile HTT");
			$smarty->assgin("tieudesanpham", "Danh sách sản phẩm");
			
		}
	}
?>