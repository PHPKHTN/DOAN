<?php /* Smarty version Smarty-3.1.18, created on 2017-11-20 18:52:21
         compiled from "smarty\templates\dien_thoai\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110615a131df910b219-36262057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f844e587f457b2323078a2638526841b1b80a395' => 
    array (
      0 => 'smarty\\templates\\dien_thoai\\layout.tpl',
      1 => 1511202876,
      2 => 'file',
    ),
    'e0734278ae9da0e34a12899ed984b77d116c8cf5' => 
    array (
      0 => 'smarty\\templates\\layout.tpl',
      1 => 1511202891,
      2 => 'file',
    ),
    'd83077e51f0c7f8703094d8c498c56a0adc8e871' => 
    array (
      0 => 'smarty\\templates\\slider.tpl',
      1 => 1511200692,
      2 => 'file',
    ),
    '6652bf75f43eb8665356b88e8a0e2401680ee1b9' => 
    array (
      0 => 'smarty\\templates\\header.tpl',
      1 => 1511203936,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110615a131df910b219-36262057',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a131df91726a8_45700189',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a131df91726a8_45700189')) {function content_5a131df91726a8_45700189($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php /*  Call merged included template "header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '110615a131df910b219-36262057');
content_5a132465a63de3_15405999($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "header.tpl" */?>
<?php echo $_smarty_tpl->getSubTemplate ("content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2017-11-20 18:52:21
         compiled from "smarty\templates\header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a132465a63de3_15405999')) {function content_5a132465a63de3_15405999($_smarty_tpl) {?><header class="header">

    <!-- Topbar - start -->
    <div class="header_top">
        <div class="container">
            <ul class="contactinfo nav nav-pills">
                <li>
                    <i class='fa fa-phone'></i> +7 777 123 1575
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
                            <a href="cart.html">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="shop-menu-ttl">Cart</span>
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

                <!-- Catalog menu - start -->
                <div class="topcatalog">
                    <a class="topcatalog-btn" href="catalog-list.html"><span>All</span> catalog</a>
                    <ul class="topcatalog-list">
                        <li>
                            <a href="catalog-list.html">
                                Women
                            </a>
                            <i class="fa fa-angle-right"></i>
                            <ul>
                                <li>
                                    <a href="catalog-list.html">
                                        Knitwear
                                    </a>
                                </li>
                                <li>
                                    <a href="catalog-list.html">
                                        Dresses
                                    </a>
                                </li>
                                <li>
                                    <a href="catalog-list.html">
                                        Bags
                                    </a>
                                    <i class="fa fa-angle-right"></i>
                                    <ul>
                                        <li>
                                            <a href="catalog-list.html">
                                                Shoulder Bags
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Falabella
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Becks
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Clutches
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Travel Bags
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="catalog-list.html">
                                        Accessories
                                    </a>
                                    <i class="fa fa-angle-right"></i>
                                    <ul>
                                        <li>
                                            <a href="catalog-list.html">
                                                Sunglasses
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Tech Cases
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Jewelry
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Stella
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="catalog-list.html">
                                        Coats & Jackets
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="catalog-list.html">
                                Men
                            </a>
                            <i class="fa fa-angle-right"></i>
                            <ul>
                                <li>
                                    <a href="catalog-list.html">
                                        Jackets & Blazers
                                    </a>
                                </li>
                                <li>
                                    <a href="catalog-list.html">
                                        Pants & Shorts
                                    </a>
                                </li>
                                <li>
                                    <a href="catalog-list.html">
                                        Accessories
                                    </a>
                                    <i class="fa fa-angle-right"></i>
                                    <ul>
                                        <li>
                                            <a href="catalog-list.html">
                                                Bags
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Sunglasses
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Other Accessories
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="catalog-list.html">
                                        Suiting
                                    </a>
                                </li>
                                <li>
                                    <a href="catalog-list.html">
                                        Shirts
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="catalog-list.html">
                                Kids
                            </a>
                            <i class="fa fa-angle-right"></i>
                            <ul>
                                <li>
                                    <a href="catalog-list.html">
                                        Girls
                                    </a>
                                    <i class="fa fa-angle-right"></i>
                                    <ul>
                                        <li>
                                            <a href="catalog-list.html">
                                                Outerwear
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                T-Shirts
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Blouses & Shirts
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Pants & Shorts
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Sleepwear & Underwear
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Skirts
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="catalog-list.html">
                                        Boys
                                    </a>
                                    <i class="fa fa-angle-right"></i>
                                    <ul>
                                        <li>
                                            <a href="catalog-list.html">
                                                Shoes & Accessories
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Jumpers & Cardigans
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Shirts
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Outerwear
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Swimwear
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="catalog-list.html">
                                        Baby
                                    </a>
                                    <i class="fa fa-angle-right"></i>
                                    <ul>
                                        <li>
                                            <a href="catalog-list.html">
                                                Baby Sets
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Dresses & All-In-One
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Pants & Shorts
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Shoes & Accessories
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                T-shirts
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Outerwear
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="catalog-list.html">
                                Shoes
                            </a>
                            <i class="fa fa-angle-right"></i>
                            <ul>
                                <li>
                                    <a href="catalog-list.html">
                                        Women
                                    </a>
                                    <i class="fa fa-angle-right"></i>
                                    <ul>
                                        <li>
                                            <a href="catalog-list.html">
                                                Elyse
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Odette
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Brody
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Flats
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Sandals
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="catalog-list.html">
                                        Men
                                    </a>
                                    <i class="fa fa-angle-right"></i>
                                    <ul>
                                        <li>
                                            <a href="catalog-list.html">
                                                Casual Shoes
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Sneakers
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Sandals
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Boots
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Mules & Clogs
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="catalog-list.html">
                                        Children's
                                    </a>
                                    <i class="fa fa-angle-right"></i>
                                    <ul>
                                        <li>
                                            <a href="catalog-list.html">
                                                Girls
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Boys
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="catalog-list.html">
                                        Baby Shoe
                                    </a>
                                    <i class="fa fa-angle-right"></i>
                                    <ul>
                                        <li>
                                            <a href="catalog-list.html">
                                                First Walkers
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Sneakers
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Boots
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Sandals & Clogs
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Catalog menu - end -->

                <!-- Main menu - start -->
                <button type="button" class="mainmenu-btn">Menu</button>

                <ul class="mainmenu">
                    <li>
                        <a href=".">
                            Trang chủ
                        </a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="dien_thoai.php">
                            Điện thoại <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="catalog-list.html">
                                    Catalog List - Style 1
                                </a>
                            </li>
                            <li>
                                <a href="catalog-list-2.html">
                                    Catalog List - Style 2
                                </a>
                            </li>
                            <li>
                                <a href="catalog-gallery.html">
                                    Catalog Gallery - Style 1
                                </a>
                            </li>
                            <li>
                                <a href="catalog-gallery-2.html">
                                    Catalog Gallery - Style 2
                                </a>
                            </li>
                            <li>
                                <a href="catalog-table.html">
                                    Catalog Table
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="laptop.php">
                            Laptop <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="product.html">
                                    Product - Style 1 (Slider)
                                </a>
                            </li>
                            <li>
                                <a href="product-2.html">
                                    Product - Style 2 (Scroll)
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="tablet.php">
                            Tablet <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="product.html">
                                    Product - Style 1 (Slider)
                                </a>
                            </li>
                            <li>
                                <a href="product-2.html">
                                    Product - Style 2 (Scroll)
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="phu_kien.php">
                            Phụ Kiện <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="product.html">
                                    Product - Style 1 (Slider)
                                </a>
                            </li>
                            <li>
                                <a href="product-2.html">
                                    Product - Style 2 (Scroll)
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="tin+tuc.php">
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

            </nav>		</div>
    </div>
    <!-- Topmenu - end -->

</header>
<!-- Header - end -->
<main>
    <section class="container">
        <?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2017-11-20 18:52:21
         compiled from "smarty\templates\slider.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a132465a79fe4_88178962')) {function content_5a132465a79fe4_88178962($_smarty_tpl) {?><div class="fr-slider-wrap">
            <div class="fr-slider">
                <ul class="slides">
                    <li>
                        <img src="public/images/layout/slider/slide1.jpg" alt="">
                        <div class="fr-slider-cont">
                            <h3>MEGA SALE -30%</h3>
                            <p>Winter collection for women's. <br>We all have choices for you. Check it out!</p>
                            <p class="fr-slider-more-wrap">
                                <a class="fr-slider-more" href="#">View collection</a>
                            </p>
                        </div>
                    </li>
                    <li>
                        <img src="public/images/layout/slider/slide1.jpg" alt="">
                        <div class="fr-slider-cont">
                            <h3>NEW COLLECTION</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>Aliquam consequuntur dolorem doloribus fuga harum</p>
                            <p class="fr-slider-more-wrap">
                                <a class="fr-slider-more" href="#">Shopping now</a>
                            </p>
                        </div>
                    </li>
                    <li>
                        <img src="public/images/layout/slider/slide1.jpg" alt="">
                        <div class="fr-slider-cont">
                            <h3>SUMMER TRENDS</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>Aliquam consequuntur dolorem doloribus fuga harum</p>
                            <p class="fr-slider-more-wrap">
                                <a class="fr-slider-more" href="#">Start shopping</a>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div><?php }} ?>
