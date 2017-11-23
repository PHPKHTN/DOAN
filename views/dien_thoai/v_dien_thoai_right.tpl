<div class="prod-items section-items">
				{foreach $ds_dien_thoai as $ds}
				<div class="prod-i">
					<div class="prod-i-top">
						<a href="chi_tiet_dien_thoai.php?ma_sp={$ds->ma_san_pham}" class="prod-i-img"><!-- NO SPACE --><img src="public/images/san_pham/{$ds->hinh}" alt="Adipisci aperiam commodi"><!-- NO SPACE --></a>
						<p class="prod-i-info">
							<a href="#" class="prod-i-favorites"><span>Wishlist</span><i class="fa fa-heart"></i></a>
							<a href="#" class="qview-btn prod-i-qview" ><span>Quick View</span><i class="fa fa-search"></i></a>
							<a class="prod-i-compare" href="#"><span>Compare</span><i class="fa fa-bar-chart"></i></a>
						</p>
						<a href="#" class="prod-i-buy">Add to cart</a>
						<p class="prod-i-properties-label"><i class="fa fa-info"></i></p>

						<div class="prod-i-properties">
							<dl>
								<dt>Mô tả</dt>
								<dd>{$ds->mo_ta}<br></dd>
							</dl>
						</div>
					</div>
					<h3>
						<a href="chi_tiet_dien_thoai.php?ma_sp={$ds->ma_san_pham}">{$ds->ten_san_pham}</a>
					</h3>
					<p class="prod-i-price">
						<b>{number_format($ds->don_gia,0,",",".")}đ</b>
					</p>
				</div>
                {/foreach}
			</div>

			<!-- Pagination - start -->
			<ul class="pagi">
				<li><span>{$ds_phan_trang}</span></li>
			</ul>