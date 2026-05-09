<?php get_header(); ?>

<?php
$img   = get_template_directory_uri() . '/assets/image';
$phone = PANELIX_PHONE;

$hizmetler = [
    ['icon' => 'icon-5.svg', 'title' => 'TV Panel Değişimi',           'slug' => 'tv-panel-degisimi',           'desc' => 'Ekran panelinde oluşan fiziksel hasar, görüntü kaybı veya ciddi ekran sorunlarında profesyonel panel değişimi hizmeti sunuyoruz. Cihaz modeline uygun çözümü belirleyerek süreci güvenli şekilde yönetiyoruz.'],
    ['icon' => 'icon-6.svg', 'title' => 'Kırık Ekran TV Değişimi',     'slug' => 'kirik-ekran-tv-degisimi',     'desc' => 'Darbe, düşme veya baskı kaynaklı kırık ekran problemlerinde cihazınızın durumunu inceliyor, uygun ise ekran değişimi sürecini planlıyoruz. Amaç, sizi net ve ekonomik çözüme ulaştırmak.'],
    ['icon' => 'icon-7.svg', 'title' => 'TV LED Değişimi',              'slug' => 'tv-led-degisimi',              'desc' => 'Ses olmasına rağmen görüntü gelmiyorsa veya ekran karanlık görünüyorsa led arızası söz konusu olabilir. Led bar ve aydınlatma kaynaklı sorunlarda doğru müdahale ile görüntü performansını geri kazandırıyoruz.'],
    ['icon' => 'icon-8.svg', 'title' => 'TV Anakart Tamiri',            'slug' => 'tv-anakart-tamiri',            'desc' => 'Açılmama, kapanıp açılma, görüntü vermeme veya bağlantı sorunları gibi anakart kaynaklı arızalarda detaylı teknik kontrol sağlıyor, onarım veya uygun çözüm seçeneklerini sunuyoruz.'],
    ['icon' => 'icon-5.svg', 'title' => 'LED ve Reflektör Değişimi',    'slug' => 'tv-led-ve-reflektor-degisimi', 'desc' => 'Ekranda parlak lekeler, yansımalar veya düzensiz aydınlatma sorunları yaşıyorsanız reflektör ve led sistemi incelenmesi gerekebilir. Gerekli değişim sürecini planlayarak sorunu çözüyoruz.'],
    ['icon' => 'icon-6.svg', 'title' => 'TV Güç Kartı Tamiri',          'slug' => 'tv-guc-karti-tamiri',          'desc' => 'Televizyonun açılmaması, standby ışığının yanmaması veya güç sorunlarında güç kartı kaynaklı arızalar söz konusu olabilir. Detaylı inceleme ile doğru çözümü sunuyoruz.'],
    ['icon' => 'icon-7.svg', 'title' => 'Ses Var Görüntü Yok',          'slug' => 'ses-var-goruntu-yok-tv-tamiri','desc' => 'Televizyon açılıyor ses geliyor ancak ekranda görüntü oluşmuyorsa led, panel veya görüntü aktarımıyla ilgili bir arıza olabilir.'],
    ['icon' => 'icon-8.svg', 'title' => 'TV Mavi Ekran Sorunu',         'slug' => 'tv-mavi-ekran-sorunu',         'desc' => 'Ekranın tamamen mavi görünmesi, sinyal, panel, görüntü kartı veya iç donanım kaynaklı problemlerden kaynaklanabilir. Sorunun doğru tespiti için detaylı inceleme gerekir.'],
    ['icon' => 'icon-5.svg', 'title' => 'TV Görüntü Problemleri',       'slug' => 'tv-goruntu-problemleri',       'desc' => 'Karanlık görüntü, çizgiler, lekeler veya renk bozulmaları gibi görüntü problemlerinde kapsamlı inceleme ve çözüm sağlıyoruz.'],
];
?>

    <div class="w-full h-(--headerHeight) bg-white"></div>
    <div class="clamp-[py,25px,50px] bg-white">
        <div class="container"><?php panelix_breadcrumb(); ?></div>
    </div>

    <div data-module style="--min-pt: ; --max-pt: ; --min-pb: ; --max-pb: ; --min-w: 768; --max-w: 1600">
        <div class="border-b border-dark/10 clamp-[py,30px,50px]">
            <div class="container">
                <div class="w-full max-w-233.75 flex flex-col clamp-[gap,20px,33px]">
                    <h1 class="text-h1 text-dark">TV Panel, Ekran ve LED Arızalarında Profesyonel Servis Çözümleri</h1>
                    <p class="text-body text-text">Panelix olarak TV panel değişimi, kırık ekran değişimi, LED arızaları, reflektör sorunları ve görüntü problemlerine yönelik profesyonel teknik servis hizmetleri sunuyoruz. İstanbul genelinde, marka ve model fark etmeksizin uygun çözüm için destek sağlıyoruz.</p>
                    <div class="lg:max-w-[80%] flex clamp-[gap,10px,20px] *:w-full max-xs:flex-col">
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
    </div>

    <section data-module style="--min-pt: 50; --max-pt: 50; --min-pb: 50; --max-pb: 80; --min-w: 768; --max-w: 1600">
        <div class="container">
            <div class="grid grid-cols-4 clamp-[gap,16px,24px] max-lg:grid-cols-2 max-md:grid-cols-1">
                <?php foreach ($hizmetler as $h):
                    $url = home_url('/hizmetler/' . $h['slug'] . '/'); ?>
                <div class="bg-white/10 border border-dark/10 rounded-xl clamp-[px,16px,24px] clamp-[py,20px,30px] flex flex-col justify-between clamp-[gap,16px,30px]">
                    <div>
                        <div class="clamp-[size,40px,60px] bg-primary clamp-[rounded,8px,12px] flex-center mb-5">
                            <img src="<?php echo $img; ?>/index/<?php echo $h['icon']; ?>" alt="" loading="lazy" width="24" height="24" class="clamp-[size,18px,24px] object-contain">
                        </div>
                        <h3 class="mb-3">
                            <a href="<?php echo esc_url($url); ?>" class="inline-block lg:*:hover:text-secondary">
                                <span class="clamp-[text,24px,30px] leading-tight font-medium tracking-[-0.3px] text-dark lg:transition-colors lg:duration-300"><?php echo esc_html($h['title']); ?></span>
                            </a>
                        </h3>
                        <p class="text-[16px] leading-[1.8] font-medium tracking-[-0.08px] text-text line-clamp-2"><?php echo esc_html($h['desc']); ?></p>
                    </div>
                    <a href="<?php echo esc_url($url); ?>" class="w-fit inline-flex items-center gap-4 border-b border-dark pb-1.25 lg:hover:*:text-secondary lg:transition-colors lg:duration-300 lg:hover:border-secondary">
                        <span class="text-[16px] leading-[1.8] font-medium tracking-[-0.08px] text-dark lg:transition-colors lg:duration-300">Detaylı İncele</span>
                        <i class="icon-arrow-right text-[16px] h-4 text-dark lg:transition-colors lg:duration-300"></i>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
