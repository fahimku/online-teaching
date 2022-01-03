<?php
/**
   Template Name:  Pages Template
 */
?>

<?php get_header(); ?>

        
<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>
        
    <!-- .wpo-breadcumb-area start -->
    <div class="wpo-breadcumb-area">
    <div class="container">
        <div class="row">
        <div class="col-12">
            <div class="wpo-breadcumb-wrap">
            <h2><?php the_title(); ?></h2>
            <?php if( bi_option('enable_disable_breadcrumbs','1') == '1') {?>
            <?php echo responsive_breadcrumb_lists(); ?>
            <?php } ?>
            </div>
        </div>
        </div>
    </div>
    </div>
    <!-- .wpo-breadcumb-area end -->
                       
    <?php the_content(); ?>
  
    <div class="post-edit"><?php edit_post_link(__('Edit', 'responsive')); ?></div> 
        
    <?php endwhile; ?> 

<?php endif; ?>  
      
<?php get_footer(); ?>