
            
        </div>
    </div>

	<div id="body_right">
    	<div id="body_right_content">
		
			<div id="main_search">
				<form method="get" id="searchform_top" action="<?php bloginfo('url'); ?>/">
					<div>
						<input type="text" value="Type your search here..." name="s" id="searchform_top_text" onclick="this.value='';" />
						<input type="image" src="<?php bloginfo('template_url')?>/images/go.gif" id="gosearch" />
					</div>
				</form>
			</div>
            
            <?php if(function_exists('wp125_write_ads')) wp125_write_ads(); ?>
            
            <div id="sidebars">
                <?php get_sidebar(); ?>
            </div>
            
        </div>
    </div>

</div>
</div>

<div id="footer">
	<div id="footer_text">
    	<p>
		  An experiment in web-enabled telephony by <a href="http://nickgrossman.com">Nick Grossman</a>.  Powered by <a href="http://twilio.com">Twilio</a> and <a href="http://wordpress.org/">WordPress</a>.  <a href="<?php bloginfo('siteurl'); ?>/terms">Terms of use</a>.<br /><br />Phone Idol is just for fun, and has no official relationship with American Idol.
		</p>
		<p><br/>
		<a rel="license" href="http://creativecommons.org/licenses/by/3.0/us/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by/3.0/us/88x31.png" /></a>
		</p>
    </div>
       
</div>



		<?php wp_footer(); ?>


</div>

</body>
</html>
