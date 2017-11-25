<?php /* Smarty version Smarty-3.1.18, created on 2017-11-25 08:27:34
         compiled from "smarty\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:251085a184098035976-24416975%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6652bf75f43eb8665356b88e8a0e2401680ee1b9' => 
    array (
      0 => 'smarty\\templates\\header.tpl',
      1 => 1511585078,
      2 => 'file',
    ),
    'd83077e51f0c7f8703094d8c498c56a0adc8e871' => 
    array (
      0 => 'smarty\\templates\\slider.tpl',
      1 => 1511598451,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '251085a184098035976-24416975',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a184098077a07_61741462',
  'variables' => 
  array (
    'v_nav' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a184098077a07_61741462')) {function content_5a184098077a07_61741462($_smarty_tpl) {?><header class="header">
  

    <!-- Topbar - start -->
    <div class="header_top">
        <div class="container">
            <ul class="contactinfo nav nav-pills">
                <li>
                    <i class='fa fa-phone'></i> (028) 38 399 000
                </li>
                <li>
                    <i class="fa fa-envelope"></i> admin@real-web.pro
                </li>
            </ul>
            <!-- Social links -->
            <ul class="social-icons nav navbar-nav">
                <li>
                    <a href="http://facebook.com" rel="nofollow" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="http://google.com" rel="nofollow" target="_blank">
                        <i class="fa fa-google-plus"></i>
                    </a>
                </li>
                <li>
                    <a href="http://twitter.com" rel="nofollow" target="_blank">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="http://vk.com" rel="nofollow" target="_blank">
                        <i class="fa fa-vk"></i>
                    </a>
                </li>
                <li>
                    <a href="http://instagram.com" rel="nofollow" target="_blank">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
            </ul>		</div>
    </div>
    <!-- Topbar - end -->

    <!-- Logo, Shop-menu - start -->
    <div class="header-middle">
        <div class="container header-middle-cont">
            <div class="toplogo">
                <a href=".">
                    <img src="public/images/layout/logo.png" alt="AllStore - MultiConcept eCommerce Template">
                </a>
            </div>
            <div class="shop-menu">
                <ul>

                    <li>
                        <a href="wishlist.html">
                            <i class="fa fa-heart"></i>
                            <span class="shop-menu-ttl">Wishlist</span>
                            (<span id="topbar-favorites">1</span>)
                        </a>
                    </li>

                    <li>
                        <a href="compare.html">
                            <i class="fa fa-bar-chart"></i>
                            <span class="shop-menu-ttl">Compare</span> (5)
                        </a>
                    </li>

                    <li class="topauth">
                        <a href="auth.html">
                            <i class="fa fa-lock"></i>
                            <span class="shop-menu-ttl">Registration</span>
                        </a>
                        <a href="auth.html">
                            <span class="shop-menu-ttl">Login</span>
                        </a>
                    </li>

                    <li>
                        <div class="h-cart">
                            <a href="gio_hang.php">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="shop-menu-ttl">Giỏ hàng</span>
                                (<b>0</b>)
                            </a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <!-- Logo, Shop-menu - end -->

    <!-- Topmenu - start -->
    <div class="header-bottom">
        <div class="container">
            <nav class="topmenu">

                <!-- Main menu - start -->
                <button type="button" class="mainmenu-btn">Menu</button>

                <ul class="mainmenu">
                    <li>
                        <a href=".">
                            Trang chủ
                        </a>
                    </li>
                    <?php if (isset($_smarty_tpl->tpl_vars['v_nav']->value)) {?>
                        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['v_nav']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php }?>
                    <li>
                        <a href="tin_tuc.php">
                            Tin Tức
                        </a>
                    </li>
                    <li>
                        <a href="lien_he.php">
                            Liên Hệ
                        </a>
                    </li>  
                    <li class="mainmenu-more">
                        <span>...</span>
                        <ul class="mainmenu-sub"></ul>
                    </li>
                </ul>
                <!-- Main menu - end -->

                <!-- Search - start -->
                <div class="topsearch">
                    <a id="topsearch-btn" class="topsearch-btn" href="#"><i class="fa fa-search"></i></a>
                    <form class="topsearch-form" action="#">
                        <input type="text" placeholder="Tìm kiếm ...">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <!-- Search - end -->

            </nav>
        </div>
    </div>
    <!-- Topmenu - end -->

</header>
<!-- Header - end -->
<main>
    <section class="container">
        <?php /*  Call merged included template "slider.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '251085a184098035976-24416975');
content_5a1929768a2343_78913892($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "slider.tpl" */?><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2017-11-25 08:27:34
         compiled from "smarty\templates\slider.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a1929768a2343_78913892')) {function content_5a1929768a2343_78913892($_smarty_tpl) {?><div class="fr-slider-wrap">
            <div class="fr-slider">
                <ul class="slides">
                    <li>
                        <img src="public/images/category-heading.jpg" alt="dt_1">
                    </li>
                    <li>
                        <img src="public/images/slide-1.jpg" alt="dt_2">
                    </li>
                    <li>
                        <img src="public/images/slide-2.png" alt="dt_3">
                    </li>
                </ul>
            </div>
        </div><?php }} ?>
