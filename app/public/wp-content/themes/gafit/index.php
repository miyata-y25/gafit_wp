<?php get_header(); ?>

<section class="top-main">
    <h1 class="top-main__ttl">
        <?php
            $topmain_args = array(
                'post_type' => 'topmain',
                'posts_per_page' => 1,
            );
            $topmain_query = new WP_Query($topmain_args);
            if ($topmain_query->have_posts()) :
                while ($topmain_query->have_posts()) : $topmain_query->the_post();
        ?>
        <picture>
            <source media="(min-width:641px)" srcset="<?php the_field('top-main-pc'); ?>">
            <img src="<?php the_field('top-main-sp'); ?>" alt="<?php the_title(); ?>">
        </picture>
        <?php endwhile; endif;
            wp_reset_postdata();
        ?>
    </h1>
</section>

<a href="pilates/" target="_blank" class="recruit-bnr"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/pilates_bnr.png" alt="!!"></a>

<section class="top-main" id="link01">
    <div class="top-main__info">
        <?php
            $topcam_args = array(
                'post_type' => 'topcam',
                'posts_per_page' => 1,
            );
            $topcam_query = new WP_Query($topcam_args);
            if ($topcam_query->have_posts()) :
                while ($topcam_query->have_posts()) : $topcam_query->the_post();
        ?>
        <picture>
            <source media="(min-width:641px)" srcset="<?php the_field('top-cam-pc'); ?>">
            <img src="<?php the_field('top-cam-sp'); ?>" alt="<?php the_title(); ?>">
        </picture>
        <?php the_content(); ?>
        <?php endwhile; endif;
            wp_reset_postdata();
        ?>
    </div>
</section>

<a href="https://lin.ee/ecEvsI5" target="_blank" class="line-bnr"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/line_bnr.svg" alt="8/28より内覧会スタート!"></a>

<section class="sec -news" id="link02">
    <h2 class="sec__ttl">
        <span class="sec__ttl__en">NEWS</span>
    </h2>
    <ul class="news-list">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <li><time datetime="<?php the_date('Y-m-d'); ?>"><?php echo get_post_time('Y.m.d'); ?></time><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php endwhile; else : ?>
        <li>記事がありません。</li>
        <?php endif; ?>
    </ul>
    <p class="news-more"><a href="news/">READ MORE</a></p>
</section>

<?php /*
<a href="#" target="_blank" class="line-bnr"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/recruit_bnr.png" alt="GAFIT（ガフィット）ではスタッフを募集しています"></a>
*/?>

<section class="yourself-sec" id="link03">
    <h2 class="yourself-sec__ttl">
        <span class="">「目標の設定と達成」を<br>充実の施設、サービスでサポート</span>
    </h2>
    <p class="yourself-sec__logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_wt.svg" alt="GAFITロゴ"></p>
    <div class="yourself-sec__cont">
        <figure class="yourself-sec__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/yourself_img.png" alt=""></figure>
        <p class="yourself-sec__txt">
            GAFIT（ガフィット）とは<br>
            <br>
            <span class="bold">
                「我」（個人の意識や自信、自己成長）<br>
                ×<br>
                「GA」（Goal Achievement）<br>
            </span>
            <br>
            GAFIT（ガフィット）に通う地域の皆様方が<br>
            「自分の目標を設定しそれを達成できる」よう、<br>
            充実の施設、サービスでサポートいたします。
        </p>
    </div>
    <ul class="yourself-sec__list" data-simplebar data-simplebar-auto-hide="false">
        <li class="grid__list">
            <h3 class="ttl">24時間営業</h3>
            <figure class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/yourself_logo01.svg" alt="">
            </figure>
            <p class="txt">皆さまのライフスタイルにあわせて通えます。</p>
        </li>
        <li class="grid__list">
            <h3 class="ttl">初心者でも<br>安心設計のマシン</h3>
            <figure class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/yourself_logo02.svg" alt="">
            </figure>
            <p class="txt">ウエイトはスライド式で使いやすさ抜群！そして追及された可動域はトレーニング効果も抜群！</p>
        </li>
        <li class="grid__list">
            <h3 class="ttl">充実の<br>フリーウエイト</h3>
            <figure class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/yourself_logo03.svg" alt="">
            </figure>
            <p class="txt">スミスマシンやパワーラックはもちろん、プレードローデッドマシンやダンベルは50㎏までご用意！</p>
        </li>
        <li class="grid__list">
            <h3 class="ttl">スタジオプログラム</h3>
            <figure class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/yourself_logo04.svg" alt="">
            </figure>
            <p class="txt">世界的人気のレズミルズやヨガ・ＺＵＭＢＡなどLIVEレッスンが充実！</p>
        </li>
        <li class="grid__list">
            <h3 class="ttl">コラーゲンルーム</h3>
            <figure class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/yourself_logo05.svg" alt="">
            </figure>
            <p class="txt">サロン級マシン採用のコラーゲンライトを完備した個室をご用意</p>
        </li>
        <li class="grid__list">
            <h3 class="ttl">温浴施設</h3>
            <figure class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/yourself_logo06.svg" alt="">
            </figure>
            <p class="txt">サウナ（男性）・岩盤浴（女性）の温浴施設あり。男女別ロッカー、シャワーあり。</p>
        </li>
        <li class="grid__list">
            <h3 class="ttl">24時間・安全・万全のセキュリティ</h3>
            <figure class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/yourself_logo07.svg" alt="">
            </figure>
            <p class="txt">SECOMとAI自動危険検知システム（GYM DX）導入！女性も深夜早朝でも安心。</p>
        </li>
        <li class="grid__list">
            <h3 class="ttl">完全男女別のロッカー・シャワールーム</h3>
            <figure class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/yourself_logo08.svg" alt="">
            </figure>
            <p class="txt">入口が男女別に分かれているので女性の方も安心♪</p>
        </li>
        <li class="grid__list">
            <h3 class="ttl">鍵付きロッカー</h3>
            <figure class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/yourself_logo09.svg" alt="">
            </figure>
            <p class="txt">トレーニング中に無料でご利用頂ける鍵付きロッカーをご用意！安心して運動できます。</p>
        </li>
        <li class="grid__list">
            <h3 class="ttl">水素水</h3>
            <figure class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/yourself_logo10.svg" alt="">
            </figure>
            <p class="txt">安定した水素濃度を実現した、高濃度水素水サーバーをご用意！（別途料金）</p>
        </li>
        <li class="grid__list">
            <h3 class="ttl">無料Wi-Fi</h3>
            <figure class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/yourself_logo11.svg" alt="">
            </figure>
            <p class="txt">館内は無料Wi-Fiを完備。音楽や動画をご覧いただきながらトレーニング♪</p>
        </li>
    </ul>
    <h2 class="yourself-sec__ttl --italic">MOVIE</h2>
    <div class="yourself-sec__mvcont">
        <div class="yourself-sec__mv">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/M3u3UlWPa2o?si=rLXI_U9CJwhjGW62" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <p class="news-more --wt"><a href="https://youtu.be/M3u3UlWPa2o" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_yt2.svg" alt="">Youtubeで見る</a></p>
    </div>
