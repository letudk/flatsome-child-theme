<?php
get_header(); ?>


<!-- <div class="row row-small"> -->



<?php
    $id = the_ID();
$post_categories = wp_get_post_categories( $id );

foreach($post_categories as $c){
    $cat = get_category( $c );
	if ( $cat->slug == 'collection') {
		echo '<div class="row-full">';
	}{
		echo '<div class="row-small">';
	} 
}
?>


<div class="large-12 col" style="background-color: transparent;">
	<div class="breadcrum">	</div>
   <main>
        <?php
        while (have_posts()) :
            the_post();
        ?>
            <article id="post-<?php the_ID(); ?>">
                <header class="entry-header" style="margin-top:25px;">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>

                <footer class="entry-footer">
              
                  Sharing: <?php echo do_shortcode('[share]'); ?>
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
