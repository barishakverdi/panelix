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
                    <h1 class="text-h1 text-dark">Blog</h1>
                    <p class="text-body text-text">TV panel değişimi, kırık ekran, led arızaları, görüntü problemleri ve teknik servis süreci hakkında bilgilendirici içerikler.</p>
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

    <section class="clamp-[py,40px,80px] bg-[#F7F8FB]">
        <div class="container">
            <div class="grid grid-cols-12 gap-6 max-lg:grid-cols-1">
                <div class="col-span-8 max-lg:col-span-full">
                    <p class="text-body font-medium text-dark mb-6">Televizyonlarda en sık karşılaşılan arızalar, çözüm yolları ve servis süreci hakkında hazırladığımız içerikleri inceleyin.</p>

                    <?php if (have_posts()): ?>
                    <div class="grid grid-cols-2 gap-6 max-md:grid-cols-1">
                        <?php
                        $first = true;
                        while (have_posts()): the_post();
                            $is_featured = $first;
                            $first = false;
                            $cats = get_the_category();
                            $cat_name = $cats ? esc_html($cats[0]->name) : '';
                            $cat_url  = $cats ? esc_url(get_category_link($cats[0]->term_id)) : '#';
                        ?>
                        <article class="group <?php echo $is_featured ? 'col-span-2 max-md:col-span-1' : ''; ?> flex h-full flex-col overflow-hidden rounded-xl border border-text/10 bg-white lg:transition-shadow lg:duration-300 lg:hover:shadow-[0_10px_30px_rgba(15,23,42,0.08)]">
                            <?php if (has_post_thumbnail()): ?>
                            <a href="<?php the_permalink(); ?>" aria-label="<?php the_title_attribute(); ?> yazısını oku" class="block overflow-hidden">
                                <?php the_post_thumbnail('large', ['class' => 'w-full aspect-433/289 object-cover transition-transform duration-300 lg:group-hover:scale-105', 'loading' => 'lazy']); ?>
                            </a>
                            <?php endif; ?>
                            <div class="flex flex-1 flex-col clamp-[p,16px,20px]">
                                <div class="mb-4 flex flex-wrap items-center gap-2 text-[14px] leading-tight font-medium tracking-[-0.14px] text-text/70">
                                    <span><?php echo get_the_date('d.m.Y'); ?></span>
                                    <?php if ($cat_name): ?>
                                    <span class="size-1 rounded-full bg-text/30"></span>
                                    <a href="<?php echo $cat_url; ?>" class="text-dark underline decoration-transparent underline-offset-4 transition-colors duration-300 lg:group-hover:text-secondary"><?php echo $cat_name; ?></a>
                                    <?php endif; ?>
                                </div>
                                <h2 class="mb-3">
                                    <a href="<?php the_permalink(); ?>" aria-label="<?php the_title_attribute(); ?> yazısını oku" class="inline-block lg:*:hover:text-secondary">
                                        <span class="<?php echo $is_featured ? 'clamp-[text,24px,30px]' : 'text-[22px] leading-[1.2] sm:text-[24px]'; ?> font-medium tracking-[-0.3px] text-dark lg:transition-colors lg:duration-300"><?php the_title(); ?></span>
                                    </a>
                                </h2>
                                <p class="mb-6 text-[16px] leading-[1.8] font-medium tracking-[-0.08px] text-text line-clamp-3"><?php echo get_the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="mt-auto w-fit inline-flex items-center gap-4 border-b border-dark pb-1.25 lg:hover:*:text-secondary lg:transition-colors lg:duration-300 lg:hover:border-secondary">
                                    <span class="text-[16px] leading-[1.8] font-medium tracking-[-0.08px] text-dark lg:transition-colors lg:duration-300">Devamını Oku</span>
                                    <i class="icon-arrow-right text-[16px] h-4 text-dark lg:transition-colors lg:duration-300"></i>
                                </a>
                            </div>
                        </article>
                        <?php endwhile; ?>
                    </div>

                    <?php
                    $total_pages = $GLOBALS['wp_query']->max_num_pages;
                    if ($total_pages > 1):
                        $current = max(1, get_query_var('paged'));
                    ?>
                    <nav class="mt-8 flex justify-center" aria-label="Blog sayfa numaraları">
                        <ul class="flex items-center justify-center gap-2">
                            <li>
                                <a href="<?php echo esc_url(get_previous_posts_page_link()); ?>" aria-label="Önceki sayfa" class="group size-10 rounded-sm bg-dark/10 text-text/40 flex-center transition-colors duration-300 hover:bg-dark/20 hover:text-dark <?php echo $current <= 1 ? 'pointer-events-none opacity-40' : ''; ?>">
                                    <i class="icon-angle-left text-[16px] h-4 transition-transform duration-300 group-hover:-translate-x-0.5"></i>
                                </a>
                            </li>
                            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                            <li>
                                <a href="<?php echo esc_url(get_pagenum_link($i)); ?>"
                                   <?php echo $i === $current ? 'aria-current="page"' : ''; ?>
                                   class="size-10 rounded-sm text-[14px] font-medium flex-center transition-colors duration-300 <?php echo $i === $current ? 'bg-primary text-white' : 'bg-dark/5 text-dark/70 hover:bg-dark/20 hover:text-dark'; ?>">
                                    <?php echo $i; ?>
                                </a>
                            </li>
                            <?php endfor; ?>
                            <li>
                                <a href="<?php echo esc_url(get_next_posts_page_link()); ?>" aria-label="Sonraki sayfa" class="group size-10 rounded-sm bg-dark/10 text-text/70 flex-center transition-colors duration-300 hover:bg-dark/20 hover:text-dark <?php echo $current >= $total_pages ? 'pointer-events-none opacity-40' : ''; ?>">
                                    <i class="icon-angle-right text-[16px] h-4 transition-transform duration-300 group-hover:translate-x-0.5"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <?php endif; ?>

                    <?php else: ?>
                    <p class="text-body text-text">Henüz blog yazısı bulunmuyor.</p>
                    <?php endif; ?>
                </div>

                <aside class="col-span-4 lg:clamp-[pl,24px,56px] max-lg:col-span-full">
                    <div class="sticky top-[calc(var(--headerHeight)+24px)] self-start">
                        <div class="rounded-xl border border-text/10 bg-white clamp-[p,16px,20px]">
                            <h2 class="text-[20px] leading-tight font-medium tracking-[-0.2px] text-dark mb-3">Kategoriler</h2>
                            <div class="h-px bg-dark/10 mb-4"></div>
                            <ul class="flex flex-col gap-2.5">
                                <?php
                                $current_cat = get_queried_object();
                                $categories = get_categories(['hide_empty' => true]);
                                foreach ($categories as $cat):
                                    $is_active = is_category() && $current_cat && $current_cat->term_id === $cat->term_id;
                                ?>
                                <li>
                                    <a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>"
                                       class="group/category inline-flex items-center gap-3 text-left text-[20px] leading-[1.6] font-medium tracking-[-0.2px] transition-colors duration-300 <?php echo $is_active ? 'text-dark' : 'text-dark/80 hover:text-dark'; ?>">
                                        <span class="size-1.5 rounded-full transition-colors duration-300 <?php echo $is_active ? 'bg-secondary' : 'bg-dark/20 group-hover/category:bg-secondary'; ?>"></span>
                                        <span class="transition-colors duration-300 group-hover/category:text-secondary"><?php echo esc_html($cat->name); ?></span>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <section data-module style="--min-pt: 50; --max-pt: 100; --min-pb: 50; --max-pb: 100; --min-w: 768; --max-w: 1600">
        <div class="container">
            <div class="bg-fixed bg-no-repeat bg-center bg-cover clamp-[px,20px,80px] clamp-[py,30px,60px] rounded-xl relative overflow-hidden" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/image/cta.jpg')">
                <div class="absolute-full bg-black/60"></div>
                <div class="w-full max-w-2xl relative z-2">
                    <div class="clamp-[mb,30px,50px]">
                        <h2 class="text-h3 text-white mb-5">Televizyonunuzun markasına uygun hizmeti mi arıyorsunuz?</h2>
                        <p class="text-body text-white">Marka ve model bilgisiyle birlikte bize ulaşın, sizi en doğru hizmet sürecine yönlendirelim.</p>
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
