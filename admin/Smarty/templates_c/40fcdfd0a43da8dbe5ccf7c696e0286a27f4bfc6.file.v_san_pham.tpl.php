<?php /* Smarty version Smarty-3.1.14, created on 2017-11-24 11:03:24
         compiled from "views\v_san_pham.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211535a17fb94b0f273-87821920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40fcdfd0a43da8dbe5ccf7c696e0286a27f4bfc6' => 
    array (
      0 => 'views\\v_san_pham.tpl',
      1 => 1511521401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211535a17fb94b0f273-87821920',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a17fb94b73540_86967662',
  'variables' => 
  array (
    'ds_san_pham' => 0,
    'sp' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a17fb94b73540_86967662')) {function content_5a17fb94b73540_86967662($_smarty_tpl) {?><div class="content-box-header">
  <h3></h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <table>
      <thead>
        <tr>
          <th><input class="check-all" type="checkbox" /></th>
          <th>Mã sản phẩm</th>
          <th>Tên sản phẩm</th>
          <th>Đơn giá</th>
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
        <?php  $_smarty_tpl->tpl_vars['sp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ds_san_pham']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sp']->key => $_smarty_tpl->tpl_vars['sp']->value){
$_smarty_tpl->tpl_vars['sp']->_loop = true;
?>
        <tr>
          <td><input type="checkbox" /></td>
          <td><?php echo $_smarty_tpl->tpl_vars['sp']->value->ma_san_pham;?>
</td>
          <td><a href="#" title="Edit"><?php echo $_smarty_tpl->tpl_vars['sp']->value->ten_san_pham;?>
</a></td>
          <td><?php echo $_smarty_tpl->tpl_vars['sp']->value->don_gia;?>
</td>
          <td><img src="#" width="80px"></td>
          <td><!-- Icons --> 
            <a href="#" title="Edit" >
            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
            </a> 
            <a href="javascript:void(0)"" title="Delete"> 
            <img src="public/layout/resources/images/icons/cross.png" alt="Delete" />
            </a>
            </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
   
  </div>
  
</div><?php }} ?>