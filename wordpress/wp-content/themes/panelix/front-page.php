<?php get_header(); ?>

<?php
$img  = get_template_directory_uri() . '/assets/image';
$phone = PANELIX_PHONE;

$star_svg = '<svg xmlns="http://www.w3.org/2000/svg" width="19" height="20" viewBox="0 0 19 20" fill="none" class="w-5"><path d="M10.1652 0.703125C9.98112 0.273437 9.59223 0 9.16515 0C8.73807 0 8.35265 0.273437 8.16515 0.703125L5.93251 5.87109L0.946404 6.69922C0.529738 6.76953 0.182515 7.09765 0.0540432 7.54687C-0.074429 7.99609 0.0297376 8.49219 0.328349 8.82422L3.9464 12.8516L3.09224 18.543C3.02279 19.0117 3.1964 19.4883 3.54015 19.7656C3.8839 20.043 4.33876 20.0781 4.71376 19.8555L9.16862 17.1797L13.6235 19.8555C13.9985 20.0781 14.4533 20.0469 14.7971 19.7656C15.1408 19.4844 15.3145 19.0117 15.245 18.543L14.3874 12.8516L18.0054 8.82422C18.304 8.49219 18.4117 7.99609 18.2797 7.54687C18.1478 7.09765 17.804 6.76953 17.3874 6.69922L12.3978 5.87109L10.1652 0.703125Z" fill="#F3DE09"/></svg>';

// Yorumlar SCF Site Genel Ayarları → Google Yorumları sekmesinden gelir
$reviews = [];
if (function_exists('get_field')) {
    $rows = get_field('google_yorumlar', 'option');
    if (is_array($rows)) {
        foreach ($rows as $row) {
            $reviews[] = [
                'name' => $row['isim'] ?? '',
                'text' => $row['metin'] ?? '',
            ];
        }
    }
}
// Fallback: SCF boşsa yorumlar bölümü gizlenir (count 0)
?>

