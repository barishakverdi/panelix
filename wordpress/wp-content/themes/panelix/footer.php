</main>

<?php
$img_uri        = get_template_directory_uri() . '/assets/image';
$footer_desc    = panelix_option('footer_aciklama', '');
$saat_haftaici  = panelix_option('saat_haftaici',  '');
$saat_cumartesi = panelix_option('saat_cumartesi', '');
$google_puan    = panelix_option('google_puan',    '');
$google_yorum   = panelix_option('google_yorum_sayisi', '');

// Sosyal medya: yalnızca link girilenler footer'a eklenir
$sosyal_links = [];
$sosyal_alanlar = [
    'sosyal_facebook'  => ['icon' => 'icon-facebook',  'baslik' => 'Facebook'],
    'sosyal_instagram' => ['icon' => 'icon-instagram', 'baslik' => 'Instagram'],
    'sosyal_x'         => ['icon' => 'icon-x',         'baslik' => 'X'],
    'sosyal_linkedin'  => ['icon' => 'icon-linkedin',  'baslik' => 'LinkedIn'],
    'sosyal_youtube'   => ['icon' => 'icon-youtube',   'baslik' => 'YouTube'],
    'sosyal_tiktok'    => ['icon' => 'icon-tiktok',    'baslik' => 'TikTok'],
];
foreach ($sosyal_alanlar as $key => $meta) {
    $url = panelix_option($key, '');
    if ($url !== '') {
        $sosyal_links[] = $meta + ['url' => $url];
    }
}
?>

<footer>
    <div class="bg-primary clamp-[pt,50px,100px] pb-12.5">
        <div class="container">
            <div class="grid grid-cols-[auto_1fr_1fr_1fr] clamp-[gap,24px,50px] max-lg:grid-cols-3 max-md:grid-cols-2">
                <div class="lg:clamp-[w,350px,524px] flex flex-col gap-6 max-lg:col-span-full">
                    <img src="<?php echo $img_uri; ?>/logo-white.svg" alt="Panelix" loading="lazy" width="227" height="76" class="clamp-[w,150px,227px] h-auto">
                    <?php if ($footer_desc !== '') : ?>
                    <div class="text-body text-white/80 mt-2.5"><?php echo wp_kses_post(wpautop($footer_desc)); ?></div>
                    <?php endif; ?>
                    <?php if ($saat_haftaici !== '' || $saat_cumartesi !== '') : ?>
                    <p class="text-body text-white/80">
                        <?php if ($saat_haftaici !== '')  : ?>Hafta içi: <?php echo esc_html($saat_haftaici); ?><?php endif; ?>
                        <?php if ($saat_cumartesi !== '') : ?><br>Cumartesi: <?php echo esc_html($saat_cumartesi); ?><?php endif; ?>
                    </p>
                    <?php endif; ?>
                    <?php if (!empty($sosyal_links)) : ?>
                    <ul class="flex flex-wrap clamp-[gap,9px,14px]">
                        <?php foreach ($sosyal_links as $sl): ?>
                        <li>
                            <a href="<?php echo esc_url($sl['url']); ?>" title="<?php echo esc_attr($sl['baslik']); ?>'da takip et" target="_blank" rel="noopener" class="size-11 bg-white/10 border border-white/10 rounded-full flex-center lg:transition-colors lg:duration-300 lg:hover:bg-secondary lg:hover:border-secondary">
                                <i class="<?php echo esc_attr($sl['icon']); ?> text-[18px] h-4.5 text-white"></i>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                    <a href="https://wa.me/+<?php echo PANELIX_PHONE; ?>" title="WhatsApp ile Ulaşın"
                       class="group/btn bg-[#25D366] md:hover:bg-[#19b351] inline-flex items-center justify-center gap-2.5 clamp-[px,24px,32px] clamp-[py,12px,18px] rounded-xl min-w-max relative transition-colors duration-300 [[disabled]]:opacity-50 [[disabled]]:pointer-events-none max-xs:w-full lg:clamp-[w,240px,320px]">
                        <span class="text-dark md:group-hover/btn:text-white clamp-[text,16px,18px] leading-tight font-medium tracking-[-0.18px] transition-colors duration-300">WhatsApp ile Ulaşın</span>
                        <i class="icon-whatsapp text-dark md:group-hover/btn:text-white clamp-[text,16px,18px] clamp-[h,16px,18px] transition-colors duration-300"></i>
                    </a>
                </div>

                <div>
                    <p class="clamp-[text,18px,24px] font-medium clamp-[tracking,-0.18px,-0.24px] text-white mb-5">Hızlı Bağlantılar</p>
                    <?php panelix_render_menu('footer', [
                        ['Anasayfa',        home_url('/')],
                        ['Hakkımızda',      home_url('/hakkimizda/')],
                        ['Hizmetlerimiz',   home_url('/hizmetler/')],
                        ['Hizmet Bölgeleri',home_url('/hizmet-bolgeleri/')],
                        ['Blog',            home_url('/blog/')],
                        ['İletişim',        home_url('/iletisim/')],
                    ]); ?>
                </div>

                <div>
                    <p class="clamp-[text,18px,24px] font-medium clamp-[tracking,-0.18px,-0.24px] text-white mb-5">Hizmetler</p>
                    <?php panelix_render_menu('services', [
                        ['TV Panel Değişimi',     home_url('/hizmetler/tv-panel-degisimi/')],
                        ['Kırık Ekran TV Değişimi', home_url('/hizmetler/kirik-ekran-tv-degisimi/')],
                        ['TV LED Değişimi',       home_url('/hizmetler/tv-led-degisimi/')],
                        ['LED ve Reflektör Değişimi', home_url('/hizmetler/tv-led-ve-reflektor-degisimi/')],
                        ['Ses Var Görüntü Yok',   home_url('/hizmetler/ses-var-goruntu-yok-tv-tamiri/')],
                        ['Mavi Ekran Sorunu',     home_url('/hizmetler/tv-mavi-ekran-sorunu/')],
                    ]); ?>
                </div>

                <div class="max-md:col-span-full">
                    <p class="clamp-[text,18px,24px] font-medium clamp-[tracking,-0.18px,-0.24px] text-white mb-5">İletişim</p>
                    <ul class="flex flex-col gap-4">
                        <li>
                            <a href="tel:+<?php echo PANELIX_PHONE; ?>" title="<?php echo PANELIX_PHONE_DISPLAY; ?>" class="group/a inline-flex items-center gap-2.5">
                                <span class="size-7.5 bg-secondary rounded-full flex-center lg:transition-colors lg:duration-300 lg:group-hover/a:bg-white">
                                    <i class="icon-phone text-[16px] h-4 text-white lg:transition-colors lg:duration-300 lg:group-hover/a:text-dark"></i>
                                </span>
                                <span class="text-body font-medium text-white"><?php echo PANELIX_PHONE_DISPLAY; ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="https://wa.me/+<?php echo PANELIX_PHONE; ?>" target="_blank" title="WhatsApp'tan İletişime Geç" class="group/a inline-flex items-center gap-2.5">
                                <span class="size-7.5 bg-[#25D366] rounded-full flex-center lg:transition-colors lg:duration-300 lg:group-hover/a:bg-[#19b351]">
                                    <i class="icon-whatsapp text-[16px] h-4 text-dark lg:transition-colors lg:duration-300 lg:group-hover/a:text-white"></i>
                                </span>
                                <span class="text-body font-medium text-white"><?php echo PANELIX_PHONE_DISPLAY; ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(PANELIX_MAPS_URL); ?>" target="_blank" class="inline-block text-body text-white/80 lg:transition-colors lg:duration-300 lg:hover:text-white"><?php echo PANELIX_ADDRESS; ?></a>
                        </li>
                        <li>
                            <div class="border border-white/10 p-4 rounded-xl flex flex-col gap-6">
                                <div class="flex items-center justify-between gap-2">
                                    <img src="<?php echo $img_uri; ?>/index/google.svg" alt="" loading="lazy" width="40" height="41" class="w-5 h-auto">
                                    <a href="https://www.google.com/maps/place/Bak%C4%B1rk%C3%B6y+Led+Tv+Uydu+Teknik+Servis" title="Google yorumlarını gör" class="block" target="_blank">
                                        <i class="icon-arrow-up-right text-[16px] h-4 text-white"></i>
                                    </a>
                                </div>
                                <div class="flex items-center justify-between gap-2">
                                    <p class="text-[20px] leading-tight font-medium tracking-[-0.2px] text-white"><?php echo esc_html($google_puan); ?>/5</p>
                                    <p class="text-[14px] leading-[1.6] tracking-[-0.14px] text-white/80"><?php echo esc_html($google_yorum); ?></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-secondary py-5">
        <div class="container">
            <div class="flex items-center justify-between gap-4 max-md:flex-col max-md:text-center">
                <p class="text-body text-white">© <?php echo date('Y'); ?> Panelix. Tüm hakları saklıdır.</p>
                <ul class="flex flex-wrap gap-x-5 gap-y-3.5 list-disc list-inside text-body text-white max-md:justify-center">
                    <li><a href="<?php echo home_url('/kvkk-aydinlatma-metni/'); ?>">KVKK Aydınlatma Metni</a></li>
                    <li><a href="<?php echo home_url('/gizlilik-politikasi/'); ?>">Gizlilik Politikası</a></li>
                    <li><a href="<?php echo home_url('/cerez-politikasi/'); ?>">Çerez Politikası</a></li>
                </ul>
            </div>
            <p class="text-[12px] text-white/50 text-center mt-4">Logolar ve markalar ilgili firmaların tescilli ticari markalarıdır. Firmamız bu markalardan bağımsız bir özel servistir.</p>
        </div>
    </div>
