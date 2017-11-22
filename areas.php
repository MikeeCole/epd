<?php /* Template Name: Areas Template */ ?>
<?php get_header(); ?>
<!-- start of areas.php -->

<?php the_post(); 
    $title = get_the_title();    
    $pagecopy = get_extended( $post->post_content );
    $sliderName = $title . 'Top';
?>

<section>
    <?php layerslider($sliderName); ?>
</section>

<section class="columns3">
    <section class="side-3col" style="display: inline-grid;">
        <section class="col_top">
            <header>
                <h2><?php echo $title; ?></h2>
            </header>
        </section>
        
        <section class="expert">
            <header>Areas of Expertise:</header>
            <ul>
			    <?php the_field('expertise'); ?>
            </ul>
        </section>
    </section>
    
    <section class="main-3col">
       <?=wpautop( $pagecopy['main'] ); ?> 
    </section>
    
</section>
<?php

$args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => $post->ID,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
 );

$parent = new WP_Query( $args );

if ( $parent->have_posts() ) :
    while ( $parent->have_posts() ) : $parent->the_post(); 
    $pagecopy = get_extended( $post->post_content );
    $featured_img_url = get_the_post_thumbnail_url($child,'full');
?>
        <div id="parent-<?php the_ID(); ?>" class="parent-page">
        <h4>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <?php the_title(); ?>
            </a>
        </h4>
        </div>
            <img src="<?php echo $featured_img_url; ?>">
            


        <section>
            <?php the_excerpt(); ?>
        </section>

    <?php endwhile; ?>

<?php endif; wp_reset_postdata(); ?>
<section>
    
</section>

<!-- end of areas.php -->
<?php get_footer(); ?>