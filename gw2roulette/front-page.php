<?php get_header(); ?>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal-backdrop"></div>
	

<div class="modal fade" id="password" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content" id="subscribe">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="#FFF">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Quaggan want to tell yoooooooou all about GW2 Rooooooooulette</h4>
      </div>
      <div class="modal-body">
        This website is under development. That said, you can help beta test it!
		<br> The main idea for this site is to enhance the gameplay of GW2 by giving you an arbitrary challenge to do with friends or solo. I have tons of other ideas, sign up on the form below to recieve news updates on the site.
		<?php echo do_shortcode("[mc4wp_form]") ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


	<div class="jumbotron headerjumbo" data-speed="6" data-type="background">
		<div class="container">
			<div class="jumbo-mid wow fadeInDown" data-wow-duration="2s">
				<h1 class="shadow-black">
						<?php the_field('Jumbo1header'); ?>
						</h1>
				<p class="shadow-black">
					<?php the_field('jumbo1-text'); ?>
				</p>
				<noscript class="alert alert-danger" role="alert">Warning: you have Javascript disabled. This site will not function properly without javascript. Please enable javascript or use a different web browser. We reccomend Google Chrome.</noscript>
			</div>
		</div>
	</div>
	<div class="container">
		<h1 class="wow slideInLeft">
				<?php the_field('heading2'); ?>
		</h3>
		<p style="margin-bottom:42px;" class="wow slideInRight">
			<?php the_field('paragraph1'); ?>
			<br><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#password">
Want to know more?
</button>

		</p>

	</div>
	<a name="spin"></a>
	<div class="jumbotron jumbo-2">
		<div class="container">
		<div class="row clearfix">
			<div class="jumbo-mid">
				<div class="col-md-2 column">
				</div>
				<div class="col-md-8 column">

					<div class="well well-lg wow animated flipInX" id="roulettetable" data-wow-duration="2s" data-wow-delay="1s">
						<div class="row clearfix">


							<div class="col-md-3 column">
								<p class="text-center">
									
									<b>
										<img id="challenge-img" class="img-responsive img-center img-thumbnail" src="<?php echo get_bloginfo('template_directory');?>/img/challengeicons/locked.png">
										<br>
										<span id="name">
											Spin!
										</span>
									</b>
								</p>
								
									<button type="button" class="btn btn-success  btn-block btn-lg" id="spin"> <i class="fa fa-circle-o-notch hoverspinr"></i> Spin</button>
								
							</div>
							<div class="col-md-9 column">
								<p id="description">
								Spin to start a challenge. Spin again to start a different challenge. Try to play following this Challenge's rule(s) for a specified amount of time(half an hour, an hour).
								</p>
								<div class="text-right">
									<div class="btn-group btn-group-lg " data-toggle="buttons" role="group" aria-label="...">
										  <label class="btn btn-success disabled ratechallenge">
											<input type="radio" autocomplete="off" onclick="$().alert();"> <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
										  </label>
										  <label class="btn btn-danger disabled ratechallenge">
											<input type="radio" autocomplete="off"> <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span>
										  </label>
										
										</div>
									<div class="black">
										Rating hasn't been added yet.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
			</div>
	</div>

		<div class="col-md-2 column">
		</div>
	</div>
	<div class="container">
		<div class="row clearfix">
			<div class="col-md-12 column">
				<a name="funding"></a>
				<h1>
				<?php the_field('donation_heading'); ?>
				</h1>
Current site version: <span class="siteVersion"></span>
		<div class="funding-well well wow flipInX">

			<div class="row">

				<div class="col-md-8">

					<div class="progress funding">
						<div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" data-transitiongoal="75" aria-valuenow="<?php the_field('paragraph1'); ?>" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em;">
							<?php the_field('donation_percent'); ?>%
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<button type="button" class="btn btn-info btn-lg btn-block" data-toggle="modal" data-target="#Donate"><i class="fa fa-heart"></i> Donate</button>



				</div>
			</div>
			<!--<dic class="row">
					<div class="col-md-2">
						
						</div>
						<div class="col-md-8">
						Isn't this site free? Yes, for visitors it's absolutely free, but hosting and development cost time and money.
							Some of the cool features I want to add I can't add on my own, so I will need to outsource some of that.
						</div>
						<div class="col-md-2">
						
						</div>
					</dic>-->
		</div>
		<!--<div class="progress progress-striped active" >
					<div class="progress-bar progress-success" >
					</div>
				</div>-->

		<div class="row clearfix">
			<div class="col-md-3 column">
				<div class="well wow fadeIn">


					<h2 class="in-well">
				<?php the_field('hosting_heading'); ?>
			</h2>
					<?php the_field('hosting_paragraph'); ?>
				</div>
			</div>
			<div class="img col-md-1 text-center">
				<div class="hidden-sm hidden-xs wow fadeInLeft" data-wow-delay=".5s">

					<i class="fa fa-arrow-right fa-3x"></i>
				</div>
				<div class="hidden-md hidden-lg wow fadeInLeft" data-wow-delay=".8s">
					<i class="fa fa-arrow-down fa-3x"></i>
				</div>
			</div>
			<div class="col-md-4 column">
				<div class="well wow fadeInLeft" data-wow-delay="1s">
					<h2 class="in-well">
								<?php the_field('whats_next_heading'); ?>
							</h2>
					<p><?php the_field('whats_next_paragraph'); ?>
						
					</p>
				</div>
			</div>
			<div class="img col-md-1 text-center">
				<div class="hidden-sm hidden-xs wow fadeInLeft" data-wow-delay="1.2s">

					<i class="fa fa-arrow-right fa-3x"></i>
				</div>
				<div class="hidden-md hidden-lg wow fadeInLeft" data-wow-delay="1.4s">
					<i class="fa fa-arrow-down fa-3x"></i>
				</div>
			</div>
			<div class="col-md-3 column ">
				<div class="well wow fadeInLeft" data-wow-delay="1.6s">
					<h2 class="in-well">
								<?php the_field('future_updates_heading'); ?>
							</h2>
					<?php the_field('future_updates_paragraph'); ?>
				
					
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
	<div class="jumbotron jumbo-3">
		<div class="container">
			<div class="row clearfix">
				<div class="col-md-2 column">
				</div>
				<div class="col-md-8 column">
					<div class="well">


						<h1 class="in-well-h1 in-well">
						<?php the_field('full_list_of_challenges_heading'); ?>
					</h1>
						<div id="challengelist">


							
						</div>
					</div>
				</div>
				<div class="col-md-2 column">
				</div>
			</div>
		</div>
	</div>





<?php get_footer(); ?>