<!-- start of footer.php -->

<!-- how we help start -->
<section class="columns4" id="help">
    <header>
        <h2>How We Help People</h2>
    </header>
    
    <section class="columns-how">
<?php
    $childArgs = array(
        'sort_order' => 'ASC',
        'sort_column' => 'menu_order',
        'child_of' => 137
    );
      
    $childList = get_pages($childArgs);
        foreach ($childList as $child) { ?>
        <section class="how">
            <a href="<?php echo get_permalink($child); ?>">
                <?php 
                    echo $child->post_title; 
                    echo get_the_post_thumbnail( $child);
                    ?>
            </a>
        </section> 
    <?php } ?>
    </section>
</section>
<!-- how we hellp end -->

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
													<li><a href="/areas/medical">Medical</a></li>
													<li><a href="/areas/life-sciences">Life Sciences</a></li>
													<li><a href="/areas/industrial">Industrial</a></li>
													<li><a href="/areas/consumer">Consumer Health</a></li>
						
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
</html>

