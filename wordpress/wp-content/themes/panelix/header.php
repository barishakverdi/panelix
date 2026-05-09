<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    $favicon_uri = get_template_directory_uri() . '/assets/favicon';
    ?>
    <link rel="icon" type="image/png" href="<?php echo $favicon_uri; ?>/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/svg+xml" href="<?php echo $favicon_uri; ?>/favicon.svg">
    <link rel="shortcut icon" href="<?php echo $favicon_uri; ?>/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $favicon_uri; ?>/apple-touch-icon.png">
    <meta name="apple-mobile-web-app-title" content="Panelix">
    <link rel="manifest" href="<?php echo $favicon_uri; ?>/site.webmanifest">
    <meta name="theme-color" content="#0F172A">
    <script>
        let FF_FOUC_FIX;
        let domReady = (cb) => { document.readyState === 'interactive' || document.readyState === 'complete' ? cb() : document.addEventListener('DOMContentLoaded', cb); };
        domReady(() => { document.body.style.visibility = 'visible'; });

        document.addEventListener('alpine:init', () => {
            Alpine.store('data', {
                menuOpen: false,
                dropdownMenuOpen: false,
                activeIndex: -1,
                isDesktop: window.innerWidth > 1024,
                checkDevice() {
                    this.isDesktop = window.innerWidth > 1024;
                }
            })
        })
    </script>
    <?php wp_head(); ?>
</head>
<body class="group/body clamp-[--headerHeight,85px,115px,1024px,1680px]"
      :class="{ 'overflow-hidden': $store.data.menuOpen || $store.data.dropdownMenuOpen }"
      x-init="$store.data.checkDevice()" @resize.window="$store.data.checkDevice()"
      style="visibility: hidden">
<script>0</script>

<?php
$img_uri  = get_template_directory_uri() . '/assets/image';
$brands_json_uri = rest_url('panelix/v1/markalar');
?>

