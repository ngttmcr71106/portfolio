<?php
/**
 * Title: front
 * Slug: profile/front
 * Categories: front
 */
?>

<?php get_header(); ?>

<div class="sm:my-20 my-10 mx-4">
    <h2 class="text-lg font-semibold">わたしについて</h2>
    <h6 class="text-sm">About Me</h6>
    <div class="block sm:flex justify-start gap-6 mt-6">
        <div class="border rounded-md p-4">
            <div class="flex items-start gap-4">
                <div class="sm:w-1/4 w-1/2">
                    <img 
                        src="<?php echo get_template_directory_uri(); ?>/public/assets/img/tomoki.jpg" 
                        alt="プロフィール画像"
                        class="w-full h-full object-cover rounded-full"
                    >
                </div>
    
                <div class="w-full sm:w-1/2 flex flex-col gap-2">
                    <h3 class="text-base font-semibold">自己紹介</h3>
                    <p class="sm:text-base text-sm">野口 知希（のぐち ともき）</p>
                    <div class="sm:text-base text-sm text-gray-500">
                        <ul>
                            <li>出身地：長崎県島原市</li>
                            <li>生まれた年：2001年生まれ</li>
                            <li>好きなこと：お酒（焼酎と壱岐の日本酒）</li>
                            <li>人との繋がりが好き</li>
                            <li>仕事：Webエンジニア</li>
                            <a href="https://github.com/ngttmcr71106" target="_blank">githubはこちら</a>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <h3 class="text-base font-semibold">趣味など</h3>
                <div class="sm:text-base text-sm">
                    <p>散歩することが好きで、よく町探検に出かけることが多い。</p>
                    <p>まちづくりにも興味があり、いろんな市民団体や<a href="https://nagasaki-wakamonomeeting.com/" target="_blank" class="text-sky-500">長崎わかもの会議</a>という団体で活動している。</p>
                </div>
                <div class="flex justify-center items-center gap-10 mt-4">
                    <div>
                        <a href="https://twitter.com/ngsk_engineer" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/public/assets/img/twitter.svg" alt="" width="30" height="30">
                        </a>
                    </div>
                    <div>
                        <a href="https://www.facebook.com/tomokibook2001/" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/public/assets/img/f_logo.png" alt="" width="30" height="30">
                        </a>
                    </div>
                    <div>
                        <a href="https://www.instagram.com/nippon_no_tomoki/" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/public/assets/img/Instagram.png" alt="" width="30" height="30">
                        </a>
                    </div>
                    <div>
                        <a href="https://note.com/ngttmcr_7" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/public/assets/img/note.jpg" alt="" width="30" height="30">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="sm:my-40 my-20 mx-4">
    <h2 class="text-lg font-semibold">ともきの歴史</h2>
    <h6 class="text-sm">Story is Tomoki</h6>
    <ul class="sm:text-base text-sm mt-4 flex flex-col gap-2">
        <li>2021年〜 Web制作自主学習開始</li>
        <li>2022年10月〜2023年4月 Web制作 デザイントランスメディアでインターン</li>
        <li>2023年5月〜7月 ECサイトのLPページ制作業務(アルバイト)</li>
        <li>2023年6月〜9月 株式会社エニセンスでアルバイト</li>
        <li>2023年11月〜3月 就職内定先でアルバイト</li>
        <li>2024年4月〜 長崎の制作会社でシステム開発として勤務</li>
    </ul>
</div>

<?php get_footer(); ?>