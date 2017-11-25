<!-- Main Content - start -->
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
        {foreach $ds_tin_tuc as $ds}
        <div class="cf-sm-6 cf-lg-4 col-xs-6 col-sm-6 col-md-4 posts2-i">
            <a class="posts-i-img" href="chi_tiet_tin_tuc.php?ma_tin={$ds->ma_tin}"><span style="background: url('public/images/tin_tuc/{$ds->hinh}')"></span></a>
            {$date = date_create($ds->ngay_tao)}
            <time class="posts-i-date" datetime="{$ds->ngay_tao}"><span>{date_format($date, "d")}</span> {date_format($date, "M")}</time>
            <h3 class="posts-i-ttl"><a href="chi_tiet_tin_tuc.php?ma_tin={$ds->ma_tin}">{$ds->tieu_de_tin}</a></h3>
            <p>{$ds->noi_dung_tom_tat}</p><a href="chi_tiet_tin_tuc.php?ma_tin={$ds->ma_tin}" class="posts-i-more">Read more...</a>
        </div>
        {/foreach}
    </div>
    <!-- Blog Posts - end -->

    <!-- Pagination - start -->
    <ul class="pagi">
        <li><span>{$ds_phan_trang}</span></li>
    </ul>
    <!-- Pagination - end -->
</section>
</main>
<!-- Main Content - end -->
