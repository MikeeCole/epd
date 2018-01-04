<?php /* Template Name: Areas Template */ ?>
<?php get_header(); ?>
<!-- start of areas.php -->

<?php the_post(); 
    $title = get_the_title();    
    $pagecopy = get_extended( $post->post_content );
    $sliderName = $title . 'Top';
?>

<header class="hero">
    <?php layerslider($sliderName); ?>
</header>


<!-- text area start -->
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
<!-- text section end -->

<!-- case studies start -->
<h3><?php echo $title; ?> product Case Studies that might interest you:</h3>
<section class="columns2">
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
    $oddeven = 0; 
    while ( $parent->have_posts() ) : $parent->the_post(); 
        $pagecopy = get_extended( $post->post_content );
        $featured_img_url = get_the_post_thumbnail_url($child,'full');

        $oddeven++;
    
        if ($oddeven % 2 == 0){
            $alignment = ' even';
        } else {
            $alignment = ' odd';
        }
?>
    <section class="areathumb<?php echo $alignment; ?>">
        <h3>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <?php the_title(); ?>
            </a>
        </h3>
            <img src="<?php echo $featured_img_url; ?>">

        <section>
            <?php the_excerpt(50); ?>
        </section>
    </section>
    
    <?php endwhile; ?>

<?php endif; wp_reset_postdata(); ?>
    
</section>
<!-- case studies end -->

<!-- end of areas.php -->
<?php get_footer(); ?>