
		//DISPLAYS THE "form.php" WITHOUT LOADING THE PAGE 
	

		//UPDATES THE "getCurrentTime" FUNCTION THAT IS CREATED IN PHP IN "view/User_Page.php"

		var timestamp = '<?=getCurrentTime();?>'; //ASSIGNED THE VALUE OF THE "getCurrentTime" FUNCTION IN PHP
		function updateTime(){

		  $('#time').html(Date(timestamp));
		  timestamp++;

		//GET'S THE TIME AND MINUTE IN JQUERY SO IT CAN BE EASY TO MAKE CONDITIONS
		  var timestamp = new Date();
		  var hours = timestamp.getHours();
		  var minute = timestamp.getMinutes();


		  //MORNING TIME IN			  		
		  if(hours != 8){
		  		$("#time-in-btn").attr("disabled", "disabled");

		  			$("#errorMsg").css({

		  					'display': 'block'
		  						
			  		});

		  }
		  else{

		  		$("#timeout-btn").hide();
		 		$("#time-in-btn").show();

		  		$("#time-in-btn").attr("disabled", false);
		  		$("#errorMsg").css({

		  					'display': 'none'
		  						
		  			});

		  		if (minute > 30) {
		  			$("#time-in-btn").attr("disabled", "disabled");
		  			$("#errorMsg").css({

		  					'display': 'block'
		  						
		  			});
		  			
		  		}
		  }

		  //MORNING TIME OUT
		  if (hours != 12) {


		  		$("#time-in-btn").attr("disabled", "disabled");
		  		$("#errorMsg").css({

		  					'display': 'block'
		  						
		  			});
		}else{


		  		$("#timeout-btn").show();
		 		$("#time-in-btn").hide();

				$("#time-in-btn").attr("disabled", false);
		  		$("#errorMsg").css({

		  					'display': 'none'
		  						
		  			});

		  		if (minute > 30) {
		  			$("#time-in-btn").attr("disabled", "disabled");
		  			$("#errorMsg").css({

		  					'display': 'block'
		  						
		  			});
		  			
		  		}
		}

		//

		 //AFTERNOON TIME IN			  		
		  if(hours != 13){
		  		$("#time-in-btn").attr("disabled", "disabled");

		  			$("#errorMsg").css({

		  					'display': 'block'
		  						
			  		});

		  }
		  else{

		  		$("#timeout-btn").hide();
		 		$("#time-in-btn").show();

		  		$("#time-in-btn").attr("disabled", false);
		  		$("#errorMsg").css({

		  					'display': 'none'
		  						
		  			});

		  		if (minute > 30) {
		  			$("#time-in-btn").attr("disabled", "disabled");
		  			$("#errorMsg").css({

		  					'display': 'block'
		  						
		  			});
		  			
		  		}
		  }

		  //AFTERNOON TIME OUT
		  if (hours != 16) {


		  		$("#time-in-btn").attr("disabled", "disabled");
		  		$("#errorMsg").css({

		  					'display': 'block'
		  						
		  			});
		}else{


		  		$("#timeout-btn").show();
		 		$("#time-in-btn").hide();

				$("#time-in-btn").attr("disabled", false);
		  		$("#errorMsg").css({

		  					'display': 'none'
		  						
		  			});

		  		if (minute > 30) {
		  			$("#time-in-btn").attr("disabled", "disabled");
		  			$("#errorMsg").css({

		  					'display': 'block'
		  						
		  			});
		  			
		  		}
		}

		
}

		

		//UPDATE OUR "updateTime" FUNCTION THAT NOW HOLDS OUR "getCurrentTime()" IN PHP EVERY SECOND
		$(function(){
		  setInterval(updateTime, 1000);
		});
