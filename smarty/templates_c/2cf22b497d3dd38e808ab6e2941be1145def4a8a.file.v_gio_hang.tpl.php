<?php /* Smarty version Smarty-3.1.18, created on 2017-11-24 17:58:05
         compiled from "views\gio_hang\v_gio_hang.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2318422705a17d719c4de24-80316890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cf22b497d3dd38e808ab6e2941be1145def4a8a' => 
    array (
      0 => 'views\\gio_hang\\v_gio_hang.tpl',
      1 => 1511546281,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2318422705a17d719c4de24-80316890',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a17d719c84936_74337991',
  'variables' => 
  array (
    'ds_san_pham' => 0,
    'ds' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a17d719c84936_74337991')) {function content_5a17d719c84936_74337991($_smarty_tpl) {?><!-- Main Content - start -->
<main>
    <section class="container stylization maincont">
        <?php if (isset($_smarty_tpl->tpl_vars['ds_san_pham']->value)) {?>
            <?php echo var_dump($_smarty_tpl->tpl_vars['ds_san_pham']->value);?>

        <ul class="b-crumbs">
            <li>
                <a href="index.html">
                    Trang chủ
                </a>
            </li>
            <li>
                <span>Giỏ hàng</span>
            </li>
        </ul>
        <h1 class="main-ttl"><span>Giỏ hàng</span></h1>
        <!-- Cart Items - start -->
        <form action="gio_hang.php" method="post">
            <?php if (isset($_smarty_tpl->tpl_vars['ds_san_pham']->value)) {?>
            <div class="cart-items-wrap">
                <table class="cart-items">
                    <thead>
                    <tr>
                        <td class="cart-image">Hình</td>
                        <td class="cart-ttl">Sản phầm</td>
                        <td class="cart-price">Giá</td>
                        <td class="cart-quantity">Số lượng</td>
                        <td class="cart-summ">Tổng</td>
                        <td class="cart-del">&nbsp;</td>
                    </tr>
                    </thead>
                    <?php  $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['ds']->value] = new Smarty_Variable; $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['ds']->value]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ds_san_pham']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['ds']->value]->key => $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['ds']->value]->value) {
$_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['ds']->value]->_loop = true;
?>
                    <tbody>
                    <tr>
                        <td class="cart-image">
                            <a href="product.html">
                                <img src="http://placehold.it/61x80" alt="Similique delectus totam">
                            </a>
                        </td>
                        <td class="cart-ttl">
                            <a href="product.html">Similique delectus totam</a>
                            <p>Color: Red</p>
                            <p>Size: XS</p>
                        </td>
                        <td class="cart-price">
                            <b>$220</b>
                        </td>
                        <td class="cart-quantity">
                            <p class="cart-qnt">
                                <input value="1" type="text">
                                <a href="#" class="cart-plus"><i class="fa fa-angle-up"></i></a>
                                <a href="#" class="cart-minus"><i class="fa fa-angle-down"></i></a>
                            </p>
                        </td>
                        <td class="cart-summ">
                            <b>$220</b>
                            <p class="cart-forone">unit price <b>$220</b></p>
                        </td>
                        <td class="cart-del">
                            <a href="#" class="cart-remove"></a>
                        </td>
                    </tr>
                    </tbody>
                    <?php } ?>
                </table>
            </div>
            <?php }?>
            <ul class="cart-total">
                <li class="cart-summ">TOTAL: <b>$815</b></li>
            </ul>
            <div class="cart-submit">
                <div class="cart-coupon">
                    <input placeholder="your coupon" type="text">
                    <a class="cart-coupon-btn" href="#"><img src="img/ok.png" alt="your coupon"></a>
                </div>
                <a href="#" class="cart-submit-btn">Checkout</a>
                <a href="#" class="cart-clear">Clear cart</a>
            </div>
        </form>
        <!-- Cart Items - end -->
        <?php }?>
    </section>
</main>
<!-- Main Content - end --><?php }} ?>
