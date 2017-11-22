<!-- Main Content - start -->
<main>
	<section class="container">


		
		<h1 class="main-ttl"><span>{$title}</span></h1>
		<!-- Catalog Sidebar - start -->
		<div class="section-sb">

			<!-- Catalog Categories - start -->
			<div class="section-sb-current">
				<h3><a href="catalog-list.html">{$title}<span id="section-sb-toggle" class="section-sb-toggle"><span class="section-sb-ico"></span></span></a></h3>
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
				{foreach $ds_dien_thoai as $ds}
				<div class="prod-i">
					<div class="prod-i-top">
						<a href="product.html" class="prod-i-img"><!-- NO SPACE --><img src="public/images/san_pham/{$ds->hinh}" alt="Adipisci aperiam commodi"><!-- NO SPACE --></a>
						<p class="prod-i-info">
							<a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
							<a href="#" class="qview-btn prod-i-qview"><span>Quick View</span><i class="fa fa-search"></i></a>
							<a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
						</p>
						<a href="#" class="prod-i-buy">Add to cart</a>
						<p class="prod-i-properties-label"><i class="fa fa-info"></i></p>

						<div class="prod-i-properties">
							<dl>
								<dt>Exterior</dt>
								<dd>Silt Pocket<br></dd>
								<dt>Material</dt>
								<dd>PU<br></dd>
								<dt>Occasion</dt>
								<dd>Versatile<br></dd>
								<dt>Shape</dt>
								<dd>Casual Tote<br></dd>
								<dt>Pattern Type</dt>
								<dd>Solid<br></dd>
								<dt>Style</dt>
								<dd>American Style<br></dd>
								<dt>Hardness</dt>
								<dd>Soft<br></dd>
								<dt>Decoration</dt>
								<dd>None<br></dd>
								<dt>Closure Type</dt>
								<dd>Zipper<br></dd>
							</dl>
						</div>
					</div>
					<h3>
						<a href="product.html">{$ds->ten_san_pham}</a>
					</h3>
					<p class="prod-i-price">
						<b>{number_format($ds->don_gia,0,",",".")}đ</b>
					</p>
					<div class="prod-i-skuwrapcolor">
						<ul class="prod-i-skucolor">
							<li class="bx_active"><img src="public/layout/img/color/red.jpg" alt="Red"></li>
							<li><img src="public/layout/img/color/blue.jpg" alt="Blue"></li>
						</ul>
					</div>
				</div>
                {/foreach}
			</div>

			<!-- Pagination - start -->
			<ul class="pagi">
				<li><span>{$ds_phan_trang}</span></li>
			</ul>
			<!-- Pagination - end -->
		</div>
		<!-- Catalog Items | Gallery V1 - end -->

		<!-- Quick View Product - start -->
		<div class="qview-modal">
			<div class="prod-wrap">
				<a href="product.html">
					<h1 class="main-ttl">
						<span>Reprehenderit adipisci</span>
					</h1>
				</a>
				<div class="prod-slider-wrap">
					<div class="prod-slider">
						<ul class="prod-slider-car">
							<li>
								<a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x525">
									<img src="http://placehold.it/500x525" alt="">
								</a>
							</li>
							<li>
								<a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x591">
									<img src="http://placehold.it/500x591" alt="">
								</a>
							</li>
							<li>
								<a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x525">
									<img src="http://placehold.it/500x525" alt="">
								</a>
							</li>
							<li>
								<a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
									<img src="http://placehold.it/500x722" alt="">
								</a>
							</li>
							<li>
								<a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
									<img src="http://placehold.it/500x722" alt="">
								</a>
							</li>
							<li>
								<a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
									<img src="http://placehold.it/500x722" alt="">
								</a>
							</li>
							<li>
								<a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
									<img src="http://placehold.it/500x722" alt="">
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
<!-- Main Content - end -->