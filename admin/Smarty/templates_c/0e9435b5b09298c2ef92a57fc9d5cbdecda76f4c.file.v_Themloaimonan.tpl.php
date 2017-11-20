<?php /* Smarty version Smarty-3.1.14, created on 2017-11-14 14:13:06
         compiled from "views\loaimonan\v_Themloaimonan.tpl" */ ?>
<?php /*%%SmartyHeaderCode:318945a0ae9971e2d30-00787928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e9435b5b09298c2ef92a57fc9d5cbdecda76f4c' => 
    array (
      0 => 'views\\loaimonan\\v_Themloaimonan.tpl',
      1 => 1510665181,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '318945a0ae9971e2d30-00787928',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a0ae997209e42_07703242',
  'variables' => 
  array (
    'tieude' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0ae997209e42_07703242')) {function content_5a0ae997209e42_07703242($_smarty_tpl) {?><div class="content-box-header">
  <h3><?php echo $_smarty_tpl->tpl_vars['tieude']->value;?>
</h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
<!-- // ma_loai, ten_loai, mo_ta, hinh-->
    <form method="post" enctype="multipart/form-data">
        <fieldset>
          
          <p>
            <label>Tên loại món</label>
            <input class="text-input small-input" type="text" id="ten_loai" name="ten_loai" />
          </p>
          <p>
            <label>Mô tả</label>
            <textarea name="mo_ta" id="mo_ta"  class="ckeditor" ></textarea>
            
          </p>
          <p>
            <label>Hình loại món</label>
            <input type="file" name="hinh" />
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" onclick="" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='loaimonan.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
	   
  </div>
  
</div>
<?php }} ?>