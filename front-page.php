<?php
/*
Template Name: Homepage
*/ ?>

<?php get_header(); ?>
<!-- start of front page.php apart from get_header -->

<!-- hero start -->
<header  class="hero">
    <?php echo layerslider('frontpage'); ?>
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
<section class="columns3">
    <section class="side-3col">
        <h1><?php echo $fpTitle; ?></h1>
    </section>
    


    <section class="main-3col">
        <?=wpautop( $pagecopy['main'] ); ?>
    </section>
    

</section>
<!-- article end -->

<!-- contact us start --> 

<section class="columns3">
    <header class="contact">
        <h3 class="bordered">Chat With Us</h3>
        If you would like to know more please <a href="/download/brochure">download our brochure</a>.
    </header>
        <section class="col">
            <li class="phone">
                <span class="icons">
                    <object type="image/svg+xml" class="icon" data="<?php echo get_stylesheet_directory_uri(); ?>/images/smartphone-icon.svg">
                    </object>
                </span> 
                <a href="tel:1-978-478-5150">978-478-5150</a>
            </li>
            <li class="email">
                <span class="icons">                    
                    <object type="image/svg+xml" class="icon" data="<?php echo get_stylesheet_directory_uri(); ?>/images/email-icon.svg">
                    </object>
                </span>
                <a href="mailto:hello@eclipsepd.com">hello@eclipsepd.com</a>
            </li>
            <li class="phone">
                <span class="icons">
                    <object type="image/svg+xml" class="icon" data="<?php echo get_stylesheet_directory_uri(); ?>/images/fax-icon.svg">
                    </object>
                </span> 
                <a href="tel:1-978-478-5160">978-478-5160</a>
            </li>
 	        <li class="twitter">
 	            <span class="icons">
 	               <object type="image/svg+xml" class="icon" data="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter-icon.svg">
 	               </object>
                </span>
                    <a href="http://twitter.com/eclipsepdc">@eclipsepdc</a>
            </li>
            <li class="linkedin">
                <span class="icons">
                    <object type="image/svg+xml" class="icon" data="<?php echo get_stylesheet_directory_uri(); ?>/images/linkedin-icon.svg">
                    </object>
                </span>
                <a href="http://www.linkedin.com/company/115118">We’re on LinkedIn</a>
            </li>
        </section>
        
        <section class="col">
            Eclipse Product Development,<br />
            14 Powwow River Rd, <br />
            Unit 7, <br />
            East Kingston, NH 03827
        </section>    
        <section class="col map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11689.003987483351!2d-71.02735373166152!3d42.90974717915377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e2fb26dd5be00f%3A0xd0a8f2c5e8a48889!2sEclipse+Product+Development+Corporation!5e0!3m2!1sen!2sus!4v1510845774410" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe></li>
        </section>
</section>


<!-- end of front page.php apart from get_footer(); -->

<?php get_footer(); ?>