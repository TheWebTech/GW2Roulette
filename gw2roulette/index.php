<?php get_header(); ?>




<div class="jumbotron headerjumbo" style="height:300px;" data-speed="6" data-type="background">
	<div class="container">
		<div class="jumbo-mid wow fadeInDown" data-wow-duration="2s">
			<h1 class="shadow-black">
				

		
				<?php if (have_posts()) :
					while (have_posts()) :
					single_post_title(); ?>
				

						</h1>
			<noscript class="alert alert-danger" role="alert">Warning: you have Javascript disabled. This site will not function properly without javascript. Please enable javascript or use a different web browser. We reccomend Google Chrome.</noscript>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3"><div class="well pagecontent">


	
		<?php the_post();
			the_content();
			edit_post_link('Edit','','<strong>|</strong>');
   endwhile;
else:
	echo("no content");
endif; ?>
			</div>
			


			</div>
		</div>
	</div>


</div>

<?php get_footer(); ?>