<header class="group/body fixed left-0 top-0 z-100 w-full h-(--headerHeight) transition-all duration-300 group-scrolling-down/body:bg-white group-scrolling-down/body:shadow-sm">
    <div class="size-full flex relative">
        <div class="container grow">
            <div class="h-full flex items-center justify-between">
                <a href="<?php echo home_url('/'); ?>" title="Ana sayfaya git" class="block max-lg:relative max-lg:z-2">
                    <img src="<?php echo $img_uri; ?>/logo.svg" alt="Panelix" loading="eager" width="227" height="76" class="clamp-[w,125px,227px,] h-auto">
                </a>
                <div class="h-full flex items-center clamp-[gap,12px,18px,1024px]">
                    <div x-show="$store.data.isDesktop || (!$store.data.isDesktop && $store.data.menuOpen)" x-collapse.duration.450ms class="lg:h-full max-lg:absolute max-lg:left-0 max-lg:top-0 max-lg:w-full max-lg:h-auto max-lg:max-h-svh max-lg:bg-white">
                        <nav class="lg:h-full max-lg:pt-(--headerHeight)">
                            <ul class="lg:h-full flex lg:items-center max-lg:h-auto max-lg:max-h-[calc(100svh-var(--headerHeight))] max-lg:overflow-y-auto max-lg:border-t max-lg:border-dark/10 max-lg:flex-col">

                                <?php if (!panelix_render_header_menu()) : ?>

                                <!-- Hizmetlerimiz -->
                                <li class="group/i relative lg:h-full max-lg:not-last:border-b max-lg:border-dark/10 max-lg:flex max-lg:items-center max-lg:justify-between max-lg:flex-wrap max-lg:gap-x-7.5 max-lg:pr-4"
                                    :class="{ 'toggle': $store.data.activeIndex === 0 }"
                                    @mouseleave="if ($store.data.isDesktop) { $store.data.activeIndex = -1; $store.data.dropdownMenuOpen = false; }">
                                    <a href="<?php echo home_url('/hizmetler/'); ?>" data-has-sub-menu
                                       class="lg:h-full inline-flex items-center clamp-[gap,5px,10px] lg:clamp-[px,6px,12px] max-lg:py-1.5 max-lg:px-4 max-lg:w-[calc(100%-60px)]"
                                       @mouseenter="if ($store.data.isDesktop) { $store.data.activeIndex = 0; $store.data.dropdownMenuOpen = true; }"
                                       @click="if (!$store.data.isDesktop) $store.data.activeIndex = $store.data.activeIndex === 0 ? -1 : 0;">
                                        <span class="clamp-[text,15px,18px,1024px,1920px] font-medium text-dark max-lg:text-[16px]">Hizmetlerimiz</span>
                                        <i class="icon-angle-down text-[9px] h-2.25 text-dark transition-all duration-300 lg:group-hover/i:text-primary group-toggle/i:text-primary group-toggle/i:scale-y-[-1] max-lg:hidden!"></i>
                                    </a>
                                    <div class="lg:hidden size-7.5 border border-dark/10 rounded-full flex-center"
                                         @click="$store.data.activeIndex = $store.data.activeIndex === 0 ? -1 : 0;">
                                        <i class="icon-angle-down text-[12px] h-3 text-dark transition-transform duration-300 group-toggle/i:scale-y-[-1]"></i>
                                    </div>
                                    <div x-show="(!$store.data.isDesktop && $store.data.activeIndex === 0) || $store.data.isDesktop" x-collapse.duration.300ms class="lg:absolute lg:left-1/2 lg:top-full lg:-translate-x-1/2 lg:w-max max-lg:w-full">
                                        <div x-show="($store.data.isDesktop && $store.data.activeIndex === 0) || !$store.data.isDesktop" x-transition.duration.300ms class="mt-2">
                                            <div class="w-full max-w-700">
                                                <div class="w-full lg:bg-white lg:shadow-card lg:rounded-2xl lg:clamp-[px,16px,30px] lg:clamp-[py,20px,30px] max-lg:pl-4 max-lg:pb-4">
                                                    <ul class="grid grid-cols-2 lg:clamp-[gap,12px,16px] max-lg:grid-cols-1 max-lg:px-4 max-lg:border-l max-lg:border-dark/10">
                                                        <?php
                                                        $hizmetler_menu = [
                                                            'TV Panel Değişimi'        => 'tv-panel-degisimi',
                                                            'Kırık Ekran TV Değişimi'  => 'kirik-ekran-tv-degisimi',
                                                            'TV LED Değişimi'          => 'tv-led-degisimi',
                                                            'TV Led ve Reflektör Değişimi' => 'tv-led-ve-reflektor-degisimi',
                                                            'TV Anakart Tamiri'        => 'tv-anakart-tamiri',
                                                            'TV Güç Kartı Tamiri'      => 'tv-guc-karti-tamiri',
                                                        ];
                                                        foreach ($hizmetler_menu as $title => $slug) {
                                                            $url = home_url('/hizmetler/' . $slug . '/');
                                                            echo '<li class="max-lg:not-last:border-b max-lg:border-dark/10">';
                                                            echo '<a href="' . esc_url($url) . '" title="' . esc_attr($title) . '" class="group/s w-full inline-flex items-center lg:clamp-[gap,8px,12px] lg:border lg:border-dark/10 lg:rounded-xl lg:px-4 lg:py-3 lg:transition-colors lg:duration-300 lg:hover:border-secondary lg:hover:bg-secondary/10 lg:not-[&:has(img)]:justify-center max-lg:py-2">';
                                                            echo '<span class="size-10 flex-center bg-secondary/10 rounded-md lg:transition-colors lg:duration-300 max-lg:hidden"><img src="' . $img_uri . '/header/icon.svg" alt="" loading="lazy" width="16" height="18" class="w-auto h-4.5"></span>';
                                                            echo '<span class="text-[16px] leading-tight font-medium tracking-[-0.16px] text-dark">' . esc_html($title) . '</span>';
                                                            echo '</a></li>';
                                                        }
                                                        ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- TV Arızaları -->
                                <li class="group/i relative lg:h-full max-lg:not-last:border-b max-lg:border-dark/10 max-lg:flex max-lg:items-center max-lg:justify-between max-lg:flex-wrap max-lg:gap-x-7.5 max-lg:pr-4"
                                    :class="{ 'toggle': $store.data.activeIndex === 1 }"
                                    @mouseleave="if ($store.data.isDesktop) { $store.data.activeIndex = -1; $store.data.dropdownMenuOpen = false; }">
                                    <a href="<?php echo home_url('/hizmetler/'); ?>" data-has-sub-menu
                                       class="lg:h-full inline-flex items-center clamp-[gap,5px,10px] lg:clamp-[px,6px,12px] max-lg:py-1.5 max-lg:px-4 max-lg:w-[calc(100%-60px)]"
                                       @mouseenter="if ($store.data.isDesktop) { $store.data.activeIndex = 1; $store.data.dropdownMenuOpen = true; }"
                                       @click="if (!$store.data.isDesktop) $store.data.activeIndex = $store.data.activeIndex === 1 ? -1 : 1;">
                                        <span class="clamp-[text,15px,18px,1024px,1920px] font-medium text-dark max-lg:text-[16px]">TV Arızaları</span>
                                        <i class="icon-angle-down text-[9px] h-2.25 text-dark transition-all duration-300 lg:group-hover/i:text-primary group-toggle/i:text-primary group-toggle/i:scale-y-[-1] max-lg:hidden!"></i>
                                    </a>
                                    <div class="lg:hidden size-7.5 border border-dark/10 rounded-full flex-center"
                                         @click="$store.data.activeIndex = $store.data.activeIndex === 1 ? -1 : 1;">
                                        <i class="icon-angle-down text-[12px] h-3 text-dark transition-transform duration-300 group-toggle/i:scale-y-[-1]"></i>
                                    </div>
                                    <div x-show="(!$store.data.isDesktop && $store.data.activeIndex === 1) || $store.data.isDesktop" x-collapse.duration.300ms class="lg:absolute lg:left-1/2 lg:top-full lg:-translate-x-1/2 lg:w-max max-lg:w-full">
                                        <div x-show="($store.data.isDesktop && $store.data.activeIndex === 1) || !$store.data.isDesktop" x-transition.duration.300ms class="mt-2">
                                            <div class="w-full max-w-700">
                                                <div class="w-full lg:bg-white lg:shadow-card lg:rounded-2xl lg:clamp-[px,16px,30px] lg:clamp-[py,20px,30px] max-lg:pl-4 max-lg:pb-4">
                                                    <ul class="grid grid-cols-2 lg:clamp-[gap,12px,16px] max-lg:grid-cols-1 max-lg:px-4 max-lg:border-l max-lg:border-dark/10">
                                                        <?php
                                                        $arizalar_menu = [
                                                            'Ses Var Görüntü Yok TV Tamiri'    => 'ses-var-goruntu-yok-tv-tamiri',
                                                            'TV Mavi Ekran Sorunu'              => 'tv-mavi-ekran-sorunu',
                                                            'TV Ekranında Lekeler / Parlamalar' => 'tv-ekraninda-lekeler-parlamalar',
                                                            'TV Karanlık Gösteriyor'            => 'tv-karanlik-gosteriyor',
                                                            'TV Açılıyor Ama Görüntü Gelmiyor'  => 'tv-aciliyor-ama-goruntu-gelmiyor',
                                                            'TV Ekran Çatladı Ne Yapılmalı?'    => 'tv-ekran-catladi-ne-yapilmali',
                                                            'TV\'de Dikey / Yatay Çizgi Sorunu' => 'tvde-dikey-yatay-cizgi-sorunu',
                                                            'TV\'de Işık Var Görüntü Yok'       => 'tvde-isik-var-goruntu-yok',
                                                            'TV Kapanıp Açılıyor Sorunu'        => 'tv-kapanip-aciliyor-sorunu',
                                                            'TV HDMI Görmüyor Sorunu'           => 'tv-hdmi-gormuyor-sorunu',
                                                        ];
                                                        foreach ($arizalar_menu as $title => $slug) {
                                                            $url = home_url('/hizmetler/' . $slug . '/');
                                                            echo '<li class="max-lg:not-last:border-b max-lg:border-dark/10">';
                                                            echo '<a href="' . esc_url($url) . '" title="' . esc_attr($title) . '" class="group/s w-full inline-flex items-center lg:clamp-[gap,8px,12px] lg:border lg:border-dark/10 lg:rounded-xl lg:px-4 lg:py-3 lg:transition-colors lg:duration-300 lg:hover:border-secondary lg:hover:bg-secondary/10 lg:not-[&:has(img)]:justify-center max-lg:py-2">';
                                                            echo '<span class="size-10 flex-center bg-secondary/10 rounded-md lg:transition-colors lg:duration-300 max-lg:hidden"><img src="' . $img_uri . '/header/icon-2.svg" alt="" loading="lazy" width="16" height="18" class="w-auto h-4.5"></span>';
                                                            echo '<span class="text-[16px] leading-tight font-medium tracking-[-0.16px] text-dark">' . esc_html($title) . '</span>';
                                                            echo '</a></li>';
                                                        }
                                                        ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- Markalara Göre -->
                                <li class="group/i relative lg:h-full max-lg:not-last:border-b max-lg:border-dark/10 max-lg:flex max-lg:items-center max-lg:justify-between max-lg:flex-wrap max-lg:gap-x-7.5 max-lg:pr-4"
                                    :class="{ 'toggle': $store.data.activeIndex === 2 }"
                                    @mouseleave="if ($store.data.isDesktop) { $store.data.activeIndex = -1; $store.data.dropdownMenuOpen = false; }">
                                    <a href="<?php echo home_url('/markalar/'); ?>" data-has-sub-menu
                                       class="lg:h-full inline-flex items-center clamp-[gap,5px,10px] lg:clamp-[px,6px,12px] max-lg:py-1.5 max-lg:px-4 max-lg:w-[calc(100%-60px)]"
                                       @mouseenter="if ($store.data.isDesktop) { $store.data.activeIndex = 2; $store.data.dropdownMenuOpen = true; }"
                                       @click="if (!$store.data.isDesktop) $store.data.activeIndex = $store.data.activeIndex === 2 ? -1 : 2;">
                                        <span class="clamp-[text,15px,18px,1024px,1920px] font-medium text-dark max-lg:text-[16px]">Markalara Göre</span>
                                        <i class="icon-angle-down text-[9px] h-2.25 text-dark transition-all duration-300 lg:group-hover/i:text-primary group-toggle/i:text-primary group-toggle/i:scale-y-[-1] max-lg:hidden!"></i>
                                    </a>
                                    <div class="lg:hidden size-7.5 border border-dark/10 rounded-full flex-center"
                                         @click="$store.data.activeIndex = $store.data.activeIndex === 2 ? -1 : 2;">
                                        <i class="icon-angle-down text-[12px] h-3 text-dark transition-transform duration-300 group-toggle/i:scale-y-[-1]"></i>
                                    </div>
                                    <div x-show="(!$store.data.isDesktop && $store.data.activeIndex === 2) || $store.data.isDesktop" x-collapse.duration.300ms class="lg:absolute lg:left-1/2 lg:top-full lg:-translate-x-1/2 lg:w-max max-lg:w-full">
                                        <div x-show="($store.data.isDesktop && $store.data.activeIndex === 2) || !$store.data.isDesktop" x-transition.duration.300ms class="mt-2">
                                            <div class="w-full max-w-263">
                                                <div class="w-full lg:bg-white lg:shadow-card lg:rounded-2xl lg:clamp-[px,16px,30px] lg:clamp-[py,20px,30px]">
                                                    <ul class="grid grid-cols-4 clamp-[gap,12px,24px] max-lg:grid-cols-2 max-lg:p-4 max-lg:pr-0"
                                                        data-brands-grid
                                                        data-brands-layout="header"
                                                        data-brands-src="<?php echo esc_url($brands_json_uri); ?>">
                                                        <li class="col-span-full text-[16px] leading-[1.8] font-medium tracking-[-0.08px] text-text text-center">Markalar yükleniyor...</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- Hizmet Bölgeleri -->
                                <li class="group/i relative lg:h-full max-lg:not-last:border-b max-lg:border-dark/10 max-lg:flex max-lg:items-center max-lg:justify-between max-lg:flex-wrap max-lg:gap-x-7.5 max-lg:pr-4"
                                    :class="{ 'toggle': $store.data.activeIndex === 3 }"
                                    @mouseleave="if ($store.data.isDesktop) { $store.data.activeIndex = -1; $store.data.dropdownMenuOpen = false; }">
                                    <a href="<?php echo home_url('/hizmet-bolgeleri/'); ?>"
                                       class="lg:h-full inline-flex items-center clamp-[gap,5px,10px] lg:clamp-[px,6px,12px] max-lg:py-1.5 max-lg:px-4 max-lg:w-[calc(100%-60px)]">
                                        <span class="clamp-[text,15px,18px,1024px,1920px] font-medium text-dark max-lg:text-[16px]">Hizmet Bölgeleri</span>
                                    </a>
                                </li>

                                <!-- Panelix -->
                                <li class="group/i relative lg:h-full max-lg:not-last:border-b max-lg:border-dark/10 max-lg:flex max-lg:items-center max-lg:justify-between max-lg:flex-wrap max-lg:gap-x-7.5 max-lg:pr-4"
                                    :class="{ 'toggle': $store.data.activeIndex === 4 }"
                                    @mouseleave="if ($store.data.isDesktop) { $store.data.activeIndex = -1; $store.data.dropdownMenuOpen = false; }">
                                    <a href="#" data-has-sub-menu
                                       class="lg:h-full inline-flex items-center clamp-[gap,5px,10px] lg:clamp-[px,6px,12px] max-lg:py-1.5 max-lg:px-4 max-lg:w-[calc(100%-60px)]"
                                       @mouseenter="if ($store.data.isDesktop) { $store.data.activeIndex = 4; $store.data.dropdownMenuOpen = true; }"
                                       @click="if (!$store.data.isDesktop) $store.data.activeIndex = $store.data.activeIndex === 4 ? -1 : 4;">
                                        <span class="clamp-[text,15px,18px,1024px,1920px] font-medium text-dark max-lg:text-[16px]">Panelix</span>
                                        <i class="icon-angle-down text-[9px] h-2.25 text-dark transition-all duration-300 lg:group-hover/i:text-primary group-toggle/i:text-primary group-toggle/i:scale-y-[-1] max-lg:hidden!"></i>
                                    </a>
                                    <div class="lg:hidden size-7.5 border border-dark/10 rounded-full flex-center"
                                         @click="$store.data.activeIndex = $store.data.activeIndex === 4 ? -1 : 4;">
                                        <i class="icon-angle-down text-[12px] h-3 text-dark transition-transform duration-300 group-toggle/i:scale-y-[-1]"></i>
                                    </div>
                                    <div x-show="(!$store.data.isDesktop && $store.data.activeIndex === 4) || $store.data.isDesktop" x-collapse.duration.300ms class="lg:absolute lg:left-1/2 lg:top-full lg:-translate-x-1/2 lg:w-max max-lg:w-full">
                                        <div x-show="($store.data.isDesktop && $store.data.activeIndex === 4) || !$store.data.isDesktop" x-transition.duration.300ms class="mt-2">
                                            <div class="w-full max-w-700">
                                                <div class="w-full lg:bg-white lg:shadow-card lg:rounded-2xl lg:clamp-[px,16px,30px] lg:clamp-[py,20px,30px] max-lg:pl-4 max-lg:pb-4">
                                                    <ul class="grid grid-cols-2 lg:clamp-[gap,12px,16px] max-lg:grid-cols-1 max-lg:px-4 max-lg:border-l max-lg:border-dark/10">
                                                        <li class="max-lg:not-last:border-b max-lg:border-dark/10">
                                                            <a href="<?php echo home_url('/hakkimizda/'); ?>" title="Hakkımızda" class="group/s w-full inline-flex items-center lg:clamp-[gap,8px,12px] lg:border lg:border-dark/10 lg:rounded-xl lg:px-4 lg:py-3 lg:transition-colors lg:duration-300 lg:hover:border-secondary lg:hover:bg-secondary/10 lg:not-[&:has(img)]:justify-center max-lg:py-2">
                                                                <span class="text-[16px] leading-tight font-medium tracking-[-0.16px] text-dark">Hakkımızda</span>
                                                            </a>
                                                        </li>
                                                        <li class="max-lg:not-last:border-b max-lg:border-dark/10">
                                                            <a href="<?php echo home_url('/blog/'); ?>" title="Blog" class="group/s w-full inline-flex items-center lg:clamp-[gap,8px,12px] lg:border lg:border-dark/10 lg:rounded-xl lg:px-4 lg:py-3 lg:transition-colors lg:duration-300 lg:hover:border-secondary lg:hover:bg-secondary/10 lg:not-[&:has(img)]:justify-center max-lg:py-2">
                                                                <span class="text-[16px] leading-tight font-medium tracking-[-0.16px] text-dark">Blog</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- İletişim -->
                                <li class="group/i relative lg:h-full max-lg:not-last:border-b max-lg:border-dark/10 max-lg:flex max-lg:items-center max-lg:justify-between max-lg:flex-wrap max-lg:gap-x-7.5 max-lg:pr-4"
                                    :class="{ 'toggle': $store.data.activeIndex === 5 }"
                                    @mouseleave="if ($store.data.isDesktop) { $store.data.activeIndex = -1; $store.data.dropdownMenuOpen = false; }">
                                    <a href="<?php echo home_url('/iletisim/'); ?>"
                                       class="lg:h-full inline-flex items-center clamp-[gap,5px,10px] lg:clamp-[px,6px,12px] max-lg:py-1.5 max-lg:px-4 max-lg:w-[calc(100%-60px)]">
                                        <span class="clamp-[text,15px,18px,1024px,1920px] font-medium text-dark max-lg:text-[16px]">İletişim</span>
                                    </a>
                                </li>

                                <?php endif; ?>

                            </ul>
                        </nav>
                    </div>

                    <a href="tel:+<?php echo PANELIX_PHONE; ?>" title="Bizi Hemen Ara"
                       class="group/btn bg-primary md:hover:bg-secondary inline-flex items-center justify-center gap-2.5 clamp-[px,24px,32px] clamp-[py,12px,18px] rounded-xl min-w-max relative transition-colors duration-300 [[disabled]]:opacity-50 [[disabled]]:pointer-events-none max-xs:w-full max-lg:[&_i]:hidden! max-lg:px-4 max-lg:py-2 max-lg:rounded-lg">
                        <span class="text-white clamp-[text,16px,18px] leading-tight font-medium tracking-[-0.18px] transition-colors duration-300">Bizi Hemen Ara</span>
                        <i class="icon-phone text-white clamp-[text,16px,18px] clamp-[h,16px,18px] transition-colors duration-300"></i>
                    </a>

                    <button type="button" class="lg:hidden w-10 h-11 px-1" @click="$store.data.menuOpen = !$store.data.menuOpen">
                        <span class="size-full flex-center flex-col gap-1.5 relative">
                            <span class="block w-full h-0.5 bg-primary rounded-1 transition-transform duration-300" :class="{ 'rotate-45 translate-y-2': $store.data.menuOpen }"></span>
                            <span class="block w-full h-0.5 bg-primary rounded-1 transition-opacity duration-300" :class="{ 'opacity-0': $store.data.menuOpen }"></span>
                            <span class="block w-full h-0.5 bg-primary rounded-1 transition-transform duration-300" :class="{ '-rotate-45 -translate-y-2': $store.data.menuOpen }"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>

<main>
