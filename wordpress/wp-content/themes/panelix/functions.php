<?php

// Theme setup
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);

    register_nav_menus([
        'primary'  => 'Ana Menü',
        'footer'   => 'Footer Menü',
        'services' => 'Hizmetler Menü',
    ]);

    add_image_size('hizmet-thumbnail', 800, 600, true);
    add_image_size('blog-thumbnail', 800, 500, true);
});

// Enqueue scripts & styles
add_action('wp_enqueue_scripts', function () {
    $uri = get_template_directory_uri();
    $ver = '1.0.0';

    wp_enqueue_style('panelix-app', $uri . '/assets/style/app.css', [], $ver);

    // Swiper Bundle (kayan yorumlar için) — defer, head'de
    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], null, ['strategy' => 'defer', 'in_footer' => false]);
    wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', [], null);

    // Alpine.js Collapse plugin (x-collapse için) — core'dan ÖNCE yüklenmeli
    wp_enqueue_script('alpinejs-collapse', 'https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js', [], null, ['strategy' => 'defer', 'in_footer' => false]);

    // Alpine.js core
    wp_enqueue_script('alpinejs', 'https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js', ['alpinejs-collapse'], null, ['strategy' => 'defer', 'in_footer' => false]);

    wp_enqueue_script('panelix-script', $uri . '/assets/script/script.js', [], $ver, ['in_footer' => true, 'strategy' => 'defer']);
});

// Register Custom Post Type: Hizmet
add_action('init', function () {
    register_post_type('hizmet', [
        'labels' => [
            'name'               => 'Hizmetler',
            'singular_name'      => 'Hizmet',
            'add_new'            => 'Yeni Hizmet',
            'add_new_item'       => 'Yeni Hizmet Ekle',
            'edit_item'          => 'Hizmeti Düzenle',
            'view_item'          => 'Hizmeti Görüntüle',
            'search_items'       => 'Hizmet Ara',
            'not_found'          => 'Hizmet bulunamadı',
            'not_found_in_trash' => 'Çöpte hizmet bulunamadı',
        ],
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => ['slug' => 'hizmetler', 'with_front' => false],
        'supports'           => ['title', 'editor', 'thumbnail', 'excerpt'],
        'menu_icon'          => 'dashicons-admin-tools',
        'show_in_rest'       => true,
    ]);

    // Taxonomy: Hizmet Kategorisi
    register_taxonomy('hizmet_kategorisi', 'hizmet', [
        'labels' => [
            'name'          => 'Hizmet Kategorileri',
            'singular_name' => 'Hizmet Kategorisi',
            'add_new_item'  => 'Yeni Kategori Ekle',
        ],
        'hierarchical'  => true,
        'public'        => true,
        'rewrite'       => ['slug' => 'hizmet-kategorisi'],
        'show_in_rest'  => true,
    ]);
});

// Breadcrumb helper
function panelix_breadcrumb(): void {
    $items = [['Ana Sayfa', home_url('/')]];

    if (is_singular('hizmet')) {
        $items[] = ['Hizmetlerimiz', home_url('/hizmetler/')];
        $items[] = [get_the_title(), null];
    } elseif (is_singular('post')) {
        $items[] = ['Blog', home_url('/blog/')];
        $items[] = [get_the_title(), null];
    } elseif (is_archive('hizmet')) {
        $items[] = ['Hizmetlerimiz', null];
    } elseif (is_home() || is_archive()) {
        $items[] = ['Blog', null];
    } elseif (is_page()) {
        $items[] = [get_the_title(), null];
    }

    echo '<ul class="inline-block text-body text-text lg:*:transition-colors lg:*:duration-300 lg:*:hover:text-dark *:last:text-dark [&_li+li]:before:content-[\'/\'] [&_li+li]:before:mx-2">';
    foreach ($items as $i => [$label, $url]) {
        if ($url) {
            echo '<li class="inline"><a href="' . esc_url($url) . '">' . esc_html($label) . '</a></li>';
        } else {
            echo '<li class="inline"><span>' . esc_html($label) . '</span></li>';
        }
    }
    echo '</ul>';
}

