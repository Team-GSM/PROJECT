
/*FOR PASSWORD*/
var pwdview = false;

function PasswordShowHide(){

	var getPwdView = $("#password");

	if (pwdview == false) {

		getPwdView.attr("type", "text");

		pwdview = true;
	}
	else if(pwdview == true){

		getPwdView.attr("type", "password");
	}
} 


/*FOR CONFIRM PASSWORD*/

var Cpwdview = false;

function ConfirmPasswordShowHide(){

	var getConfirmPwdView = $("#Cpassword");

	if (Cpwdview == false) {

		getConfirmPwdView.attr("type", "text");

		Cpwdview = true;

	}else if(Cpwdview == true){

		getConfirmPwdView.attr("type", "password");

		Cpwdview = false;
	}
}

/*FOR LOGIN PASSWORD*/

var loginPwdView = false;

function LoginPasswordShowHide(){

	var getLoginPwdView = $("#l-password");

	if (loginPwdView == false) {

		getLoginPwdView.attr("type", "text");

		loginPwdView = true;
	}
	else if(loginPwdView == true){

		getLoginPwdView.attr("type", "password");

		loginPwdView = false;
	}
}

$(document).ready(function () {
			$("#show").click(function() {
				$("#show").hide();
					$("#hide").show();
			});
			$("#hide").click(function(){
				$("#hide").hide();
					$("#show").show();
			});

			$("#Confirm-show").click(function() {
				$("#Confirm-show").hide();
					$("#Confirm-hide").show();
			});
			$("#Confirm-hide").click(function(){
				$("#Confirm-hide").hide();
					$("#Confirm-show").show();
			});

			$("#login-show").click(function() {
				$("#login-show").hide();
					$("#login-hide").show();
			});
			$("#login-hide").click(function(){
				$("#login-hide").hide();
					$("#login-show").show();
			});
		});