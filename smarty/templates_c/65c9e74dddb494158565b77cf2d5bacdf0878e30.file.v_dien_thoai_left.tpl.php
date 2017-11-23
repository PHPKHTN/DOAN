<?php /* Smarty version Smarty-3.1.18, created on 2017-11-23 17:17:18
         compiled from "views\dien_thoai\v_dien_thoai_left.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158495a17029e5bab47-98585018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65c9e74dddb494158565b77cf2d5bacdf0878e30' => 
    array (
      0 => 'views\\dien_thoai\\v_dien_thoai_left.tpl',
      1 => 1511457302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158495a17029e5bab47-98585018',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'ds_hang_san_xuat' => 0,
    'hang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a17029e6148e4_29786743',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a17029e6148e4_29786743')) {function content_5a17029e6148e4_29786743($_smarty_tpl) {?>		<!-- Catalog Sidebar - start -->
		<div class="section-sb">
			<!-- Catalog Categories - start -->
			<div class="section-sb-current">
				<h3><a href="catalog-list.html"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<span id="section-sb-toggle" class="section-sb-toggle"><span class="section-sb-ico"></span></span></a></h3>
				<ul class="section-sb-list" id="section-sb-list">
					<li class="categ-1 has_child">
						<a>
							<span class="categ-1-label">Hãng sản xuất</span>
							<span class="section-sb-toggle"><span class="section-sb-ico"></span></span>
						</a>
						<ul>
							<?php  $_smarty_tpl->tpl_vars['hang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ds_hang_san_xuat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hang']->key => $_smarty_tpl->tpl_vars['hang']->value) {
$_smarty_tpl->tpl_vars['hang']->_loop = true;
?>
							<li class="categ-2">
								<a  href="javascript:void(0)" onclick="XL_dien_thoai(<?php echo $_smarty_tpl->tpl_vars['hang']->value->ma_hang_san_xuat;?>
)" >
									<span class="categ-2-label"><?php echo $_smarty_tpl->tpl_vars['hang']->value->ten_hang_san_xuat;?>
</span>
								</a>
							</li>
							<?php } ?>
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
		<!-- Catalog Sidebar - end --><?php }} ?>