// SCF Options Page
add_action('acf/init', function () {
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page([
            'page_title' => 'Site Genel Ayarları',
            'menu_title' => 'Site Ayarları',
            'menu_slug'  => 'site-options',
            'capability' => 'manage_options',
            'icon_url'   => 'dashicons-admin-settings',
            'position'   => 2,
            'redirect'   => false,
        ]);
    }
});

// Site-wide constants — pulled from SCF options, hardcoded fallback
function panelix_option(string $key, string $fallback = ''): string {
    if (function_exists('get_field')) {
        $val = get_field($key, 'option');
        if ($val) return $val;
    }
    return $fallback;
}

define('PANELIX_PHONE',         panelix_option('iletisim_telefon',         '905350577188'));
define('PANELIX_PHONE_DISPLAY', panelix_option('iletisim_telefon_goruntu', '0535 057 71 88'));
define('PANELIX_ADDRESS',       panelix_option('iletisim_adres',           'Sakızağacı, Cevizli Yalı Sk. NO:5/A, 34000 Bakırköy/İstanbul'));
define('PANELIX_MAPS_URL',      panelix_option('iletisim_harita_url',      'https://maps.google.com/?q=Bak%C4%B1rk%C3%B6y+Panelix+TV+Teknik+Servis'));

// Register Custom Post Type: Marka
add_action('init', function () {
    register_post_type('marka', [
        'labels' => [
            'name'               => 'Markalar',
            'singular_name'      => 'Marka',
            'add_new'            => 'Yeni Marka',
            'add_new_item'       => 'Yeni Marka Ekle',
            'edit_item'          => 'Markayı Düzenle',
            'view_item'          => 'Markayı Görüntüle',
            'not_found'          => 'Marka bulunamadı',
        ],
        'public'             => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'supports'           => ['title', 'thumbnail', 'excerpt', 'page-attributes'],
        'menu_icon'          => 'dashicons-star-filled',
        'hierarchical'       => false,
    ]);
});

// REST API: /wp-json/panelix/v1/markalar
add_action('rest_api_init', function () {
    register_rest_route('panelix/v1', '/markalar', [
        'methods'             => 'GET',
        'callback'            => 'panelix_rest_markalar',
        'permission_callback' => '__return_true',
    ]);
});

function panelix_rest_markalar(WP_REST_Request $request): WP_REST_Response {
    $layout = sanitize_text_field($request->get_param('layout') ?? 'index');

    $posts = get_posts([
        'post_type'      => 'marka',
        'posts_per_page' => -1,
        'post_status'    => 'publish',
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
    ]);

    $brands = [];
    foreach ($posts as $post) {
        // Logo: önce SCF "marka_logo" alanı, yoksa öne çıkarılan görsel
        $logo_url = '';
        if (function_exists('get_field')) {
            $logo_field = get_field('marka_logo', $post->ID);
            if (is_array($logo_field) && !empty($logo_field['url'])) {
                $logo_url = $logo_field['url'];
            } elseif (is_string($logo_field) && $logo_field !== '') {
                $logo_url = $logo_field;
            }
        }
        if ($logo_url === '') {
            $logo_url = get_the_post_thumbnail_url($post->ID, 'medium') ?: '';
        }

        // Açıklama: önce SCF "marka_aciklama", yoksa post_excerpt
        $description = '';
        if (function_exists('get_field')) {
            $description = (string) get_field('marka_aciklama', $post->ID);
        }
        if ($description === '') {
            $description = (string) $post->post_excerpt;
        }

        $item = [
            'title' => $post->post_title,
            'logo'  => $logo_url,
            'url'   => function_exists('get_field') ? (get_field('marka_url', $post->ID) ?: '') : '',
        ];
        if ($layout === 'brands') {
            $item['description'] = $description;
        }
        $brands[] = $item;
    }

    return new WP_REST_Response(['brands' => $brands], 200);
}

// Enqueue brands loader script
add_action('wp_enqueue_scripts', function () {
    $uri = get_template_directory_uri();
    $ver = '1.0.0';
    wp_enqueue_script('panelix-brands', $uri . '/assets/script/brands.js', [], $ver, ['in_footer' => true, 'strategy' => 'async']);
}, 20);

/**
 * WP menü atanmışsa onu, atanmamışsa fallback listesini render eder.
 * Footer linkleri için ortak liste stiliyle.
 *
 * @param string $location  register_nav_menus'taki konum adı (footer, services, primary)
 * @param array  $fallback  [['Etiket', 'URL'], ...] formatında varsayılan liste
 */
