<?php /* Smarty version Smarty-3.1.18, created on 2017-11-24 15:55:33
         compiled from "views\v_nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:258395a1840ae92f857-12309728%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e8b25a40b54f1433f384caa1eb5d95389effdda' => 
    array (
      0 => 'views\\v_nav.tpl',
      1 => 1511538930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '258395a1840ae92f857-12309728',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a1840ae970633_67067484',
  'variables' => 
  array (
    'ds_loai' => 0,
    'loai' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1840ae970633_67067484')) {function content_5a1840ae970633_67067484($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['loai'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['loai']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ds_loai']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['loai']->key => $_smarty_tpl->tpl_vars['loai']->value) {
$_smarty_tpl->tpl_vars['loai']->_loop = true;
?>
	<li>
    	<a href="san_pham.php?ma_loai=<?php echo $_smarty_tpl->tpl_vars['loai']->value->ma_the_loai;?>
">
        	<?php echo $_smarty_tpl->tpl_vars['loai']->value->ten_loai;?>
             
        </a>
    </li>
<?php } ?><?php }} ?>
