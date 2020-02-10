/*REMEMBER ALL IF AND ELSE CONDITION 
ONLY CHECKS IF THE INPUT IS EMPTY AND EXECUTE ITS CSS STYLE*/

$(document).ready(function(){


	$("#login-user").click(function(){

		$(".login-form-container").show();
			$(".signup-form-container").hide();
	})

	$("#signup-user").click(function(){

		$(".login-form-container").hide();
			$(".signup-form-container").show();
	})
		
	


	/*SIGN UP*/
	/*USERNAME*/
	$("#username").click(function(){
		$(".username-label").css({

						"display": "block",
						"transition-duration" : "1s",
						"left": "-1%",
						"margin-top": "1%",
						"color": "#000"
		})
	})

	$("#username").blur(function(){

		if ($("#username").val() == '') {

				$(".username-label").css({
						"transition-duration" : "0.7s",
						"left": "15%",
						"margin-top": "1%",
						"color": "#6c757d"
			})
		}
		else{
			$(".username-label").css({

						"display": "block",
						"transition-duration" : "1s",
						"left": "-1%",
						"margin-top": "1%",
						"color": "#000"
			})
		}
		
	})

	/*EMAIL*/

	$("#email").click(function(){
		$(".email-label").css({

						"display": "block",
						"transition-duration" : "1s",
						"left": "5%",
						"color": "#000"
		})

	})

	$("#email").blur(function(){

		if ($("#email").val() == '') {
			$(".email-label").css({
						"display": "block",
						"transition-duration" : "1s",
						"left": "15%",
						"margin-top": "1%",
						"color": "#6c757d"

			})
		}
		else{
			$(".email-label").css({

						"display": "block",
						"transition-duration" : "1s",
						"left": "5%",
						"color": "#000"
			})
		}
	})

	/*PASSWORD*/

	$("#password").click(function(){
		$(".password-label").css({

						"display": "block",
						"transition-duration" : "1s",
						"left": "1%",
						"margin-top": "1%",
						"color": "#000"
		})

	})

	$("#password").blur(function(){

				
				
		if ($("#password").val() == '') {
			$(".password-label").css({
							"display": "block",
							"transition-duration" : "1s",
							"left": "15%",
							"margin-top": "1%",
							"color": "#6c757d"

				})
		}else{

			$(".password-label").css({

						"display": "block",
						"transition-duration" : "1s",
						"left": "1%",
						"margin-top": "1%",
						"color": "#000"
			})

		}
	})

	/*CONFIRM PASSWORD*/

	$("#Cpassword").click(function(){
		$(".Cpassword-label").css({

						"display": "block",
						"transition-duration" : "1s",
						"left": "-9%",
						"margin-top": "1%",
						"color": "#000"
		})

	})

	$("#Cpassword").blur(function(){

		if ($("#Cpassword").val() == '') {

			$(".Cpassword-label").css({
						"display": "block",
						"transition-duration" : "1s",
						"left": "15%",
						"margin-top": "1%",
						"color": "#6c757d"

			})
		}else{

			$(".Cpassword-label").css({

						"display": "block",
						"transition-duration" : "1s",
						"left": "-9%",
						"margin-top": "1%",
						"color": "#000"
		})

		}
		

		
	})

	/*LOGIN*/

	/*EMAIL*/

	$("#l-email").click(function(){
		$(".l-email-label").css({

						"display": "block",
						"transition-duration" : "1s",
						"left": "5%",
						"color": "#000"
		})

	})

	$("#l-email").blur(function(){

		if ($("#l-email").val() == '') {
				$(".l-email-label").css({
						"display": "block",
						"transition-duration" : "1s",
						"left": "15%",
						"margin-top": "1%",
						"color": "#6c757d"

			})
		}
		else{

			$(".l-email-label").css({

						"display": "block",
						"transition-duration" : "1s",
						"left": "5%",
						"color": "#000"
		})
		}
		
	})

	/*PASSWORD*/

	$("#l-password").click(function(){
		$(".l-password-label").css({

						"display": "block",
						"transition-duration" : "1s",
						"left": "1%",
						"color": "#000"
		})

	})

	$("#l-password").blur(function(){

	if ($("#l-password").val() == '') {
		
		$(".l-password-label").css({
						"display": "block",
						"transition-duration" : "1s",
						"left": "15%",
						"color": "#6c757d"

		})
	}else{

			$(".l-password-label").css({

						"display": "block",
						"transition-duration" : "1s",
						"left": "1%",
						"color": "#000"
		})

		}
	})
	




})