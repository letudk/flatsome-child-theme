<?php
get_header(); ?>



<div class="row row-small">


<div class="large-9 col" style="background-color:#fff;">
	
<div class="motachuyenmuc">
	<?php echo category_description(); ?>
		</div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" class="archive-post">
            <div class="archive-post-thumbnail">
                <?php if ( has_post_thumbnail() ) : ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <?php the_post_thumbnail( 'thumbnail' ); ?>
                    </a>
                <?php endif; ?>
            </div>
            <div class="archive-post-content">
                <h2 class="archive-post-title"><a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="archive-post-meta">
				 <span class="archive-post-author">👤 <?php the_author(); ?></span>
                    <span class="archive-post-date">
					🕐 <?php $post_date = get_the_date();
	echo $post_date; ?>
					</span>
               
                </div>
                <div class="archive-post-excerpt">
                <p>
					
				  <?php 
        $excerpt = get_the_excerpt();
        if ( wp_is_mobile() ) {
            echo wp_trim_words( $excerpt, 15 ); // Hiển thị chỉ 5 từ trên mobile
        } else {
            echo wp_trim_words( $excerpt, 50 ); // Hiển thị chỉ 50 từ trên desktop
        }
    ?>	</p>  
  <?php

// Hiển thị nút "Xem thêm" dẫn đến bài viết đầy đủ
echo '  <p><a class="xemthem" href="' . get_permalink() . '">Read more</a></p>';
?>
                </div>
            </div>
        </article>
    <?php endwhile; else : ?>
        <p><?php esc_html_e( 'Sorry, there is no content to display yet' ); ?></p>
    <?php endif; ?>
</div>
<?php flatsome_posts_pagination(); ?>
		
	</div>
	<div class="post-sidebar large-3 col" style="background-color:rgb(248, 248, 248);">
		<?php flatsome_sticky_column_open( 'blog_sticky_sidebar' ); ?>
		<?php get_sidebar(); ?>
		<?php flatsome_sticky_column_close( 'blog_sticky_sidebar' ); ?>
	</div>
</div>

<style>
.archive-post {
    clear: both; /* Đảm bảo rằng mỗi bài viết sẽ bắt đầu từ một dòng mới */
    margin-bottom: 20px; /* Tạo khoảng cách giữa các bài viết */
    overflow: hidden;
border-bottom: 1px dashed #ccc; /* Đảm bảo rằng các phần tử không chồng lên nhau */
}
.archive-post-thumbnail {
    float: left;
    width: 30%;
    margin-right: 10px; /* Để tạo khoảng cách giữa hình ảnh và nội dung */
}

.archive-post-content {
    overflow: hidden; /* Đảm bảo nội dung không chồng lên hình ảnh */
}

.archive-post-thumbnail img {
    max-width: 100%;width: 100%;
    height: auto;
max-height:150px;
}

span.archive-post-category {
    background: #f0592a;
    padding: 0px 10px;
    border-radius: 5px;
    color: white;
}
	span.archive-post-category a {color: white;}
h1.title_cat {
    background: #d9d9d9;
    padding: 10px;
    margin: 10px 0;
    border-radius: 5px;
    color: var(--fs-color-primary);
}
a.xemthem, a.button.is-gloss.is-small.mb-0 {
    background: var(--fs-color-primary);
    padding: 5px 10px!important;
    border-radius: 5px;
    color: white;
    font-weight: normal;
    text-transform: capitalize;
    font-size: 13px;
    line-height: 1.4em;
}
</style>
<?php get_footer(); ?>