function panelix_render_menu(string $location, array $fallback = []): void {
    $link_class = 'inline-block text-body text-white/80 py-1.25 lg:transition-colors lg:duration-300 lg:hover:text-white';
    $ul_class   = 'border-l border-white/10 clamp-[pl,16px,24px]';

    $menu_locations = get_nav_menu_locations();
    $menu_id = $menu_locations[$location] ?? 0;
    $items   = $menu_id ? wp_get_nav_menu_items($menu_id) : false;

    echo '<ul class="' . esc_attr($ul_class) . '">';

    if (!empty($items)) {
        foreach ($items as $item) {
            // Sadece üst seviye öğeleri al (alt menü dahil etmiyoruz)
            if ((int) $item->menu_item_parent !== 0) continue;
            $target = $item->target ? ' target="' . esc_attr($item->target) . '"' : '';
            echo '<li><a href="' . esc_url($item->url) . '"' . $target . ' class="' . esc_attr($link_class) . '">' . esc_html($item->title) . '</a></li>';
        }
    } else {
        foreach ($fallback as $row) {
            echo '<li><a href="' . esc_url($row[1]) . '" class="' . esc_attr($link_class) . '">' . esc_html($row[0]) . '</a></li>';
        }
    }

    echo '</ul>';
}

/**
 * Header'daki ana menüyü WP "primary" lokasyonundan render eder.
 *
 * Admin Görünüm → Menüler'den menü oluşturur, üst-seviye öğeler doğrudan link
 * veya alt menülü dropdown olabilir. CSS class konvansiyonları:
 *   - "auto-marka"  → Markalar grid'i (CPT'den, JS ile yüklenir)
 *   - "icon-2"      → Alt menü öğesi için icon-2.svg kullanılır (varsayılan: icon.svg)
 *
 * @return bool true → menü WP'den render edildi; false → menü yok, fallback gerekli.
 */
