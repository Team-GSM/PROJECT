
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

		  alert(hours);
		
		 }

		//UPDATE OUR "updateTime" FUNCTION THAT NOW HOLDS OUR "getCurrentTime()" IN PHP EVERY SECOND
		$(function(){
		  setInterval(updateTime, 1000);
		});
