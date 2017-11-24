<script>
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
<!-- End #main-nav -->