<?php get_header(); ?>

<?php $phone = PANELIX_PHONE; ?>

    <div class="w-full h-(--headerHeight) bg-white"></div>

    <section class="clamp-[py,80px,150px]">
        <div class="container">
            <div class="max-w-2xl mx-auto flex flex-col items-center text-center clamp-[gap,20px,33px]">
                <p class="text-[120px] leading-none font-semibold text-primary/10 select-none">404</p>
                <h1 class="text-h1 text-dark">Sayfa Bulunamadı</h1>
                <p class="text-body text-text">Aradığınız sayfa taşınmış veya kaldırılmış olabilir. Ana sayfaya dönerek devam edebilirsiniz.</p>
                <div class="flex clamp-[gap,10px,20px] *:w-full max-xs:flex-col">
                    <a href="<?php echo home_url('/'); ?>" title="Ana Sayfaya Dön" class="group/btn bg-primary md:hover:bg-secondary inline-flex items-center justify-center gap-2.5 clamp-[px,24px,32px] clamp-[py,12px,18px] rounded-xl min-w-max relative transition-colors duration-300 [[disabled]]:opacity-50 [[disabled]]:pointer-events-none">
                        <span class="text-white clamp-[text,16px,18px] leading-tight font-medium tracking-[-0.18px] transition-colors duration-300">Ana Sayfaya Dön</span>
                    </a>
                    <a href="https://wa.me/+<?php echo $phone; ?>" title="WhatsApp'tan Yardım Al" class="group/btn bg-[#25D366] md:hover:bg-[#19b351] inline-flex items-center justify-center gap-2.5 clamp-[px,24px,32px] clamp-[py,12px,18px] rounded-xl min-w-max relative transition-colors duration-300 [[disabled]]:opacity-50 [[disabled]]:pointer-events-none">
                        <span class="text-dark md:group-hover/btn:text-white clamp-[text,16px,18px] leading-tight font-medium tracking-[-0.18px] transition-colors duration-300">WhatsApp'tan Yardım Al</span>
                        <i class="icon-whatsapp text-dark md:group-hover/btn:text-white clamp-[text,16px,18px] clamp-[h,16px,18px] transition-colors duration-300"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
