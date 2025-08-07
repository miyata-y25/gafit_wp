</div><!-- /.wrap -->

<ul class="fixed-btn">
    <li><a href="https://www.slim-sng.jp/slim/web/d/sng/web_admission_procedure/?c=Pd6uT3BmYs&f=00001" target="_blank" class="web"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/fixed_txt01.svg" alt="Web入会"></a></li>
    <li><a href="https://lin.ee/ecEvsI5" target="_blank" class="mypage"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/fixed_txt02.svg" alt="LINE公式アカウント"></a></li>
</ul>

<footer class="site-footer">
    <h3 class="site-footer__logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/header_logo.svg" alt="GAFIT"></h3>
    <ul class="site-footer__nav">
        <li><a href="<?php echo home_url('/'); ?>law/">特定商取引法に基づく表記</a></li>
    </ul>
    <p class="copyright">
        掲載されている写真はイメージです<br>
        Copyrights&copy; GAFIT.
    </p>
</footer>



<!---  jQuery 読み込みコード  --->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<?php if ( is_home() || is_front_page() ) { ?>

<!-- simplebarのjs読み込み -->
<script src="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.min.js"></script>

<!-- slickのjs読み込み -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script><!-- 重要 -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script><!-- 重要 -->

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/js/plugin/swiper/swiper.min.css">
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugin/swiper/swiper.min.js"></script>
<script>
var mySwiperMain1 = new Swiper ('.lineup-slider.--01 .swiper-container', {
    // オプションパラメータ(一部のみ抜粋)
    loop: false, // 最後のスライドまで到達した場合、最初に戻らずに続けてスライド可能にするか。
    speed: 500, // スライドが切り替わるトランジション時間(ミリ秒)。
    slidesPerView: '4', // 何枚のスライドを表示するか
    allowTouchMove: true,
    spaceBetween: 40, // スライド間の余白サイズ(ピクセル)
    direction: 'horizontal', // スライド方向。 'horizontal'(水平) か 'vertical'(垂直)。effectオプションが 'slide' 以外は無効。
    effect: 'slide', // "slide", "fade"(フェード), "cube"(キューブ回転), "coverflow"(カバーフロー) または "flip"(平面回転)

    // スライダーの自動再生
    autoplay: false,

    // 前後スライドへのナビゲーションを表示する場合
    navigation: {
        prevEl: '.lineup-slider.--01 .swiper-button-prev', // 前のスライドボタンのセレクタ
        nextEl: '.lineup-slider.--01 .swiper-button-next', // 次のスライドボタンのセレクタ
    },

    breakpoints: {
        1080: {
            allowTouchMove: true,
            spaceBetween: 20,
            slidesPerView: 3,
        },
        768: {
            allowTouchMove: true,
            spaceBetween: 20,
            slidesPerView: 2,
        },
        640: {
            spaceBetween: 20,
            slidesPerView: 1
        }
    },
});
var mySwiperMain2 = new Swiper ('.lineup-slider.--02 .swiper-container', {
    // オプションパラメータ(一部のみ抜粋)
    loop: false, // 最後のスライドまで到達した場合、最初に戻らずに続けてスライド可能にするか。
    speed: 500, // スライドが切り替わるトランジション時間(ミリ秒)。
    slidesPerView: '4', // 何枚のスライドを表示するか
    allowTouchMove: true,
    spaceBetween: 40, // スライド間の余白サイズ(ピクセル)
    direction: 'horizontal', // スライド方向。 'horizontal'(水平) か 'vertical'(垂直)。effectオプションが 'slide' 以外は無効。
    effect: 'slide', // "slide", "fade"(フェード), "cube"(キューブ回転), "coverflow"(カバーフロー) または "flip"(平面回転)

    // スライダーの自動再生
    autoplay: false,

    // 前後スライドへのナビゲーションを表示する場合
    navigation: {
        prevEl: '.lineup-slider.--02 .swiper-button-prev', // 前のスライドボタンのセレクタ
        nextEl: '.lineup-slider.--02 .swiper-button-next', // 次のスライドボタンのセレクタ
    },

    breakpoints: {
        1080: {
            allowTouchMove: true,
            spaceBetween: 20,
            slidesPerView: 3,
        },
        768: {
            allowTouchMove: true,
            spaceBetween: 20,
            slidesPerView: 2,
        },
        640: {
            spaceBetween: 20,
            slidesPerView: 1
        }
    },
});
var mySwiperMain3 = new Swiper ('.lineup-slider.--03 .swiper-container', {
    // オプションパラメータ(一部のみ抜粋)
    loop: false, // 最後のスライドまで到達した場合、最初に戻らずに続けてスライド可能にするか。
    speed: 500, // スライドが切り替わるトランジション時間(ミリ秒)。
    slidesPerView: '4', // 何枚のスライドを表示するか
    allowTouchMove: true,
    spaceBetween: 40, // スライド間の余白サイズ(ピクセル)
    direction: 'horizontal', // スライド方向。 'horizontal'(水平) か 'vertical'(垂直)。effectオプションが 'slide' 以外は無効。
    effect: 'slide', // "slide", "fade"(フェード), "cube"(キューブ回転), "coverflow"(カバーフロー) または "flip"(平面回転)

    // スライダーの自動再生
    autoplay: false,

    // 前後スライドへのナビゲーションを表示する場合
    navigation: {
        prevEl: '.lineup-slider.--03 .swiper-button-prev', // 前のスライドボタンのセレクタ
        nextEl: '.lineup-slider.--03 .swiper-button-next', // 次のスライドボタンのセレクタ
    },

    breakpoints: {
        1080: {
            allowTouchMove: true,
            spaceBetween: 20,
            slidesPerView: 3,
        },
        768: {
            allowTouchMove: true,
            spaceBetween: 20,
            slidesPerView: 2,
        },
        640: {
            spaceBetween: 20,
            slidesPerView: 1
        }
    },
});
var mySwiperMain4 = new Swiper ('.lineup-slider.--04 .swiper-container', {
    // オプションパラメータ(一部のみ抜粋)
    loop: false, // 最後のスライドまで到達した場合、最初に戻らずに続けてスライド可能にするか。
    speed: 500, // スライドが切り替わるトランジション時間(ミリ秒)。
    slidesPerView: '4', // 何枚のスライドを表示するか
    allowTouchMove: true,
    spaceBetween: 40, // スライド間の余白サイズ(ピクセル)
    direction: 'horizontal', // スライド方向。 'horizontal'(水平) か 'vertical'(垂直)。effectオプションが 'slide' 以外は無効。
    effect: 'slide', // "slide", "fade"(フェード), "cube"(キューブ回転), "coverflow"(カバーフロー) または "flip"(平面回転)

    // スライダーの自動再生
    autoplay: false,

    // 前後スライドへのナビゲーションを表示する場合
    navigation: {
        prevEl: '.lineup-slider.--04 .swiper-button-prev', // 前のスライドボタンのセレクタ
        nextEl: '.lineup-slider.--04 .swiper-button-next', // 次のスライドボタンのセレクタ
    },

    breakpoints: {
        1080: {
            allowTouchMove: true,
            spaceBetween: 20,
            slidesPerView: 3,
        },
        768: {
            allowTouchMove: true,
            spaceBetween: 20,
            slidesPerView: 2,
        },
        640: {
            spaceBetween: 20,
            slidesPerView: 1
        }
    },
});
</script>

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
$(".instructor-list").not('.slick-initialized').slick({
    infinite: true,
    // centerMode: true,
    // centerPadding: 0,
    slidesToShow: 3,
    slidesToScroll: 1,
    swipeToSlide: true,
    dots: true,
    responsive: [
    {
        breakpoint: 640,
        settings: {
            slidesToShow: 1,
        },
    },
    ],
});
</script>

<script>
function checkBreakPoint() {
	w = $(window).width();
	if (w <= 767) {
		// スマホ向け（767px以下のとき）
        $(".studio-list").not('.slick-initialized').slick({
            infinite: true,
            centerMode: true,
            centerPadding: 0,
            slidesToShow: 3,
            slidesToScroll: 1,
            swipeToSlide: true,
            responsive: [
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 1,
                },
            },
            ],
        });
	} else {
		// PC向け
		$('.studio-list.slick-initialized').slick('unslick');
	}
}
// ウインドウがリサイズする度にチェック
$(window).resize(function(){
	checkBreakPoint();
});
// 初回チェック
checkBreakPoint();