</section>

<section class="sec --facility" id="link04">
    <h2 class="sec__ttl3">FACILITY</h2>
    <h2 class="sec__ttl">
        <span class="sec__ttl__en">TRAINING AREA</span>
        <span class="sec__ttl__jp"><span>3つの</span><br>トレーニングエリア</span>
    </h2>
    <h3 class="facility-ttl"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/facility_ttl01.png" alt=""></h3>
    <div class="lineup-slider --04">
        <div class="swiper-container">
            <div class="swiper-wrapper lineup-list">
                <div class="swiper-slide lineup-list__list">
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img04_1.png" alt=""></figure>
                    <h5 class="lineup-ttl">トレッドミル</h5>
                    <p class="lineup-txt">ランニングマシン。傾斜やスピードを簡単に変えながらトレーニングできます。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>脂肪燃焼・体力アップ</dd>
                    </dl>
                    <dl class="lineup-dl">
                        <dt>数量</dt>
                        <dd>18</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img04_2.png" alt=""></figure>
                    <h5 class="lineup-ttl">クロストレーナー</h5>
                    <p class="lineup-txt">ペダル式のウォーキング運動！大きな動作の全身運動。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>脂肪燃焼・全身運動</dd>
                    </dl>
                    <dl class="lineup-dl">
                        <dt>数量</dt>
                        <dd>2</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img04_5.png" alt=""></figure>
                    <h5 class="lineup-ttl">アップライトバイク</h5>
                    <p class="lineup-txt">自転車を漕ぐように下半身の筋肉を使う有酸素マシンです。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>脂肪燃焼・下半身引き締め</dd>
                    </dl>
                    <dl class="lineup-dl">
                        <dt>数量</dt>
                        <dd>3</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img04_3.png" alt=""></figure>
                    <h5 class="lineup-ttl">リカンベントバイク</h5>
                    <p class="lineup-txt">背もたれがついているため、体幹部の負担が減り、体力に自信がない方でも安心して有酸素運動ができます。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>脂肪燃焼・下半身引き締め</dd>
                    </dl>
                    <dl class="lineup-dl">
                        <dt>数量</dt>
                        <dd>3</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img04_4.png" alt=""></figure>
                    <h5 class="lineup-ttl">ガンレット</h5>
                    <p class="lineup-txt">欧米で女性に大人気！無敵のヒップアップ＆下半身シェイプ！</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>脂肪燃焼・下半身引き締め</dd>
                    </dl>
                    <dl class="lineup-dl">
                        <dt>数量</dt>
                        <dd>4</dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <h3 class="facility-ttl"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/facility_ttl02.png" alt=""></h3>
    <div class="lineup-slider --01">
        <div class="swiper-container">
            <div class="swiper-wrapper lineup-list">
                <div class="swiper-slide lineup-list__list">
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_1.png" alt=""></figure>
                    <h5 class="lineup-ttl">シーテッドレッグプレス</h5>
                    <p class="lineup-txt">腰や背中に負担をかけず、足を鍛えることができます。女性は脚のラインの引き締め効果を期待できます。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>大腿四頭筋・腓腹筋</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_2.png" alt=""></figure>
                    <h5 class="lineup-ttl">シーテッドレッグカール</h5>
                    <p class="lineup-txt">太ももの裏を鍛えることができます。女性は、お尻と太ももの境目を作ることができます。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>ハムストリング</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_3.png" alt=""></figure>
                    <h5 class="lineup-ttl">レッグエクステンション</h5>
                    <p class="lineup-txt">太ももの前側を鍛えることができます。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>大腿四頭筋</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_4.png" alt=""></figure>
                    <h5 class="lineup-ttl">アブダクション・アダクション</h5>
                    <p class="lineup-txt">アブダクション/お尻の上側や、外腿を鍛えます。<br>アダクション/内腿を鍛えることができます。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>大腿筋膜張筋・大殿筋・中殿筋・内転筋群</dd>
                    </dl>
                    <dl class="lineup-dl">
                        <dt>数量</dt>
                        <dd>2</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_16.png" alt=""></figure>
                    <h5 class="lineup-ttl">ロータリートーソ</h5>
                    <p class="lineup-txt">クビレや引き締まったお腹を作ることができます。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>腹筋・脇腹</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_17.png" alt=""></figure>
                    <h5 class="lineup-ttl">アブドミナルクランチ</h5>
                    <p class="lineup-txt">腹筋を鍛えます。６パック、美しいお腹周りをつくります。座った状態でできますので、腰の負担も減らすことができます。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>腹筋</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_5.png" alt=""></figure>
                    <h5 class="lineup-ttl">アブドミナル</h5>
                    <p class="lineup-txt">腹筋を鍛えます。６パック、美しいお腹周りをつくります。座った状態でできますので、腰の負担も減らすことができます。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>腹筋</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_18.png" alt=""></figure>
                    <h5 class="lineup-ttl">プルオーバー</h5>
                    <p class="lineup-txt">背筋を効果的に鍛えることができます。広背筋は姿勢を保つ役割があり、大胸筋も一緒に鍛える事により体幹を安定させることができます。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>広背筋・大胸筋・大円筋・上腕三頭筋</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_6.png" alt=""></figure>
                    <h5 class="lineup-ttl">ケーブルラットプルダウン</h5>
                    <p class="lineup-txt">背中を鍛えるマシンです。ケーブル式で様々なバリエーションが可能です。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>広背筋・大円筋・菱形筋・上腕二頭筋</dd>
                    </dl>
                    <dl class="lineup-dl">
                        <dt>数量</dt>
                        <dd>2</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_19.png" alt=""></figure>
                    <h5 class="lineup-ttl">フィックスドラットプルダウン</h5>
                    <p class="lineup-txt">背中を鍛えるマシンです。軌道が固定のため、初心者でも扱いやすいマシンです。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>広背筋・大円筋・菱形筋・上腕二頭筋</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_7.png" alt=""></figure>
                    <h5 class="lineup-ttl">バーチカルロウ</h5>
                    <p class="lineup-txt">背中のラインを美しく整えます。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>背中・力こぶ</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_8.png" alt=""></figure>
                    <h5 class="lineup-ttl">ローロウ</h5>
                    <p class="lineup-txt">背中の真ん中あたりのトレーニングができます。男性は厚みのある身体、女性は引き締まった背中のラインを作ることができます。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>広背筋下部・僧帽筋中部・菱形筋</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_9.png" alt=""></figure>
                    <h5 class="lineup-ttl">ローバック</h5>
                    <p class="lineup-txt">座って前かがみの姿勢から起こす運動です。背中の下の方の筋肉を鍛えることができます。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>脊柱起立筋</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_10.png" alt=""></figure>
                    <h5 class="lineup-ttl">デルトイドフライ</h5>
                    <p class="lineup-txt">胸／背中　2種類のトレーニングができます。胸はチェストプレスとは違った刺激が入ります。背中は猫背解消に効果的です。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>大胸筋・僧帽筋・菱形筋・三角筋後部</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_11.png" alt=""></figure>
                    <h5 class="lineup-ttl">チェストプレス</h5>
                    <p class="lineup-txt">胸を鍛えるマシンです。男性は厚い胸板、女性はバストアップが期待できます。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>大胸筋・三角筋前部・上腕三頭筋</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_12.png" alt=""></figure>
                    <h5 class="lineup-ttl">ディップマシン</h5>
                    <p class="lineup-txt">腕の裏側を鍛えることができ男性はたくましい腕を、女性は二の腕の弛みを引き締めることができます。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>上腕三頭筋・脊柱起立筋</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_13.png" alt=""></figure>
                    <h5 class="lineup-ttl">バイセップカール</h5>
                    <p class="lineup-txt">上腕二頭筋(力こぶ)を鍛えます。男性はたくましい腕、女性は引き締まった腕を作ることができます。ダンベルとは違い負荷が抜けることがなくトレーニングできます。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>上腕二頭筋</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_14.png" alt=""></figure>
                    <h5 class="lineup-ttl">ショルダープレス</h5>
                    <p class="lineup-txt">肩の筋肉を鍛えます。肩の血行を良くし、肩こり予防にも効果的です。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>三角筋前部・上腕三頭筋・僧帽筋</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img01_15.png" alt=""></figure>
                    <h5 class="lineup-ttl">デルトイドレイズ</h5>
                    <p class="lineup-txt">肩のみを鍛えることができます。逆三角形のボディラインを作るために必要なトレーニングです。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>三角筋前、中部</dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <h3 class="facility-ttl"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/facility_ttl03.png" alt=""></h3>
    <div class="lineup-slider --03">
        <div class="swiper-container">
            <div class="swiper-wrapper lineup-list">
                <div class="swiper-slide lineup-list__list">
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img03_1.png" alt=""></figure>
                    <h5 class="lineup-ttl">スーパースミスマシン</h5>
                    <p class="lineup-txt">少し斜め上に挙げる、主に上半身用のマシン。バーがガイドに沿って動くので安全。</p>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img03_2.png" alt=""></figure>
                    <h5 class="lineup-ttl">スミスマシン</h5>
                    <p class="lineup-txt">垂直に挙げる、主に下半身に効果的なマシン。</p>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img03_3.png" alt=""></figure>
                    <h5 class="lineup-ttl">パワーケージ</h5>
                    <p class="lineup-txt">1台でベンチプレス、スクワットなど複数のバーベル種目を行うことが可能です。</p>
                    <dl class="lineup-dl">
                        <dt>数量</dt>
                        <dd>4</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img03_4.png" alt=""></figure>
                    <h5 class="lineup-ttl">デュアルアジャスタブルプーリー</h5>
                    <p class="lineup-txt">ケーブルを用いて、様々な筋肉を鍛えられます。</p>
                    <dl class="lineup-dl">
                        <dt>数量</dt>
                        <dd>2</dd>
                    </dl>
                </div>
                    <div class="swiper-slide lineup-list__list">
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img02_1.png" alt=""></figure>
                        <h5 class="lineup-ttl">アンクルドレッグプレス</h5>
                        <p class="lineup-txt">ケガのリスクを抑えて高重量のトレーニングをすることができます。角度がついているため身体が浮きにくくしっかりと負荷をかけることができます。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>大腿四頭筋・腓腹筋</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img02_2.png" alt=""></figure>
                        <h5 class="lineup-ttl">チルトシートカーフ</h5>
                        <p class="lineup-txt">座った状態でふくらはぎのトレーニングを安全に行うことができます。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>腓腹筋</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img02_3.png" alt=""></figure>
                        <h5 class="lineup-ttl">ハックスクワット</h5>
                        <p class="lineup-txt">安定した状態で、お尻、ハムストリングスなどのトレーニングができます。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>大殿筋・ハムストリングス</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img02_10.png" alt=""></figure>
                        <h5 class="lineup-ttl">ベルトスクワット</h5>
                        <p class="lineup-txt">ノーチラス製国内初導入！腰に巻いたベルトを使い、下半身を鍛えます。上半身への負担が少なく、初心者でも安全に深いスクワットが可能。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>大腿四頭筋、ハムストリング、大殿筋、内転筋</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img02_4.png" alt=""></figure>
                        <h5 class="lineup-ttl">グルートドライブ</h5>
                        <p class="lineup-txt">お尻を鍛えるマシン。高重量でトレーニングでき、大殿筋にしっかりと刺激が入り丸みのあるヒップラインを作ることができます。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>大殿筋、中殿筋</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img03_12.png" alt=""></figure>
                        <h5 class="lineup-ttl">レバレッジ アブクランチ</h5>
                        <p class="lineup-txt">腹筋のトレーニングで使用します。プレートを付けて重りを調整することができます。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>腹筋</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img02_5.png" alt=""></figure>
                        <h5 class="lineup-ttl">レバレッジ ラットプルダウン</h5>
                        <p class="lineup-txt">背中を鍛えるマシンです。背中を引き締めることで美しいボディラインを手にすることができます。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>広背筋・大円筋・菱形筋・上腕二頭筋</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img02_6.png" alt=""></figure>
                        <h5 class="lineup-ttl">レバレッジ ローロウ</h5>
                        <p class="lineup-txt">背中の真ん中あたりのトレーニングができます。男性は厚みのある身体、女性は引き締まった背中のラインを作ることができます。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>広背筋下部・僧帽筋中部・菱形筋</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img02_7.png" alt=""></figure>
                        <h5 class="lineup-ttl">レバレッジ ハイロー</h5>
                        <p class="lineup-txt">背中の上側あたりのトレーニングができます。しっかりとストレッチがかかるため背中にばっちり負荷がかかります。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>広背筋上部・僧帽筋下部・大円筋</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img03_13.png" alt=""></figure>
                        <h5 class="lineup-ttl">レバレッジ デッドリフトシュラッグ</h5>
                        <p class="lineup-txt">広背筋上部と下部及び僧帽筋を鍛えることができます。バーベルではできない左右独立した動きが可能です。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>脊柱起立筋・広背筋群・僧帽筋</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img02_8.png" alt=""></figure>
                        <h5 class="lineup-ttl">レバレッジ チェストプレス</h5>
                        <p class="lineup-txt">肩こり改善・バストアップ</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>胸・腕回り</dd>
                        </dl>
                    </div>
                    <div class="swiper-slide lineup-list__list">
                        <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img02_9.png" alt=""></figure>
                        <h5 class="lineup-ttl">レバレッジ ショルダープレス</h5>
                        <p class="lineup-txt">肩を鍛えるマシンです。しっかり押し上げ丸い肩を作りましょう。</p>
                        <dl class="lineup-dl">
                            <dt>効果部位</dt>
                            <dd>三角筋</dd>
                        </dl>
                    </div>
                <div class="swiper-slide lineup-list__list">
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img03_5.png" alt=""></figure>
                    <h5 class="lineup-ttl">チンディップアシスト</h5>
                    <p class="lineup-txt">懸垂やディップスができない方もアシストの力で効率的に鍛えることが可能です。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>広背筋上部・僧帽筋下部・大円筋・大胸筋下部、三頭筋</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img03_6.png" alt=""></figure>
                    <h5 class="lineup-ttl">シーテッドプリチャーカール</h5>
                    <p class="lineup-txt">上腕を固定した状態でバーベルやダンベルを使って上腕二頭筋のトレーニングができます。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>上腕二頭筋</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img03_7.png" alt=""></figure>
                    <h5 class="lineup-ttl">アジャスタブルアブドミナルベンチ</h5>
                    <p class="lineup-txt">腹筋のトレーニングで使用します。傾斜が変更でき負荷の調節が可能です。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>腹筋</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img03_8.png" alt=""></figure>
                    <h5 class="lineup-ttl">アジャスタブルバックエクステンション</h5>
                    <p class="lineup-txt">背筋を鍛えることができます。シンプルな使い方なので初心者でも安心してトレーニングできます。</p>
                    <dl class="lineup-dl">
                        <dt>効果部位</dt>
                        <dd>脊柱起立筋</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img03_9.png" alt=""></figure>
                    <h5 class="lineup-ttl">オリンピックベンチ</h5>
                    <p class="lineup-txt">ベンチプレスやダンベルでのトレーニングに使用します。</p>
                    <dl class="lineup-dl">
                        <dt>数量</dt>
                        <dd>2</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img03_10.png" alt=""></figure>
                    <h5 class="lineup-ttl">アジャスタブルベンチ</h5>
                    <p class="lineup-txt">背もたれが動くベンチ。ダンベルなどのトレーニングで使用します。</p>
                    <dl class="lineup-dl">
                        <dt>数量</dt>
                        <dd>5</dd>
                    </dl>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img03_14.png" alt=""></figure>
                    <h5 class="lineup-ttl">ユーティリティベンチ</h5>
                    <p class="lineup-txt">９０度で固定されたベンチ。ダンベルショルダープレスやアームカールトレーニングで使用します。足置きがあるため身体を安定させることができます。</p>
                </div>
                <div class="swiper-slide lineup-list__list">
                    <figure class="lineup-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/lineup_img03_11.png" alt=""></figure>
                    <h5 class="lineup-ttl">ダンベル</h5>
                    <p class="lineup-txt">1㎏～50㎏までご用意してあります。初心者から上級者まですべての方に対応できます。</p>
                </div>
            </div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <div class="instructor-area">
        <h4 class="instructor-area__ttl"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/instructor_check.svg" alt="CHECK"><br>世界のトップブランドの<br>最新マシンを<br class="sp-show">贅沢にラインナップ</h4>
        <ul class="instructor-area__ul">
            <li>
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/instructor_logo01.svg" alt="">
                </figure>
                <p>ノーチラスはトレーニングマシンでは画期的な機構である可変抵抗カム開発の先駆者であり、現在でもあらゆるトレーニング機器の基礎となっています。また、米国で絶大な人気を誇ったフレックス社のインパクトとハイエンドモデルのインスピレーションもあらたに加え、新しいノーチラスブランドとして全世界で高い評価を受けています。</p>
            </li>
            <li>
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/instructor_logo02.png" alt="">
                </figure>
                <p>スタートラックは歴史に残る世界のパイオニアであり、１９７９年設立以来、業務用トレッドミルのカテゴリーリーダーとして名を馳せてきました。２０１４年にコアヘルス＆フィットネス社のグループに加わり、時代に合ったマシンを開発、発売しています。</p>
            </li>
        </ul>
    </div>
    <div class="easy-area">
        <h4 class="easy-area__ttl">
            <span class="en"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/easy_ttl.svg" alt="Easy to use"></span>
            <span class="jp">初心者の方でも安心</span>
        </h4>
        <ul class="easy-ul">
            <li>
                <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/easy_thum01.png" alt=""></figure>
                <p>ウエイトはスライド式で初めての方でも扱いやすい設計。</p>
            </li>
            <li>
                <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/easy_thum02.png" alt=""></figure>
                <p>マシンに付いているQRコードから動画で使い方を確認できます。</p>
            </li>
        </ul>
    </div>
