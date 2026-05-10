<?php get_header(); ?>

    <div class="w-full h-(--headerHeight) bg-white"></div>
    <div class="clamp-[py,25px,50px] bg-white">
        <div class="container"><?php panelix_breadcrumb(); ?></div>
    </div>

    <section class="clamp-[py,50px,80px]">
        <div class="container">
            <?php if (have_posts()): ?>
            <div class="grid grid-cols-3 gap-6 max-lg:grid-cols-2 max-md:grid-cols-1">
                <?php while (have_posts()): the_post(); ?>
                <article class="group flex h-full flex-col overflow-hidden rounded-xl border border-text/10 bg-white lg:transition-shadow lg:duration-300 lg:hover:shadow-[0_10px_30px_rgba(15,23,42,0.08)]">
                    <?php if (has_post_thumbnail()): ?>
                    <a href="<?php the_permalink(); ?>" class="block overflow-hidden">
                        <?php the_post_thumbnail('medium', ['class' => 'w-full aspect-433/289 object-cover transition-transform duration-300 lg:group-hover:scale-105', 'loading' => 'lazy']); ?>
                    </a>
                    <?php endif; ?>
                    <div class="flex flex-1 flex-col clamp-[p,16px,20px]">
                        <h2 class="mb-3">
                            <a href="<?php the_permalink(); ?>" class="inline-block lg:*:hover:text-secondary">
                                <span class="text-[22px] leading-[1.2] font-medium tracking-[-0.22px] text-dark lg:transition-colors lg:duration-300"><?php the_title(); ?></span>
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
            <?php else: ?>
            <p class="text-body text-text">İçerik bulunamadı.</p>
            <?php endif; ?>
        </div>
    </section>

<?php get_footer(); ?>
