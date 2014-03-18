	<footer>
		<section id="ft_widgets">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : endif; ?>
		</section>
		<p id="copyright">My Blog Copyright @ 2014</p>
	</footer>
	<?php wp_footer();?>
</body>
</html>