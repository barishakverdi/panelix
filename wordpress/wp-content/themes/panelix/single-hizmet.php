<?php get_header(); ?>

<?php
$img   = get_template_directory_uri() . '/assets/image';
$phone = PANELIX_PHONE;

$badges = [
    ['icon' => 'icon-2.svg', 'text' => 'İstanbul geneli servis'],
    ['icon' => 'icon-1.svg', 'text' => 'Uygun Süreçlerde İkame TV'],
    ['icon' => 'icon-3.svg', 'text' => 'Profesyonel Teknik Destek'],
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
                    <h1 class="text-h1 text-dark"><?php the_title(); ?></h1>
                    <p class="text-body text-text"><?php echo get_the_excerpt(); ?></p>
                    <div class="flex flex-wrap clamp-[gap,12px,16px]">
                        <?php foreach ($badges as $badge): ?>
                        <div class="bg-white px-4 clamp-[py,12px,16px] rounded-xl inline-flex items-center clamp-[gap,12px,16px]">
                            <img src="<?php echo $img; ?>/index/<?php echo $badge['icon']; ?>" alt="" loading="eager" width="20" height="18" class="clamp-[w,18px,20px] h-auto">
                            <span class="text-[16px] font-medium leading-tight tracking-[-0.16px] text-dark"><?php echo esc_html($badge['text']); ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
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
            <div class="max-w-302.25">
                <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <article class="editor clamp-[gap,20px,33px] clamp-[mb,30px,50px]">
                    <?php the_content(); ?>
                </article>
                <?php endwhile; endif; ?>

                <?php
                $scope_items = function_exists('get_field') ? get_field('hizmet_kapsami') : '';
                if ($scope_items):
                    $items = array_filter(array_map('trim', explode("\n", $scope_items)));
                ?>
                <div>
                    <h2 class="text-h2 text-dark clamp-[mb,20px,33px]">Hizmet Kapsamı</h2>
                    <div class="flex flex-wrap clamp-[gap,8px,16px]">
                        <?php foreach ($items as $item): ?>
                        <p class="inline-block bg-white clamp-[p,8px,16px] rounded-xl text-[16px] leading-tight font-medium tracking-[-0.16px] text-dark text-center"><?php echo esc_html($item); ?></p>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section data-module style="--min-pt: ; --max-pt: ; --min-pb: ; --max-pb: ; --min-w: 768; --max-w: 1600">
        <div class="bg-[#EEEEEE] clamp-[py,50px,100px]">
            <div class="container">
                <h2 class="text-h1 text-dark text-center *:text-secondary clamp-[mb,24px,50px]">Servis Süreci Nasıl İlerler?</h2>
                <div class="grid grid-cols-4 gap-6 clamp-[mb,50px,100px] max-lg:grid-cols-2 max-md:grid-cols-1">
                    <div class="border border-dark/10 rounded-xl clamp-[p,16px,30px]">
                        <h3 class="clamp-[text,20px,24px] font-medium tracking-[-0.24px] text-dark mb-3">1. Ön değerlendirme yapılır</h3>
                        <p class="text-[16px] leading-[1.8] tracking-[-0.08px] text-text">TV'nin arıza durumu ve hasar boyutu incelenir.</p>
                    </div>
                    <div class="border border-dark/10 rounded-xl clamp-[p,16px,30px]">
                        <h3 class="clamp-[text,20px,24px] font-medium tracking-[-0.24px] text-dark mb-3">2. Uygun işlem planlanır</h3>
                        <p class="text-[16px] leading-[1.8] tracking-[-0.08px] text-text">Cihazın marka, modeli ve arıza kapsamına göre çözüm süreci belirlenir.</p>
                    </div>
                    <div class="border border-dark/10 rounded-xl clamp-[p,16px,30px]">
                        <h3 class="clamp-[text,20px,24px] font-medium tracking-[-0.24px] text-dark mb-3">3. Teknik servis işlemi uygulanır</h3>
                        <p class="text-[16px] leading-[1.8] tracking-[-0.08px] text-text">Gerekli servis müdahalesi kontrollü şekilde gerçekleştirilir.</p>
                    </div>
                    <div class="border border-dark/10 rounded-xl clamp-[p,16px,30px]">
                        <h3 class="clamp-[text,20px,24px] font-medium tracking-[-0.24px] text-dark mb-3">4. Teslim ve bilgilendirme yapılır</h3>
                        <p class="text-[16px] leading-[1.8] tracking-[-0.08px] text-text">İşlem tamamlandıktan sonra kullanıcıya süreç hakkında bilgi verilir.</p>
                    </div>
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

    <section data-module style="--min-pt: 50; --max-pt: 100; --min-pb: 50; --max-pb: 100; --min-w: 768; --max-w: 1600">
        <div class="container">
            <div class="grid grid-cols-12 gap-6 max-lg:grid-cols-1">
                <div class="lg:col-span-6 lg:clamp-[py,24px,60px]">
                    <h2 class="text-h2 text-dark mb-6">Neden Panelix?</h2>
                    <div class="grid grid-cols-2 clamp-[gap,12px,16px] max-lg:flex max-lg:flex-wrap">
                        <div class="bg-white px-4 clamp-[py,12px,16px] rounded-xl inline-flex items-center clamp-[gap,12px,16px] shadow-[0_5px_11.5px_-2px_rgba(30,30,30,0.08)]">
                            <img src="<?php echo $img; ?>/index/icon-1.svg" alt="" loading="eager" width="20" height="18" class="clamp-[w,18px,20px] h-auto">
                            <span class="text-[16px] font-medium leading-tight tracking-[-0.16px] text-dark">TV panel ve görüntü arızalarında uzman yaklaşım</span>
                        </div>
                        <div class="bg-white px-4 clamp-[py,12px,16px] rounded-xl inline-flex items-center clamp-[gap,12px,16px] shadow-[0_5px_11.5px_-2px_rgba(30,30,30,0.08)]">
                            <img src="<?php echo $img; ?>/index/icon-2.svg" alt="" loading="eager" width="20" height="18" class="clamp-[w,18px,20px] h-auto">
                            <span class="text-[16px] font-medium leading-tight tracking-[-0.16px] text-dark">İstanbul geneli servis</span>
                        </div>
                        <div class="bg-white px-4 clamp-[py,12px,16px] rounded-xl inline-flex items-center clamp-[gap,12px,16px] shadow-[0_5px_11.5px_-2px_rgba(30,30,30,0.08)]">
                            <img src="<?php echo $img; ?>/index/icon-1.svg" alt="" loading="eager" width="20" height="18" class="clamp-[w,18px,20px] h-auto">
                            <span class="text-[16px] font-medium leading-tight tracking-[-0.16px] text-dark">Marka ve model bazlı değerlendirme</span>
                        </div>
                        <div class="bg-white px-4 clamp-[py,12px,16px] rounded-xl inline-flex items-center clamp-[gap,12px,16px] shadow-[0_5px_11.5px_-2px_rgba(30,30,30,0.08)]">
                            <img src="<?php echo $img; ?>/index/icon-3.svg" alt="" loading="eager" width="20" height="18" class="clamp-[w,18px,20px] h-auto">
                            <span class="text-[16px] font-medium leading-tight tracking-[-0.16px] text-dark">Süreç boyunca bilgilendirme</span>
                        </div>
                        <div class="bg-white px-4 clamp-[py,12px,16px] rounded-xl inline-flex items-center clamp-[gap,12px,16px] shadow-[0_5px_11.5px_-2px_rgba(30,30,30,0.08)]">
                            <img src="<?php echo $img; ?>/index/icon-1.svg" alt="" loading="eager" width="20" height="18" class="clamp-[w,18px,20px] h-auto">
                            <span class="text-[16px] font-medium leading-tight tracking-[-0.16px] text-dark">Güven ve müşteri memnuniyeti odaklı hizmet</span>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-1 max-lg:hidden"></div>
                <div class="lg:col-span-5">
                    <img src="<?php echo $img; ?>/index/image-9.jpg" alt="" loading="lazy" width="798" height="628" class="full-cover rounded-xl">
                </div>
            </div>
        </div>
    </section>

    <section data-module style="--min-pt: ; --max-pt: ; --min-pb: 50; --max-pb: 100; --min-w: 768; --max-w: 1600">
        <div class="container">
            <div class="max-w-200 mx-auto flex flex-col items-center gap-6 clamp-[mb,24px,50px]">
                <h2 class="text-h2 text-dark text-center *:text-secondary">Servis Verdiğimiz Markalar</h2>
                <p class="text-body text-text text-center">Samsung, LG, Vestel, Philips, Sony, TCL, Arçelik, Beko ve birçok farklı marka için servis desteği sağlanabilmektedir.</p>
            </div>
            <div class="grid grid-cols-12 gap-6 max-lg:grid-cols-1">
                <div class="lg:col-span-2 max-lg:hidden"></div>
                <div class="lg:col-span-8 grid grid-cols-4 clamp-[gap,16px,24px] max-lg:grid-cols-2"
                     data-brands-grid
                     data-brands-layout="service-detail"
                     data-brands-src="<?php echo esc_url(rest_url('panelix/v1/markalar')); ?>">
                    <p class="col-span-full text-[16px] leading-[1.8] font-medium tracking-[-0.08px] text-text text-center">Markalar yükleniyor...</p>
                </div>
                <div class="lg:col-span-2 max-lg:hidden"></div>
            </div>
        </div>
    </section>

    <section data-module style="--min-pt: ; --max-pt: ; --min-pb: 30; --max-pb: 50; --min-w: 768; --max-w: 1600">
        <div class="bg-white clamp-[py,50px,100px]">
            <div class="container">
                <div class="max-w-268 mx-auto flex flex-col items-center gap-6 clamp-[mb,24px,50px]">
                    <div class="w-fit bg-secondary/10 inline-flex items-center clamp-[gap,16px,24px] px-6 py-3 rounded-4xl">
                        <span class="clamp-[text,16px,20px] leading-tight font-medium tracking-[-0.2px] text-secondary">Hizmet Bölgeleri</span>
                    </div>
                    <h2 class="text-h2 text-dark text-center *:text-secondary">İstanbul Genelinde Hizmet</h2>
                    <p class="text-body text-text text-center">Bakırköy merkezli servis yapımızla İstanbul'un birçok ilçesine hizmet sunuyoruz. Özellikle Bakırköy ve çevresinde daha hızlı servis planlaması yapabiliyoruz.</p>
                </div>
                <?php
                $bolgeler = ['Bakırköy', 'Bahçelievler', 'Zeytinburnu', 'Beylikdüzü', 'Şişli', 'Kadıköy', 'Üsküdar', 'Maltepe'];
                ?>
                <div class="grid grid-cols-4 clamp-[gap,16px,24px] clamp-[mb,50px,100px] max-lg:grid-cols-2">
                    <?php foreach ($bolgeler as $bolge): ?>
                    <div class="rounded-2xl border border-secondary px-6 py-8 shadow-[0_18px_30px_-12px_rgba(30,64,175,0.12)] flex items-center justify-center text-center">
                        <h3 class="clamp-[text,20px,28px] font-semibold clamp-[tracking,-0.2px,-0.28px] text-dark"><?php echo esc_html($bolge); ?></h3>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="w-full max-w-165.25 mx-auto flex clamp-[gap,10px,20px] *:w-full max-md:flex-col">
                    <a href="<?php echo home_url('/hizmet-bolgeleri/'); ?>" title="Hizmet Bölgelerini İncele" class="group/btn bg-primary md:hover:bg-secondary inline-flex items-center justify-center gap-2.5 clamp-[px,24px,32px] clamp-[py,12px,18px] rounded-xl min-w-max relative transition-colors duration-300 [[disabled]]:opacity-50 [[disabled]]:pointer-events-none max-xs:w-full">
                        <span class="text-white clamp-[text,16px,18px] leading-tight font-medium tracking-[-0.18px] transition-colors duration-300">Hizmet Bölgelerini İncele</span>
                    </a>
                    <a href="https://wa.me/+<?php echo $phone; ?>" title="WhatsApp'tan Bölgenizi Sor" class="group/btn bg-[#25D366] md:hover:bg-[#19b351] inline-flex items-center justify-center gap-2.5 clamp-[px,24px,32px] clamp-[py,12px,18px] rounded-xl min-w-max relative transition-colors duration-300 [[disabled]]:opacity-50 [[disabled]]:pointer-events-none max-xs:w-full">
                        <span class="text-dark md:group-hover/btn:text-white clamp-[text,16px,18px] leading-tight font-medium tracking-[-0.18px] transition-colors duration-300">WhatsApp'tan Bölgenizi Sor</span>
                        <i class="icon-whatsapp text-dark md:group-hover/btn:text-white clamp-[text,16px,18px] clamp-[h,16px,18px] transition-colors duration-300"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php
    $faq = function_exists('get_field') ? get_field('hizmet_sss') : null;
    if ($faq):
    ?>
    <section data-module style="--min-pt: 50; --max-pt: 80; --min-pb: 50; --max-pb: 80; --min-w: 768; --max-w: 1600">
        <div class="container">
            <div class="grid grid-cols-12 max-lg:grid-cols-1">
                <div class="col-span-1 max-lg:hidden"></div>
                <div class="lg:col-span-10">
                    <div x-data="{ activeIndex: -1 }" class="flex flex-col clamp-[gap,16px,20px]">
                        <?php foreach ($faq as $i => $item): ?>
                        <div class="bg-white/95 border border-dark/10 rounded-2xl transition-colors duration-300 md:hover:border-secondary" :class="{ 'border-secondary! bg-white!': activeIndex === <?php echo $i; ?> }">
                            <div class="clamp-[px,16px,32px] clamp-[py,20px,24px] flex items-center justify-between gap-4 cursor-pointer" @click="activeIndex = activeIndex === <?php echo $i; ?> ? -1 : <?php echo $i; ?>">
                                <h3 class="clamp-[text,18px,24px] font-medium clamp-[tracking,-0.18px,-0.24px] text-dark"><?php echo esc_html($item['soru']); ?></h3>
                                <i class="icon-angle-down text-[16px] h-4 transition-transform duration-300" :class="{ 'scale-y-[-1]': activeIndex === <?php echo $i; ?> }"></i>
                            </div>
                            <div x-show="activeIndex === <?php echo $i; ?>" x-collapse.duration.300ms>
                                <div class="clamp-[px,16px,32px] clamp-[pb,20px,24px]">
                                    <p class="text-body text-text"><?php echo esc_html($item['cevap']); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-span-1 max-lg:hidden"></div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <section data-module style="--min-pt: ; --max-pt: ; --min-pb: 50; --max-pb: 100; --min-w: 768; --max-w: 1600">
        <div class="container">
            <div class="bg-fixed bg-no-repeat bg-center bg-cover clamp-[px,20px,80px] clamp-[py,30px,60px] rounded-xl relative overflow-hidden" style="background-image: url('<?php echo $img; ?>/cta.jpg')">
                <div class="absolute-full bg-black/60"></div>
                <div class="w-full max-w-2xl relative z-2">
                    <div class="clamp-[mb,30px,50px]">
                        <h2 class="text-h3 text-white mb-5">TV'nizde panel kaynaklı bir sorun mu var?</h2>
                        <p class="text-body text-white">Arıza durumunu WhatsApp üzerinden bize iletin, sizi en uygun hizmet sürecine yönlendirelim.</p>
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

<?php get_footer(); ?>
