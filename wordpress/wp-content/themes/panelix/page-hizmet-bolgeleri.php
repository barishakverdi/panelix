<?php get_header(); ?>

<?php $phone = PANELIX_PHONE; ?>

    <div class="w-full h-(--headerHeight) bg-white"></div>
    <div class="clamp-[py,25px,50px] bg-white">
        <div class="container"><?php panelix_breadcrumb(); ?></div>
    </div>

    <div data-module style="--min-pt: ; --max-pt: ; --min-pb: ; --max-pb: ; --min-w: 768; --max-w: 1600">
        <div class="border-b border-dark/10 clamp-[py,30px,50px]">
            <div class="container">
                <div class="w-full max-w-233.75 flex flex-col clamp-[gap,20px,33px]">
                    <h1 class="text-h1 text-dark">Hizmet Bölgeleri</h1>
                    <p class="text-body text-text">Bakırköy merkezli servis yapımızla İstanbul'un birçok ilçesine TV panel değişimi, LED tamiri ve ekran değişimi hizmeti sunuyoruz.</p>
                    <div class="lg:max-w-[80%] flex clamp-[gap,10px,20px] *:w-full max-xs:flex-col">
                        <a href="<?php echo home_url('/iletisim/'); ?>" title="Bölgenizi Sorgulayın" class="group/btn bg-primary md:hover:bg-secondary inline-flex items-center justify-center gap-2.5 clamp-[px,24px,32px] clamp-[py,12px,18px] rounded-xl min-w-max relative transition-colors duration-300 [[disabled]]:opacity-50 [[disabled]]:pointer-events-none max-xs:w-full">
                            <span class="text-white clamp-[text,16px,18px] leading-tight font-medium tracking-[-0.18px] transition-colors duration-300">Bölgenizi Sorgulayın</span>
                        </a>
                        <a href="https://wa.me/+<?php echo $phone; ?>" title="WhatsApp'tan Bölgenizi Sor" class="group/btn bg-[#25D366] md:hover:bg-[#19b351] inline-flex items-center justify-center gap-2.5 clamp-[px,24px,32px] clamp-[py,12px,18px] rounded-xl min-w-max relative transition-colors duration-300 [[disabled]]:opacity-50 [[disabled]]:pointer-events-none max-xs:w-full">
                            <span class="text-dark md:group-hover/btn:text-white clamp-[text,16px,18px] leading-tight font-medium tracking-[-0.18px] transition-colors duration-300">WhatsApp'tan Bölgenizi Sor</span>
                            <i class="icon-whatsapp text-dark md:group-hover/btn:text-white clamp-[text,16px,18px] clamp-[h,16px,18px] transition-colors duration-300"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section data-module style="--min-pt: 50; --max-pt: 50; --min-pb: 50; --max-pb: 80; --min-w: 768; --max-w: 1600;">
        <div class="bg-white clamp-[py,50px,100px]">
            <div class="container">
                <div class="max-w-268 mx-auto flex flex-col items-center gap-6 clamp-[mb,24px,50px]">
                    <div class="w-fit bg-secondary/10 inline-flex items-center clamp-[gap,16px,24px] px-6 py-3 rounded-4xl">
                        <span class="clamp-[text,16px,20px] leading-tight font-medium tracking-[-0.2px] text-secondary">Hizmet Bölgeleri</span>
                    </div>
                    <h2 class="text-h2 text-dark text-center *:text-secondary">İstanbul Genelinde Hizmet</h2>
                    <p class="text-body text-text text-center">Bakırköy merkezli servis yapımızla İstanbul'un birçok ilçesine hizmet sunuyoruz. Özellikle Bakırköy ve çevresinde daha hızlı servis planlaması yapabiliyoruz.</p>
                </div>

                <div class="grid grid-cols-4 clamp-[gap,16px,24px] clamp-[mb,50px,100px] max-lg:grid-cols-2">
                    <?php
                    $bolgeler = [
                        'Bakırköy', 'Bahçelievler', 'Zeytinburnu', 'Beylikdüzü',
                        'Şişli', 'Kadıköy', 'Üsküdar', 'Maltepe',
                        'Beşiktaş', 'Sarıyer', 'Pendik', 'Ataşehir',
                        'Bağcılar', 'Güngören', 'Küçükçekmece', 'Avcılar',
                    ];
                    foreach ($bolgeler as $bolge) {
                        echo '<div class="rounded-2xl border border-secondary px-6 py-8 shadow-[0_18px_30px_-12px_rgba(30,64,175,0.12)] flex items-center justify-center text-center">';
                        echo '<h3 class="clamp-[text,20px,28px] font-semibold clamp-[tracking,-0.2px,-0.28px] text-dark">' . esc_html($bolge) . '</h3>';
                        echo '</div>';
                    }
                    ?>
                </div>

                <div class="w-full max-w-165.25 mx-auto flex clamp-[gap,10px,20px] *:w-full max-md:flex-col">
                    <a href="tel:+<?php echo $phone; ?>" title="Hemen Ara" class="group/btn bg-primary md:hover:bg-secondary inline-flex items-center justify-center gap-2.5 clamp-[px,24px,32px] clamp-[py,12px,18px] rounded-xl min-w-max relative transition-colors duration-300 [[disabled]]:opacity-50 [[disabled]]:pointer-events-none max-xs:w-full">
                        <span class="text-white clamp-[text,16px,18px] leading-tight font-medium tracking-[-0.18px] transition-colors duration-300">Hemen Ara</span>
                        <i class="icon-phone text-white clamp-[text,16px,18px] clamp-[h,16px,18px] transition-colors duration-300"></i>
                    </a>
                    <a href="https://wa.me/+<?php echo $phone; ?>" title="WhatsApp'tan Bölgenizi Sor" class="group/btn bg-[#25D366] md:hover:bg-[#19b351] inline-flex items-center justify-center gap-2.5 clamp-[px,24px,32px] clamp-[py,12px,18px] rounded-xl min-w-max relative transition-colors duration-300 [[disabled]]:opacity-50 [[disabled]]:pointer-events-none max-xs:w-full">
                        <span class="text-dark md:group-hover/btn:text-white clamp-[text,16px,18px] leading-tight font-medium tracking-[-0.18px] transition-colors duration-300">WhatsApp'tan Bölgenizi Sor</span>
                        <i class="icon-whatsapp text-dark md:group-hover/btn:text-white clamp-[text,16px,18px] clamp-[h,16px,18px] transition-colors duration-300"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
