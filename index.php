<?php
/**
 * @package WordPress
 * @subpackage RawApps iPhone Theme
 */
get_header();
?>

		<div class="content_appicon"><?php rt_render_appicon()?></div>

		<div class="content_body">
			<h2 class="contains">
				<?php echo get_option('rt_appdescriptiontitle'); ?><span class="highlight"><?php echo get_option('rt_appdescriptiontitle'); ?></span>
			</h2>		
			<div style="clear:both;height:0px;"><!----></div>

			<div class="description"><?php echo get_option('rt_appdescription'); ?></div>
			<div class="meta">
				<div class="details">
					<div><span>Version:</span> <?php echo get_option('rt_appversion'); ?>  </div>     
					<div><span>Author:</span> <?php echo get_option('rt_authorname'); ?>     </div>    
					<div><span>Price:</span> <?php echo get_option('rt_appprice'); ?> </div> 
					<div class="app-price-tag-wrapper"><div class="app-price-tag"><span class="pricetag-text"><?php echo get_option('rt_appprice'); ?></span></div>
					<div class="app-price-tag app-price-tag-cover"><p> </p></div></div>

				</div>
				<div class="appstore">
					<a href="<?php echo get_option('rt_ituneslink'); ?>"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/rt_appstorelink.png"></a>
				</div>
				<div id="social">
				<!-- Twitter -->
					<a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-related="dominikkrejcik">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
				<!-- Facebook -->
					<iframe src="http://www.facebook.com/plugins/like.php?app_id=142549539162044&amp;href=<?php echo rawurlencode('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px; position: relative; top: 1px;" allowTransparency="true"></iframe>
				<!-- G+ -->
					<g:plusone size="medium" annotation="none"></g:plusone>
					<script type="text/javascript">
  						(function() {
  							var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    						po.src = 'https://apis.google.com/js/plusone.js';
    						var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  						})();
					</script>
				</div>
				<div style="clear:both;height:0px;"><!----></div>
			</div>

		</div>
		<div style="clear:both;height:0px;"><!----></div>
		
	</div>









<?php get_footer(); ?>