</section>

<section class="studio-sec" id="link05">
    <h2 class="sec__ttl3 -sm">STUDIO <br class="sp-show">PROGRAM</h2>
    <div class="studio-sec__bdy">
        <p class="studio-sec__txt">
            世界的に有名なスタジオプログラム“Lesmills(レズミルズ)”を導入！の他、<br class="pc-show">ダンスプログラムやエアロビクス、ヨガなど多彩なプログラムをインストラクターによる<br class="pc-show">ライブレッスンでお楽しみいただけます！         
        </p>
        <figure class="studio-sec__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_logo.png" alt="">
        </figure>
        <p class="studio-sec__txt">
            レズミルズは、ニュージーランド発のグループフィットネスプログラムで、<br class="pc-show">100ヶ国以上20,000店舗以上のフィットネスジムに導入されています。<br class="pc-show">最新の音楽の中で、インストラクターと共に行うスタジオプログラムでは、<br class="pc-show">いつも以上の汗をかき、たくさんのエネルギーを得ることができます！         
        </p>
        <div class="studio-area">
            <h3 class="studio-area__ttl">スタジオプログラム一覧</h3>
            <ul class="studio-area__list">
                <li class="slider-jump01">BODYPUMP</li>
                <li class="slider-jump02">BODYCOMBAT</li>
                <li class="slider-jump03">BODYATTACK</li>
                <li class="slider-jump04">BODYSTEP</li>
                <li class="slider-jump05">BODYBALANCE</li>
                <li class="slider-jump06">BODYJAM</li>
                <li class="slider-jump07">LESMILLS DANCE</li>
                <li class="slider-jump08">LESMILLS CORE</li>
            </ul>
        </div>
        <p class="studio-read">画像をクリックすると動画が再生されます</p>
        <div class="studio-slider">
            <ul class="studio-list">
                <li class="studio-list__list">
                    <figure class="studio-thum"><a href="https://www.youtube.com/embed/zA5MgsrleYw?si=a8jvXoQwNtu6qlF1" target="_blank"><img src="http://img.youtube.com/vi/zA5MgsrleYw/mqdefault.jpg" alt=""></a></figure>
                    <h4 class="studio-ttl"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_logo01.png" alt=""></h4>
                    <p class="studio-txt">バーベルを使った全身を鍛えるワークアウト。プレスやスクワットなどの反復運動で心拍数を上げ、カロリー消費を促進。ウェイトの重さはそれぞれのレベルに合わせて調節できるため、大きな筋肉をつけることなく、身体を引き締めたい方にオススメです。</p>
                </li>
                <li class="swiper-slide studio-list__list">
                    <figure class="studio-thum"><a href="https://www.youtube.com/embed/dOUfz_DdkFk?si=EEgvT1VlXbxG8Kcd" target="_blank"><img src="http://img.youtube.com/vi/dOUfz_DdkFk/mqdefault.jpg" alt=""></a></figure>
                    <h4 class="studio-ttl"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_logo02.png" alt=""></h4>
                    <p class="studio-txt">空手、ボクシング、テコンドーなど様々な格闘技の動きを取り入れたワークアウトは、難しい動きは一切なし。仮想の相手にパンチやキックする時に意識して身体をひねることで、腹筋運動と同じ効果に期待ができます。楽しい時間を過ごしながら、ストレスも発散できます。</p>
                </li>
                <li class="swiper-slide studio-list__list">
                    <figure class="studio-thum"><a href="https://www.youtube.com/embed/NtPeJcAFlrE?si=PCWDQp1xNWeiz330" target="_blank"><img src="http://img.youtube.com/vi/NtPeJcAFlrE/mqdefault.jpg" alt=""></a></figure>
                    <h4 class="studio-ttl"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_logo03.png" alt=""></h4>
                    <p class="studio-txt">ジャンプ、ランジ、ランなどの動きと筋力トレーニングに役立つスクワットやプッシュアップを合わせたシェイプアップに有効な全身ワークアウト。エネルギッシュな音楽に合わせて、パワー、そしてスピード感と敏捷性を高め、効率的にカロリーを消費します。</p>
                </li>
                <li class="swiper-slide studio-list__list">
                    <figure class="studio-thum"><a href="https://www.youtube.com/embed/ixYvEoC5t2U?si=4KzKX4-tBn_ICHWg" target="_blank"><img src="http://img.youtube.com/vi/ixYvEoC5t2U/mqdefault.jpg" alt=""></a></figure>
                    <h4 class="studio-ttl"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_logo04.png" alt=""></h4>
                    <p class="studio-txt">階段を上り下りする、ステップ運動がベースになったワークアウト。スクワットやランジ、さらにバーピーやプッシュアップ、プレートエクササイズと組み合わせるため、脂肪を燃焼しながら心拍数とモチベーションを高めます。脚力アップとお尻の引き締めにも効果的です。</p>
                </li>
                <li class="swiper-slide studio-list__list">
                    <figure class="studio-thum"><a href="https://www.youtube.com/embed/GGrtcHbx45I?si=9ZhVjl6PHLyEj6Ek" target="_blank"><img src="http://img.youtube.com/vi/GGrtcHbx45I/mqdefault.jpg" alt=""></a></figure>
                    <h4 class="studio-ttl"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_logo05.png" alt=""></h4>
                    <p class="studio-txt">初心者から経験者まで幅広い層が参加しやすいプログラム。ヨガをベースにしながら、太極拳やピラティスの要素を取り入れたストレッチ運動は、柔軟性を高めつつ体幹を強化します。呼吸をコントロールしながら動くエクササイズは、リフレッシュしたい時にオススメ。</p>
                </li>
                <li class="swiper-slide studio-list__list">
                    <figure class="studio-thum"><a href="https://www.youtube.com/embed/4fnxvxreNxc?si=ojzvu1yYHbJL198h" target="_blank"><img src="http://img.youtube.com/vi/4fnxvxreNxc/mqdefault.jpg" alt=""></a></figure>
                    <h4 class="studio-ttl"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_logo06.png" alt=""></h4>
                    <p class="studio-txt">ヒップホップやトラップ、ハウス、EDMなど、様々な音楽ジャンル、カルチャー、そしてダンスを組み合わせたワークアウト。ダンス未経験者でも楽しくチャレンジできるように、覚えやすい振り付けを採用しています。ダンスに夢中になっているうちに、自然とカロリーを消費しているでしょう。</p>
                </li>
                <li class="swiper-slide studio-list__list">
                    <figure class="studio-thum"><a href="https://www.youtube.com/embed/xyjlXSpKvvk?si=vXmIhyblxb8lBq5M" target="_blank"><img src="http://img.youtube.com/vi/xyjlXSpKvvk/mqdefault.jpg" alt=""></a></figure>
                    <h4 class="studio-ttl"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_logo07.png" alt=""></h4>
                    <p class="studio-txt">曲ごとに振り付けが変わりプログラムを通して新鮮な感覚を持ち続けることができる革新的なダンスワークアウト。動きがシンプルで繰り返しが多いため、習得しやすく、ダンス初心者にもオススメ。ワークアウトをしながらダンススキルを向上させたい人やダンスが好きな人に最適です。</p>
                </li>
                <li class="swiper-slide studio-list__list">
                    <figure class="studio-thum"><a href="https://www.youtube.com/embed/OzyZMcvYypk?si=CC6WllV5oU7OpOgl" target="_blank"><img src="http://img.youtube.com/vi/OzyZMcvYypk/mqdefault.jpg" alt=""></a></figure>
                    <h4 class="studio-ttl"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_logo08.png" alt=""></h4>
                    <p class="studio-txt">体幹およびその周辺の筋肉を強化し、安定性と持久力を高めることでスポーツパフォーマンスを向上します。バランスが改善するため、ケガの防止にもつながります。あらゆるレベルに適したオプションも用意されているので、誰もがチャレンジでき、達成感を味わうことができます。自分の状態を意識しながら強い身体作りを目指しましょう。</p>
                </li>
            </ul>
        </div>
        <div class="others-area">
            <h4 class="others-area__ttl">
                <span class="en"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/others_ttl.svg" alt="Others"></span>
                <span class="jp">他にも多彩なスタジオ<br class="sp-show">プログラムをご用意</span>
            </h4>
            <div class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/arrow.svg" alt=""></div>
        </div>
        <div class="studio-slider">
            <ul class="studio-list">
                <li class="studio-list__list">
                    <figure class="studio-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_others01.png" alt=""></figure>
                    <h4 class="studio-ttl"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_logo09.png" alt=""></h4>
                    <p class="studio-txt">ZUMBAとは、スペイン語で「どんちゃん騒ぎ」「お祭り騒ぎ」という意味を持つダンスフィットネス・エクササイズです。ラテン系のリズムに合わせて体を動かすことで、心肺機能と筋力を鍛えます。ズンバは正確な体の動きを求められないため、初心者や高齢者でも気軽に始めやすいのが最大の特徴で、カロリーを消費しやすく、基礎代謝を上げられるエクササイズです。</p>
                </li>
                <li class="studio-list__list">
                    <figure class="studio-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_others02.png" alt=""></figure>
                    <h4 class="studio-ttl"><span>エアロ</span></h4>
                    <p class="studio-txt">1980年代にNASAの宇宙飛行士向けに開発された心肺機能を高めるトレーニング法で、日本語では「有酸素運動」と訳されます。日本においては、音楽をかけながらランニングやジャンプなどの動きを取り入れた「エアロビクスダンス」が一大ブームとなったため、エアロといえばダンスを指すのが一般的です</p>
                </li>
                <li class="studio-list__list">
                    <figure class="studio-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_others03.png" alt=""></figure>
                    <h4 class="studio-ttl"><span>ステップ</span></h4>
                    <p class="studio-txt">ステップ台を使用した有酸素運動を行うことで脂肪を効率よく燃焼することができます。踏み台昇降運動は太もも、ふくらはぎ、お尻の筋肉をしっかり使うので、下半身のシェイプアップにもオススメです。また、音楽に合わせて気持ちよく汗を流すことでストレス発散にも効果的です。</p>
                </li>
                <li class="studio-list__list">
                    <figure class="studio-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_others04.png" alt=""></figure>
                    <h4 class="studio-ttl"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_logo10.png" alt=""></h4>
                    <p class="studio-txt">豊橋では初導入！アメリカLA発最新フィットネスポップピラティス！POPな音楽に合わせてピラティスの動きを行います。有酸素運動と筋トレを同時に行えて、脂肪燃焼効果抜群。短時間のトレーニングで、効果的にダイエットやボディメイクを行うことができます！おまけに身体の不調改善にもアプローチが可能で、猫背・スマホ首・骨盤の歪みなどでお悩みの方にもお勧めです♪</p>
                </li>
                <li class="studio-list__list">
                    <figure class="studio-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_others05.png" alt=""></figure>
                    <h4 class="studio-ttl"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_logo11.png" alt=""></h4>
                    <p class="studio-txt">東三河では初導入！ダンスエアロよりダンス色を出しつつも、 あくまでもフィットネスの枠の中でダンスを楽しむクラスです。 音楽とダンスを融合し、より表現力を高め、全員で踊る一体感を感じられます！ 流行りの曲でリズムトレーニング＆振り付けの練習を行います。レッスン最後には一作品出来上がります。気分はダンサー♪インストラクターによって、選曲・振り付けスタイルが違うことも魅力の１つです。</p>
                </li>
                <li class="studio-list__list">
                    <figure class="studio-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_others06.png" alt=""></figure>
                    <h4 class="studio-ttl"><span>BODYMAKE YOGA</span></h4>
                    <p class="studio-txt">ヨガのポーズと筋力トレーニングを通じて、引き締まったボディラインを目指すプログラムです。 日頃あまり使わない筋肉を意識して動かしながら、全身のたるみを解消していきます。 ボディメイクヨガの難度は中級レベルですが、体の気になる部分に効果的にアプローチしていくので、理想のボディを目指せます。</p>
                </li>
                <li class="studio-list__list">
                    <figure class="studio-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_others07.png" alt=""></figure>
                    <h4 class="studio-ttl"><span>YOGA BASIC</span></h4>
                    <p class="studio-txt">基本的なヨガのLesson。体の柔軟性を高め、筋肉の強化に繋がる基本的なポーズを呼吸に合わせて行います。呼吸を深く、気持ちの良いところまで身体を伸ばすことで全身のバランスを整えていきます。ストレッチ要素も高く、筋トレや他のLesson前にもおすすめです。</p>
                </li>
                <li class="studio-list__list">
                    <figure class="studio-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_others08.png" alt=""></figure>
                    <h4 class="studio-ttl"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_logo12.png" alt=""></h4>
                    <p class="studio-txt">東三河では初導入！シンプルなヨガの動作と瞑想法、音楽とのシンクロで、身体・呼吸・心を整えるマインドフルネスプログラム。今この瞬間に意識を向けて、余分な思考や感情にとらわれず、心に余裕をつくるのがマインドフルネスプログラム。誰にでもできるヨガ、誰にでもできるマインドフルネス。あなたの身体・呼吸・心を整えます。初めての方でも安心してご参加いただけます。</p>
                </li>
                <li class="studio-list__list">
                    <figure class="studio-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_others09.png" alt=""></figure>
                    <h4 class="studio-ttl"><span>ダンススタイルEASY</span></h4>
                    <p class="studio-txt">ストレッチで身体をほぐしダンスの基礎的な、ダウン、アップ、アイソレーション、身体の使い方をマスターしていくクラスです。これからダンスを始めてみたい方、ダンスは踊れるけど基礎から学びたい方、フィットネススタジオの初心者の方に最適なクラスです。</p>
                </li>
                <li class="studio-list__list">
                    <figure class="studio-thum"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/studio_others10.png" alt=""></figure>
                    <h4 class="studio-ttl"><span>暗闇ボクシング</span></h4>
                    <p class="studio-txt">暗いスタジオの中で特殊照明を用いたボクシングエクササイズ。ボクシングに出てくる4種のパンチ(ジャブ・クロス・フック・アッパー)で構成され、音楽に合わせて動きます。ランニング・ニーアップ・スクワット等の動きも出てくるため、全身を動かして楽しく脂肪燃焼する事が出来ます。格闘技エクササイズが初めての方も大歓迎です。聞いた事のある音楽と共にLET'Sボクシング※グローブは装着致しません。</p>
                </li>
            </ul>
        </div>
        <?php
            $schedule_args = array(
                'post_type' => 'schedule',
                'posts_per_page' => 1,
            );
            $schedule_query = new WP_Query($schedule_args);
            if ($schedule_query->have_posts()) :
                while ($schedule_query->have_posts()) : $schedule_query->the_post();
                ?>
        <a href="<?php the_field('schedule-pdf'); ?>" target="_blank" class="studio-btn"><?php the_title(); ?><br>スケジュールはこちら</a>
        <?php endwhile; endif;
            wp_reset_postdata();
        ?>
    </div>
