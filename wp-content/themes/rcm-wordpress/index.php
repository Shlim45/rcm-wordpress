<?php get_header(); ?>


<div class="Layout_container__nRe7b">
    <main class="Layout_main__T_Jjv">
        <section>

            <!-- SIDEBAR -->
            <?php if ( is_active_sidebar( 'categories_sidebar' )) : ?>
                <ul class="projects-sidebar">
                    <?php dynamic_sidebar('categories_sidebar'); ?>
                </ul>
            <?php endif; ?>
            <!-- /SIDEBAR -->

            <div id="Cabinets" class="ProjectList_rightCol__zQIG5">
                <div class="ProjectList_card__ASta2">
                    <h2><span>Projects</span></h2>

                    <?php if(have_posts()): ?>

                        <?php while(have_posts()) : the_post(); ?> 

                            <?php get_template_part( 'project', get_post_format() ); ?>

                        <?php endwhile; ?>

                        <a class="ProjectList_topLink__spYLf" href="#">Top of Page</a>
                    <?php else: ?>

                        <p><?php __('No projects found.'); ?></p>

                    <?php endif; ?>
                </div>
            </div>
        </section>
        
<?php get_footer(); ?>