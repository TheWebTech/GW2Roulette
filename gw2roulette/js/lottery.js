// Hello.
//
// This is JSHint, a tool that helps to detect errors and potential
// problems in your JavaScript code.



$(document).ready(function(){
	//if ticket price value changes update it on second tab
	/*
	$("#priceinput").change(function(){
		var ticketPrice = $("#priceinput").val();
		var ticketcurrency = $("#currency").val();
		var PriceAndCurrency = ticketPrice+" "+ticketcurrency;
		$("#priceperticketstring").val(PriceAndCurrency);
	});
	*/
	$("#priceinput").change(function(){
		var ticketPrice = $("#priceinput").val();
		var ticketcurrency = $("#currency").val();
		var PriceAndCurrency = ticketPrice+" "+ticketcurrency;
		$("#priceperticketstring").val(PriceAndCurrency);
	});
	//if currency value changes update it on second tab
	$("#currency").change(function(){
		var ticketPrice = $("#priceinput").val();
		var ticketcurrency = $("#currency").val();
		var PriceAndCurrency = ticketPrice+" "+ticketcurrency;
		$("#priceperticketstring").val(PriceAndCurrency);
	});
	//on update of cuts update variables and display correct remainder left for winners
	$("#hostCutPercent").change(function(){
		var hostCutPercent = parseInt($("#hostCutPercent").val());
		var guildCutPercent = parseInt($("#guildCutPercent").val());
		var winnerpercent = 100-( hostCutPercent + guildCutPercent);
		$("#winnerpercent").val(winnerpercent);
	});
	$("#guildCutPercent").change(function(){
		var hostCutPercent = parseInt($("#hostCutPercent").val());
		var guildCutPercent = parseInt($("#guildCutPercent").val());
		var winnerpercent = 100-( hostCutPercent + guildCutPercent);
		$("#winnerpercent").val(winnerpercent);
		
	});
	
	
	//add or remove percent fields based on # of winners entered
	$("#numberOfWinners").change(function(){
		var numberOfWinners = parseInt($("#numberOfWinners").val()); //this is the number set by user
		var numberOfWinnersleft= numberOfWinners; // this is to count down while loop
		var numberOfWinner = 1; // this is for printing winner #
		var hostCutPercent = parseInt($("#hostCutPercent").val());
		var guildCutPercent = parseInt($("#guildCutPercent").val());
		var winnerpercent = parseInt(100 - ( hostCutPercent + guildCutPercent));
		var winnerequalshare = winnerpercent/numberOfWinners;

		$("#winnerpercents").html("");
		while (numberOfWinnersleft >0){
			if ($()){

			$("#winnerpercents").append('<div class="form-group"><label>Winner '+numberOfWinner+'(%)<input type="number" id="winnerNum'+numberOfWinner+'" class="form-control" value="'+ winnerequalshare+'" max="'+winnerequalshare +'" min="1"></label></div>');
			numberOfWinner= ++numberOfWinner;
			numberOfWinnersleft = -- numberOfWinnersleft;

			}
			else{
			$("#winnerpercents").append('<div class="form-group"><label>Winner '+numberOfWinner+'<input type="number" id="winnerNum'+numberOfWinner+'" class="form-control" value="'+ winnerequalshare+'" max="'+winnerequalshare +'" min="1"></label></div>');
			numberOfWinner= ++numberOfWinner;
			numberOfWinnersleft = -- numberOfWinnersleft;
			}	
		}

	});
	
	$("#addPlayer").click(function(){
		$("#ticketTable").append('<tr><td></td><td></td><td></td><td><a href="#" class="btn btn-danger" role="button">test</a></td></tr>');
	});
		
		
		
	
});