</section>

<section class="sec --instructor --slash">
    <h2 class="sec__ttl">
        <span class="sec__ttl__en">INSTRUCTOR</span>
        <span class="sec__ttl__jp">インストラクター紹介</span>
    </h2>
    <ul class="instructor-list">
        <?php
            $instructor_args = array(
                'post_type' => 'instructor',
                'posts_per_page' => 100,
            );
            $instructor_query = new WP_Query($instructor_args);
            if ($instructor_query->have_posts()) :
                while ($instructor_query->have_posts()) : $instructor_query->the_post();
        ?>
        <li class="instructor-list__li">
            <figure><?php echo wp_get_attachment_image(get_post_meta($post->ID, 'instructor-thumb', true), ''); ?></figure>
            <div class="info">
                <span class="name"><?php the_title(); ?></span>
                <dl>
                    <dt>担当</dt>
                    <dd>
                        <?php the_field('instructor-handle'); ?>
                    </dd>
                </dl>
            </div>
            <p class="read"><?php the_field('instructor-read'); ?></p>
        </li>
        <?php endwhile; endif;
            wp_reset_postdata();
        ?>
    </ul>
</section>

<section class="sec --spa">
    <h2 class="sec__ttl">
        <span class="sec__ttl__en">SPA / SAUNA</span>
        <span class="sec__ttl__jp">男女別の温浴施設をご用意</span>
    </h2>
    <ul class="spa-ul">
        <li>
            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/spa_thum01.png" alt=""></figure>
            <h3>オートロウリュ式瞑想系サウナ</h3>
            <p>オートロウリュ式（30分毎）の高温サウナ。ベンチは木曽檜、壁はレンガタイルと水墨濃で、落ち着いた雰囲気。もちろん水風呂もご用意。</p>
        </li>
        <li>
            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/spa_thum02.png" alt=""></figure>
            <h3>岩盤浴</h3>
            <p>遠赤外線で体を芯から温めることで、新陳代謝の促進、血行促進、疲労回復、デトックス効果などが期待できます。</p>
        </li>
    </ul>
    <h2 class="sec__ttl">
        <span class="sec__ttl__jp">完全男女別の更衣＆温浴スペース</span>
    </h2>
    <ul class="others-list">
        <li>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/others_img01.png" alt="">
                <figcaption>男女別ロッカールーム<br>鍵付きロッカー</figcaption>
            </figure>
        </li>
        <li>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/others_img02.png" alt="">
                <figcaption>シャワルーム完備<br>（男性4基、女性5基）</figcaption>
            </figure>
        </li>
        <li>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/others_img03.png" alt="">
                <figcaption>パウダーコーナー</figcaption>
            </figure>
        </li>
        <li>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/others_img09.png" alt="">
                <figcaption>更衣室</figcaption>
            </figure>
        </li>
    </ul>
    <h2 class="sec__ttl">
        <span class="sec__ttl__en">COLLAGEN ROOM</span>
        <span class="sec__ttl__jp">女性専用のコラーゲンルーム（要予約）</span>
    </h2>
    <div class="intro-cont">
        <figure class="intro-cont__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/beauty_main.png" alt=""></figure>
        <p class="intro-cont__txt">サロン級マシン採用の<br>個室ビューティーエリアをご用意</p>
        <div class="intro-cont__grid">
            <div class="intro-cont__grid__read">
                <p>ピンクの光を浴びることにより真皮内にあるコラーゲンを生成しお肌の中から活性化。服を脱がずに利用できます。</p>
                <h3>主な効果</h3>
                <p>
                    ・たるみ（引き締め効果）美白効果<br>
                    ・しみ、しわ、ハリ、ツヤ、くま、血行をよくする<br>
                    ・乾燥、傷跡、炎症を改善<br>
                    ・ニキビあとの改善<br>
                    <br>
                    1回20分550円(税込)
                </p>
            </div>
            <figure class="intro-cont__grid__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/beauty_img01.png" alt=""></figure>
        </div>
    </div>
