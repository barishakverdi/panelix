<?php get_header(); ?>

<?php
$phone          = PANELIX_PHONE;
$saat_haftaici  = panelix_option('saat_haftaici',  '09:00 – 19:00');
$saat_cumartesi = panelix_option('saat_cumartesi', '09:00 – 18:00');
$harita_embed   = panelix_option('iletisim_harita_embed', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3011.6!2d28.879931!3d40.978356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cabd82ad2f92df%3A0x9b973e9e51891f4a!2sBak%C4%B1rk%C3%B6y+Led+Tv+Uydu+Teknik+Servis!5e0!3m2!1str!2str!4v1');
?>

    <div class="w-full h-(--headerHeight) bg-white"></div>
    <div class="clamp-[py,25px,50px] bg-white">
        <div class="container"><?php panelix_breadcrumb(); ?></div>
    </div>

    <div data-module style="--min-pt: ; --max-pt: ; --min-pb: ; --max-pb: ; --min-w: 768; --max-w: 1600">
        <div class="border-b border-dark/10 clamp-[py,30px,50px]">
            <div class="container">
                <div class="w-full max-w-233.75 flex flex-col clamp-[gap,20px,33px]">
                    <h1 class="text-h1 text-dark">İletişim</h1>
                    <p class="text-body text-text">Televizyon arızanız için bilgi almak veya servis randevusu oluşturmak için bize ulaşabilirsiniz. En kısa sürede size dönüş yapıyoruz.</p>
                </div>
            </div>
        </div>
    </div>

    <section data-module style="--min-pt: 50; --max-pt: 50; --min-pb: 50; --max-pb: 80; --min-w: 768; --max-w: 1600;">
        <div class="container">
            <div class="grid grid-cols-4 clamp-[gap,16px,24px] max-lg:grid-cols-2 max-md:grid-cols-1 clamp-[mb,30px,50px]">
                <div class="bg-white border border-dark/10 rounded-xl clamp-[p,20px,30px] flex flex-col gap-4">
                    <div class="clamp-[size,40px,60px] bg-primary/10 rounded-xl flex-center">
                        <i class="icon-phone text-primary clamp-[text,18px,24px]"></i>
                    </div>
                    <h3 class="clamp-[text,18px,24px] font-medium text-dark">Telefon</h3>
                    <a href="tel:+<?php echo $phone; ?>" class="text-body text-text lg:hover:text-dark transition-colors duration-300"><?php echo PANELIX_PHONE_DISPLAY; ?></a>
                </div>
                <div class="bg-white border border-dark/10 rounded-xl clamp-[p,20px,30px] flex flex-col gap-4">
                    <div class="clamp-[size,40px,60px] bg-[#25D366]/10 rounded-xl flex-center">
                        <i class="icon-whatsapp text-[#25D366] clamp-[text,18px,24px]"></i>
                    </div>
                    <h3 class="clamp-[text,18px,24px] font-medium text-dark">WhatsApp</h3>
                    <a href="https://wa.me/+<?php echo $phone; ?>" target="_blank" class="text-body text-text lg:hover:text-dark transition-colors duration-300"><?php echo PANELIX_PHONE_DISPLAY; ?></a>
                </div>
                <div class="bg-white border border-dark/10 rounded-xl clamp-[p,20px,30px] flex flex-col gap-4">
                    <div class="clamp-[size,40px,60px] bg-secondary/10 rounded-xl flex-center">
                        <i class="icon-clock text-secondary clamp-[text,18px,24px]"></i>
                    </div>
                    <h3 class="clamp-[text,18px,24px] font-medium text-dark">Çalışma Saatleri</h3>
                    <p class="text-body text-text">Hafta içi: <?php echo esc_html($saat_haftaici); ?><br>Cumartesi: <?php echo esc_html($saat_cumartesi); ?></p>
                </div>
                <div class="bg-white border border-dark/10 rounded-xl clamp-[p,20px,30px] flex flex-col gap-4">
                    <div class="clamp-[size,40px,60px] bg-primary/10 rounded-xl flex-center">
                        <i class="icon-location text-primary clamp-[text,18px,24px]"></i>
                    </div>
                    <h3 class="clamp-[text,18px,24px] font-medium text-dark">Hizmet Bölgesi</h3>
                    <p class="text-body text-text">İstanbul Geneli</p>
                </div>
            </div>

            <div class="bg-white border border-dark/10 rounded-xl clamp-[p,20px,30px] clamp-[mb,30px,50px]">
                <h3 class="clamp-[text,18px,24px] font-medium text-dark mb-4">Adres</h3>
                <p class="text-body text-text"><?php echo PANELIX_ADDRESS; ?></p>
            </div>

            <div class="rounded-xl overflow-hidden clamp-[h,300px,500px]">
                <iframe
                    src="<?php echo esc_url($harita_embed); ?>"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
