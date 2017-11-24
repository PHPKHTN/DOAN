<?php /* Smarty version Smarty-3.1.14, created on 2017-11-24 10:57:50
         compiled from "Smarty\templates\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10895a0ad43cdc0a96-67248264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e1e8504ca6dc69671c973eed969f8559d02a9a1' => 
    array (
      0 => 'Smarty\\templates\\nav.tpl',
      1 => 1511521067,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10895a0ad43cdc0a96-67248264',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a0ad43cdc4916_59161112',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0ad43cdc4916_59161112')) {function content_5a0ad43cdc4916_59161112($_smarty_tpl) {?><script>
$(function() {
     var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
	 var id=null;
	 if (pgurl=="") pgurl="." ;
     $("#main-nav li a").each(function(){
          if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
		  {
			var title = $(this).attr("title");
			id=document.getElementById(title);
			$(this).addClass("current");
			$(id).addClass("current");	
		  }
		  
     })
		
	$(id).click();
	
});

</script> 
<ul id="main-nav">
  <!-- Accordion Menu -->
  
  <li> 
  <a href="quantri.php" class="nav-top-item no-submenu"> 
  <!-- Add the class "no-submenu" to menu items with no sub menu  -->
  Danh mục 
  </a> 
  </li>
  
  <li>
  <a href="#" class="nav-top-item" id="tintuc">Sản phẩm</a>
    <ul>
      <li><a href="san_pham.php" title="tintuc">Danh sách sản phẩm</a></li>
      <li><a href="themtintuc.php" title="tintuc">Thêm sản phẩm</a></li>
    </ul>
  </li>
  <li>
  <a href="#" class="nav-top-item" id="tintuc">Hãng sản xuất</a>
    <ul>
      <li><a href="tintuc.php" title="tintuc">Danh sách Hãng sản xuất</a></li>
      <li><a href="themtintuc.php" title="tintuc">Thêm Hãng sản xuất</a></li>
    </ul>
  </li>
  <li>
  <a href="#" class="nav-top-item" id="tintuc">Loại sản phẩm</a>
    <ul>
      <li><a href="tintuc.php" title="tintuc">Danh sách loại sản phẩm</a></li>
      <li><a href="themtintuc.php" title="tintuc">Thêm loại sản phẩm</a></li>
    </ul>
  </li>
  <li> <a href="#" class="nav-top-item" id="user"> User </a>
    <ul>
      <li><a href="user.php" title="user">Danh sách user</a></li>
      <li><a href="themuser.php" title="user">Thêm User</a></li>
    </ul>
  </li>
  <li> <a href="#" class="nav-top-item" id="khachhang"> Khách hàng </a>
    <ul>
      <li><a href="#" title="khachhang">Danh sách Khách hàng</a></li>
      <li><a href="#" title="khachhang">Thêm Khách hàng</a></li>
    </ul>
  </li>
</ul>
<!-- End #main-nav --><?php }} ?>