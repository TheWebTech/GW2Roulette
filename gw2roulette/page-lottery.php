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
		<div class="col-md-6 col-md-offset-3">
			
			<div class="well lottery">
				<div class="row">
					<div class="col-md-12">
						<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#Setup" aria-controls="Setup" role="tab" data-toggle="tab">Setup</a></li>
    <li role="presentation"><a href="#Tickets" aria-controls="Tickets" role="tab" data-toggle="tab">Tickets</a></li>
    <li role="presentation"><a href="#Draw" aria-controls="Draw" role="tab" data-toggle="tab">Draw</a></li>
   
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="Setup">
	  
						<form class="form-horizontal">
							<div class="form-group">
								<label>Price Per Ticket
									<input type="number" class="form-control" id="priceinput">
									<select class="form-control" id="currency">
									<option value="Copper">Copper</option>
									<option value="Silver">Silver</option>
									<option value="Gold">Gold</option>

								</select>
								</label>
								
							</div>
							<div class="form-group">
								<label>
									how to handle cuts?</label>
								<label class="radio-inline">
									<input type="radio" name="cuts" id="handleFixed" disabled>Fixed</label>
								<label class="radio-inline">
									<input type="radio" name="cuts" id="handlePercent" checked>Percent</label>
							</div>
							<div class="row">
								<div class="col-md-4"><div class="form-group">
								<label>Your Cut
									<input id="hostCutPercent" type="number" class="form-control" max="100" min="0">
								</label>
							</div></div>
								<div class="col-md-4"><div class="form-group">
								<label>Your Guild's Cut
									<input id="guildCutPercent" type="number" class="form-control" max="100" min="0">
								</label>
							</div></div>
								<div class="col-md-4">
								<div class="form-group">
								<label>% left for winners
									<input type="number" id="winnerpercent" class="form-control" value="100" max="100" min="0" disabled>
								</label>
								</div>
								
							</div>
							</div>
							
							
							 <br>
							<span class="text-center"><b>Winners Prize Money</b></span>
							<div class="form-group">
								<label># of winners
									<input type="number" id="numberOfWinners" class="form-control" value="1" max="3" min="1">
								</label>
							</div>
							<div class="form-group">
								<label>
									how is money split amongst winners?</label>
								<label class="radio-inline">
									<input type="radio" name="winnersplit" disabled>Tiered</label>
								<label class="radio-inline">
									<input type="radio" name="winnersplit" checked>Equal Shares</label>
								
							</div>
							
							<div id="winnerpercents">
								<div class="form-group">
									<label>Winner 1
										<input type="number" id="winnerNum1" class="form-control" value="1" max="3" min="1">
									</label>
								</div>
								
							
							
							</div><!--This section gets % fields added to it based on # of winners set -->
						</form>
	  
	  </div>
    <div role="tabpanel" class="tab-pane" id="Tickets">
		Price per ticket: <input type="text" class="input" id="priceperticketstring" disabled>
		
	  <table id="ticketTable" class="table table-hover table-border">
		 
	  	<tr>
	  		<th>Player/Character</th>
	  		<th># of Tickets</th>
	  		<th>% Chance of Winning</th>
	  		<th></th>
	  	</tr>
			
		
	  	<tr>
	  		<td></td>
	  		<td></td>
	  		<td></td>
	  		<td><a class="btn btn-danger" role="button">test</a></td>
	  	</tr>
		  
		  
	  </table>
	  
	  <table><tr>
	  		<td><input type="text" class="form-control" placeholder="Player/Character Name"></td>
	  		<td><input type="number" min="0" class="form-control" placeholder="# of tickets" characters="5"></td>
	  		<td></td>
	  		<td><a class="btn btn-success" role="button" id="addPlayer">Add</a></td>
	  	</tr></table>
	  
	  
	  
	  </div>
    <div role="tabpanel" class="tab-pane" id="Draw">
	  <div class="row">
	  	<div class="col-md-12"><a href="" class="btn btn-block btn-success">Draw winners</a> <br><textarea name="" id="copypastable" cols="30" rows="10" disabled="disabled" class="form-control"></textarea><br> <a href="" class="btn btn-info btn-block">Copy to clipboard</a> </div>
	  </div>
		
		
	  </div>
   
  </div>

</div>
						
						
						
						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?php the_post(); the_content(); edit_post_link( 'Edit', '', '<strong>|</strong>'); endwhile; else: echo( "no content"); endif; ?>
				</div>
			</div>
		</div>


	</div>

	<?php get_footer(); ?>