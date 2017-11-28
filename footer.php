<!-- start of footer.php -->



<!-- how we help start -->
<section class="columns4" id="help">
    <header>
        <h3>How We Help People</h3>
    </header>
    
    <section class="columns-how">
<?php
    $childArgs = array(
        'sort_order' => 'ASC',
        'sort_column' => 'menu_order',
        'child_of' => 137,
        'parent' => 137,
        'sort_order' => 'desc'
    );
      
    $childList = get_pages($childArgs);
        foreach ($childList as $child) {
            
            $areaText = $areaText . '<li><a href="' . get_permalink($child) . '">' . $child->post_title . '</a></li>';
            $areaText = $areaText . PHP_EOL;
            
        /* grab the url for the full size featured image */
        $featured_img_url = get_the_post_thumbnail_url($child,'full'); 
        ?>
  
        <section class="how">
            <a href="<?php echo get_permalink($child); ?>">
                <img src="<?php echo esc_url($featured_img_url); ?>">
                <h3><?php echo $child->post_title; ?></h3>
            </a>
        </section> 
    <?php } ?>
    </section>
</section>
<!-- how we help end -->

<!-- contact start -->
<section id="contactForm" class="contactForm">
    <header>
        <h3>Join our mailing list</h3>
    </header>
    <form action="https://eclipsepd.us13.list-manage.com/subscribe/post?u=1d1f9e1611788bcf020f79924&amp;id=2dba2ecf3d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <input type="email" placeholder="Enter your email address." size="35" name="EMAIL" id="mce-EMAIL">
		<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_1d1f9e1611788bcf020f79924_2dba2ecf3d" tabindex="-1" value=""></div>

        <button type="submit"name="subscribe" id="mc-embedded-subscribe">Let us contact you <svg class="icon icon-mail4"><use xlink:href="#icon-mail4"></use></svg><span class="mls"></span></button>
    </form>
    
</section>
<!-- contact end -->

<footer id="footer">
    <section class="company">
				<a href="/"><img src="https://eclipsepd.com/assets/img/logos/eclipse-letterpressed.png" alt="Eclipse" /></a>

				<p>
					Copyright © 2017
					<span>All Rights Reserved.</span>
				</p>
			</section>
			<section class="links">
				<section class="areas">
					<h4>Areas</h4>

					<ul>
                        <?php echo $areaText; ?>
					</ul>
					
				</section>
				<section class="about">
					<h4>About</h4>

					<ul>
						<li><a href="/about">About Eclipse</a></li>
						<li><a href="/stories">Stories</a></li>
					</ul>
				</section>
				<section class="clients">
					<h4>Clients</h4>

					<ul>
						<li><a href="https://secure.eclipsepd.com/">Log In</a></li>
					</ul>
				</section>
				<section class="contact">
					<h4>Contact</h4>

					<ul>
						<li><small class="icons">&#x260e;</small> 888.478.5150</li>
						<li><small class="icons">&#x1f4e0;</small> 978.478.5160</li>
						<li><small class="icons">&#x2709;</small> <a href="mailto:hello@eclipsepd.com">hello@eclipsepd.com</a></li>
						<li><small class="icons">&#x1f426;</small> <a href="http://twitter.com/eclipsepdc">@eclipsepdc</a></li>
					</ul>
				</section>
			</section>
		</footer>

</div>
<?php wp_footer(); ?>
</body>

<?php mailChimp(); ?>
</html>

