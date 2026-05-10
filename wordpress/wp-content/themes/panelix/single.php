<?php get_header(); ?>

<?php
$img   = get_template_directory_uri() . '/assets/image';
$phone = PANELIX_PHONE;
?>

    <div class="w-full h-(--headerHeight) bg-white"></div>
    <div class="clamp-[py,25px,50px] bg-white">
        <div class="container"><?php panelix_breadcrumb(); ?></div>
    </div>

    <section class="bg-[#F7F8FB] border-y border-dark/10 clamp-[pt,50px,80px] clamp-[pb,60px,120px]">
        <div class="container">
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <div class="grid grid-cols-12 gap-6 max-lg:grid-cols-1">
                <div class="col-span-2 max-lg:hidden"></div>
                <div class="col-span-8 max-lg:col-span-full">
                    <div class="clamp-[mb,30px,40px]">
                        <?php
                        $cats = get_the_category();
                        $cat_name = $cats ? esc_html($cats[0]->name) : '';
                        $cat_url  = $cats ? esc_url(get_category_link($cats[0]->term_id)) : '#';
                        ?>
                        <div class="mb-4 flex flex-wrap items-center gap-2 text-[14px] leading-tight font-medium tracking-[-0.14px] text-text/80">
                            <span><?php echo get_the_date('d.m.Y'); ?></span>
                            <?php if ($cat_name): ?>
                            <span class="size-1 rounded-full bg-text/30"></span>
                            <a href="<?php echo $cat_url; ?>" class="text-text underline underline-offset-4 transition-colors duration-300 hover:text-secondary"><?php echo $cat_name; ?></a>
                            <?php endif; ?>
                        </div>
                        <h1 class="text-h1 text-dark mb-4"><?php the_title(); ?></h1>
                        <p class="text-body text-text max-w-232.5 mb-6"><?php echo get_the_excerpt(); ?></p>
                        <div class="flex items-center gap-3 text-[32px] text-dark/15">
                            <span class="leading-none">•</span>
                            <span class="text-[20px] leading-tight tracking-[-0.2px] text-text italic"><?php echo ceil(str_word_count(strip_tags(get_the_content())) / 200); ?> dk okuma süresi</span>
                        </div>
                    </div>

                    <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('full', ['class' => 'w-full aspect-16/9 object-cover rounded-xl clamp-[mb,20px,30px]', 'loading' => 'lazy']); ?>
                    <?php endif; ?>

                    <article class="editor clamp-[mb,40px,70px]">
                        <?php the_content(); ?>
                    </article>

                    <?php
                    $related = get_posts([
                        'post_type'      => 'post',
                        'posts_per_page' => 3,
                        'post__not_in'   => [get_the_ID()],
                        'category__in'   => wp_get_post_categories(get_the_ID()),
                        'orderby'        => 'rand',
                    ]);
                    if ($related):
                    ?>
                    <div>
                        <h2 class="text-h2 text-dark clamp-[mb,20px,33px]">İlgili Yazılar</h2>
                        <div class="grid grid-cols-3 gap-6 max-lg:grid-cols-2 max-md:grid-cols-1">
                            <?php foreach ($related as $rpost):
                                $r_cats = get_the_category($rpost->ID);
                                $r_cat  = $r_cats ? esc_html($r_cats[0]->name) : '';
                            ?>
                            <article class="group flex h-full flex-col overflow-hidden rounded-xl border border-text/10 bg-white lg:transition-shadow lg:duration-300 lg:hover:shadow-[0_10px_30px_rgba(15,23,42,0.08)]">
                                <?php if (has_post_thumbnail($rpost->ID)): ?>
                                <a href="<?php echo esc_url(get_permalink($rpost->ID)); ?>" class="block overflow-hidden">
                                    <?php echo get_the_post_thumbnail($rpost->ID, 'medium', ['class' => 'w-full aspect-433/289 object-cover transition-transform duration-300 lg:group-hover:scale-105', 'loading' => 'lazy']); ?>
                                </a>
                                <?php endif; ?>
                                <div class="flex flex-1 flex-col clamp-[p,16px,20px]">
                                    <?php if ($r_cat): ?>
                                    <div class="mb-3 text-[14px] leading-tight font-medium tracking-[-0.14px] text-text/70">
                                        <span><?php echo get_the_date('d.m.Y', $rpost->ID); ?></span>
                                        <span class="mx-2">•</span>
                                        <span class="text-dark"><?php echo $r_cat; ?></span>
                                    </div>
                                    <?php endif; ?>
                                    <h3 class="mb-3">
                                        <a href="<?php echo esc_url(get_permalink($rpost->ID)); ?>" class="inline-block lg:*:hover:text-secondary">
                                            <span class="text-[18px] leading-[1.3] font-medium tracking-[-0.18px] text-dark lg:transition-colors lg:duration-300"><?php echo esc_html($rpost->post_title); ?></span>
                                        </a>
                                    </h3>
                                    <a href="<?php echo esc_url(get_permalink($rpost->ID)); ?>" class="mt-auto w-fit inline-flex items-center gap-4 border-b border-dark pb-1.25 lg:hover:*:text-secondary lg:transition-colors lg:duration-300 lg:hover:border-secondary">
                                        <span class="text-[16px] leading-[1.8] font-medium tracking-[-0.08px] text-dark lg:transition-colors lg:duration-300">Devamını Oku</span>
                                        <i class="icon-arrow-right text-[16px] h-4 text-dark lg:transition-colors lg:duration-300"></i>
                                    </a>
                                </div>
                            </article>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="col-span-2 max-lg:hidden"></div>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </section>

    <section data-module style="--min-pt: 50; --max-pt: 100; --min-pb: 50; --max-pb: 100; --min-w: 768; --max-w: 1600">
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
