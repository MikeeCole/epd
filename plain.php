<?php /* Template Name: Plain Template */ ?>


<?php get_header(); ?>
<!-- plain.php start -->
<?php
                $pageid = get_the_id();
                $content_post = get_post($pageid);
                $content = $content_post->post_content;
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]&gt;', $content);
                echo $content;
                ?>
<!-- plain.php end -->

<?php get_footer(); ?>