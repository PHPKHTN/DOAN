<?php /* Smarty version Smarty-3.1.18, created on 2017-11-24 08:07:59
         compiled from "views\dien_thoai\v_dien_thoai_right.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26705a17029e620467-83734049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cf418b445abafdf75441b951d31edf2094cd10e' => 
    array (
      0 => 'views\\dien_thoai\\v_dien_thoai_right.tpl',
      1 => 1511457304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26705a17029e620467-83734049',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a17029e685d76_84488495',
  'variables' => 
  array (
    'ds_dien_thoai' => 0,
    'ds' => 0,
    'ds_phan_trang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a17029e685d76_84488495')) {function content_5a17029e685d76_84488495($_smarty_tpl) {?><div class="prod-items section-items">
				<?php  $_smarty_tpl->tpl_vars['ds'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ds']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ds_dien_thoai']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->key => $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->_loop = true;
?>
				<div class="prod-i">
					<div class="prod-i-top">
						<a href="chi_tiet_dien_thoai.php?ma_sp=<?php echo $_smarty_tpl->tpl_vars['ds']->value->ma_san_pham;?>
" class="prod-i-img"><!-- NO SPACE --><img src="public/images/san_pham/<?php echo $_smarty_tpl->tpl_vars['ds']->value->hinh;?>
" alt="Adipisci aperiam commodi"><!-- NO SPACE --></a>
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
								<dd><?php echo $_smarty_tpl->tpl_vars['ds']->value->mo_ta;?>
<br></dd>
							</dl>
						</div>
					</div>
					<h3>
						<a href="chi_tiet_dien_thoai.php?ma_sp=<?php echo $_smarty_tpl->tpl_vars['ds']->value->ma_san_pham;?>
"><?php echo $_smarty_tpl->tpl_vars['ds']->value->ten_san_pham;?>
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
			</ul><?php }} ?>
