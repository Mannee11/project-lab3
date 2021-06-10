function validateLoginForm() {
	var email = document.forms.loginForm.idemail.value;
	var pass = document.forms.loginForm.idpass.value;
	if ((email === '') || (pass === '')) {
		alert('Please fill in all required fields to proceed with your login');
		return false;
	}
	const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if (!re.test(String(email))) {
		alert('Please fill in correct email');
		return false;
	}
}
