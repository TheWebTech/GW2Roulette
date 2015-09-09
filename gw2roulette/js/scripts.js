	


$(document).ready(function(){
   // cache the window object
   $window = $(window);
 
   $('section[data-type="background"]').each(function(){
     // declare the variable to affect the defined data-type
     var $scroll = $(this);
                     
      $(window).scroll(function() {
        // HTML5 proves useful for helping with creating JS functions!
        // also, negative value because we're scrolling upwards                             
        var yPos = -($window.scrollTop() / $scroll.data('speed')); 
         
        // background position
        var coords = '50% '+ yPos + 'px';
 
        // move the background
        $scroll.css({ backgroundPosition: coords });    
      }); // end window scroll
   });  // end section function
}); // close out script


//website Config

var siteVersion = "v0.8";

var WPThemeUrl="http://jonmclarendesigns.com/dev/gw2roulette/wp-content/themes/gw2roulette/"; // this is used in place of the php for the theme directory since that php cant be called on the fly in js





var challengeName = new Array("Yolo!", "Self-made Man/Woman", "Homeless", "Mr. Immersion","Under The Influence","Rabbit of Caerbannog","Run, Forrest, Run!","We have a STREAKER, ladies and gents!","Hippocratic Oath");
var challengeDescriptions = new Array("Start a new character and the first time you die(downed doesn't count) sell everything on that character. Delete that Character.","You are only allowed to wear things you've crafted","Put your current armor and weapon in your bank or in your inventory, you can only use gear given to you by others. Start begging. If it helps mention this site, and this challenge.","After 15 seconds of logging into your Character, you have to Turn off the Interface completely and fight, level and explore with your Interface off.","The entire time you play today you must be using a consumable. I.E. Food, ale, etc.","Look, that rabbit's got a vicious streak a mile wide, it's a killer! Kill all environmental animals on sight! See how many you can get in a specified amount of time. Beat your score.","Play with auto-run always activated (default hotkey 'r')","Remove your armor you sexy animal! Do not equip armor until you finish playing today!","Never use a weapon ever. Only use skills that help allies, none that will cause harm to enemies.");
var challengeIcons =new Array("Woo.png", "Vaccumagic_Inhilation.png", "Supply_Crate.png", "Ready.png","Bluff.png","Kitty_Bite.png","Sprint_(Southsun_Survival).png","Boast.png","locked.png");
$(document).ready(function(){
	$('.siteVersion').append(siteVersion); // used to display the current version of the website multiple times throughout website, I hate redundancy.
	 // display info alert when user tries to rate a challenge.
	//display all challenges on the page.
	//new json based code above.

	//jquery.getJSON("js/challenges.json");
	
	
	//old code below
	
	$(challengeName).each(function(x) { //for each item in challengeName print the challenge's information
		var imgurl=WPThemeUrl+"img/challengeicons/"+challengeIcons[x];
		var challengehtml = '<div class="row wow animate flipInX" data-wow-delay=".4s"><div class="col-md-12"><hr style="border-top:1px solid #615f61;"></div><div class="col-md-4 text-center"><p><img alt="Challenge Icon" class="img-responsive img-center img-thumbnail" style="height:128px;" src="'+imgurl+'" /><br><b>'+challengeName[x]+'</b></p></div><div class="col-md-8"><p>'+challengeDescriptions[x]+'</div> ';
		$('#challengelist').append(challengehtml);
	});
	
	//spinner code to pick a random achievement.
	$('#spin').click(function () {
		
		
		var randno = Math.floor(Math.random()*(challengeName.length)); //generate random number based on how many challenges are in the Challenge name array   
		
		
		$('#name').empty(); //clear the challenge name
		$('#description').empty(); //clear the challenge description
		$('#name').append(challengeName[randno]); //add challenge name
		$('#description').append(challengeDescriptions[randno]);//add challenge description
		
		var imgurl=WPThemeUrl+"img/challengeicons/"+challengeIcons[randno];
		$("#challenge-img").attr("src",imgurl);
		//console.log(randno);  this is for debugging the random numbers
	});
});

