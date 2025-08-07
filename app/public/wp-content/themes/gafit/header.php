<!doctype html>
<html lang="ja" prefix="og: http://ogp.me/ns#">
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WX7GK3R5');</script>
<!-- End Google Tag Manager -->
<meta charset="UTF-8">
<title><?php if ( is_home() ) :?>GAFIT (ガフィット)豊橋三ノ輪店<?php else : ?><?php the_title(); ?> | GAFIT (ガフィット)豊橋三ノ輪店<?php endif; ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<meta content="IE=edge" http-equiv="X-UA-Compatible" />
<meta content="telephone=no" name="format-detection" />
<meta content="" name="keywords" />
<meta content="" name="description" />
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/base.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.css"/>
<?php if ( is_home() || is_front_page() ) { ?>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/top.css" rel="stylesheet" type="text/css" />
<?php } ?>
<?php if ( !is_home() && !is_front_page() ) { ?>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/page.css" rel="stylesheet" type="text/css" />
<?php } ?>
<link rel="icon" href="./favicon.ico" sizes="32x32">
<link rel="icon" href="./icon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="./apple-touch-icon.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200..900&family=Poppins:ital,wght@1,200;1,400;1,500&family=Zen+Maru+Gothic:wght@400;700&family=Zen+Old+Mincho:wght@400;600&display=swap" rel="stylesheet">
</head>


<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WX7GK3R5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<header class="site-header">
    <div class="site-header__inner">
        <?php if ( is_home() ) :?> 
        <h1 class="site-header__logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/header_logo.svg" alt="GAFIT"></h1>
        <?php else : ?>
        <p class="site-header__logo"><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/header_logo.svg" alt="GAFIT"></a></p>
        <?php endif; ?>
        <ul class="site-header__sns">
            <li><a href="https://www.instagram.com/gafit_toyohashiminowa/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_in.svg" alt=""></a></li>
            <li><a href="https://www.facebook.com/gafit.toyohashiminowa" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_fb.svg" alt=""></a></li>
            <li><a href="https://www.youtube.com/@gafit_toyohashiminowa" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_yt.svg" alt=""></a></li>
        </ul>
        <button type="button" class="menu-btn"><span><span></span><span></span><span>MENU</span></span></button>
        <div class="header-cont">
            <nav class="header-nav">
                <ul class="g-nav">
                    <?php if ( is_home() ) : ?>
                    <li class="g-nav__list"><a href="#link01">キャンペーン</a></li>
                    <li class="g-nav__list"><a href="#link02">ニュース</a></li>
                    <li class="g-nav__list"><a href="#link03">コンセプト</a></li>
                    <li class="g-nav__list"><a href="#link04">トレーニングエリア</a></li>
                    <li class="g-nav__list"><a href="#link05">スタジオ</a></li>
                    <li class="g-nav__list"><a href="#link06">料金</a></li>
                    <li class="g-nav__list"><a href="#link07">アクセス</a></li>
                    <?php else: ?>
                    <li class="g-nav__list"><a href="<?php echo home_url('/'); ?>#link01">キャンペーン</a></li>
                    <li class="g-nav__list"><a href="<?php echo home_url('/'); ?>#link02">ニュース</a></li>
                    <li class="g-nav__list"><a href="<?php echo home_url('/'); ?>#link03">コンセプト</a></li>
                    <li class="g-nav__list"><a href="<?php echo home_url('/'); ?>#link04">トレーニングエリア</a></li>
                    <li class="g-nav__list"><a href="<?php echo home_url('/'); ?>#link05">スタジオ</a></li>
                    <li class="g-nav__list"><a href="<?php echo home_url('/'); ?>#link06">料金</a></li>
                    <li class="g-nav__list"><a href="<?php echo home_url('/'); ?>#link07">アクセス</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </div>
</header>

<div class="wrap">