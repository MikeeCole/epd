<?php
/*
Template Name: Homepage
*/ ?>

<?php get_header(); ?>
<!-- start of front page.php apart from get_header -->

<!-- hero start -->
<header  class="hero">
    <?php echo layerslider(9); ?>
</header>
<!-- hero end -->

<?php 
    function story() {
        ?>
        <div class="story">
            <section class="story-highlight">
                <h2>
                    <a href="/stories">Stories</a>
                </h2>

<?php $latest = new WP_Query( array( 'posts_per_page' => 1 ));
if( $latest->have_posts() ) : ?>
 <?php while( $latest->have_posts() ) : $latest->the_post(); ?>
                <a href="<?php the_permalink(); ?>">
    <?php if ( has_post_thumbnail() ) { 
            the_post_thumbnail(array(600,400));
        } else {
            the_content(); 
        }
        ?>      <h3 style="padding-left: 15px;"><?php
        the_title();
        ?></h3></a>
        
<?php 
    endwhile;
endif; 
wp_reset_postdata(); ?>
    </section>
        </div>    
<?php }
?>

<?php the_post(); 
    $fpTitle = get_the_title();
    //$fpContent = wpautop(get_extended($content(0), yes));
    $pagecopy = get_extended( $post->post_content );?>
<!-- article start -->
<section class="columns">
    <section class="side-col">
        <h1><?php echo $fpTitle; ?></h1>
    </section>

    <section class="main-col">
        <?=wpautop( $pagecopy['main'] ); ?>
    </section>
    

</section>
<!-- article end -->

<div style="clear: both"><hr /></div>

<!-- contact us start --> 

<section class="columns">
    <header class="contact">
        <h3 class="bordered">Chat With Us</h3>
        If you would like to know more please <a href="/download/brochure">download our brochure</a>.
    </header>
    
        
        <section class="third-col">
            <li class="phone"><span class="icons">☎</span> 978.478.5150</li>
            <li class="email"><span class="icons">✉</span> <a href="mailto:hello@eclipsepd.com">hello@eclipsepd.com</a></li>
        </section>
        
        <section class="third-col">
            <li class="phone"><span class="icons">📠</span> 978.478.5160</li>
 	        <li class="address"><span class="icons">📌</span>
                <a href="http://maps.google.com/maps?q=14+Powwow+River+Rd+No.5,+East+Kingston,+NH+03827">14 Powwow River Rd No.5<br />
East Kingston NH 03827</a></li>
        </section>
        
        <section class="third-col">
 	        <li class="twitter"><span class="icons">🐦</span> <a href="http://twitter.com/eclipsepdc">@eclipsepdc</a></li>
            <li class="linkedin"><span class="icons">█</span> <a href="http://www.linkedin.com/company/115118">We’re on LinkedIn</a></li>
        </section>
        
    </section>
</section>

<div style="clear: both"><hr /></div>

<!-- end of front page.php apart from get_footer(); -->

<?php get_footer(); ?>