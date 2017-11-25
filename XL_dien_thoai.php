<?php
$ma_hang=$_POST["ma_hang_san_xuat"];
include("models/m_dien_thoai.php");
$m_dien_thoai=new M_dien_thoai();
$dien_thoai=$m_dien_thoai->Doc_dien_thoai_theo_hang(0,0,$ma_hang);
?>
<div class="prod-items section-items">
				<?php
				foreach($dien_thoai as $dt){
				?>
				<div class="prod-i">
					<div class="prod-i-top">
						<a href="chi_tiet_dien_thoai.php?ma_sp=<?php echo $dt->ma_san_pham ?>" class="prod-i-img"><!-- NO SPACE --><img src="public/images/san_pham/<?php echo $dt->hinh; ?>" alt="Adipisci aperiam commodi"><!-- NO SPACE --></a>
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
								<dd><?php echo $dt->mo_ta; ?><br></dd>
							</dl>
						</div>
					</div>
					<h3>
						<a href="chi_tiet_dien_thoai.php?ma_sp=<?php echo $dt->ma_san_pham ?>"><?php echo $dt->ten_san_pham; ?></a>
					</h3>
					<p class="prod-i-price">
						<b><?php echo $dt->don_gia; ?>đ</b>
					</p>
				</div>
				<?php
					}
				?>
			</div>

			<!-- Pagination - start -->
			<ul class="pagi">
				<li><span></span></li>
			</ul>