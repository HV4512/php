	//Validtion Code For Inputs

var email = document.forms['form']['email'];
var password = document.forms['form']['password'];




function validated(){
	if (email.value.length < 9 ) {
		email.style.border = "1px solid red";
		window.alert("Enter Email")
		email.focus();
		return false;
	}
	if (password.value.length < 6) {
		password.style.border = "1px solid red";
		window.alert("Enter Password")
		pass_error.style.display = "block";
		password.focus();
		return false;
	}
	else 
	return true;
}
// function email_Verify(){
// 	if (email.value.length >= 8) {
// 		email.style.border = "1px solid silver";
// 		email_error.style.display = "none";
// 		return true;
// 	}
// }
// function pass_Verify(){
// 	if (password.value.length >= 5) {
// 		password.style.border = "1px solid silver";
// 		pass_error.style.display = "none";
// 		return true;
// 	}
// }

