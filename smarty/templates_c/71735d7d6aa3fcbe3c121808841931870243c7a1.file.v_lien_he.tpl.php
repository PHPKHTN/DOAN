<?php /* Smarty version Smarty-3.1.18, created on 2017-11-25 08:33:39
         compiled from "views\lien_he\v_lien_he.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200615a1702ebea1c23-30164342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71735d7d6aa3fcbe3c121808841931870243c7a1' => 
    array (
      0 => 'views\\lien_he\\v_lien_he.tpl',
      1 => 1511457304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200615a1702ebea1c23-30164342',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a1702ebed0a38_80541886',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1702ebed0a38_80541886')) {function content_5a1702ebed0a38_80541886($_smarty_tpl) {?><!-- Main Content - start -->
<main>
    <section class="container stylization maincont">


        <ul class="b-crumbs">
            <li>
                <a href="index.html">
                    Home
                </a>
            </li>
            <li>
                <span>Contacts</span>
            </li>
        </ul>
        <h1 class="main-ttl"><span>Contacts</span></h1>
        <!-- Contacts - start -->
        <br>
        <div class="iconbox-wrap">
            <div class="row iconbox-list">
                <div class="cf-xs-6 cf-sm-4 cf-lg-4 col-xs-6 col-sm-4 iconbox-i">
                    <h3 class="iconbox-i-ttl"> (028) 38 399 000</h3>
                    Let's have a<br>
                    talk together
                    <span class="iconbox-i-margin"></span>
                </div>
                <div class="cf-xs-6 cf-sm-4 cf-lg-4 col-xs-6 col-sm-4 iconbox-i">
                    <h3 class="iconbox-i-ttl">Địa chỉ</h3>
                    135 Nguyen Chi Thanh,<br>
                    Ho Chi Minh City
                    <span class="iconbox-i-margin"></span>
                </div>
                <div class="cf-xs-6 cf-sm-4 cf-lg-4 col-xs-6 col-sm-4 iconbox-i">
                    <h3 class="iconbox-i-ttl">Lịch làm việc</h3>
                    Thứ2-Thứ7: 07:00-22:00<br>
                    Chủ nhật: Nghỉ	
                    <span class="iconbox-i-margin"></span>
                </div>
            </div>
        </div>

        <!-- Contacts Info - end -->
        <div class="social-wrap">
            <div class="social-list">
                <div class="social-i">
                    <a rel="nofollow" target="_blank" href="http://facebook.com/">
                        <p class="social-i-img">
                            <i class="fa fa-facebook"></i>
                        </p>
                        <p class="social-i-ttl">Facebook</p>
                    </a>
                </div>
                <div class="social-i">
                    <a rel="nofollow" target="_blank" href="http://google.com/">
                        <p class="social-i-img">
                            <i class="fa fa-google-plus"></i>
                        </p>
                        <p class="social-i-ttl">Google +</p>
                    </a>
                </div>
                <div class="social-i">
                    <a rel="nofollow" target="_blank" href="http://twitter.com/">
                        <p class="social-i-img">
                            <i class="fa fa-twitter"></i>
                        </p>
                        <p class="social-i-ttl">Twitter</p>
                    </a>
                </div>
                <div class="social-i">
                    <a rel="nofollow" target="_blank" href="http://vk.com/">
                        <p class="social-i-img">
                            <i class="fa fa-vk"></i>
                        </p>
                        <p class="social-i-ttl">Vkontakte</p>
                    </a>
                </div>
                <div class="social-i">
                    <a rel="nofollow" target="_blank" href="http://instagram.com/">
                        <p class="social-i-img">
                            <i class="fa fa-instagram"></i>
                        </p>
                        <p class="social-i-ttl">Instagram</p>
                    </a>
                </div>
                <div class="social-i">
                    <a rel="nofollow" target="_blank" href="http://youtube.com/">
                        <p class="social-i-img">
                            <i class="fa fa-youtube"></i>
                        </p>
                        <p class="social-i-ttl">Youtube</p>
                    </a>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="contactform-wrap">
            <form action="#" class="form-validate">
                <h3 class="component-ttl component-ttl-ct component-ttl-hasdesc"><span>Feedback</span></h3>
                <p class="component-desc component-desc-ct">Alias minima veritatis unde illo deserunt omnis facilis</p>
                <p class="contactform-field contactform-text">
                    <label class="contactform-label">Name</label><!-- NO SPACE --><span class="contactform-input"><input placeholder="Name" type="text" name="name" data-required="text"></span>
                </p>
                <p class="contactform-field contactform-email">
                    <label class="contactform-label">E-mail</label><!-- NO SPACE --><span class="contactform-input"><input placeholder="Your E-mail" type="text" name="email" data-required="text" data-required-email="email"></span>
                </p>
                <p class="contactform-field contactform-textarea">
                    <label class="contactform-label">Message</label><!-- NO SPACE --><span class="contactform-input"><textarea placeholder="Your message" name="mess" data-required="text"></textarea></span>
                </p>
                <p class="contactform-submit">
                    <input value="Send" type="submit">
                </p>
            </form>
        </div>
        <br>
        <br>
        <!-- Google Maps -->
        <div class="contacts-map allstore-gmap">
            	<h3>Bản đồ</h3>
			    <div id="map"></div>
			    <script>
			      function initMap() {
			        var uluru = {lat: 21.0302432, lng: 105.8354};
			        var map = new google.maps.Map(document.getElementById('map'), {
			          zoom: 4,
			          center: uluru
			        });
			        var marker = new google.maps.Marker({
			          position: uluru,
			          map: map
			        });
			      }
			    </script>
			    <script async defer
			    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsQYyQHn8GqILsn0C9NJwCQ4y7tOoWHVk&callback=initMap">
			    </script>
        </div>
        <!-- Contacts - end -->

    </section>
</main>
<!-- Main Content - end --><?php }} ?>
