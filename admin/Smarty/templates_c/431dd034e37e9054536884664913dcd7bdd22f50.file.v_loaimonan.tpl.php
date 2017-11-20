<?php /* Smarty version Smarty-3.1.14, created on 2017-11-14 14:41:09
         compiled from "views\loaimonan\v_loaimonan.tpl" */ ?>
<?php /*%%SmartyHeaderCode:236585a0ae9675aca05-78060426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '431dd034e37e9054536884664913dcd7bdd22f50' => 
    array (
      0 => 'views\\loaimonan\\v_loaimonan.tpl',
      1 => 1510666864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '236585a0ae9675aca05-78060426',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a0ae9675d7984_53245877',
  'variables' => 
  array (
    'tieude' => 0,
    'loai_mon_an' => 0,
    'loai' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0ae9675d7984_53245877')) {function content_5a0ae9675d7984_53245877($_smarty_tpl) {?><div class="content-box-header">
  <h3><?php echo $_smarty_tpl->tpl_vars['tieude']->value;?>
</h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <table>
      <thead>
        <tr>
          <th><input class="check-all" type="checkbox" /></th>
          <th>Mã loại</th>
          <th>Tên loại</th>
          <th>Hình</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tfoot>
          <tr>
            <td colspan="6">
            <div class="pagination"> [1][2][3] </div>
            <div class="clear"></div></td>
          </tr>
        </tfoot>
      <tbody>
        <?php  $_smarty_tpl->tpl_vars['loai'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['loai']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['loai_mon_an']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['loai']->key => $_smarty_tpl->tpl_vars['loai']->value){
$_smarty_tpl->tpl_vars['loai']->_loop = true;
?>
        <tr>
          <td><input type="checkbox" /></td>
          <td><?php echo $_smarty_tpl->tpl_vars['loai']->value->ma_loai;?>
</td>
          <td><a href="sualoaimonan.php?ma_loai=<?php echo $_smarty_tpl->tpl_vars['loai']->value->ma_loai;?>
" title="Edit"><?php echo $_smarty_tpl->tpl_vars['loai']->value->ten_loai;?>
</a></td>
          <td><img src="../public/images/hinh_loai_mon_an/<?php echo $_smarty_tpl->tpl_vars['loai']->value->hinh;?>
" width="80px"></td>
          <td><!-- Icons --> 
            <a href="sualoaimonan.php?ma_loai=<?php echo $_smarty_tpl->tpl_vars['loai']->value->ma_loai;?>
" title="Edit" >
            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
            </a> 
            <a href="javascript:void(0)"  onClick="Hoi_xoa_Loai_mon(<?php echo $_smarty_tpl->tpl_vars['loai']->value->ma_loai;?>
)" title="Delete"> 
            <img src="public/layout/resources/images/icons/cross.png" alt="Delete" />
            </a>
            </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
   
  </div>
  
</div>
<?php }} ?>