</footer>

<!-- Floating CTA buttons -->
<div class="fixed z-30 right-0 bottom-0 clamp-[pr,16px,30px] clamp-[pb,16px,30px] flex flex-col gap-6">
    <a href="tel:+<?php echo PANELIX_PHONE; ?>" title="+<?php echo PANELIX_PHONE; ?>" class="bg-primary clamp-[size,40px,54px] flex-center rounded-full shadow-[0_0_3px_4px_rgba(15,23,42,0.35)] lg:transiton-all lg:duration-300 lg:hover:bg-dark lg:hover:shadow-[0_0_3px_4px_rgba(0,0,0,0.35)]">
        <i class="icon-phone clamp-[text,18px,24px] clamp-[h,18px,24px] text-white"></i>
    </a>
    <a href="https://wa.me/+<?php echo PANELIX_PHONE; ?>" title="WhatsApp ile iletişim kur" target="_blank" class="bg-[#25D366] clamp-[size,40px,54px] flex-center rounded-full shadow-[0_0_3px_4px_rgba(37,211,102,0.35)] lg:transiton-all lg:duration-300 lg:hover:bg-[#1DA851] lg:hover:shadow-[0_0_3px_4px_rgba(30,30,30,0.35)] lg:hover:*:text-white">
        <i class="icon-whatsapp clamp-[text,18px,24px] clamp-[h,18px,24px] text-dark lg:transition-colors lg:duration-300"></i>
    </a>
</div>

<!-- Mobile menu overlay -->
<div class="fixed-full z-50 bg-black/25" x-show="$store.data.menuOpen || $store.data.dropdownMenuOpen" x-transition.opacity.duration.300ms></div>

<?php wp_footer(); ?>
</body>
</html>
