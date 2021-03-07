<?php

get_header();

the_post();

?>
<div id="post-<?php the_ID(); ?>" <?php post_class( 'content' ); ?>>
	<div class="hero-header" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('<?php echo get_the_post_thumbnail_url(); ?>') no-repeat center center; background-size: cover;">
		<div class="container header-container">
			<div class="cta col-sm-10 col-lg-6 col-xl-5 ml-5">
				<h4>Burlington Central HS</h4>
				<h1>FRC TEAM 2386</h1>
			</div>
		</div>	
	</div>
	<div class="container content-container my-5">
		<?php
			the_content();

		?>
	</div>
</div><!-- /#post-<?php the_ID(); ?> -->
<?php

get_footer();