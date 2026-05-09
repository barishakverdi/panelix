<?php get_header(); ?>

<?php
$img   = get_template_directory_uri() . '/assets/image';
$phone = PANELIX_PHONE;
?>

    <div class="w-full h-(--headerHeight) bg-white"></div>
    <div class="clamp-[py,25px,50px] bg-white">
        <div class="container"><?php panelix_breadcrumb(); ?></div>
    </div>

    <div data-module style="--min-pt: ; --max-pt: ; --min-pb: ; --max-pb: ; --min-w: 768; --max-w: 1600">
        <div class="border-b border-dark/10 clamp-[py,30px,50px]">
            <div class="container">
                <div class="w-full max-w-233.75 flex flex-col clamp-[gap,20px,33px]">
                    <h1 class="text-h1 text-dark">Hakkımızda</h1>
                    <p class="text-body text-text">Panelix olarak televizyon panel değişimi, kırık ekran değişimi, led arızaları ve görüntü problemlerine yönelik profesyonel teknik servis desteği sunuyoruz. İstanbul genelinde, çözüm odaklı ve güven veren bir hizmet anlayışıyla çalışıyoruz.</p>
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

    <section data-module style="--min-pt: 50; --max-pt: 50; --min-pb: 50; --max-pb: 80; --min-w: 768; --max-w: 1600;">
        <div class="container">
            <div class="max-w-302.25">
                <article class="editor home-editor clamp-[gap,20px,33px]">
                    <h2>Arıza Onarımında Şeffaf Hizmet</h2>
                    <p>Televizyonunuzun markası ne olursa olsun, arızalarına profesyonel çözümler üretiyoruz. Bağımsız bir özel servis olarak, marka ayrımı gözetmeksizin orijinaline sadık kalarak panel ve LED değişimi yapıyoruz.</p>
                    <p>Yetkili servis prosedürlerine takılmadan, aynı gün arıza tespiti ve garantili işçilik sunuyoruz. Cihazınızı tanıyor, bütçenizi önemsiyoruz.</p>
                    <h2>TV Teknik Servisinde Güven Odaklı Yaklaşım</h2>
                    <p>Panelix, televizyonlarda sık karşılaşılan panel, ekran, led ve görüntü arızalarına çözüm sunmak amacıyla hizmet veren profesyonel bir teknik servis yapısıdır. Amacımız yalnızca arızayı gidermek değil, servis sürecini müşterilerimiz için daha güvenli, daha anlaşılır ve daha konforlu hale getirmektir.</p>
                    <p>Bakırköy merkezli yapımızla İstanbul'un birçok bölgesine hizmet veriyor; marka ve model fark etmeksizin uygun çözüm sürecini belirlemeye odaklanıyoruz. Uygun servis süreçlerinde sunduğumuz ikame TV desteğiyle, müşterilerimizi televizyonsuz bırakmadan hizmet vermeyi hedefliyoruz.</p>
                    <h2>Bizi Farklı Kılan Nedir?</h2>
                    <ul>
                        <li><strong>Uzmanlık Odaklı Yaklaşım:</strong> Panel, ekran, led ve görüntü arızalarında çözüm odaklı servis süreci.</li>
                        <li><strong>İstanbul Geneli Hizmet:</strong> Bakırköy merkezli yapımızla birçok ilçeye servis desteği.</li>
                        <li><strong>İkame TV Desteği:</strong> Uygun servis süreçlerinde müşterilerimizi televizyonsuz bırakmamayı hedefliyoruz.</li>
                        <li><strong>Şeffaf İletişim:</strong> Süreç boyunca anlaşılır ve güven veren bilgilendirme yaklaşımı.</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

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

<?php get_footer(); ?>
