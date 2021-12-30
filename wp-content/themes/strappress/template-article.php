<?php
/**
 * @package WordPress
 * Template Name: Article Template
 */
?>

<?php get_header(); ?>

<div class="home-wrap">
	<section>
        <?php
			$mypost = array( 'post_type' => 'articles', 'posts_per_page' => 4 );
			$loop = new WP_Query( $mypost );
			?>
			<?php while ( $loop->have_posts() ) : $loop->the_post();?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="page-header">
                <h1 class="page-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
                </header>
  
            <div class="entry-content"><?php the_content(); ?></div>
			<h1>Post Content</h1>
			<p><?php echo esc_html( get_post_meta( get_the_ID(), 'article_text', true ) ); ?></p>
			<p><?php echo get_post_meta( get_the_ID(), 'article_text', true); ?></p>
        </article>
		<hr>
	
    <?php endwhile; ?>
	
    </section><!-- end of .post-meta -->
</div>

<?php get_footer(); ?>