</section>

<section class="sec --others">
    <h2 class="sec__ttl">
        <span class="sec__ttl__en">OTHERS</span>
        <span class="sec__ttl__jp">その他の施設</span>
    </h2>
    <ul class="others-list">
        <li>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/others_img04.png" alt="">
                <figcaption>ストレッチエリア</figcaption>
            </figure>
        </li>
        <li>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/others_img05.png" alt="">
                <figcaption>タンニングマシン</figcaption>
            </figure>
        </li>
        <li>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/others_img06.png" alt="">
                <figcaption>レンタルロッカー</figcaption>
            </figure>
        </li>
        <li>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/others_img07.png" alt="">
                <figcaption>水素水サーバー</figcaption>
            </figure>
        </li>
        <li>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/others_img08.png" alt="">
                <figcaption>体組成計</figcaption>
            </figure>
        </li>
    </ul>
</section>

<section class="sec --security">
    <h2 class="sec__ttl">
        <span class="sec__ttl__en">SECURITY</span>
        <span class="sec__ttl__jp">セキュリティ</span>
    </h2>
    <div class="security-grid">
        <div class="security-grid__area">
            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/security_img01.png" alt=""></figure>
            <p>フロントスタッフがスタッフタイムに常駐 <br>※ノースタッフデーは除く</p>
        </div>
        <div class="security-grid__area">
            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/security_img02.png" alt=""></figure>
            <p>
                SECOMとAI自動危険検知システム（GYM DX）導入で24時間安心・万全<br>
                ・防犯カメラによる遠隔監視<br>
                ・AIによる検知<br>
                　倒れている方・動かない方・不正入館
            </p>
        </div>
    </div>
