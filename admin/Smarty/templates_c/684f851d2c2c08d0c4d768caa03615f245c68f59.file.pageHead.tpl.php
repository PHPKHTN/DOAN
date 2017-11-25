<?php /* Smarty version Smarty-3.1.14, created on 2017-11-24 10:38:54
         compiled from "Smarty\templates\pageHead.tpl" */ ?>
<?php /*%%SmartyHeaderCode:284555a0ad43cdd0498-30153070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '684f851d2c2c08d0c4d768caa03615f245c68f59' => 
    array (
      0 => 'Smarty\\templates\\pageHead.tpl',
      1 => 1511270304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '284555a0ad43cdd0498-30153070',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a0ad43cdd4314_15806603',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0ad43cdd4314_15806603')) {function content_5a0ad43cdd4314_15806603($_smarty_tpl) {?> <h2>Quản trị Nhà Hàng</h2>
			<p id="page-intro">Chào <?php echo $_SESSION['fullname'];?>
</p>
			<ul class="shortcut-buttons-set">
				
				<li><a class="shortcut-button" href="themtintuc.php"><span>
					<img src="public/layout/resources/images/icons/pencil_48.png" alt="icon" /><br />
					Thêm sản phẩm
				</span></a></li>
				
				<li><a class="shortcut-button" href="themtintuc.php"><span>
					<img src="public/layout/resources/images/icons/pencil_48.png" alt="icon" /><br />
					Thêm nhà sản xuất
				</span></a></li>

				<li><a class="shortcut-button" href="themtintuc.php"><span>
					<img src="public/layout/resources/images/icons/pencil_48.png" alt="icon" /><br />
					Thêm loại sản phẩm
				</span></a></li>

				<li><a class="shortcut-button" href="themtintuc.php"><span>
					<img src="public/layout/resources/images/icons/pencil_48.png" alt="icon" /><br />
					Thêm user
				</span></a></li>
				
				
			</ul><!-- End .shortcut-buttons-set -->
			
			<?php }} ?>