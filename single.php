<?php
get_header(); ?>


<!-- <div class="row row-small"> -->

<?php
    $id = get_the_id();
    $terms = get_the_terms( $id, 'category' );
    // print_r( $terms );
    foreach($terms as $term) {
       // echo $term->cat_ID;  
	if($term->cat_ID == 27) {
		echo '<div class="row-full">';
	}else{
		echo '<div class="row row-small">';
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