</section>

<div class="sns-area">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/sns_img.svg" alt="SNS投稿を応援!!">
</div>

<?php /*
<section class="sec --staff">
    <h2 class="sec__ttl">
        <span class="sec__ttl__en">STAFF</span>
        <span class="sec__ttl__jp">スタッフ紹介</span>
    </h2>
    <ul class="staff-list">
        <?php
            $staff_args = array(
                'post_type' => 'staff',
                'posts_per_page' => 100,
            );
            $staff_query = new WP_Query($staff_args);
            if ($staff_query->have_posts()) :
                while ($staff_query->have_posts()) : $staff_query->the_post();
        ?>
        <li>
            <figure><?php echo wp_get_attachment_image(get_post_meta($post->ID, 'staff-thumb', true), '240_thumbnail'); ?></figure>
            <div class="info">
                <span class="name"><?php the_field('staff-title'); ?>：<?php the_title(); ?></span>
                <span class="name_en"><?php the_field('staff-name'); ?></span>
                <dl>
                    <dt>保有資格</dt>
                    <dd>
                        <?php the_field('staff-license'); ?>
                    </dd>
                </dl>
            </div>
            <p class="read"><?php the_field('staff-read'); ?></p>
        </li>
        <?php endwhile; endif;
            wp_reset_postdata();
        ?>
    </ul>
</section>
*/?>

