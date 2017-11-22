<?php /* Template Name: Areas Template */ ?>
<?php get_header(); ?>
<!-- start of areas.php -->

<?php the_post(); 
    $title = get_the_title();    
    $pagecopy = get_extended( $post->post_content );
    $sliderName = $title . 'Top';
    $mykey_values = get_post_custom_values( 'expert' );

?>

<h3><?php  ?></h3>

<?php  ?>    
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

<!-- end of areas.php -->
<?php get_footer(); ?>