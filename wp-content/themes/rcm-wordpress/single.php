<?php get_header(); ?>


<div class="Layout_container__nRe7b">
    <main class="Layout_main__T_Jjv">
        <section>
            <div id="Cabinets" class="ProjectList_rightCol__zQIG5">
                <div class="ProjectList_card__ASta2">

                    <?php if(have_posts()): ?>

                        <?php while(have_posts()) : the_post(); ?> 

                            <?php if ( is_active_sidebar( 'carousel_sidebar' ) ) : ?>
                                    <?php dynamic_sidebar( 'carousel_sidebar' ); ?>
                            <?php endif; ?>

                        <?php endwhile; ?>
                    <?php else: ?>

                        <p><?php __('No projects found.'); ?></p>

                    <?php endif; ?>
                    <a class="ProjectList_topLink__spYLf" href="/projects">Back to Projects</a>
                    <a class="ProjectList_topLink__spYLf" href="/">Home</a>
                </div>
            </div>
        </section>
        
<?php get_footer(); ?>