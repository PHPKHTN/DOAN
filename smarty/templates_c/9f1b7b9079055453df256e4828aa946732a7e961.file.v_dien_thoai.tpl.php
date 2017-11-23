<?php /* Smarty version Smarty-3.1.18, created on 2017-11-23 11:24:57
         compiled from "views\dien_thoai\v_dien_thoai.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122745a15ae0bb1e3d8-09785819%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f1b7b9079055453df256e4828aa946732a7e961' => 
    array (
      0 => 'views\\dien_thoai\\v_dien_thoai.tpl',
      1 => 1511435796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122745a15ae0bb1e3d8-09785819',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a15ae0bb6af22_71763535',
  'variables' => 
  array (
    'title' => 0,
    'ds' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a15ae0bb6af22_71763535')) {function content_5a15ae0bb6af22_71763535($_smarty_tpl) {?><!-- Main Content - start -->
<main>
	<section class="container">

		
		<h1 class="main-ttl"><span><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span></h1>
			<?php echo $_smarty_tpl->getSubTemplate ("views/dien_thoai/v_dien_thoai_left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<!-- Catalog Items | Gallery V1 - start -->
		<div class="section-cont" id="ds_dien_thoai">
			<?php echo $_smarty_tpl->getSubTemplate ("views/dien_thoai/v_dien_thoai_right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
