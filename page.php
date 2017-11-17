<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<!-- page.php start -->

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
    <section class="side-3col">
        <header>Areas of Expertise:</header>
        <ul>
            <?php echo $mykey_values[0]; ?>
        </ul>
    </section>
    
    <section class="main-3col">
       <?=wpautop( $pagecopy['main'] ); ?> 
    </section>
    
</section>


<!-- page.php end -->
<?php get_footer();