<section class="sec --price" id="link06">
    <h2 class="sec__ttl">
        <span class="sec__ttl__en">PRICE</span>
        <span class="sec__ttl__jp">料金</span>
    </h2>
    <dl class="price-dl">
        <dt>入会金</dt>
        <dd>
            11,000円（税込）
        </dd>
    </dl>
    <dl class="price-dl">
        <dt>月会費</dt>
        <dd>
            フィットネス会員<br>8,800円（税込）<span>スタジオ優先予約4回付き<br>別途当日スタジオ無料予約可</span>
        </dd>
    </dl>
    <h2 class="sec__ttl2">
        <span class="sub">オプション価格</span>
    </h2>
    <ul class="price-ul" data-simplebar data-simplebar-auto-hide="false">
        <li>
            <h3>スタジオ予約課金</h3>
            <p>550円（税込）/1枚<span>※追加は月に12枚までとなります</span></p>
        </li>
        <li>
            <h3>レンタルロッカー</h3>
            <p>1,100円(税込)/月</p>
        </li>
        <li>
            <h3>水素水</h3>
            <p>1,100円(税込)/月</p>
        </li>
        <li>
            <h3>コラーゲンルーム</h3>
            <p>550円（税込）/1回<span>女性専用要予約：20分<br>平日10:00−22:00<br>土日祝日10:00−17:00</span></p>
        </li>
        <li>
            <h3>タンニングルーム</h3>
            <p>550円（税込）/1回<span>男女利用可要予約：7分<br>24時間利用可</span></p>
        </li>
    </ul>