function panelix_render_header_menu(): bool {
    $menu_locations = get_nav_menu_locations();
    $menu_id = $menu_locations['primary'] ?? 0;
    $items = $menu_id ? wp_get_nav_menu_items($menu_id) : [];

    if (empty($items)) {
        return false;
    }

    // Hiyerarşi
    $top      = [];
    $children = [];
    foreach ($items as $item) {
        if ((int) $item->menu_item_parent === 0) {
            $top[$item->ID] = $item;
        } else {
            $children[(int) $item->menu_item_parent][] = $item;
        }
    }

    $img        = get_template_directory_uri() . '/assets/image';
    $brands_url = rest_url('panelix/v1/markalar');
    $idx        = 0;

    foreach ($top as $parent_id => $item) :
        $kids      = $children[$parent_id] ?? [];
        $classes   = (array) $item->classes;
        $is_brands = in_array('auto-marka', $classes, true);
        $has_sub   = !empty($kids) || $is_brands;
        ?>
        <li class="group/i relative lg:h-full max-lg:not-last:border-b max-lg:border-dark/10 max-lg:flex max-lg:items-center max-lg:justify-between max-lg:flex-wrap max-lg:gap-x-7.5 max-lg:pr-4"
            :class="{ 'toggle': $store.data.activeIndex === <?php echo $idx; ?> }"
            @mouseleave="if ($store.data.isDesktop) { $store.data.activeIndex = -1; $store.data.dropdownMenuOpen = false; }">

            <?php if ($has_sub) : ?>
                <a href="<?php echo esc_url($item->url); ?>" data-has-sub-menu
                   class="lg:h-full inline-flex items-center clamp-[gap,5px,10px] lg:clamp-[px,6px,12px] max-lg:py-1.5 max-lg:px-4 max-lg:w-[calc(100%-60px)]"
                   @mouseenter="if ($store.data.isDesktop) { $store.data.activeIndex = <?php echo $idx; ?>; $store.data.dropdownMenuOpen = true; }"
                   @click="if (!$store.data.isDesktop) $store.data.activeIndex = $store.data.activeIndex === <?php echo $idx; ?> ? -1 : <?php echo $idx; ?>;">
                    <span class="clamp-[text,15px,18px,1024px,1920px] font-medium text-dark max-lg:text-[16px]"><?php echo esc_html($item->title); ?></span>
                    <i class="icon-angle-down text-[9px] h-2.25 text-dark transition-all duration-300 lg:group-hover/i:text-primary group-toggle/i:text-primary group-toggle/i:scale-y-[-1] max-lg:hidden!"></i>
                </a>
                <div class="lg:hidden size-7.5 border border-dark/10 rounded-full flex-center"
                     @click="$store.data.activeIndex = $store.data.activeIndex === <?php echo $idx; ?> ? -1 : <?php echo $idx; ?>;">
                    <i class="icon-angle-down text-[12px] h-3 text-dark transition-transform duration-300 group-toggle/i:scale-y-[-1]"></i>
                </div>
                <div x-show="(!$store.data.isDesktop && $store.data.activeIndex === <?php echo $idx; ?>) || $store.data.isDesktop" x-collapse.duration.300ms class="lg:absolute lg:left-1/2 lg:top-full lg:-translate-x-1/2 lg:w-max max-lg:w-full">
                    <div x-show="($store.data.isDesktop && $store.data.activeIndex === <?php echo $idx; ?>) || !$store.data.isDesktop" x-transition.duration.300ms class="mt-2">
                        <?php if ($is_brands) : ?>
                            <div class="w-full max-w-263">
                                <div class="w-full lg:bg-white lg:shadow-card lg:rounded-2xl lg:clamp-[px,16px,30px] lg:clamp-[py,20px,30px]">
                                    <ul class="grid grid-cols-4 clamp-[gap,12px,24px] max-lg:grid-cols-2 max-lg:p-4 max-lg:pr-0"
                                        data-brands-grid data-brands-layout="header"
                                        data-brands-src="<?php echo esc_url($brands_url); ?>">
                                        <li class="col-span-full text-[16px] leading-[1.8] font-medium tracking-[-0.08px] text-text text-center">Markalar yükleniyor...</li>
                                    </ul>
                                </div>
                            </div>
                        <?php else : ?>
                            <div class="w-full max-w-700">
                                <div class="w-full lg:bg-white lg:shadow-card lg:rounded-2xl lg:clamp-[px,16px,30px] lg:clamp-[py,20px,30px] max-lg:pl-4 max-lg:pb-4">
                                    <ul class="grid grid-cols-2 lg:clamp-[gap,12px,16px] max-lg:grid-cols-1 max-lg:px-4 max-lg:border-l max-lg:border-dark/10">
                                        <?php foreach ($kids as $kid) :
                                            $kid_classes = (array) $kid->classes;
                                            $icon_file   = in_array('icon-2', $kid_classes, true) ? 'icon-2.svg' : 'icon.svg';
                                        ?>
                                            <li class="max-lg:not-last:border-b max-lg:border-dark/10">
                                                <a href="<?php echo esc_url($kid->url); ?>" title="<?php echo esc_attr($kid->title); ?>" class="group/s w-full inline-flex items-center lg:clamp-[gap,8px,12px] lg:border lg:border-dark/10 lg:rounded-xl lg:px-4 lg:py-3 lg:transition-colors lg:duration-300 lg:hover:border-secondary lg:hover:bg-secondary/10 lg:not-[&:has(img)]:justify-center max-lg:py-2">
                                                    <span class="size-10 flex-center bg-secondary/10 rounded-md lg:transition-colors lg:duration-300 max-lg:hidden">
                                                        <img src="<?php echo esc_url($img . '/header/' . $icon_file); ?>" alt="" loading="lazy" width="16" height="18" class="w-auto h-4.5">
                                                    </span>
                                                    <span class="text-[16px] leading-tight font-medium tracking-[-0.16px] text-dark"><?php echo esc_html($kid->title); ?></span>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php else : ?>
                <a href="<?php echo esc_url($item->url); ?>"
                   class="lg:h-full inline-flex items-center clamp-[gap,5px,10px] lg:clamp-[px,6px,12px] max-lg:py-1.5 max-lg:px-4 max-lg:w-[calc(100%-60px)]">
                    <span class="clamp-[text,15px,18px,1024px,1920px] font-medium text-dark max-lg:text-[16px]"><?php echo esc_html($item->title); ?></span>
                </a>
            <?php endif; ?>
        </li>
        <?php
        $idx++;
    endforeach;

    return true;
}

// Disable emoji scripts (not needed)
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

