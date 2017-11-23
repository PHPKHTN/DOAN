<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.18, created on 2017-11-23 17:34:27
         compiled from "views\tin_tuc\v_tin_tuc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:208885a1706a33947a9-80948819%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.18, created on 2017-11-23 17:19:49
         compiled from "views\tin_tuc\v_tin_tuc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:297405a170335c25e90-51904534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> fb5ff16a3f30db068268a36e7988beb4de71b58e
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b55cf5e098ad60d55a105709d3b27a5b3d394145' => 
    array (
      0 => 'views\\tin_tuc\\v_tin_tuc.tpl',
<<<<<<< HEAD
      1 => 1511440286,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208885a1706a33947a9-80948819',
=======
      1 => 1511376934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '297405a170335c25e90-51904534',
>>>>>>> fb5ff16a3f30db068268a36e7988beb4de71b58e
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ds_tin_tuc' => 0,
    'ds' => 0,
    'date' => 0,
    'ds_phan_trang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
<<<<<<< HEAD
  'unifunc' => 'content_5a1706a3518663_32135845',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1706a3518663_32135845')) {function content_5a1706a3518663_32135845($_smarty_tpl) {?><!-- Main Content - start -->
=======
  'unifunc' => 'content_5a170335d00ac4_82844491',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a170335d00ac4_82844491')) {function content_5a170335d00ac4_82844491($_smarty_tpl) {?><!-- Main Content - start -->
>>>>>>> fb5ff16a3f30db068268a36e7988beb4de71b58e
<main>
<section class="container">


    <ul class="b-crumbs">
        <li>
            <a href="index.html">
                Trang chủ
            </a>
        </li>
        <li>
            <span>Tin tức</span>
        </li>
    </ul>
    <h1 class="main-ttl main-ttl-categs"><span>Tin tức</span></h1>
    <!-- Blog Categories -->

    <!-- Blog Posts - start -->
    <div class="posts-list blog-page">
        <?php  $_smarty_tpl->tpl_vars['ds'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ds']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ds_tin_tuc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->key => $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->_loop = true;
?>
        <div class="cf-sm-6 cf-lg-4 col-xs-6 col-sm-6 col-md-4 posts2-i">
            <a class="posts-i-img" href="chi_tiet_tin_tuc.php?ma_tin=<?php echo $_smarty_tpl->tpl_vars['ds']->value->ma_tin;?>
"><span style="background: url('public/images/tin_tuc/<?php echo $_smarty_tpl->tpl_vars['ds']->value->hinh;?>
')"></span></a>
            <?php $_smarty_tpl->tpl_vars['date'] = new Smarty_variable(date_create($_smarty_tpl->tpl_vars['ds']->value->ngay_tao), null, 0);?>
            <time class="posts-i-date" datetime="<?php echo $_smarty_tpl->tpl_vars['ds']->value->ngay_tao;?>
"><span><?php echo date_format($_smarty_tpl->tpl_vars['date']->value,"d");?>
</span> <?php echo date_format($_smarty_tpl->tpl_vars['date']->value,"M");?>
</time>
            <h3 class="posts-i-ttl"><a href="chi_tiet_tin_tuc.php?ma_tin=<?php echo $_smarty_tpl->tpl_vars['ds']->value->ma_tin;?>
"><?php echo $_smarty_tpl->tpl_vars['ds']->value->tieu_de_tin;?>
</a></h3>
            <p><?php echo $_smarty_tpl->tpl_vars['ds']->value->noi_dung_tom_tat;?>
</p><a href="chi_tiet_tin_tuc.php?ma_tin=<?php echo $_smarty_tpl->tpl_vars['ds']->value->ma_tin;?>
" class="posts-i-more">Read more...</a>
        </div>
        <?php } ?>
    </div>
    <!-- Blog Posts - end -->

    <!-- Pagination - start -->
    <ul class="pagi">
        <li><span><?php echo $_smarty_tpl->tpl_vars['ds_phan_trang']->value;?>
</span></li>
    </ul>
    <!-- Pagination - end -->
</section>
</main>
<!-- Main Content - end -->
<?php }} ?>
