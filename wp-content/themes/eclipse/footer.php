<?php do_action( 'cyberchimps_before_footer_container' ); ?>

<div id="footer-full-sub" class="container-full-width">
	<div id="footer-main-wrapper" class="container-fluid">
		<div id="footer-wrapper" class="container">
			<?php do_action( 'cyberchimps_footer' ); ?>
			<?php do_action( 'cyberchimps_after_footer_container' ); ?>
		</div>
		<!-- #wrapper .container-fluid -->

		<?php do_action( 'cyberchimps_after_wrapper' ); ?>
	</div>
	<!-- footer wrapper -->
</div><!-- container full -->

<?php wp_footer(); ?>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter49975825 = new Ya.Metrika2({
                    id:49975825,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/49975825" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html>
