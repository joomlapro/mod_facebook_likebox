<?php
/**
 * @package     Facebook
 * @subpackage  mod_facebook
 *
 * @copyright   Copyright (C) 2013 AtomTech, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

// Get the language.
$lang = JFactory::getLanguage();

// Initialiase variables.
$url         = $url ? $url : 'http://www.facebook.com/atomtech';
$height      = $height ? ' data-height="' . $height . '"' : '';
$show_faces  = $show_faces ? 'true' : 'false';
$stream      = $stream ? 'true' : 'false';
$header      = $header ? 'true' : 'false';
$show_border = $show_border ? 'true' : 'false';
?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/<?php echo str_replace('-', '_', $lang->getTag()); ?>/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- Facebook Widget -->
<div id="fb-like" class="facebook-widget<?php echo $moduleclass_sfx; ?>">
	<div class="fb-like-box" data-href="<?php echo $url; ?>" data-width="<?php echo $width; ?>"<?php echo $height; ?> data-show-faces="<?php echo $show_faces; ?>" data-colorscheme="<?php echo $color_scheme; ?>" data-stream="<?php echo $stream; ?>" data-show-border="<?php echo $show_border; ?>" data-header="<?php echo $header; ?>"></div>
	<script type="text/javascript">
		/* <![CDATA[ */
		jQuery.noConflict();

		(function($) {
			$(function() {
				$(window).on('resize', function() {
					$('#fb-like').each(function() {
						var container_width = $(this).width();

						if (typeof(FB) != 'undefined' && FB != null ) {
							$(this).html('<div class="fb-like-box" data-href="<?php echo $url; ?>" data-width="' + container_width + '" data-show-faces="<?php echo $show_faces; ?>" data-colorscheme="<?php echo $color_scheme; ?>" data-stream="<?php echo $stream; ?>" data-show-border="<?php echo $show_border; ?>" data-header="<?php echo $header; ?>"></div>');
							FB.XFBML.parse();
						}
					});
				}).resize();
			});
		})(jQuery);
		/* ]]> */
	</script>
</div>
<!-- End Facebook Widget -->