<main class="pt-(--headerHeight)">

    <!-- Hero Section -->
    <section data-module style="--min-pt: 15; --max-pt: 50; --min-pb: 50; --max-pb: 150; --min-w: 768; --max-w: 1600">
        <div class="container">
            <div class="grid grid-cols-12 gap-6 max-lg:grid-cols-1">
                <div class="lg:col-span-5 lg:clamp-[py,24px,44px]">
                    <div class="flex flex-col clamp-[gap,16px,33px]">
                        <h1 class="text-h1 text-dark *:text-secondary">İstanbul <span>TV Panel Değişimi</span> ve LED Arıza Servisi</h1>
                        <div class="w-fit bg-secondary inline-flex items-center clamp-[gap,16px,24px] px-6 py-3 rounded-4xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" viewBox="0 0 24 20" fill="none" class="clamp-[w,20px,24px] h-auto">
                                <path d="M2.66667 1.96875C2.3 1.96875 2 2.26406 2 2.625V13.125C2 13.4859 2.3 13.7812 2.66667 13.7812H21.3333C21.7 13.7812 22 13.4859 22 13.125V2.625C22 2.26406 21.7 1.96875 21.3333 1.96875H2.66667ZM0 2.625C0 1.17715 1.19583 0 2.66667 0H21.3333C22.8042 0 24 1.17715 24 2.625V13.125C24 14.5729 22.8042 15.75 21.3333 15.75H2.66667C1.19583 15.75 0 14.5729 0 13.125V2.625ZM6.33333 17.7188H17.6667C18.2208 17.7188 18.6667 18.1576 18.6667 18.7031C18.6667 19.2486 18.2208 19.6875 17.6667 19.6875H6.33333C5.77917 19.6875 5.33333 19.2486 5.33333 18.7031C5.33333 18.1576 5.77917 17.7188 6.33333 17.7188Z" fill="white"/>
                            </svg>
                            <span class="clamp-[text,16px,20px] leading-tight font-medium tracking-[-0.2px] text-white">İstanbul geneli hizmet · uygun süreçlerde ikame TV</span>
                        </div>
                        <p class="text-body *:font-semibold">Kırık ekran, ses var görüntü yok, mavi ekran, led arızası ve panel değişimi işlemlerinde hızlı, garantili ve profesyonel çözümler sunuyoruz. <strong>İstanbul'un tüm semtlerine hizmet veriyoruz.</strong></p>
                        <div class="flex flex-wrap clamp-[gap,12px,16px]">
                            <div class="bg-white px-4 clamp-[py,12px,16px] rounded-xl inline-flex items-center clamp-[gap,12px,16px]">
                                <img src="<?php echo $img; ?>/index/icon-1.svg" alt="" loading="eager" width="20" height="18" class="clamp-[w,18px,20px] h-auto">
                                <span class="text-[16px] font-medium leading-tight tracking-[-0.16px] text-dark">İkame TV Desteği</span>
                            </div>
                            <div class="bg-white px-4 clamp-[py,12px,16px] rounded-xl inline-flex items-center clamp-[gap,12px,16px]">
                                <img src="<?php echo $img; ?>/index/icon-2.svg" alt="" loading="eager" width="20" height="18" class="clamp-[w,18px,20px] h-auto">
                                <span class="text-[16px] font-medium leading-tight tracking-[-0.16px] text-dark">İstanbul geneli servis</span>
                            </div>
                            <div class="bg-white px-4 clamp-[py,12px,16px] rounded-xl inline-flex items-center clamp-[gap,12px,16px]">
                                <img src="<?php echo $img; ?>/index/icon-3.svg" alt="" loading="eager" width="20" height="18" class="clamp-[w,18px,20px] h-auto">
                                <span class="text-[16px] font-medium leading-tight tracking-[-0.16px] text-dark">Garantili İşçilik</span>
                            </div>
                        </div>
                        <div class="flex clamp-[gap,10px,20px] *:w-full max-xs:flex-col">
                            <a href="https://wa.me/+<?php echo $phone; ?>" title="WhatsApp'tan Fiyat Sor" class="group/btn bg-[#25D366] md:hover:bg-[#19b351] inline-flex items-center justify-center gap-2.5 clamp-[px,24px,32px] clamp-[py,12px,18px] rounded-xl min-w-max relative transition-colors duration-300 [[disabled]]:opacity-50 [[disabled]]:pointer-events-none max-xs:w-full">
                                <span class="text-dark md:group-hover/btn:text-white clamp-[text,16px,18px] leading-tight font-medium tracking-[-0.18px] transition-colors duration-300">WhatsApp'tan Fiyat Sor</span>
                                <i class="icon-whatsapp text-dark md:group-hover/btn:text-white clamp-[text,16px,18px] clamp-[h,16px,18px] transition-colors duration-300"></i>
                            </a>
                            <a href="tel:+<?php echo $phone; ?>" title="Hemen Ara" class="group/btn bg-primary md:hover:bg-secondary inline-flex items-center justify-center gap-2.5 clamp-[px,24px,32px] clamp-[py,12px,18px] rounded-xl min-w-max relative transition-colors duration-300 [[disabled]]:opacity-50 [[disabled]]:pointer-events-none max-xs:w-full">
                                <span class="text-white clamp-[text,16px,18px] leading-tight font-medium tracking-[-0.18px] transition-colors duration-300">Hemen Ara</span>
                                <i class="icon-phone text-white clamp-[text,16px,18px] clamp-[h,16px,18px] transition-colors duration-300"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-7 clamp-[pl,0px,81px]">
                    <img src="<?php echo $img; ?>/index/image-1.jpg" alt="Panelix TV Teknik Servis" loading="eager" width="854" height="604" class="full-cover rounded-xl">
                </div>
            </div>
        </div>
    </section>

    <!-- İkame TV Section -->
    <section data-module style="--min-pt: ; --max-pt: ; --min-pb: 50; --max-pb: 100; --min-w: 768; --max-w: 1600">
        <div class="container">
            <div class="grid grid-cols-12 gap-6 max-lg:grid-cols-1">
                <div class="lg:col-span-6 lg:relative lg:z-2">
                    <img src="<?php echo $img; ?>/index/image-2.jpg" alt="" loading="eager" width="798" height="628" class="full-cover rounded-xl">
                </div>
                <div class="lg:col-span-1 max-lg:hidden"></div>
                <div class="lg:col-span-5 lg:clamp-[py,24px,88px] lg:relative max-lg:order-first">
                    <img src="<?php echo $img; ?>/favicon.svg" alt="" loading="eager" width="467" height="536" class="absolute clamp-[left,-120px,-350px] top-1/2 -translate-y-1/2 max-lg:hidden">
                    <div class="flex flex-col clamp-[gap,16px,40px] lg:relative z-2">
                        <div class="w-fit bg-secondary/10 inline-flex items-center clamp-[gap,16px,24px] px-6 py-3 rounded-4xl">
                            <svg width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="clamp-[w,20px,24px] h-auto">
                                <path d="M2.66667 1.96875C2.3 1.96875 2 2.26406 2 2.625V13.125C2 13.4859 2.3 13.7812 2.66667 13.7812H21.3333C21.7 13.7812 22 13.4859 22 13.125V2.625C22 2.26406 21.7 1.96875 21.3333 1.96875H2.66667ZM0 2.625C0 1.17715 1.19583 0 2.66667 0H21.3333C22.8042 0 24 1.17715 24 2.625V13.125C24 14.5729 22.8042 15.75 21.3333 15.75H2.66667C1.19583 15.75 0 14.5729 0 13.125V2.625ZM6.33333 17.7188H17.6667C18.2208 17.7188 18.6667 18.1576 18.6667 18.7031C18.6667 19.2486 18.2208 19.6875 17.6667 19.6875H6.33333C5.77917 19.6875 5.33333 19.2486 5.33333 18.7031C5.33333 18.1576 5.77917 17.7188 6.33333 17.7188Z" fill="#1D4ED8"/>
                            </svg>
                            <span class="clamp-[text,16px,20px] leading-tight font-medium tracking-[-0.2px] text-secondary">İstanbul geneli hizmet · uygun süreçlerde ikame TV</span>
                        </div>
                        <h2 class="text-h1 text-dark *:text-secondary">TV'niz Tamirdeyken Siz Televizyonsuz Kalmayın</h2>
                        <p class="text-body text-text *:font-semibold">Panelix olarak, televizyonunuz servis sürecindeyken mümkün olan durumlarda müşterilerimize geçici ikame televizyon desteği sunuyoruz. Böylece onarım sürecinde eviniz televizyonsuz kalmaz, süreç daha konforlu ve güvenli ilerler.</p>
                        <div class="grid grid-cols-2 clamp-[gap,10px,20px] max-xs:grid-cols-1">
                            <a href="tel:+<?php echo $phone; ?>" title="Fiyat Teklifi Al" class="group/btn bg-primary md:hover:bg-secondary inline-flex items-center justify-center gap-2.5 clamp-[px,24px,32px] clamp-[py,12px,18px] rounded-xl min-w-max relative transition-colors duration-300 [[disabled]]:opacity-50 [[disabled]]:pointer-events-none max-xs:w-full">
                                <span class="text-white clamp-[text,16px,18px] leading-tight font-medium tracking-[-0.18px] transition-colors duration-300">Fiyat Teklifi Al</span>
                                <i class="icon-phone text-white clamp-[text,16px,18px] clamp-[h,16px,18px] transition-colors duration-300"></i>
                            </a>
                            <a href="https://wa.me/+<?php echo $phone; ?>" title="WhatsApp'tan Fiyat Sor" class="group/btn bg-[#25D366] md:hover:bg-[#19b351] inline-flex items-center justify-center gap-2.5 clamp-[px,24px,32px] clamp-[py,12px,18px] rounded-xl min-w-max relative transition-colors duration-300 [[disabled]]:opacity-50 [[disabled]]:pointer-events-none max-xs:w-full">
                                <span class="text-dark md:group-hover/btn:text-white clamp-[text,16px,18px] leading-tight font-medium tracking-[-0.18px] transition-colors duration-300">WhatsApp'tan Fiyat Sor</span>
                                <i class="icon-whatsapp text-dark md:group-hover/btn:text-white clamp-[text,16px,18px] clamp-[h,16px,18px] transition-colors duration-300"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hizmetler Section -->
    <section data-module style="--min-pt: ; --max-pt: ; --min-pb: 50; --max-pb: 100; --min-w: 768; --max-w: 1600">
        <div class="bg-primary clamp-[py,50px,100px]">
            <div class="container">
                <div class="flex flex-col gap-6 clamp-[mb,24px,50px]">
                    <div class="w-fit bg-white/10 inline-flex items-center clamp-[gap,16px,24px] px-6 py-3 rounded-4xl">
                        <i class="icon-panelix clamp-[text,18px,20px] text-white"></i>
                        <span class="clamp-[text,16px,20px] leading-tight font-medium tracking-[-0.2px] text-white">Hizmetlerimiz</span>
                    </div>
                    <h2 class="text-h2 text-white *:text-secondary">TV'niz İçin Neler Sağlıyoruz?</h2>
                </div>
                <div class="grid grid-cols-4 clamp-[gap,16px,24px] max-lg:grid-cols-2 max-md:grid-cols-1">
                    <?php
                    $hizmetler = [
                        ['icon' => 'icon-5.svg', 'title' => 'TV Panel Değişimi', 'slug' => 'tv-panel-degisimi', 'desc' => 'Ekran panelinde oluşan fiziksel hasar, görüntü kaybı veya ciddi ekran sorunlarında profesyonel panel değişimi hizmeti sunuyoruz. Cihaz modeline uygun çözümü belirleyerek süreci güvenli şekilde yönetiyoruz.'],
                        ['icon' => 'icon-6.svg', 'title' => 'Kırık Ekran TV Değişimi', 'slug' => 'kirik-ekran-tv-degisimi', 'desc' => 'Darbe, düşme veya baskı kaynaklı kırık ekran problemlerinde cihazınızın durumunu inceliyor, uygun ise ekran değişimi sürecini planlıyoruz. Amaç, sizi net ve ekonomik çözüme ulaştırmak.'],
                        ['icon' => 'icon-7.svg', 'title' => 'TV LED Değişimi', 'slug' => 'tv-led-degisimi', 'desc' => 'Ses olmasına rağmen görüntü gelmiyorsa veya ekran karanlık görünüyorsa led arızası söz konusu olabilir. Led bar ve aydınlatma kaynaklı sorunlarda doğru müdahale ile görüntü performansını geri kazandırıyoruz.'],
                        ['icon' => 'icon-8.svg', 'title' => 'TV Anakart Tamiri', 'slug' => 'tv-anakart-tamiri', 'desc' => 'Açılmama, kapanıp açılma, görüntü vermeme veya bağlantı sorunları gibi anakart kaynaklı arızalarda detaylı teknik kontrol sağlıyor, onarım veya uygun çözüm seçeneklerini sunuyoruz.'],
                    ];
                    foreach ($hizmetler as $h) {
                        $url = home_url('/hizmetler/' . $h['slug'] . '/');
                        echo '<div class="bg-light/10 border border-white/10 rounded-xl clamp-[px,16px,24px] clamp-[py,20px,30px]">';
                        echo '<div class="clamp-[size,40px,60px] bg-primary clamp-[rounded,8px,12px] flex-center mb-5">';
                        echo '<img src="' . $img . '/index/' . $h['icon'] . '" alt="" loading="lazy" width="24" height="24" class="clamp-[size,18px,24px] object-contain">';
                        echo '</div>';
                        echo '<h3 class="mb-3"><a href="' . esc_url($url) . '" class="inline-block lg:*:hover:text-secondary"><span class="clamp-[text,24px,30px] leading-tight font-medium tracking-[-0.3px] text-white lg:transition-colors lg:duration-300">' . esc_html($h['title']) . '</span></a></h3>';
                        echo '<p class="text-[16px] leading-[1.8] font-medium tracking-[-0.08px] text-white">' . esc_html($h['desc']) . '</p>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- TV Arıza Belirtileri -->
    <section data-module style="--min-pt: ; --max-pt: ; --min-pb: 50; --max-pb: 100; --min-w: 768; --max-w: 1600">
        <div class="container">
            <div class="flex flex-col items-center clamp-[gap,16px,24px] clamp-[mb,24px,50px]">
                <div class="w-fit bg-secondary/10 inline-flex items-center clamp-[gap,16px,24px] px-6 py-3 rounded-4xl">
                    <i class="icon-screwdriver clamp-[text,18px,21px] clamp-[h,18px,21px] text-secondary"></i>
                    <span class="clamp-[text,16px,20px] leading-tight font-medium tracking-[-0.2px] text-secondary">TV'nizin Arıza Belirtileri Nelerdir?</span>
                </div>
                <h2 class="text-h2 text-dark text-center *:text-secondary">TV'nizin Arıza Belirtileri Nelerdir?</h2>
            </div>
            <div class="grid grid-cols-3 clamp-[gap,16px,24px] max-lg:grid-cols-2 max-md:grid-cols-1">
                <?php
                $arizalar = [
                    ['img' => 'image-8.jpg', 'title' => 'Ses Var, Görüntü Yok', 'slug' => 'ses-var-goruntu-yok-tv-tamiri', 'desc' => 'Televizyon açılıyor ve ses geliyor ancak ekranda görüntü oluşmuyorsa led, panel veya görüntü aktarımıyla ilgili bir arıza olabilir. Bu durum en sık karşılaşılan sorunlardan biridir.'],
                    ['img' => 'image-7.jpg', 'title' => 'Mavi Ekran Sorunu', 'slug' => 'tv-mavi-ekran-sorunu', 'desc' => 'Ekranın tamamen mavi görünmesi, sinyal, panel, görüntü kartı veya iç donanım kaynaklı problemlerden kaynaklanabilir. Sorunun doğru tespiti için detaylı inceleme gerekir.'],
                    ['img' => 'image-6.jpg', 'title' => 'Ekranda Işık Lekeleri ve Parlamalar', 'slug' => 'tv-ekraninda-lekeler-parlamalar', 'desc' => 'Ekranda beliren parlak noktalar, mercek izi benzeri görüntüler veya homojen olmayan ışık dağılımı genellikle led ve reflektör sistemindeki sorunlara işaret eder.'],
                    ['img' => 'image-5.jpg', 'title' => 'TV Açılıyor Ama Görüntü Gelmiyor', 'slug' => 'tv-aciliyor-ama-goruntu-gelmiyor', 'desc' => 'Cihazın çalışıyor gibi görünmesine rağmen ekranda görüntü oluşmaması; panel, led bar, anakart veya bağlantılı bileşenlerde yaşanan teknik problemlerden kaynaklanabilir.'],
                    ['img' => 'image-4.jpg', 'title' => 'Ekranda Çizgiler Oluşuyor', 'slug' => 'tvde-dikey-yatay-cizgi-sorunu', 'desc' => 'Dikey ya da yatay çizgiler, panel yüzeyinde hasar veya ekran bileşenlerinde bozulma olduğuna işaret edebilir. Özellikle artan çizgiler ilerleyen arızaların habercisi olabilir.'],
                    ['img' => 'image-3.jpg', 'title' => 'Görüntü Karanlık veya Silik', 'slug' => 'tv-karanlik-gosteriyor', 'desc' => 'Ekranda görüntü çok karanlık, soluk veya yalnızca belli açılarda görünüyorsa aydınlatma sistemi ya da led bar kaynaklı bir arıza söz konusu olabilir.'],
                ];
                foreach ($arizalar as $a) {
                    $url = home_url('/hizmetler/' . $a['slug'] . '/');
                    echo '<div class="border border-text/20 rounded-xl overflow-hidden">';
                    echo '<img src="' . $img . '/index/' . $a['img'] . '" alt="' . esc_attr($a['title']) . '" loading="lazy" width="433" height="289" class="w-full h-auto aspect-433/289 object-cover">';
                    echo '<div class="clamp-[p,16px,20px]">';
                    echo '<h3 class="mb-3"><a href="' . esc_url($url) . '" class="inline-block lg:*:hover:text-secondary"><span class="clamp-[text,24px,30px] leading-tight font-medium tracking-[-0.3px] text-dark lg:transition-colors lg:duration-300">' . esc_html($a['title']) . '</span></a></h3>';
                    echo '<p class="text-[16px] leading-[1.8] font-medium tracking-[-0.08px] text-text">' . esc_html($a['desc']) . '</p>';
                    echo '</div></div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Servis Süreci -->
    <section data-module style="--min-pt: ; --max-pt: ; --min-pb: 50; --max-pb: 100; --min-w: 768; --max-w: 1600">
        <div class="bg-[#EEEEEE] clamp-[py,50px,100px]">
            <div class="container">
                <div class="flex flex-col items-center clamp-[gap,16px,24px] clamp-[mb,24px,50px]">
                    <div class="w-fit bg-secondary/10 inline-flex items-center clamp-[gap,16px,24px] px-6 py-3 rounded-4xl">
                        <i class="icon-screwdriver clamp-[text,18px,21px] clamp-[h,18px,21px] text-secondary"></i>
                        <span class="clamp-[text,16px,20px] leading-tight font-medium tracking-[-0.2px] text-secondary">Servis Süreci</span>
                    </div>
                    <h2 class="text-h2 text-dark text-center *:text-secondary">4 Adımda Kolay ve Güvenilir Servis Süreci</h2>
                </div>
                <div class="w-full flex clamp-[mb,50px,100px] max-lg:grid max-lg:grid-cols-2 max-lg:gap-4 max-md:grid-cols-1">
                    <?php
                    $surec = [
                        ['icon' => 'big-icon-1.svg', 'badge' => 'Hızlı ön bilgilendirme', 'title' => 'Bize Ulaşın', 'desc' => 'WhatsApp veya telefon üzerinden televizyonunuzdaki sorunu bize iletin. İlk değerlendirmeyi yapalım, arızaya göre sizi doğru şekilde yönlendirelim.'],
                        ['icon' => 'big-icon-2.svg', 'badge' => 'Doğru teşhis', 'title' => 'Arıza Tespiti Yapılsın', 'desc' => 'Cihazın durumuna göre yerinde ön kontrol veya atölye inceleme sürecini planlayalım. Sorunun kaynağını netleştirip en uygun çözümü belirleyelim.'],
                        ['icon' => 'big-icon-3.svg', 'badge' => 'Onarım veya Değişim Süreci', 'title' => 'Şeffaf ve kontrollü işlem', 'desc' => 'Panel, ekran, led veya anakart kaynaklı arızaya göre gerekli teknik işlemleri uygulayalım. Uygun durumlarda süreç boyunca ikame TV desteği de sunalım.'],
                        ['icon' => 'big-icon-4.svg', 'badge' => 'Güvenle teslim', 'title' => 'Teslim ve Memnuniyet', 'desc' => 'İşlem tamamlandıktan sonra televizyonunuzu güvenle teslim edelim. Amacımız yalnızca arızayı gidermek değil, memnun kalacağınız bir servis deneyimi sunmaktır.'],
                    ];
                    foreach ($surec as $i => $s) {
                        echo '<div class="w-full">';
                        echo '<div class="clamp-[h,180px,212px] bg-primary clamp-[py,30px,48px] clamp-[px,20px,55px] clamp-[rounded,12px,24px] flex-center relative mb-7.5">';
                        echo '<img src="' . $img . '/index/' . $s['icon'] . '" alt="" loading="lazy" width="120" height="80" class="full-contain">';
                        echo '<div class="absolute left-1/2 bottom-0 -translate-x-1/2 translate-y-1/2 w-full flex-center"><p class="w-fit bg-secondary px-4 py-2 rounded-4xl text-[14px] leading-tight font-semibold tracking-[-0.14px] text-white text-center">' . esc_html($s['badge']) . '</p></div>';
                        echo '</div>';
                        echo '<div><h3 class="clamp-[text,24px,30px] leading-tight font-medium tracking-[-0.3px] text-dark mb-3">' . esc_html($s['title']) . '</h3>';
                        echo '<p class="text-[16px] leading-[1.8] tracking-[-0.08px] text-text">' . esc_html($s['desc']) . '</p></div></div>';
                        if ($i < 3) {
                            echo '<div class="clamp-[w,30px,80px] shrink-0 clamp-[pt,30px,106px] last:hidden max-lg:hidden"><div class="relative"><div class="w-full h-px border-t border-dashed border-black/10"></div><i class="icon-angle-right text-[10px] h-2.5 text-accent absolute-center"></i></div></div>';
                        }
                    }
                    ?>
                </div>
                <div class="w-full max-w-165.25 mx-auto flex clamp-[gap,10px,20px] *:w-full max-md:flex-col">
                    <a href="tel:+<?php echo $phone; ?>" title="Fiyat Teklifi Al" class="group/btn bg-primary md:hover:bg-secondary inline-flex items-center justify-center gap-2.5 clamp-[px,24px,32px] clamp-[py,12px,18px] rounded-xl min-w-max relative transition-colors duration-300 [[disabled]]:opacity-50 [[disabled]]:pointer-events-none max-xs:w-full">
                        <span class="text-white clamp-[text,16px,18px] leading-tight font-medium tracking-[-0.18px] transition-colors duration-300">Fiyat Teklifi Al</span>
                        <i class="icon-phone text-white clamp-[text,16px,18px] clamp-[h,16px,18px] transition-colors duration-300"></i>
                    </a>
                    <a href="https://wa.me/+<?php echo $phone; ?>" title="WhatsApp'tan Fiyat Sor" class="group/btn bg-[#25D366] md:hover:bg-[#19b351] inline-flex items-center justify-center gap-2.5 clamp-[px,24px,32px] clamp-[py,12px,18px] rounded-xl min-w-max relative transition-colors duration-300 [[disabled]]:opacity-50 [[disabled]]:pointer-events-none max-xs:w-full">
                        <span class="text-dark md:group-hover/btn:text-white clamp-[text,16px,18px] leading-tight font-medium tracking-[-0.18px] transition-colors duration-300">WhatsApp'tan Fiyat Sor</span>
                        <i class="icon-whatsapp text-dark md:group-hover/btn:text-white clamp-[text,16px,18px] clamp-[h,16px,18px] transition-colors duration-300"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Yorumlar -->
    <?php if (!empty($reviews)) : ?>
    <section data-module style="--min-pt: ; --max-pt: ; --min-pb: 50; --max-pb: 100; --min-w: 768; --max-w: 1600">
        <div class="container clamp-[mb,30px,85px]">
            <div class="flex lg:items-end lg:justify-between gap-6 max-lg:flex-col">
                <div class="flex flex-col gap-6 clamp-[max-w,650px,991px]">
                    <div class="w-fit bg-secondary/10 inline-flex items-center clamp-[gap,16px,24px] px-6 py-3 rounded-4xl">
                        <i class="icon-screwdriver clamp-[text,18px,21px] clamp-[h,18px,21px] text-secondary"></i>
                        <span class="clamp-[text,16px,20px] leading-tight font-medium tracking-[-0.2px] text-secondary">Müşterilerimizin Yorumları Bizim İçin Değerli</span>
                    </div>
                    <div class="flex items-center clamp-[gap,12px,16px]">
                        <img src="<?php echo $img; ?>/index/google.svg" alt="" loading="lazy" width="40" height="41" class="clamp-[w,30px,40px]">
                        <h2 class="text-h2 text-dark *:text-secondary">Google Yorumları</h2>
                    </div>
                    <p class="text-body text-text">Servis kalitemizi en iyi anlatan şey, hizmet verdiğimiz müşterilerimizin deneyimleridir. Televizyon tamiri, panel değişimi ve teknik servis sürecimiz hakkında yapılan gerçek yorumlara göz atarak bizi daha yakından tanıyabilirsiniz.</p>
                </div>
                <a href="<?php echo esc_url(PANELIX_MAPS_URL); ?>" title="Yorumları İncele" target="_blank" class="group/btn bg-primary md:hover:bg-secondary inline-flex items-center justify-center gap-2.5 clamp-[px,24px,32px] clamp-[py,12px,18px] rounded-xl min-w-max relative transition-colors duration-300 [[disabled]]:opacity-50 [[disabled]]:pointer-events-none max-xs:w-full lg:clamp-[w,240px,320px]">
                    <span class="text-white clamp-[text,16px,18px] leading-tight font-medium tracking-[-0.18px] transition-colors duration-300">Yorumları İncele</span>
                </a>
            </div>
        </div>
        <?php
        // Loop modu için en az 8 slide gerekir; az yorum varsa kopyalayarak çoğalt.
        $reviews_for_slider = $reviews;
        while (count($reviews_for_slider) < 8 && count($reviews) > 0) {
            $reviews_for_slider = array_merge($reviews_for_slider, $reviews);
        }
        ?>
        <div class="overflow-hidden pb-14">
            <div class="comments-slider w-full clamp-[mb,16px,24px]" data-animation style="--translate-y: -50px; --blur: 4px;">
                <div class="swiper-wrapper ease-linear!">
                    <?php foreach ($reviews_for_slider as $r): ?>
                    <div class="swiper-slide h-auto! self-stretch">
                        <div class="h-full bg-white clamp-[px,20px,32px] clamp-[py,24px,42px] rounded-2xl shadow-[0_9px_16px_-5px_rgba(30,30,30,0.13)]">
                            <div class="flex items-center justify-between gap-4 mb-3">
                                <h3 class="clamp-[text,16px,24px] text-dark"><?php echo esc_html($r['name']); ?></h3>
                                <div class="inline-flex gap-0.5">
                                    <?php echo str_repeat($star_svg, 5); ?>
                                </div>
                            </div>
                            <p class="text-body text-text"><?php echo esc_html($r['text']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="comments-slider w-full" dir="rtl" data-animation style="--translate-y: 50px; --blur: 4px;">
                <div class="swiper-wrapper ease-linear!">
                    <?php foreach (array_reverse($reviews_for_slider) as $r): ?>
                    <div class="swiper-slide h-auto! self-stretch">
                        <div class="h-full bg-white clamp-[px,20px,32px] clamp-[py,24px,42px] rounded-2xl shadow-[0_9px_16px_-5px_rgba(30,30,30,0.13)]">
                            <div class="flex items-center justify-between gap-4 mb-3" dir="ltr">
                                <h3 class="clamp-[text,16px,24px] text-dark"><?php echo esc_html($r['name']); ?></h3>
                                <div class="inline-flex gap-0.5">
                                    <?php echo str_repeat($star_svg, 5); ?>
                                </div>
                            </div>
                            <p class="text-body text-text" dir="ltr"><?php echo esc_html($r['text']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <script>
            (function initCommentsSlider() {
                if (typeof Swiper === 'undefined') {
                    document.addEventListener('DOMContentLoaded', initCommentsSlider);
                    return;
                }
                document.querySelectorAll('.comments-slider').forEach(function (el) {
                    new Swiper(el, {
                        slidesPerView: 1.2,
                        spaceBetween: 16,
                        speed: 3500,
                        resistance: true,
                        resistanceRatio: false,
                        loop: true,
                        centeredSlides: true,
                        autoplay: { delay: 0, disableOnInteraction: false, pauseOnMouseEnter: false },
                        breakpoints: {
                            577:  { slidesPerView: 2,   spaceBetween: 20, speed: 5000 },
                            1025: { slidesPerView: 2.6, spaceBetween: 20, speed: 5000 },
                            1281: { slidesPerView: 3.4, spaceBetween: 24, speed: 5000 },
                        },
                    });
                });
            })();
        </script>
    </section>
    <?php endif; ?>

    <!-- Markalar -->
    <section data-module style="--min-pt: ; --max-pt: ; --min-pb: 50; --max-pb: 100; --min-w: 768; --max-w: 1600">
        <div class="container">
            <div class="max-w-200 mx-auto flex flex-col items-center gap-6 clamp-[mb,24px,50px]">
                <div class="w-fit bg-secondary/10 inline-flex items-center clamp-[gap,16px,24px] px-6 py-3 rounded-4xl">
                    <span class="clamp-[text,16px,20px] leading-tight font-medium tracking-[-0.2px] text-secondary">Markalar</span>
                </div>
                <h2 class="text-h2 text-dark text-center *:text-secondary">Servis Verdiğimiz Markalar</h2>
                <p class="text-body text-text text-center">Samsung, LG, Vestel, Philips, Sony, TCL, Arçelik ve Beko başta olmak üzere birçok televizyon markasında panel, led ve görüntü arızalarına servis desteği sunuyoruz.</p>
            </div>
            <div class="grid grid-cols-4 clamp-[gap,16px,24px] clamp-[mb,50px,100px] max-lg:grid-cols-2"
                 data-brands-grid
                 data-brands-layout="index"
                 data-brands-src="<?php echo esc_url(rest_url('panelix/v1/markalar')); ?>">
                <p class="col-span-full text-[16px] leading-[1.8] font-medium tracking-[-0.08px] text-text text-center">Markalar yükleniyor...</p>
            </div>
            <div class="w-full max-w-165.25 mx-auto flex clamp-[gap,10px,20px] *:w-full max-md:flex-col">
                <a href="tel:+<?php echo $phone; ?>" title="Fiyat Teklifi Al" class="group/btn bg-primary md:hover:bg-secondary inline-flex items-center justify-center gap-2.5 clamp-[px,24px,32px] clamp-[py,12px,18px] rounded-xl min-w-max relative transition-colors duration-300 max-xs:w-full">
                    <span class="text-white clamp-[text,16px,18px] leading-tight font-medium tracking-[-0.18px] transition-colors duration-300">Fiyat Teklifi Al</span>
                    <i class="icon-phone text-white clamp-[text,16px,18px] clamp-[h,16px,18px] transition-colors duration-300"></i>
                </a>
                <a href="https://wa.me/+<?php echo $phone; ?>" title="WhatsApp'tan Fiyat Sor" class="group/btn bg-[#25D366] md:hover:bg-[#19b351] inline-flex items-center justify-center gap-2.5 clamp-[px,24px,32px] clamp-[py,12px,18px] rounded-xl min-w-max relative transition-colors duration-300 max-xs:w-full">
                    <span class="text-dark md:group-hover/btn:text-white clamp-[text,16px,18px] leading-tight font-medium tracking-[-0.18px] transition-colors duration-300">WhatsApp'tan Fiyat Sor</span>
                    <i class="icon-whatsapp text-dark md:group-hover/btn:text-white clamp-[text,16px,18px] clamp-[h,16px,18px] transition-colors duration-300"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Geçici İkame TV -->
    <section data-module style="--min-pt: ; --max-pt: ; --min-pb: 50; --max-pb: 100; --min-w: 768; --max-w: 1600">
        <div class="container">
            <div class="grid grid-cols-12 gap-6 max-lg:grid-cols-1">
                <div class="lg:col-span-5 lg:relative lg:clamp-[py,24px,55px]">
                    <img src="<?php echo $img; ?>/favicon.svg" alt="" loading="eager" width="467" height="536" class="absolute clamp-[right,-55px,-85px] top-1/2 -translate-y-1/2 max-lg:hidden">
                    <div class="flex flex-col clamp-[gap,16px,40px] lg:relative z-2">
                        <h2 class="text-h1 text-dark *:text-secondary">Geçici İkame TV ile Daha Konforlu Servis Süreci</h2>
                        <article class="home-editor editor">
                            <h3>Panelix olarak, televizyonunuz servis sürecindeyken mümkün olan durumlarda müşterilerimize geçici ikame televizyon desteği sunuyoruz. Böylece onarım sürecinde eviniz televizyonsuz kalmaz, süreç daha konforlu ve güvenli ilerler.</h3>
                            <p>Televizyonunuz arızalandığında sadece tamir süresi değil, o süre boyunca nasıl bir hizmet aldığınız da önemlidir. Panelix farkı tam burada başlar. Uygun servis süreçlerinde, müşterilerimizi televizyonsuz bırakmamak için geçici TV desteği sağlıyoruz.</p>
                            <ul>
                                <li>Uygun işlemlerde geçici TV desteği</li>
                                <li>Daha konforlu servis süreci</li>
                                <li>Güven odaklı hizmet anlayışı</li>
                                <li>Müşteri memnuniyetini önceliklendiren yaklaşım</li>
                            </ul>
                        </article>
                    </div>
                </div>
                <div class="lg:col-span-1 max-lg:hidden"></div>
                <div class="lg:col-span-6 lg:relative lg:z-2">
                    <img src="<?php echo $img; ?>/index/image-9.jpg" alt="" loading="eager" width="798" height="628" class="full-cover rounded-xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Hizmet Bölgeleri -->
    <?php
    $bolgeler = [
        ['ad' => 'Bakırköy',     'baslik' => 'Bakırköy TV Servisi',     'aciklama' => 'Bakırköy ve çevresinde panel, ekran ve led arızalarına hızlı teknik servis desteği.'],
        ['ad' => 'Bahçelievler', 'baslik' => 'Bahçelievler TV Servisi', 'aciklama' => 'Kırık ekran, görüntü problemi ve TV led arızalarında profesyonel destek.'],
        ['ad' => 'Zeytinburnu',  'baslik' => 'Zeytinburnu TV Servisi',  'aciklama' => 'Televizyon panel değişimi ve teknik servis işlemlerinde güvenilir çözüm.'],
        ['ad' => 'Beylikdüzü',   'baslik' => 'Beylikdüzü TV Servisi',   'aciklama' => 'TV ekran ve led problemlerinde profesyonel teknik servis desteği.'],
        ['ad' => 'Şişli',        'baslik' => 'Şişli TV Servisi',        'aciklama' => 'Marka ve model fark etmeksizin televizyon arızalarında çözüm odaklı hizmet.'],
        ['ad' => 'Kadıköy',      'baslik' => 'Kadıköy TV Servisi',      'aciklama' => 'Anadolu Yakası\'nda televizyon panel ve led değişim hizmetleri.'],
        ['ad' => 'Üsküdar',      'baslik' => 'Üsküdar TV Servisi',      'aciklama' => 'Ekran, görüntü ve teknik arızalarda profesyonel servis desteği.'],
        ['ad' => 'Maltepe',      'baslik' => 'Maltepe TV Servisi',      'aciklama' => 'Size en yakın teknik servis desteği.'],
    ];
    ?>
    <section data-module style="--min-pt: ; --max-pt: ; --min-pb: 50; --max-pb: 100; --min-w: 768; --max-w: 1600">
        <div class="bg-white clamp-[py,50px,100px]">
            <div class="container">
                <div class="max-w-268 mx-auto flex flex-col items-center gap-6 clamp-[mb,24px,50px]">
                    <div class="w-fit bg-secondary/10 inline-flex items-center clamp-[gap,16px,24px] px-6 py-3 rounded-4xl">
                        <span class="clamp-[text,16px,20px] leading-tight font-medium tracking-[-0.2px] text-secondary">Hizmet Bölgeleri</span>
                    </div>
                    <h2 class="text-h2 text-dark text-center *:text-secondary">Avrupa ve Anadolu Yakasına Servis Desteği</h2>
                    <p class="text-body text-text text-center">Avrupa Yakası ve Anadolu Yakası fark etmeksizin, İstanbul'un birçok semtine televizyon teknik servis hizmeti sunuyoruz. Uygun servis planlamasıyla hızlı çözüm üretiyoruz.</p>
                </div>
                <div class="grid grid-cols-4 clamp-[gap,16px,24px] clamp-[mb,50px,100px] max-lg:grid-cols-2">
                    <?php foreach ($bolgeler as $b): ?>
                    <div class="border border-secondary rounded-2xl px-4 py-7.5 shadow-[0_9px_16px_-5px_rgba(30,30,30,0.13)] flex flex-col items-center gap-2.5 text-center">
                        <h3 class="clamp-[text,20px,28px] font-semibold clamp-[tracking,-0.2px,-0.28px] text-dark"><?php echo esc_html($b['ad']); ?></h3>
                        <h4 class="clamp-[text,18px,24px] font-medium clamp-[tracking,-0.2px,-0.24px] text-accent"><?php echo esc_html($b['baslik']); ?></h4>
                        <p class="text-body text-text"><?php echo esc_html($b['aciklama']); ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="w-full max-w-165.25 mx-auto flex clamp-[gap,10px,20px] *:w-full max-md:flex-col">
                    <a href="<?php echo home_url('/hizmet-bolgeleri/'); ?>" title="Hizmet Bölgelerini İncele" class="group/btn bg-primary md:hover:bg-secondary inline-flex items-center justify-center gap-2.5 clamp-[px,24px,32px] clamp-[py,12px,18px] rounded-xl min-w-max relative transition-colors duration-300 max-xs:w-full">
                        <span class="text-white clamp-[text,16px,18px] leading-tight font-medium tracking-[-0.18px] transition-colors duration-300">Hizmet Bölgelerini İncele</span>
                    </a>
                    <a href="https://wa.me/+<?php echo $phone; ?>" title="WhatsApp'tan Bölgenizi Sor" class="group/btn bg-[#25D366] md:hover:bg-[#19b351] inline-flex items-center justify-center gap-2.5 clamp-[px,24px,32px] clamp-[py,12px,18px] rounded-xl min-w-max relative transition-colors duration-300 max-xs:w-full">
                        <span class="text-dark md:group-hover/btn:text-white clamp-[text,16px,18px] leading-tight font-medium tracking-[-0.18px] transition-colors duration-300">WhatsApp'tan Bölgenizi Sor</span>
                        <i class="icon-whatsapp text-dark md:group-hover/btn:text-white clamp-[text,16px,18px] clamp-[h,16px,18px] transition-colors duration-300"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Sıkça Sorulan Sorular -->
    <?php
    // SSS — SCF Site Genel Ayarları → Ana Sayfa SSS sekmesinden gelir
    $sss = [];
    if (function_exists('get_field')) {
        $rows = get_field('anasayfa_sss', 'option');
        if (is_array($rows)) {
            foreach ($rows as $row) {
                $sss[] = [
                    's' => $row['soru']  ?? '',
                    'c' => $row['cevap'] ?? '',
                ];
            }
        }
    }
    ?>
    <?php if (!empty($sss)) : ?>
    <section data-module style="--min-pt: ; --max-pt: ; --min-pb: 50; --max-pb: 100; --min-w: 768; --max-w: 1600">
        <div class="container">
            <div class="max-w-268 mx-auto flex flex-col items-center gap-6 clamp-[mb,24px,50px]">
                <div class="w-fit bg-secondary/10 inline-flex items-center clamp-[gap,16px,24px] px-6 py-3 rounded-4xl">
                    <i class="icon-panelix clamp-[text,18px,20px] h-[clamp,18px,20px] text-secondary"></i>
                    <span class="clamp-[text,16px,20px] leading-tight font-medium tracking-[-0.2px] text-secondary">SSS</span>
                </div>
                <h2 class="text-h2 text-dark text-center *:text-secondary">Sıkça Sorulan Sorular</h2>
                <p class="text-body text-text text-center">Televizyon panel değişimi, kırık ekran, led arızaları, servis süreci ve hizmet bölgeleri hakkında en çok merak edilen sorular.</p>
            </div>
            <div x-data="{ activeIndex: 0 }" class="grid grid-cols-2 clamp-[gap,16px,24px] clamp-[mb,50px,100px] max-lg:grid-cols-1">
                <?php foreach ($sss as $i => $q): ?>
                <div class="h-max bg-white/95 border border-dark/10 rounded-2xl transition-colors duration-300 md:hover:border-secondary" :class="{ 'border-secondary! bg-white!': activeIndex === <?php echo $i; ?> }">
                    <div class="clamp-[px,16px,32px] clamp-[py,20px,24px] flex items-center justify-between gap-4 cursor-pointer" @click="activeIndex = activeIndex === <?php echo $i; ?> ? -1 : <?php echo $i; ?>">
                        <h3 class="clamp-[text,18px,24px] font-medium clamp-[tracking,-0.18px,-0.24px] text-dark"><?php echo esc_html($q['s']); ?></h3>
                        <i class="icon-angle-down text-[16px] h-4 transition-transform duration-300" :class="{ 'scale-y-[-1]': activeIndex === <?php echo $i; ?> }"></i>
                    </div>
                    <div x-show="activeIndex === <?php echo $i; ?>" x-collapse.duration.300ms style="display: none;">
                        <div class="clamp-[px,16px,32px] clamp-[pb,20px,24px]">
                            <p class="text-body text-text"><?php echo esc_html($q['c']); ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="w-full max-w-165.25 mx-auto flex clamp-[gap,10px,20px] *:w-full max-md:flex-col">
                <a href="https://wa.me/+<?php echo $phone; ?>" title="Yanıt Bulamadınız Mı?" class="group/btn bg-[#25D366] md:hover:bg-[#19b351] inline-flex items-center justify-center gap-2.5 clamp-[px,24px,32px] clamp-[py,12px,18px] rounded-xl min-w-max relative transition-colors duration-300 max-xs:w-full">
                    <span class="text-dark md:group-hover/btn:text-white clamp-[text,16px,18px] leading-tight font-medium tracking-[-0.18px] transition-colors duration-300">Yanıt Bulamadınız Mı?</span>
                    <i class="icon-whatsapp text-dark md:group-hover/btn:text-white clamp-[text,16px,18px] clamp-[h,16px,18px] transition-colors duration-300"></i>
                </a>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- CTA Section -->
    <section data-module style="--min-pt: 50; --max-pt: 50; --min-pb: 50; --max-pb: 80; --min-w: 768; --max-w: 1600">
        <div class="container">
            <div class="bg-fixed bg-no-repeat bg-center bg-cover clamp-[px,20px,80px] clamp-[py,30px,60px] rounded-xl relative overflow-hidden" style="background-image: url('<?php echo $img; ?>/cta.jpg')">
                <div class="absolute-full bg-black/60"></div>
                <div class="w-full max-w-2xl relative z-2">
                    <div class="clamp-[mb,30px,50px]">
                        <h2 class="text-h3 text-white mb-5">TV arızanız için hızlı bilgi almak ister misiniz?</h2>
                        <p class="text-body text-white">Arıza belirtilerini ve televizyon modelinizi bizimle paylaşın, sizi en uygun servis sürecine yönlendirelim.</p>
                    </div>
                    <div class="flex clamp-[gap,10px,20px] *:w-full max-xs:flex-col">
                        <a href="https://wa.me/+<?php echo $phone; ?>" title="WhatsApp'tan Bilgi Al" class="group/btn bg-[#25D366] md:hover:bg-[#19b351] inline-flex items-center justify-center gap-2.5 clamp-[px,24px,32px] clamp-[py,12px,18px] rounded-xl min-w-max relative transition-colors duration-300 [[disabled]]:opacity-50 [[disabled]]:pointer-events-none max-xs:w-full">
                            <span class="text-dark md:group-hover/btn:text-white clamp-[text,16px,18px] leading-tight font-medium tracking-[-0.18px] transition-colors duration-300">WhatsApp'tan Bilgi Al</span>
                            <i class="icon-whatsapp text-dark md:group-hover/btn:text-white clamp-[text,16px,18px] clamp-[h,16px,18px] transition-colors duration-300"></i>
                        </a>
                        <a href="tel:+<?php echo $phone; ?>" title="Hemen Ara" class="group/btn bg-primary md:hover:bg-secondary inline-flex items-center justify-center gap-2.5 clamp-[px,24px,32px] clamp-[py,12px,18px] rounded-xl min-w-max relative transition-colors duration-300 [[disabled]]:opacity-50 [[disabled]]:pointer-events-none max-xs:w-full">
                            <span class="text-white clamp-[text,16px,18px] leading-tight font-medium tracking-[-0.18px] transition-colors duration-300">Hemen Ara</span>
                            <i class="icon-phone text-white clamp-[text,16px,18px] clamp-[h,16px,18px] transition-colors duration-300"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
