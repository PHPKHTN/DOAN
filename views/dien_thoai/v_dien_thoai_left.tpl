		<!-- Catalog Sidebar - start -->
		<div class="section-sb">
			<!-- Catalog Categories - start -->
			<div class="section-sb-current">
				<h3><a href="catalog-list.html">{$title}<span id="section-sb-toggle" class="section-sb-toggle"><span class="section-sb-ico"></span></span></a></h3>
				<ul class="section-sb-list" id="section-sb-list">
					<li class="categ-1 has_child">
						<a>
							<span class="categ-1-label">Hãng sản xuất</span>
							<span class="section-sb-toggle"><span class="section-sb-ico"></span></span>
						</a>
						<ul>
							{foreach $ds_hang_san_xuat as $hang}
							<li class="categ-2">
								<a  href="javascript:void(0)" onclick="XL_dien_thoai({$hang->ma_hang_san_xuat})" >
									<span class="categ-2-label">{$hang->ten_hang_san_xuat}</span>
								</a>
							</li>
							{/foreach}
						</ul>
					</li>
					<li class="categ-1 has_child">
						<a href="catalog-list.html">
							<span class="categ-1-label">Mức giá(Đang cập nhật)</span>
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
							<span class="categ-1-label">Sắp xếp theo giá tăng dần(Đang cập nhật)</span>
						</a>
					</li>
					<li class="categ-1">
						<a href="catalog-list.html">
							<span class="categ-1-label">Sắp xếp theo giá giảm dần(Đang cập nhật)</span>
						</a>
					</li>
				</ul>
			</div>
			<!-- Catalog Categories - end -->

			

		</div>
		<!-- Catalog Sidebar - end -->