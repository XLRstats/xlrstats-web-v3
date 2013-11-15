<?php if (Configure::read('options.google_analytics_account') != '') { ?>
	<script type="text/javascript">
		if (jQuery.cookie('cc_cookie_decline') == "cc_cookie_decline") {
			// Track visits unless cookies are declined
		} else {
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', '<?php echo Configure::read('options.google_analytics_account') ?>']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		}
	</script>
<?php } ?>