$('.slider-jump01').on('click', function() {
    $('.studio-list').slick('slickGoTo', 0, false);
});
$('.slider-jump02').on('click', function() {
    $('.studio-list').slick('slickGoTo', 1, false);
});
$('.slider-jump03').on('click', function() {
    $('.studio-list').slick('slickGoTo', 2, false);
});
$('.slider-jump04').on('click', function() {
    $('.studio-list').slick('slickGoTo', 3, false);
});
$('.slider-jump05').on('click', function() {
    $('.studio-list').slick('slickGoTo', 4, false);
});
$('.slider-jump06').on('click', function() {
    $('.studio-list').slick('slickGoTo', 5, false);
});
$('.slider-jump07').on('click', function() {
    $('.studio-list').slick('slickGoTo', 6, false);
});
$('.slider-jump08').on('click', function() {
    $('.studio-list').slick('slickGoTo', 7, false);
});
</script>

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/modaal.css" rel="stylesheet" type="text/css" />
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugin/modaal.min.js"></script>
<script>
$(".studio-thum a").modaal({
    type: 'video',
    hide_close: 'true'
});
$(".studio-mv a").modaal({
    type: 'video',
    hide_close: 'true'
});
</script>

<?php } ?>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js"></script>
<?php wp_footer(); ?>
</body>
</html>