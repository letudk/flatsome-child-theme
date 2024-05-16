<?php
get_header(); ?>


<div class="row row-small">


<div class="large-12 col" style="background-color:rgb(248, 248, 248);">
	<div class="breadcrum">	<?php custom_breadcrumbs(); ?></div>
   <main>
        <?php
        while (have_posts()) :
            the_post();
        ?>
            <article id="post-<?php the_ID(); ?>">
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                   
                </header>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>

                <footer class="entry-footer">
              
              <?php echo do_shortcode(' [gdrts_stars_rating]'); ?>    Chia sẻ: <?php echo do_shortcode('[share]'); ?>
                </footer>
            </article>

            <?php
            // If comments are open or we have at least one comment, load up the comment template.
           // if (comments_open() || get_comments_number()) :
             //   comments_template();
            //endif;
            ?>

        <?php endwhile; ?>
    </main><!-- #main -->

</div>

</div>

<?php get_footer(); ?>
