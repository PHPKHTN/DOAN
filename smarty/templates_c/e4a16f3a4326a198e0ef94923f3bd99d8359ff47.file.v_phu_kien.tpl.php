<?php /* Smarty version Smarty-3.1.18, created on 2017-11-22 17:23:06
         compiled from "views\phu_kien\v_phu_kien.tpl" */ ?>
<?php /*%%SmartyHeaderCode:271915a15affd276c39-16034570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4a16f3a4326a198e0ef94923f3bd99d8359ff47' => 
    array (
      0 => 'views\\phu_kien\\v_phu_kien.tpl',
      1 => 1511371383,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '271915a15affd276c39-16034570',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a15affd30c4f4_79906559',
  'variables' => 
  array (
    'title' => 0,
    'ds_phu_kien' => 0,
    'ds' => 0,
    'ds_phan_trang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a15affd30c4f4_79906559')) {function content_5a15affd30c4f4_79906559($_smarty_tpl) {?><!-- Main Content - start -->
<main>
	<section class="container">


		
		<h1 class="main-ttl"><span><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span></h1>
		<!-- Catalog Sidebar - start -->
		<div class="section-sb">

			<!-- Catalog Categories - start -->
			<div class="section-sb-current">
				<h3><a href="catalog-list.html"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<span id="section-sb-toggle" class="section-sb-toggle"><span class="section-sb-ico"></span></span></a></h3>
				<ul class="section-sb-list" id="section-sb-list">
					<li class="categ-1 has_child">
						<a href="catalog-list.html">
							<span class="categ-1-label">Hãng sản xuất</span>
							<span class="section-sb-toggle"><span class="section-sb-ico"></span></span>
						</a>
						<ul>
							<li class="categ-2">
								<a href="catalog-list.html">
									<span class="categ-2-label">Apple</span>
								</a>
							</li>
							<li class="categ-2">
								<a href="catalog-list.html">
									<span class="categ-2-label">Samsung</span>
								</a>
							</li>
							<li class="categ-2">
								<a href="catalog-list.html">
									<span class="categ-2-label">Sony</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="categ-1 has_child">
						<a href="catalog-list.html">
							<span class="categ-1-label">Mức giá</span>
							<span class="section-sb-toggle"><span class="section-sb-ico"></span></span>
						</a>
						<ul>
							<li class="categ-2">
								<a href="catalog-list.html">
									<span class="categ-2-label">Dưới 1 triệu</span>
								</a>
							</li>
							<li class="categ-2">
								<a href="catalog-list.html">
									<span class="categ-2-label">Từ 1 - 3 triệu</span>
								</a>
							</li>
							<li class="categ-2">
								<a href="catalog-list.html">
									<span class="categ-2-label">Từ 3 - 5 triệu</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="categ-1">
						<a href="catalog-list.html">
							<span class="categ-1-label">Sắp xếp theo giá tăng dần</span>
						</a>
					</li>
					<li class="categ-1">
						<a href="catalog-list.html">
							<span class="categ-1-label">Sắp xếp theo giá giảm dần</span>
						</a>
					</li>
				</ul>
			</div>
			<!-- Catalog Categories - end -->

			

		</div>
		<!-- Catalog Sidebar - end -->
		<!-- Catalog Items | Gallery V1 - start -->
		<div class="section-cont">

			
			<div class="prod-items section-items">
				<?php  $_smarty_tpl->tpl_vars['ds'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ds']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ds_phu_kien']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->key => $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->_loop = true;
?>
				<div class="prod-i">
					<div class="prod-i-top">
						<a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="public/images/san_pham/<?php echo $_smarty_tpl->tpl_vars['ds']->value->hinh;?>
" alt="Adipisci aperiam commodi"><!-- NO SPACE --></a>
						<p class="prod-i-info">
							<a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
							<a href="#" class="qview-btn prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
							<a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
						</p>
						<a href="#" class="prod-i-buy">Add to cart</a>
						<p class="prod-i-properties-label"><i class="fa fa-info"></i></p>

						<div class="prod-i-properties">
							<dl>
								<dt>Mô tả</dt>
								<dd><?php echo $_smarty_tpl->tpl_vars['ds']->value->mo_ta;?>
<br></dd>
							</dl>
						</div>
					</div>
					<h3>
						<a href="product.html"><?php echo $_smarty_tpl->tpl_vars['ds']->value->ten_san_pham;?>
</a>
					</h3>
					<p class="prod-i-price">
						<b><?php echo number_format($_smarty_tpl->tpl_vars['ds']->value->don_gia,0,",",".");?>
đ</b>
					</p>
				</div>
                <?php } ?>
			</div>

			<!-- Pagination - start -->
			<ul class="pagi">
				<li><span><?php echo $_smarty_tpl->tpl_vars['ds_phan_trang']->value;?>
</span></li>
			</ul>
			<!-- Pagination - end -->
		</div>
		<!-- Catalog Items | Gallery V1 - end -->

		<!-- Quick View Product - start -->
		<div class="qview-modal">
			<div class="prod-wrap">
				<a href="product.html">
					<h1 class="main-ttl">
						<span><?php echo $_smarty_tpl->tpl_vars['ds']->value->ten_san_pham;?>
</span>
					</h1>
				</a>
				<div class="prod-slider-wrap">
					<div class="prod-slider">
						<ul class="prod-slider-car">
							<li>
								<a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x525">
									<img src="public/images/san_pham/<?php echo $_smarty_tpl->tpl_vars['ds']->value->hinh;?>
" alt="">
								</a>
							</li>
						</ul>
					</div>
					<div class="prod-thumbs">
						<ul class="prod-thumbs-car">
							<li>
								<a data-slide-index="0" href="#">
									<img src="http://placehold.it/500x525" alt="">
								</a>
							</li>
							<li>
								<a data-slide-index="1" href="#">
									<img src="http://placehold.it/500x591" alt="">
								</a>
							</li>
							<li>
								<a data-slide-index="2" href="#">
									<img src="http://placehold.it/500x525" alt="">
								</a>
							</li>
							<li>
								<a data-slide-index="3" href="#">
									<img src="http://placehold.it/500x722" alt="">
								</a>
							</li>
							<li>
								<a data-slide-index="4" href="#">
									<img src="http://placehold.it/500x722" alt="">
								</a>
							</li>
							<li>
								<a data-slide-index="5" href="#">
									<img src="http://placehold.it/500x722" alt="">
								</a>
							</li>
							<li>
								<a data-slide-index="6" href="#">
									<img src="http://placehold.it/500x722" alt="">
								</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="prod-cont">
					<p class="prod-actions">
						<a href="#" class="prod-favorites"><i class="fa fa-heart"></i> Add to Wishlist</a>
						<a href="#" class="prod-compare"><i class="fa fa-bar-chart"></i> Compare</a>
					</p>
					<div class="prod-skuwrap">
						<p class="prod-skuttl">Color</p>
						<ul class="prod-skucolor">
							<li class="active">
								<img src="img/color/blue.jpg" alt="">
							</li>
							<li>
								<img src="img/color/red.jpg" alt="">
							</li>
							<li>
								<img src="img/color/green.jpg" alt="">
							</li>
							<li>
								<img src="img/color/yellow.jpg" alt="">
							</li>
							<li>
								<img src="img/color/purple.jpg" alt="">
							</li>
						</ul>
						<p class="prod-skuttl">Sizes</p>
						<div class="offer-props-select">
							<p>XL</p>
							<ul>
								<li><a href="#">XS</a></li>
								<li><a href="#">S</a></li>
								<li><a href="#">M</a></li>
								<li class="active"><a href="#">XL</a></li>
								<li><a href="#">L</a></li>
								<li><a href="#">4XL</a></li>
								<li><a href="#">XXL</a></li>
							</ul>
						</div>
					</div>
					<div class="prod-info">
						<p class="prod-price">
							<b class="item_current_price">$238</b>
						</p>
						<p class="prod-qnt">
							<input type="text" value="1">
							<a href="#" class="prod-plus"><i class="fa fa-angle-up"></i></a>
							<a href="#" class="prod-minus"><i class="fa fa-angle-down"></i></a>
						</p>
						<p class="prod-addwrap">
							<a href="#" class="prod-add">Add to cart</a>
						</p>
					</div>
					<ul class="prod-i-props">
						<li>
							<b>SKU</b> 05464207
						</li>
						<li>
							<b>Manufacturer</b> Mayoral
						</li>
						<li>
							<b>Material</b> Cotton
						</li>
						<li>
							<b>Pattern Type</b> Print
						</li>
						<li>
							<b>Wash</b> Colored
						</li>
						<li>
							<b>Style</b> Cute
						</li>
						<li>
							<b>Color</b> Blue, Red
						</li>
						<li><a href="#" class="prod-showprops">All Features</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Quick View Product - end -->
	</section>
</main>
<!-- Main Content - end --><?php }} ?>