</section>

<section class="sec --flow">
    <h2 class="sec__ttl">
        <span class="sec__ttl__en">FLOW</span>
        <span class="sec__ttl__jp">ご利用のながれ</span>
    </h2>
    <div class="flow-area">
        <ol class="flow-area__ol">
            <li>まずはWeb入会</li>
            <li>次にご来店手続き</li>
        </ol>
        <h3 class="flow-area__ttl">入会に必要なもの</h3>
        <ul class="flow-area__ul">
            <li>入会金</li>
            <li>クレジットカード</li>
            <li>本人確認書類（運転免許証など）</li>
            <li>スマートフォン<br class="sp-show">（お持ちでない方はご相談ください）</li>
        </ul>
        <h3 class="flow-area__ttl">入会資格</h3>
        <ul class="flow-area__ul">
            <li>満18歳以上の方</li>
            <li>施設を利用いただく上で、<br class="sp-show">ご自身の安全性を確保できる方</li>
            <li>会員規約他、マナーを守れる方</li>
        </ul>
    </div>
</section>

<?php /*
<section class="sec --column">
    <h2 class="sec__ttl">
        <span class="sec__ttl__en">COLUMN</span>
        <span class="sec__ttl__jp">コラム</span>
    </h2>
    <ul class="column-list">
        <?php
            $column_args = array(
                'post_type' => 'column',
                'order' => 'DESC',
                'orderby' => 'date',
                'posts_per_page' => 3,
            );
            $column_query = new WP_Query($column_args);
            if ($column_query->have_posts()) :
                while ($column_query->have_posts()) : $column_query->the_post();
        ?>
        <li>
            <figure class="column-list__img">
                <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail(); ?>
                <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/column_img.png" alt="">
                <?php endif; ?>
            </figure>
            <time datetime="<?php the_time('Y-m-d'); ?>" class="column-list__time"><?php the_time('Y/m/d'); ?></time>
            <h3 class="column-list__ttl"><?php the_title(); ?></h3>
            <p class="column-list__txt"><?php the_excerpt(); ?></p>
            <p class="news-more"><a href="<?php the_permalink(); ?>">READ MORE</a></p>
        </li>
        <?php endwhile; endif;
            wp_reset_postdata();
        ?>
    </ul>
    <a href="column/" class="btn btn--oraW btn--590">全ての記事を読む</a>
</section>
*/?>

<section class="sec --insta">
    <h2 class="insta-ttl">
        <span class="en"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/insta_follow.svg" alt="follow me"></span>
        <span class="jp">Instagram</span>
    </h2>
    <figure class="insta-list">
        <!-- SnapWidget -->
<script src="https://snapwidget.com/js/snapwidget.js"></script>
<iframe src="https://snapwidget.com/embed/1102341" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:100%; " title="Posts from Instagram"></iframe>
    </figure>
</section>

<?php /*
<section class="sec --faq">
    <h2 class="sec__ttl">
        <span class="sec__ttl__en">FAQ</span>
        <span class="sec__ttl__jp">よくあるご質問</span>
    </h2>
    <?php
        $faq_args = array(
            'post_type' => 'faq',
            'posts_per_page' => 100,
        );
        $faq_query = new WP_Query($faq_args);
        if ($faq_query->have_posts()) :
            while ($faq_query->have_posts()) : $faq_query->the_post();
    ?>
    <details class="faq-list aco-cont">
        <summary class="faq-list__head aco-cont__head"><?php the_title(); ?></summary>
        <p class="faq-list__body aco-cont__body"><?php the_field('faq-anser'); ?></p>
    </details>
    <?php endwhile; endif;
        wp_reset_postdata();
    ?>
</section>
*/?>

<section class="sec --access" id="link07">
    <h2 class="sec__ttl">
        <span class="sec__ttl__en">ACCESS</span>
        <span class="sec__ttl__jp">アクセス</span>
    </h2>
    <dl class="access-dl">
        <dt>店舗名</dt>
        <dd>GAFIT（ガフィット） 豊橋三ノ輪店</dd>
    </dl>
    <dl class="access-dl">
        <dt>住所</dt>
        <dd>〒440-0837<br>愛知県豊橋市三ノ輪町本興寺10-4</dd>
    </dl>
    <dl class="access-dl">
        <dt>TEL</dt>
        <dd>0532-26-7665</dd>
    </dl>
    <dl class="access-dl">
        <dt>営業時間</dt>
        <dd>
            24時間営業<br>
            スタッフタイム<br>
            平日10:00−22:00<br>
            土日祝日10:00−17:00
        </dd>
    </dl>
    <dl class="access-dl">
        <dt>アクセス</dt>
        <dd>国道1号線から大池通りに入り<br class="sp-show">約200m左手</dd>
    </dl>
</section>

<div class="map-cont">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3278.3430311054544!2d137.40884507574648!3d34.746950772903176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6004d3e466b0a9f9%3A0xa170d9b817a94192!2zR0FGSVTvvIjjgqzjg5XjgqPjg4Pjg4jvvInosYrmqYvkuInjg47ovKrlupc!5e0!3m2!1sja!2sjp!4v1751606259452!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<?php get_footer(); ?>